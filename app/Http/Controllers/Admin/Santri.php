<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class Santri extends Controller
{
    // Main page
    public function index()
    {
        $data = array(  'title'				=> 'Data Produk',
        'content'			=> 'admin/produk/index'
    );
    	return view('admin/layout/santri', $data);
    }
}
