<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
        return view('users.dashboard');
    }

    public function loadData(){
        $data =[
            ['name'=>'Cveti',  'age'=>5],
            ['name'=>'Adi',  'age'=>8]
        ];
       // $res['data'] = json_encode($data);
        return view('users.dashboard')->with('res',$data);
     //   return json_encode($data);
    }
}
