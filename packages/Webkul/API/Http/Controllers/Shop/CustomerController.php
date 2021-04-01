<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Customer\Repositories\CustomerGroupRepository;

use App\Exceptions\Handler;
class CustomerController extends Controller
{
    /**
     * Contains current guard
     *
     * @var array
     */
    protected $guard;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Repository object
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

    /**
     * Repository object
     *
     * @var \Webkul\Customer\Repositories\CustomerGroupRepository
     */
    protected $customerGroupRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customerRepository
     * @param  \Webkul\Customer\Repositories\CustomerGroupRepository  $customerGroupRepository
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository,
        CustomerGroupRepository $customerGroupRepository
    ) {
        $this->guard = request()->has('token') ? 'api' : 'customer';

        $this->_config = request('_config');

        if (isset($this->_config['authorization_required']) && $this->_config['authorization_required']) {

            auth()->setDefaultDriver($this->guard);

            $this->middleware('auth:' . $this->guard);
        }

        $this->customerRepository = $customerRepository;

        $this->customerGroupRepository = $customerGroupRepository;
    }

    /**
     * Method to store user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return response()->json([
        //     'message' => 'Your account has been created successfully.',
        // ]);
        // $this->validate($request, [
        //     'first_name' => 'required',
        //     'last_name'  => 'required',
        //     'email'      => 'email|required|unique:customers,email',
        //     'password'   => 'confirmed|min:6|required',
        // ]);

        // $data = [
        //     'first_name'  => $request->get('first_name'),
        //     'last_name'   => $request->get('last_name'),
        //     'email'       => $request->get('email'),
        //     'password'    => $request->get('password'),
        //     'password'    => bcrypt($request->get('password')),
        //     'channel_id'  => core()->getCurrentChannel()->id,
        //     'is_verified' => 1,
        //     'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id
        // ];
        $name = $request->get('name');
        $name_array = explode(" ", $name);
        $first_name = $name_array[0];

        if(sizeof($name_array) >1){
        $last_name = $name_array[1];
        }

        // return response()->json([
        //     $first_name,
        //     $last_name,
        //     'message' => 'eixts account has been created successfully.',
        //     "response_code" => "200",
        //     "status" => "1",
        // ]);


        $data = [
            'first_name'  => $first_name,
            'last_name'  => $last_name,
            'phone'   => $request->get('mobile'),
            'email'       => $request->get('email'),
            'password'    => $request->get('password'),

            // 'password'    => bcrypt($request->get('password')),
            // 'channel_id'  => core()->getCurrentChannel()->id,
            // 'is_verified' => 1,
            // 'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id
        ];

        $data_return = [
            'name'  => $name,
            'phone'   => $request->get('mobile'),
            'email'       => $request->get('email'),
            'password'    => $request->get('password'),

            // 'password'    => bcrypt($request->get('password')),
            // 'channel_id'  => core()->getCurrentChannel()->id,
            // 'is_verified' => 1,
            // 'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id
        ];
        // try{
        Event::dispatch('customer.registration.before');

        $customer = $this->customerRepository->firstOrCreate($data);



        Event::dispatch('customer.registration.after', $customer);
        // }
        // catch(Exception $e){
            // return response()->json([
            //     'results' => $data_return,
            //     'message' => 'eixts account has been created successfully.',
            //     "response_code" => "200",
            //     "status" => "1",
            // ]);

        // }

        if($customer->status == 1){
            return response()->json([
                'results' => $data_return,
                'message' => 'Your account already exists.',
                "response_code" => "200",
                "status" => "1",
            ]);
        }
        return response()->json([
            'results'=> $data_return,
            'message' => 'Your account has been created successfully.',
            "response_code" => "200",
            "status" => "1",
        ]);
    }

    /**
     * Method to store user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMobile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile'  => 'required',
            'email'      => 'email|required|unique:customers,email',
            'password'   => 'confirmed|min:6|required',
        ]);

        $data = [
            'name'  => $request->get('name'),
            'mobile' => $request->get('mobile'),
            'email'       => $request->get('email'),
            'password'    => $request->get('password'),
            'password'    => bcrypt($request->get('password')),
            'channel_id'  => core()->getCurrentChannel()->id,
            'is_verified' => 1,
            'customer_group_id' => $this->customerGroupRepository->findOneWhere(['code' => 'general'])->id
        ];

        Event::dispatch('customer.registration.before');

        $customer = $this->customerRepository->create($data);

        Event::dispatch('customer.registration.after', $customer);

        return response()->json([
            'message' => 'Your account has been created successfully.',
            "message" => "Login  successfuly!",
            "response_code" => "200",
            "status" => "1",
        ]);
    }


    /**
     * Returns a current user data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        if (Auth::user($this->guard)->id === (int) $id) {
            return new $this->_config['resource'](
                $this->customerRepository->findOrFail($id)
            );
        }

        return response()->json([
            'message' => 'Invalid Request.',
        ], 403);
    }
}
