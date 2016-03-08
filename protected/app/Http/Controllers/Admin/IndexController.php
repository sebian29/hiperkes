<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function home()
    {
        $data['title'] = 'Admin Panel';
        return view('admin.index', $data);
    }
}
