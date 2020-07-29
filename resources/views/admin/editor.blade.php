@extends('layouts.admin')
@section('isi')
<section class="content">
    <div class="container-fluid">
        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Buat Materi
                        </h2>
                    </div>
                    <div class="body">
                        <form action="/admin/materi/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg">
                                        <div class="form-line">
                                            <input type="text" name="judul" class="form-control" placeholder="Judul Materi" />
                                        </div>
                                        @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('judul')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Isi Materi</h2>
                                        <div class="form-line">
                                            <textarea name="deskripsi" rows="4" class="form-control no-resize" placeholder="Deskripsi..."></textarea>
                                        </div>
                                        @if($errors->has('deskripsi'))
                                        <div class="text-danger">
                                            {{ $errors->first('deskripsi')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Upload dari Youtube</h2>
                                        <div class="form-line">
                                            <input type="text" name="youtube" class="form-control" placeholder="Ex:youtube.com/embed/tgbNymZ7vqY Tulis tgbNymZ7vqY" />
                                        </div>
                                        @if($errors->has('youtube'))
                                        <div class="text-danger">
                                            {{ $errors->first('youtube')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Link Kuis (opsional)</h2>
                                        <div class="form-line">
                                            <input type="text" name="kuis" class="form-control" placeholder="ex:kuis/lihat/3" />
                                        </div>
                                        @if($errors->has('kuis'))
                                        <div class="text-danger">
                                            {{ $errors->first('kuis')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <h2 class="card-inside-title">Upload Pematerian</h2>
                                        <div class="custom-file">
                                            <input type="file" name="video">
                                        </div>
                                        @if($errors->has('video'))
                                        <div class="text-danger">
                                            {{ $errors->first('video')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect" style="margin-left: 50px;" value="Upload">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CKEditor -->
    </div>
</section>
@endsection