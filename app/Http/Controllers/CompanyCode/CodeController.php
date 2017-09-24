<?php

namespace App\Http\Controllers\CompanyCode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Company;

class CodeController extends Controller
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function code()
    {
        return view('company.code.code');
    }
}
