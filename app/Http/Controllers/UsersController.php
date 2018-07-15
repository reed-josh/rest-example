<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getUsers()
    {
        return response()->json('Users');
    }

    public function getUser()
    {
        return response()->json('A user');
    }

    public function patchUser()
    {
        return response()->json('Update a user');
    }

    public function postUser()
    {
        return response()->json('Create a user');
    }

    public function deleteUser()
    {
        return response()->json('Delete a user');
    }
}
