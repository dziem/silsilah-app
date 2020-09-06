@extends('tree.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<h2>Tambah data keluarga baru</h2>
		<hr>
		<a class="btn btn-primary mb-3" href="{{ route('tree.index') }}"> Kembali</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terdapat kesalahan input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tree.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<p><strong>Jenis Kelamin:</strong></p>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="laki" value="L">
					<label class="form-check-label" for="laki">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="pere" value="P">
					<label class="form-check-label" for="pere">Perempuan</label>
				</div>
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orang Tua:</strong>
                <select class="custom-select" name="id_orang_tua" required>
					<option selected disabled>Pilih orang tua</option>
					<option value="">Paling tua</option>
					@foreach ($tree as $row)
						<option value="{{ $row->id_silsilah }}">{{ $row->nama }}</option>
					@endforeach
				</select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
@endsection