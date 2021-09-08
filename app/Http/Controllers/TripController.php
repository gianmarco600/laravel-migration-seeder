<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class TripController extends Controller
{
    public function index(){

        

        return view('home');
    }

    public function packs(){

        $packs = Trip::all();

        return view('packs', compact('packs'));
    }

    public function packInfo($id){

        $packInfo = Trip::where('id',$id)->first();

        return view('packInfo', compact('packInfo'));
    }
}
