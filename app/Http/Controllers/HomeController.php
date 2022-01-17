<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\User;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['judul'] = "Data Semua Pengguna";
        $data['pengguna'] = User::all();

        return view('home', $data);
    }
}
