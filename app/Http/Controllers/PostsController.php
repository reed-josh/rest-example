<?php

namespace App\Http\Controllers;

class PostsController extends Controller
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

    public function getPosts()
    {
        return response()->json('Posts');
    }

    public function getPost()
    {
        return response()->json('A post');
    }

    public function patchPost()
    {
        return response()->json('Update a post');
    }

    public function postPost()
    {
        return response()->json('Create a post');
    }

    public function deletePost()
    {
        return response()->json('Delete a post');
    }
}
