@extends('app',['title'=>'profile'])

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card card-primary col-md-5 mx-auto card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset ('assets/dist/img/2141720023.jpg') }}" alt="User profile picture">
                    </div>
                    
                    <h3 class="profile-username text-center">{{ $nama }}</h3>
                    <p class="text-muted text-center">{{ $jurusan }}</p>
                    
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NIM</b> <a class="float-right">{{ $nim }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelas</b> <a class="float-right">{{ $kelas }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Absen</b> <a class="float-right">{{ $absen }}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
             </div>
             <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
@endsection