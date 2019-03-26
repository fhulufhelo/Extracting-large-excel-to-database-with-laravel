<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ExcelImportRequest;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(ExcelImportRequest $request)
    {
        Excel::queueImport(new UsersImport,   request()->file('file'));

        Session::flash('status', 'We\'re processing your file, Please keep in mind that larger file can take up to an hour or more');

        return redirect()->back();
    }

    public function show()
    {
        $users = User::count();

        return $users;
    }
}
