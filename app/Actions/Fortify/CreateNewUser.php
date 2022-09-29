<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:11','min:11', 'regex:/(01)[0-9]{9}/','unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();


        \Session::flash('success', 'Success: Your account has been successfully Created');

        $customer= User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'mobile' => $input['mobile'],
            'password' => Hash::make($input['password']),
        ]);

        UserProfile::create(['user_id'=>$customer->id]);
        $customer->assignRole(['general-customer']);
        //general-customer
        return $customer;
    }
}
