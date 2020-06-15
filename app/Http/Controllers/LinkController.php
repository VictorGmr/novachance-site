<?php

namespace App\Http\Controllers;

use App\link;
use Illuminate\Http\Request;
use Auth;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $links = link::all();
        $getLink = 'https://www.youtube.com/watch?v=LNP4nGu0Xnk';
        foreach($links as $link){
            $getLink = $link->link;
        }
        
        $finalLink = str_replace('watch?v=', 'embed/', $getLink);

        return view('home.aovivo', array('link' => $finalLink));
        
    }

    public function adicionarLive(Request $request){
        if(Auth::user()->privilege == 1){
            $links = link::all();

            foreach($links as $link){
                $link->delete();
            }
            $link = new link();
            $link->link = $request->link;
            if($link->save()){
                $finalLink = str_replace('watch?v=', 'embed/', $link->link);
                return view('home.aovivo', array('link' => $finalLink));
            }else{
                dd('Ocorreu um erro ao tentar adicionar o link');
            }
        }else{
            return redirect('/home');
        }
        
    }


}
