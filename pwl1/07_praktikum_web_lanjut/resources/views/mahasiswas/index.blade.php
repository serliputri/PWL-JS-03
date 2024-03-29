@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
    </div>
</div>
<form class="row mb-3 mt-5" action="{{ route('cari') }}" method="POST">
    @csrf
    <div class="col-md-5">
        <div class="d-flex flex-row">
            <input type="text" value="{{ (request()->cariMhs) ? request()->cariMhs : '' }}" name="cariMhs" class="form-control" placeholder="Cari Mahasiswa">
            <button type="submit" class="btn btn-primary ml-3">Cari</button>
        </div>
    </div>
    <div class="col-md-6 d-flex flex-row justify-content-end">
        <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
    </div>
</form>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
    <p>{{ $message }}</p>
 </div>
 @endif

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No_Handphone</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>
        <td>{{ $Mahasiswa->nim }}</td>
        <td>{{ $Mahasiswa->nama }}</td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td>
        <td>{{ $Mahasiswa->kelas }}</td>
        <td>{{ $Mahasiswa->jurusan }}</td>
        <td>{{ $Mahasiswa->email }}</td>
        <td>{{ $Mahasiswa->noHp }}</td>

        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
         </td>
    </tr>
    @endforeach
</table>
<div class="col-md-12">
    {{ $mahasiswas->links() }}
</div>
@endsection