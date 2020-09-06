@extends('tree.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<h2>Daftar anggota keluarga</h2>
			<hr>
			<a class="btn btn-success mb-3" href="{{ route('tree.create') }}">Tambah anggota keluarga</a>
        </div>
    </div>  

    @if ($message = Session::get('success'))
        <div class="alert alert-success" onclick="this.remove()">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Orang Tua</th>
            <th width="280px">Operasi</th>
        </tr>
        @foreach ($tree as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->nama }}</td>
			@if ($row->jenis_kel === 'L')
				<td>Laki-laki</td>
			@else
				<td>Perempuan</td>
			@endif
            <td>{{ $row->orang_tua }}</td>
            <td>
                <form action="{{ route('tree.destroy',$row->id_silsilah) }}" method="POST">
                    <!--<a class="btn btn-info" href="{{ route('tree.show',$row->id_silsilah) }}">Detail</a>-->
                    <a class="btn btn-primary" href="{{ route('tree.edit',$row->id_silsilah) }}">Ubah</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $tree->links() !!}
@endsection