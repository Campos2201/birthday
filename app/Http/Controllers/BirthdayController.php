<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

use App\Models\Birthday;

class BirthdayController extends Controller
{
    
    public function index(){

        $birthdays = Birthday::all();

        return view('welcome',['birthdays'=>$birthdays]);
    }

    public function create(){
        return view('Birthdays.create');
    }


}
