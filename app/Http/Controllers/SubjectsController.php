<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Code;

class SubjectsController extends Controller
{
    public function index() {
      return view('subject/index');
    }

    public function show($id){
      $user = Auth::user();
      $code = $user->code->where("subject_id",$id);
      return view('subject/show', compact('code','id'));
    }
}
