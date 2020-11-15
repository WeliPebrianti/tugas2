<?php

namespace App\Http\Controllers;
use App\Models\Shop;


class ShopController extends Controller {
	function index(){
		$data['list_shop'] = Shop::all();
		return view('shop.index', $data);
	}
	function create(){
		return view('shop.create');
	}
	function store(){
		$shop = new shop;
		$shop->nama= request('nama');
		$shop->harga= request('harga');
		$shop->berat= request('berat');
		$shop->deskripsi= request('deskripsi');
		$shop->stok= request('stok');
		$shop->save();

		return redirect('shop');
	}
	function show($shop){
		$data['shop'] = Shop::find($shop);
		return view('shop.show', $data);
	}
	function edit(){

	}
	function update(){

	}
	function destroy(){

	}
}