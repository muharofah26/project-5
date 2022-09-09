<?php

namespace App\Http\Controllers;
class HomeController extends Controller{

function showberanda(){
    return view('admin.section.beranda');
}

function showrproduk(){
    return view('admin.section.produk');
}

function showKategori(){
    return view('admin.section.Kategori');
}

function showUser(){
    return view('admin.section.user');
}

function showlogin_admin(){
    return view('admin.section.login_admin');
}
function test($produk, $hargaMin = 0, $hargaMax = 0){
    if($produk == 'payung'){
        echo "Tampilkan Produk Payung";
    }elseif($produk =='sepeda'){
        echo "Produk Sepeda";
    }
    echo "<br>"; 
    echo "Harga Min adalah $hargaMin <br>";
    echo "Harga Max adalah $hargaMax <br>";
}
}
