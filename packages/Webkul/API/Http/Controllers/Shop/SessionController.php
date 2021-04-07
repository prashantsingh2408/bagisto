<?php

namespace Webkul\API\Http\Controllers\Shop;

use Illuminate\Support\Facades\Event;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\API\Http\Resources\Customer\Customer as CustomerResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Contains current guard
     *
     * @var string
     */
    protected $guard;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Controller instance
     *
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->guard = request()->has('token') ? 'api' : 'customer';

        auth()->setDefaultDriver($this->guard);

        $this->middleware('auth:' . $this->guard, ['only' => ['get', 'update', 'destroy']]);

        $this->_config = request('_config');

        $this->customerRepository = $customerRepository;
    }

    /**
     * Method to store user's sign up form data to DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            request()->validate([
                'email'    => 'required|email',
                'password' => 'required',
            ]);

            $jwtToken = null;

            if (! $jwtToken = auth()->guard($this->guard)->attempt(request()->only('email', 'password'))) {
                return response()->json([
                    'result' => '', 'message' => 'Invalid Email or Password', 'response_code' => 200, 'status' => 1
                ], 200);
            }else {
                Event::dispatch('customer.after.login', request('email'));

                $customer = auth($this->guard)->user();
                return response()->json([
                    'result' => $customer,
                    'message' => 'Logged in successfully', 'response_code' => 200, 'status' => 1,
                    'token'   => $jwtToken
                ], 200);
            }

        }
        catch(Exception $e)
    	{
    	    return \Response::json(['message' => 'error message', 'status' => 0, 'result' => $e->getMessage()], HttpResponse::HTTP_CONFLICT);
    	}
        // request()->validate([
        //     'email'    => 'required|email',
        //     'password' => 'required',
        // ]);

        // $jwtToken = null;

        // if (! $jwtToken = auth()->guard($this->guard)->attempt(request()->only('email', 'password'))) {
        //     return response()->json([
        //         'error' => 'Invalid Email or Password',
        //     ], 401);
        // }

        // Event::dispatch('customer.after.login', request('email'));

        // $customer = auth($this->guard)->user();

        // return response()->json([
        //     'token'   => $jwtToken,
        //     'message' => 'Logged in successfully.',
        //     'data'    => new CustomerResource($customer),
        // ]);
    }

    /**
     * Get details for current logged in customer
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $customer = auth($this->guard)->user();

        return response()->json([
            'data' => new CustomerResource($customer),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->password);
        $customer = auth($this->guard)->user();

        // $this->validate(request(), [
        //     'first_name'    => 'required',
        //     'last_name'     => 'required',
        //     'gender'        => 'required',
        //     'date_of_birth' => 'nullable|date|before:today',
        //     'email'         => 'email|unique:customers,email,' . $customer->id,
        //     'password'      => 'confirmed|min:6',
        // ]);


        $data = request()->only('first_name', 'last_name', 'gender', 'date_of_birth', 'email', 'password');
        // dd($data);
        if (! isset($data['password']) || ! $data['password']) {
            unset($data['password']);
        } else {
            $dataWithOutBcrypt = $data['password']; //custom code
            $data['password'] = bcrypt($data['password']);
        }


        // custom code
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $password = $dataWithOutBcrypt;

        //response data
        $data_response = array(
                            "first_name" => $first_name,
                            "last_name" => $last_name,
                            "email" => $email,
                             "password" =>  $dataWithOutBcrypt);
        //dd($data_response);

        $updatedCustomer = $this->customerRepository->update($data, $customer->id);

        //custom code
        $data = new CustomerResource($updatedCustomer);
        //dd($data);
        //END custom code


        return response()->json([
            'message' => 'Your account has been updated successfully.',
            //'data'    => new CustomerResource($updatedCustomer),
            'data' => $data_response
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->guard($this->guard)->logout();

        return response()->json([
            'message' => 'Logged out successfully.',
        ]);
    }
}
