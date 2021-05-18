<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function createMobile(Request $request)
    {
        return response()->json([
            'message' => 'Your account has been created successfully.',
        ]);
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
        ]);
    }
}
