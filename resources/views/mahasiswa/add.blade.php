@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="{{ url('/mahasiswa') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>USIA</td>
                <td><input type="text" name="mhsw_nim" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="mhsw_nama" class="form-control"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <select name="mhsw_jurusan" class="form-control">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="mhsw_alamat" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
@endsection