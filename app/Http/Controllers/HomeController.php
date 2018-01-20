<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function ChangeLanguage($lang){
        if ($lang =='en' || $lang =='ar'){
            if (!\Session::has('language')){
                \Session::put('language',$lang);
            }else{
                \Session::put('language',$lang);
            }
            return redirect()->back();
        }else{
            return redirect('/home');
        }
    }

}
