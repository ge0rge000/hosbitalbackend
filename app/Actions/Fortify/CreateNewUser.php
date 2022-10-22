<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Patient;
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
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required'],
            'mobile_phone' => ['required', 'unique:users'],
            'device_id' =>['required'],
        ])->validate();
                                
        return User::create([
            'name' => $input['name'],
            'address'=>$input['address'],
            'mobile_phone'=>$input['mobile_phone'],
            'device_id' => $input['device_id'],
        ]
        );

    }
}
