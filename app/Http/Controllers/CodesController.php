<?php

namespace App\Http\Controllers;
use App\Code;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CodesController extends Controller
{

    function create($id) {
      return view('code/create', compact('id'));
    }

    function store(Request $request){
      $user = Auth::user();
      $code = new Code();
      $code->title = $request->title;
      $code->URL = $request->url;
      $code->comment = $request->comment;
      $code->user_id = $user->id;
      $code->subject_id = $request->id;
      $code->is_company_id = 1;

      $code->save();

      return redirect()->to("/subject/".$request->id);
    }
}
