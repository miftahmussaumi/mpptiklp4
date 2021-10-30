@extends('Template.index')

@section('title','Hasil OR')
@section('sapaan','Hasil OR')
@section('submenu', 'Hasil OR')
@section('container')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Hasil OR</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>Hasil Seleksi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($dtPeserta as $tampil)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$tampil->nim}}</td>
                    <td>{{$tampil->nama}}</td>
                    <td>{{$tampil->status_or}}</td> 
                    <td>
                        <a href="{{url('edit-divisi',$tampil->id)}}" class="btn btn-success btn-sm m-b-10 m-l-5"><i class="ti-pencil"></i></a>  
                        <a href="{{url('delete-divisi',$tampil->id)}}" class="btn btn-danger btn-sm m-b-10 m-l-5" onclick="return confirm('Apakah Yakin Hapus Data Ini?')"><i class="ti-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection