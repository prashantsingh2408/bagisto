<?php

namespace Webkul\Customer\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Webkul\Customer\Mail\RegistrationEmail;
use Webkul\Customer\Mail\VerificationEmail;
use Webkul\Shop\Mail\SubscriptionEmail;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Customer\Repositories\CustomerGroupRepository;
use Webkul\Core\Repositories\SubscribersListRepository;
use Cookie;
use Webkul\Customer\Models\Customer;
use Auth;

class RegistrationController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * CustomerRepository object
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

    /**
     * CustomerGroupRepository object
     *
     * @var \Webkul\Customer\Repositories\CustomerGroupRepository
     */
    protected $customerGroupRepository;

    /**
     * SubscribersListRepository
     *
     * @var \Webkul\Core\Repositories\SubscribersListRepository
     */
    protected $subscriptionRepository;

    /**
     * Create a new Repository instance.
     *
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customer
     * @param  \Webkul\Customer\Repositories\CustomerGroupRepository  $customerGroupRepository
     * @param  \Webkul\Core\Repositories\SubscribersListRepository  $subscriptionRepository
     *
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository,
        CustomerGroupRepository $customerGroupRepository,
        SubscribersListRepository $subscriptionRepository
    ) {
        $this->_config = request('_config');

        $this->customerRepository = $customerRepository;

        $this->customerGroupRepository = $customerGroupRepository;

        $this->subscriptionRepository = $subscriptionRepository;
    }

    /**
     * Opens up the user's sign up form.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view($this->_config['view']);
    }
    public function show_smart()
    {

        $customers = $this->customerRepository->select('id', 'email')->get();
        return view($this->_config['view'], ['customers' => $customers]);
    }

    /**
     * Method to store user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->validate(request(), [
            'first_name' => 'string|required',
            'last_name'  => 'string|required',
            'email'      => 'email|required|unique:customers,email',
            'password'   => 'confirmed|min:6|required',
        ]);

        $data = array_merge(request()->input(), [
            'password'          => bcrypt(request()->input('password')),
            'api_token'         => Str::random(80),
            'is_verified'       => core()->getConfigData('customer.settings.email.verification') ? 0 : 1,
            'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id,
            'token'             => md5(uniqid(rand(), true)),
            'subscribed_to_news_letter' => isset(request()->input()['is_subscribed']) ? 1 : 0,
        ]);

        Event::dispatch('customer.registration.before');

        $customer = $this->customerRepository->create($data);

        Event::dispatch('customer.registration.after', $customer);

        if (!$customer) {
            session()->flash('error', trans('shop::app.customer.signup-form.failed'));

            return redirect()->back();
        }

        if (isset($data['is_subscribed'])) {
            $subscription = $this->subscriptionRepository->findOneWhere(['email' => $data['email']]);

            if ($subscription) {
                $this->subscriptionRepository->update([
                    'customer_id' => $customer->id,
                ], $subscription->id);
            } else {
                $this->subscriptionRepository->create([
                    'email'         => $data['email'],
                    'customer_id'   => $customer->id,
                    'channel_id'    => core()->getCurrentChannel()->id,
                    'is_subscribed' => 1,
                    'token'         => $token = uniqid(),
                ]);

                try {
                    Mail::queue(new SubscriptionEmail([
                        'email' => $data['email'],
                        'token' => $token,
                    ]));
                } catch (\Exception $e) {
                }
            }
        }

        if (core()->getConfigData('customer.settings.email.verification')) {
            try {
                if (core()->getConfigData('emails.general.notifications.emails.general.notifications.verification')) {
                    Mail::queue(new VerificationEmail(['email' => $data['email'], 'token' => $data['token']]));
                }

                session()->flash('success', trans('shop::app.customer.signup-form.success-verify'));
            } catch (\Exception $e) {
                report($e);

                session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
            }
        } else {
            try {
                if (core()->getConfigData('emails.general.notifications.emails.general.notifications.registration')) {
                    Mail::queue(new RegistrationEmail(request()->all()));
                }

                session()->flash('success', trans('shop::app.customer.signup-form.success-verify'));
            } catch (\Exception $e) {
                report($e);

                session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
            }

            session()->flash('success', trans('shop::app.customer.signup-form.success'));
        }

        return redirect()->route($this->_config['redirect']);
    }

    // custom code
    /**
     * Method to store smart user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_smart()
    {
        // dd(request()->member_1);

        //Get current user
        $customer = auth()->guard('customer')->user();
        $id = $customer->id;

        //Store child of current user
        Customer::where('id', $id)
            ->update(
                [
                    'child1' => request()->member_1,
                    'child2' => request()->member_2,
                    'child3' => request()->member_3,
                    'child4' => request()->member_4,
                    'child5' => request()->member_5
                ]
            );


        // $this->validate(request(), [
        //     'first_name' => 'string|required',
        //     'last_name'  => 'string|required',
        //     'email'      => 'email|required|unique:customers,email',
        //     'password'   => 'confirmed|min:6|required',
        // ]);

        // $data = array_merge(request()->input(), [
        //     'password'          => bcrypt(request()->input('password')),
        //     'api_token'         => Str::random(80),
        //     'is_verified'       => core()->getConfigData('customer.settings.email.verification') ? 0 : 1,
        //     'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id,
        //     'token'             => md5(uniqid(rand(), true)),
        //     'subscribed_to_news_letter' => isset(request()->input()['is_subscribed']) ? 1 : 0,
        // ]);

        // Event::dispatch('customer.registration.before');

        // $customer = $this->customerRepository->create($data);

        // Event::dispatch('customer.registration.after', $customer);

        // if (!$customer) {
        //     session()->flash('error', trans('shop::app.customer.signup-form.failed'));

        //     return redirect()->back();
        // }

        // if (isset($data['is_subscribed'])) {
        //     $subscription = $this->subscriptionRepository->findOneWhere(['email' => $data['email']]);

        //     if ($subscription) {
        //         $this->subscriptionRepository->update([
        //             'customer_id' => $customer->id,
        //         ], $subscription->id);
        //     } else {
        //         $this->subscriptionRepository->create([
        //             'email'         => $data['email'],
        //             'customer_id'   => $customer->id,
        //             'channel_id'    => core()->getCurrentChannel()->id,
        //             'is_subscribed' => 1,
        //             'token'         => $token = uniqid(),
        //         ]);

        //         try {
        //             Mail::queue(new SubscriptionEmail([
        //                 'email' => $data['email'],
        //                 'token' => $token,
        //             ]));
        //         } catch (\Exception $e) {
        //         }
        //     }
        // }

        // if (core()->getConfigData('customer.settings.email.verification')) {
        //     try {
        //         if (core()->getConfigData('emails.general.notifications.emails.general.notifications.verification')) {
        //             Mail::queue(new VerificationEmail(['email' => $data['email'], 'token' => $data['token']]));
        //         }

        //         session()->flash('success', trans('shop::app.customer.signup-form.success-verify'));
        //     } catch (\Exception $e) {
        //         report($e);

        //         session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
        //     }
        // } else {
        //     try {
        //         if (core()->getConfigData('emails.general.notifications.emails.general.notifications.registration')) {
        //             Mail::queue(new RegistrationEmail(request()->all()));
        //         }

        //         session()->flash('success', trans('shop::app.customer.signup-form.success-verify'));
        //     } catch (\Exception $e) {
        //         report($e);

        //         session()->flash('info', trans('shop::app.customer.signup-form.success-verify-email-unsent'));
        //     }

        //     session()->flash('success', trans('shop::app.customer.signup-form.success'));
        // }

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Method to verify account
     *
     * @param  string  $token
     * @return \Illuminate\Http\Response
     */
    public function verifyAccount($token)
    {
        $customer = $this->customerRepository->findOneByField('token', $token);

        if ($customer) {
            $customer->update(['is_verified' => 1, 'token' => 'NULL']);

            session()->flash('success', trans('shop::app.customer.signup-form.verified'));
        } else {
            session()->flash('warning', trans('shop::app.customer.signup-form.verify-failed'));
        }

        return redirect()->route('customer.session.index');
    }

    /**
     * @param  string  $email
     * @return \Illuminate\Http\Response
     */
    public function resendVerificationEmail($email)
    {
        $verificationData = [
            'email' => $email,
            'token' => md5(uniqid(rand(), true)),
        ];

        $customer = $this->customerRepository->findOneByField('email', $email);

        $this->customerRepository->update(['token' => $verificationData['token']], $customer->id);

        try {
            Mail::queue(new VerificationEmail($verificationData));

            if (Cookie::has('enable-resend')) {
                \Cookie::queue(\Cookie::forget('enable-resend'));
            }

            if (Cookie::has('email-for-resend')) {
                \Cookie::queue(\Cookie::forget('email-for-resend'));
            }
        } catch (\Exception $e) {
            report($e);

            session()->flash('error', trans('shop::app.customer.signup-form.verification-not-sent'));

            return redirect()->back();
        }

        session()->flash('success', trans('shop::app.customer.signup-form.verification-sent'));

        return redirect()->back();
    }
}
