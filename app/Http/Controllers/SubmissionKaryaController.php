<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class SubmissionKaryaController extends Controller
{
    public function index()
    {
        return view('submissionkarya');
    }
}
