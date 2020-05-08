<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home.home');
    }

    public function sobre()
    {
        return view('home.about');
    }

    public function aovivo()
    {
        return view('home.aovivo');
    }

    public function contato()
    {
        return view('home.contact');
    }

    public function storeNewsletter(Request $request){
        $mail = new Newsletter();
        $mail->email = $request->email;
        
        try {
            if($mail->save()){
                return redirect('home');
            }
        }catch(\Illuminate\Database\QueryException $ex){
            return redirect('home');
        }
        
    }
}
