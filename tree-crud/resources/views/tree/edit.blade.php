@extends('tree.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<h2>Ubah data keluarga</h2>
		<hr>
		<a class="btn btn-primary mb-3" href="{{ route('tree.index') }}">Kembali</a>
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

<form action="{{ route('tree.update', $tree->id_silsilah) }}" method="POST">
    @csrf
	@method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $tree->nama }}">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<p><strong>Jenis Kelamin:</strong></p>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="laki" value="L" {{ ($tree->jenis_kel=="L")? "checked" : "" }}>
					<label class="form-check-label" for="laki">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="pere" value="P" {{ ($tree->jenis_kel=="P")? "checked" : "" }}>
					<label class="form-check-label" for="pere">Perempuan</label>
				</div>
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orang Tua:</strong>
                <select class="custom-select" name="id_orang_tua">
					<option>Pilih orang tua</option>
					@foreach ($trees as $row)
						@if ($row->id_silsilah != $tree->id_silsilah)
							<option value="{{ $row->id_silsilah }}" {{ ($tree->id_orang_tua==$row->id_silsilah)? "selected" : "" }}>{{ $row->nama }}</option>
						@endif
					@endforeach
				</select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </div>
</form>
@endsection