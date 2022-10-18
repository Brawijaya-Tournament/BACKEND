<?php

namespace App\Http\Controllers;

use App\Models\Klasemen;
use Illuminate\Http\Request;

class KlasemenController extends Controller
{
    public function index()
    {
        $klasemens = Klasemen::orderBy('ranking', 'ASC')->get();

        $data = [
            'klasemens' => $klasemens
        ];

        return view('klasemen', $data);
    }
}
