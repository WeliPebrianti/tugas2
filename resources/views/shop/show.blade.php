@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Shop
					</div>
					<div class="card-body">
						<h3>{{$shop->nama}}</h3>
						<hr>
						<p>
							Rp. {{number_format($shop->harga)}}	|
							Stok : {{$shop->stok}} |
							Berat : {{$shop->berat}} gr
						</p>
						<p>
							{{$shop->deskripsi}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection