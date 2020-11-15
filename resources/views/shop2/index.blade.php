@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data Shop
						<a href="{{url('shop/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_shop shop)
								<tr>
									<td>({{$loop->iteration}})</td>
									<td>
										<a href="{{url('shop', shop->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a>
									</td>
									<td>{{$shop->nama}}</td>
									<td>{{$shop->harga}}</td>
									<td>{{$shop->stok}}</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection