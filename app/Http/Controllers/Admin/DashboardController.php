<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $pengaduanPending = Complaint::where('status', 'pending')->count();
        $pengaduanProses = Complaint::where('status', 'proses')->count();
        $pengaduanSelesai = Complaint::where('status', 'selesai')->count();

        return view('pages.admin.dashboard', compact('pengaduanPending', 'pengaduanProses', 'pengaduanSelesai'));
    }
}
