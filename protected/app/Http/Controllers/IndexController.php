<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function home()
    {
        return view('pages.home');
    }

    function about()
    {
        return view('pages.about');
    }

    function visiMisi()
    {
        return view('pages.visi-misi');
    }

    function tugasFungsi()
    {
        return view('pages.tugas-fungsi');
    }

    function structure()
    {
        return view('pages.structure');
    }

    function registration()
    {
        return view('pages.registration');
    }

    function contact()
    {
        $data['jspage'] = 'contact';
        return view('pages.contact', $data);
    }
}
