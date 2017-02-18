<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoomsRequests;
use Illuminate\Http\Request;

use App\Registration;


class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Registration::all();
        return view('layouts.admin.users')->with('users', $users);
    }
}
