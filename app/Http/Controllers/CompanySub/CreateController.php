<?php

namespace App\Http\Controllers\CompanySub;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Foundation\Company;
use Illuminate\Http\Request;
use App\Code;

class CreateController extends Controller
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function ichiran()
    {
        $subject = Subject::all();
        return view('company.sub.ichiran',compact("subject"));
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.sub.create');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function subject($id)
    {
        $codes = Code::where("subject_id",$id)->get();
        return view('company.sub.subject', compact("codes"));
    }
}
