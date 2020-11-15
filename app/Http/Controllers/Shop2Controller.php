<?php

namespace App\Http\Controllers;
use App\Models\Shop2;


class Shop2Controller extends Controller {
	function index(){
		$data['list_shop2'] = Shop2::all();
		return view('shop2.index', $data);
	}
	function create(){
		return view('shop2.create');
	}
	function store(){
		$shop2 = new shop2;
		$shop2->nama= request('nama');
		$shop2->harga= request('harga');
		$shop2->berat= request('berat');
		$shop2->deskripsi= request('deskripsi');
		$shop2->stok= request('stok');
		$shop2->save();

		return redirect('shop2');
	}
	function show(){

	}
	function edit(){

	}
	function update(){

	}
	function destroy(){

	}
}