<?php

namespace App\Http\Controllers\CompanySub;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Company;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.sub.create');
    }
}
