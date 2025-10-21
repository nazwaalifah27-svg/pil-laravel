<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mahasiswa', function () {
    $npm = ['01', '02', '03', '04'];
    $nama = ['Najwa','Alifah','Zulfikar','Damanik'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah'));
});

Route::get('/profile', function () {
    $nama = 'Najwa Alifah Zulfikar Damanik';
    //return view('profile' , compact ('nama'));
    return view('profile')->with('nama', $nama);
});