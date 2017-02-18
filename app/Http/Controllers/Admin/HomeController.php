<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeRequests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function index() 
    {
        return view('layouts.admin.home');
    }
}

?>