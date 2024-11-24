<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class landingPage extends Controller
{
    public function index()
    {
        $data = Complaint::paginate(5);
        return view('welcome', compact('data'));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cariData;

        $complain = DB::table('complaints')
            ->where('title', 'like', "%" . $cari . "%")
            ->paginate();


        // // mengirim data pegawai ke view index
        return view('welcome', ['data' => $complain]);
    }
}
