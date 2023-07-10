@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Daftar Posyandu</h3>
    <a href="{{ url('mahasiswa/create') }}">Tambah Data</a>
    <tr>
            <td>
		        <form class="form" method="get" action="{{ route('search') }}">
		        <div class="form-group w-100 mb-3">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button>
		    </div>
		</form>
		</td>	
            </tr>
    </form>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>USIA</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->mhsw_nim }}</td>
                <td>{{ $row->mhsw_nama }}</td>
                <td>{{ $row->mhsw_jurusan }}</td>
                <td>{{ $row->mhsw_alamat }}</td>
                <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection