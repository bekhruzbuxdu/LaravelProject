<?php

namespace App\Http\Controllers;

use App\Models\Hunter_Model;
use Illuminate\Http\Request;

class HunterController extends Controller
{
    public function index(){
        $hunters = Hunter_Model::all();
        return view('index',['hunters'=>$hunters]);
    }

    public function create(){
        return view('index');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email:rfc',
            'comment' => 'required',
        ]);
        $hunters = Hunter_Model::create($data);
        return back();
    }
}
