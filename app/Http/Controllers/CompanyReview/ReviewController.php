<?php

namespace App\Http\Controllers\CompanyReview;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Company;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function review()
    {
        return view('company.review');
    }
}
