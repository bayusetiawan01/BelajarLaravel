@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Materi
                        <a href="/admin/materi/tambah" class="btn btn-danger btn-lg waves-effect" style="margin-left: 20px;">+ Tambah Materi</a>
                    </h2>
                </div>
                <div class="body clearfix">
                    @foreach($materi as $m)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{$m->judul}}
                                    <small>{{ \Illuminate\Support\Str::limit($m->deskripsi, 20, $end='...') }}</small>
                                </h2>
                            </div>
                            <div class="body" style="padding:10px">
                                <br>
                                <a href="materi/edit/{{$m->id}}" class="btn btn-default">Edit</a>
                                <a href="../admin/materi/lihat/{{$m->id}}" class="btn btn-default">Lihat</a>
                                <a href="../admin/materi/hapus/{{$m->id}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection