<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            $perfil = $request->get('perfil');
            $opp = $request->get('opp');
            if($perfil==NULL || $perfil=='')$perfil=0;
            if($opp==NULL || $opp=='')$opp=0;
        
        return view('home')
                    ->with( 'perfil', $perfil)
                    ->with('opp', $opp);
    }
}
