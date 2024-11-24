<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Http\Request;

class ardiController extends Controller
{
    public function aku()
    {
        return view('testing.ardi');
    }

    public function buahYangKuInginkan(Request $request)
    {
        dd($request->all());
    }
}
