@extends('layouts.app', ['title' => 'Dashboard Admin'])

@section('content')
    <section class="row">
        <div class="col-12">
            <div class="row">
                {{-- Pengaduan Pending --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pengaduan Pending</h6>
                                    <h6 class="font-extrabold mb-0">{{ $pengaduanPending }} Pengaduan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pengaduan Proses --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pengaduan Proses</h6>
                                    <h6 class="font-extrabold mb-0">{{ $pengaduanProses }} Pengaduan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pengaduan Selesai --}}
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pengaduan Selesai</h6>
                                    <h6 class="font-extrabold mb-0">{{ $pengaduanSelesai }} Pengaduan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Hallo ...</h6>
                                    <h6 class="font-extrabold mb-0">Admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
