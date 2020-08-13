<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyUser(){
        $email = $_GET['email'];
        $password = $_GET['password'];

        $user = User::where('email',$email)->first();

        if($user){
            if (Hash::check($_GET['password'], $user->password)) {
                return response('Sucesso!', 200);
            }else{
                return response('Senha incorreta!', 200);
            }
        }else{
            return response('Não existe um usuário com este e-mail', 200);
        }
    }
}
