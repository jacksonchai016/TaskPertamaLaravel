<?php
    use App\Models\PeminjamanBuku;
?>

@extends('layouts.app')


@section('title','Peminjaman Buku')

@section('content')
    <h1>Peminjaman Buku</h1>
    <style>
        table tr{
            padding: 30px;
        }
        table td{
            border:2px;
        }

        #watermark{
            margin: 0 0 0 30%;
            display: block;
            position: absolute;
            opacity: 0.2;
            filter: alpha(opacity=50);
        }
        
    </style>
    <a href="/laporan/v_peminjamanbuku/print" target="_blank" class="btn btn-primary">Print PDF</a>
    <div id="watermark">
        <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="width: 145%;">
    </div>
    <div style="text-align: center; font: 18pt bold;">
        Nama : Jackson<br>
        NIM : 03081200032<br>
        KELAS : 20SI2<br>
    </div>
    <hr>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>No. Buku</th>
                <th>Nim Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Judul Buku</th>
                <th>Alamat Rumah</th>
                <th>Tahun Terbit</th>
             </tr>
        </thead>
        @foreach ($peminjamanbuku as $pb) 
        <tr class="table-dark">
            <th>{{ $pb->no_buku }}</th>
            <th>{{ $pb->nim_mahasiswa }}</th>
            <th>{{ $pb->nama_mahasiswa }}</th>
            <th>{{ $pb->judul_buku }}</th>
            <th>{{ $pb->alamat_rumah_mahasiswa }}</th>
            <th>{{ $pb->tahun_terbit }}</th>           
        </tr>
        @endforeach
    </table>    
@endsection