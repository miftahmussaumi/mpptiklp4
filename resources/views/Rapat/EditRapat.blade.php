@extends('Template.index')

@section('title','Tambah Rapat')
@section('sapaan','Penambahan Notulensi Rapat')
@section('submenu','Rapat')
@section('container')
<div class="card-title">
    <h4>Form Notulensi Rapat</h4>
</div>
<div class="caard-body">
    <form action="{{route('save-rapat')}}" method="POST">
        {{csrf_field()}}
        <table>
            @foreach ($rapat as $dt)
            <tr>
                <td width="150px">
                    <label>Divisi</label>
                </td>
                <td>
                    <select class="form-control" name="id_divisi">
                        <option>-Pilih Divisi-</option>
                        @foreach ($divisi as $dv)
                        <option value="{{ $dv->id }}">{{$dv->nama_divisi}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tanggal</label>
                </td>
                <td>
                    <input type="date" name="tanggal" class="form-control input-default" value="{{ $dt->tanggal }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Waktu Mulai</label>
                </td>
                <td>
                    <input type="time" name="waktu_mulai" class="form-control input-default" value="{{ $dt->waktu_mulai }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Waktu Selesai</label>
                </td>
                <td>
                    <input type="time" name="waktu_selesai" class="form-control input-default" value="{{ $dt->waktu_selesai }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Topik</label>
                </td>
                <td>
                    <input type="text" name="topik" class="form-control input-default" value="{{ $dt->topik }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Hasil Rapat</label>
                </td>
                <td></td>
            </tr>
            @endforeach
        </table>
        <textarea name="hasil" id="isi" cols="100" rows="10">{{ $dt->hasil }}</textarea>
        <p></p>
        <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
    </form>
    <script>
        CKEDITOR.replace('isi');
    </script>
</div>
@endsection