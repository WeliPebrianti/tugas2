@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Shop
					</div>
					<div class="card-body">
						<form action="{{url('gallery2')}}" method="post">
							@csrf
						</form>
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="form-control" name="nama">
						</div>
						<button class="btn btn-dark"><i class="fa fa-save float-right"></i> Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection