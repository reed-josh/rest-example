<?php

namespace App\Http\Controllers;

class CommentsController extends Controller
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

    public function getComments()
    {
        return response()->json('Comments');
    }

    public function getComment()
    {
        return response()->json('A comment');
    }

    public function patchComment()
    {
        return response()->json('Update a comment');
    }

    public function postComment()
    {
        return response()->json('Create a comment');
    }

    public function deleteComment()
    {
        return response()->json('Delete a comment');
    }
}
