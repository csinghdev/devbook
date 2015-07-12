<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{

    /**
     * Show the form to register the user.
     *
     * @return Response
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Create a new user.
     *
     * @return Response
     */
    public function store()
    {
        return Redirect::home();
    }
}
