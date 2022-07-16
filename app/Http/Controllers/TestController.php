<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index(){
        $data = "Hello rasdi";
        return $data;
    }

    public function nama($name){
        return "hello ".$name;
    }

    public function blog($halaman, $judul){

        $url= "anda sedang membaca ".$halaman." judul bacaan anda adalah ".$judul;

        return $url;
    }

    public function admin(){
        $blog = "Halaman admin";

        return $blog;
    }


    //
}
