@extends('layouts.himpunan')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Formulir Data Diri
                    </h2>
                </div>
                <div class="body">
                    <div class="panel-group" id="accordion_4" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingOne_4">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseOne_4" aria-expanded="true" aria-controls="collapseOne_4">
                                        Data Diri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_4">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>{{$isi->nama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td>{{$isi->nama_panggilan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>{{$isi->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NPM</td>
                                                    <td>{{$isi->npm}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jurusan</td>
                                                    <td>{{$isi->jurusan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>{{$isi->agama}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td>{{$isi->tempat_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>{{$isi->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Anak ke</td>
                                                    <td>{{$isi->anak_ke}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bersaudara</td>
                                                    <td>{{$isi->bersaudara}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Foto</td>
                                                    <td><img id="preview" width="200px" src="{{ url('/images/profile/' . $isi->foto) }}"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ayah</td>
                                                    <td>{{$isi->nama_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td>{{$isi->pekerjaan_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>No Telp Ayah</td>
                                                    <td>{{$isi->telp_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ibu</td>
                                                    <td>{{$isi->nama_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan Ibu</td>
                                                    <td>{{$isi->pekerjaan_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>No Telp Ibu</td>
                                                    <td>{{$isi->telp_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kegemaran / Hobi</td>
                                                    <td>{{$isi->hobi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Hp Pribadi</td>
                                                    <td>{{$isi->nohp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Golongan Darah</td>
                                                    <td>{{$isi->golongan_darah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tekanan Darah</td>
                                                    <td>{{$isi->tekanan_darah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tinggi Badan</td>
                                                    <td>{{$isi->tinggi_badan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berat Badan</td>
                                                    <td>{{$isi->berat_badan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{$isi->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Rumah</td>
                                                    <td>{{$isi->alamat_rumah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon Rumah</td>
                                                    <td>{{$isi->telp_rumah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Kost</td>
                                                    <td>{{$isi->alamat_kost}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telepon Kost</td>
                                                    <td>{{$isi->telp_kost}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama TK</td>
                                                    <td>{{$isi->nama_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_tk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SD</td>
                                                    <td>{{$isi->nama_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_sd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SMP</td>
                                                    <td>{{$isi->nama_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_smp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama SMA</td>
                                                    <td>{{$isi->nama_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_sma}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama PT</td>
                                                    <td>{{$isi->nama_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kota</td>
                                                    <td>{{$isi->kota_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun_pt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Organisasi</td>
                                                    <td>{{$isi->organisasi5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{$isi->jabatan5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahun5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp4}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td>{{$isi->prestasi5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Lembaga</td>
                                                    <td>{{$isi->lembaga5}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>{{$isi->tahunp5}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingTwo_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseTwo_4" aria-expanded="false" aria-controls="collapseTwo_4">
                                        Informasi Diri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_4">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sebutkan kekurangan dan kelebihan anda!</td>
                                                    <td>{{$isi2->kekurangan_kelebihan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang perbedaan siswa dan mahasiswa?</td>
                                                    <td>{{$isi2->perbedaan_mahasiswa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang BEM? Apa yang kamu ketahui tentang Himpunan Mahasiswa?</td>
                                                    <td>{{$isi2->bem_hima}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Menurut kamu, apa peran dan fungsi angkatan FMIPA Unpad?</td>
                                                    <td>{{$isi2->fungsi_angkatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kritis</td>
                                                    <td>{{$isi2->kritis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Solusional</td>
                                                    <td>{{$isi2->solusional}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Logis</td>
                                                    <td>{{$isi2->logis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sistematis</td>
                                                    <td>{{$isi2->sistematis}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berlandasan</td>
                                                    <td>{{$isi2->berlandasan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa arti pemimpin menurutmu? Siapa pemimpin idolamu (selain Rasulullah)?</td>
                                                    <td>{{$isi2->arti_pemimpin}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apa yang kamu ketahui tentang koordinator angkatan? Siapkah menjadi koordinator angkatan?</td>
                                                    <td>{{$isi2->koordinator}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingThree_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseThree_4" aria-expanded="false" aria-controls="collapseThree_4">
                                        Kesehatan
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_4">
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asma</td>
                                                <td>{{$isi3->asma}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sakit Mata</td>
                                                <td>{{$isi3->sakit_mata}}</td>
                                            </tr>
                                            <tr>
                                                <td>DBD</td>
                                                <td>{{$isi3->dbd}}</td>
                                            </tr>
                                            <tr>
                                                <td>TBC</td>
                                                <td>{{$isi3->tbc}}</td>
                                            </tr>
                                            <tr>
                                                <td>Patah Tulang</td>
                                                <td>{{$isi3->patah_tulang}}</td>
                                            </tr>
                                            <tr>
                                                <td>Malaria</td>
                                                <td>{{$isi3->malaria}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pneumonia</td>
                                                <td>{{$isi3->pneumonia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kanker</td>
                                                <td>{{$isi3->kanker}}</td>
                                            </tr>
                                            <tr>
                                                <td>Liver</td>
                                                <td>{{$isi3->liver}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sinusitis</td>
                                                <td>{{$isi3->sinusitis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hepatitis</td>
                                                <td>{{$isi3->hepatitis}}</td>
                                            </tr>
                                            <tr>
                                                <td>Penyakit Jantung</td>
                                                <td>{{$isi3->penyakit_jantung}}</td>
                                            </tr>
                                            <tr>
                                                <td>Cacar</td>
                                                <td>{{$isi3->cacar}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipertensi</td>
                                                <td>{{$isi3->hipertensi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kolera</td>
                                                <td>{{$isi3->kolera}}</td>
                                            </tr>
                                            <tr>
                                                <td>Campak</td>
                                                <td>{{$isi3->campak}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipotensi</td>
                                                <td>{{$isi3->hipotensi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tifus</td>
                                                <td>{{$isi3->tifus}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipotermia</td>
                                                <td>{{$isi3->hipotermia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hipertermia</td>
                                                <td>{{$isi3->hipertermia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Anemia</td>
                                                <td>{{$isi3->anemia}}</td>
                                            </tr>
                                            <tr>
                                                <td>Usus Buntu</td>
                                                <td>{{$isi3->usus_buntu}}</td>
                                            </tr>
                                            <tr>
                                                <td>Migrain</td>
                                                <td>{{$isi3->migrain}}</td>
                                            </tr>
                                            <tr>
                                                <td>Diabetes</td>
                                                <td>{{$isi3->diabetes}}</td>
                                            </tr>
                                            <tr>
                                                <td>Epilepsi</td>
                                                <td>{{$isi3->epilepsi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sakit Gigi</td>
                                                <td>{{$isi3->sakit_gigi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Maag</td>
                                                <td>{{$isi3->maag}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hiv</td>
                                                <td>{{$isi3->hiv}}</td>
                                            </tr>
                                            <tr>
                                                <td>Penyakit Lain</td>
                                                <td>{{$isi3->penyakit_lain}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sedang Menderita Penyakit Tertentu</td>
                                                <td>{{$isi3->sedang_menderita}}</td>
                                            </tr>
                                            <tr>
                                                <td>3 Bulan Terakhir</td>
                                                <td>{{$isi3->tiga_bulan}}</td>
                                            </tr>
                                            <tr>
                                                <td>6 Bulan Terakhir</td>
                                                <td>{{$isi3->enam_bulan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Riwayat Kesehatan Keluarga</td>
                                                <td>{{$isi3->penyakit_keluarga}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Alergi</td>
                                                <td>{{$isi3->jenis_alergi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Keluhan Alergi</td>
                                                <td>{{$isi3->keluhan_alergi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Menangani Alergi</td>
                                                <td>{{$isi3->cara_menangani}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernah Dirawat di Rumah Sakit</td>
                                                <td>{{$isi3->rumah_sakit}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernah Operasi</td>
                                                <td>{{$isi3->operasi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pantangan Operasi</td>
                                                <td>{{$isi3->pantangan_operasi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Keluarga yang Dapat Dihubungi</td>
                                                <td>{{$isi3->nama_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>{{$isi3->hp_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{$isi3->alamat_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hubungan Kekerabatan</td>
                                                <td>{{$isi3->hubungan_darurat}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Keluarga yang Dapat Dihubungi</td>
                                                <td>{{$isi3->nama_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td>{{$isi3->hp_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{$isi3->alamat_darurat2}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hubungan Kekerabatan</td>
                                                <td>{{$isi3->hubungan_darurat2}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading" role="tab" id="headingFour_4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_4" href="#collapseFour_4" aria-expanded="false" aria-controls="collapseFour_4">
                                        Agama
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_4">
                                <div class="panel-body">
                                    @if($isi->agama = 'islam')
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Kalimat Syahadat</td>
                                                    <td>{{$isi4i->kalimat_syahadat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shalat Wajib</td>
                                                    <td>{{$isi4i->shalat_wajib}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tilawah Al-Qur’an</td>
                                                    <td>{{$isi4i->tilawah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shalat Dhuha</td>
                                                    <td>{{$isi4i->dhuha}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shalat Tahajud</td>
                                                    <td>{{$isi4i->tahajud}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shalat Rawatib</td>
                                                    <td>{{$isi4i->rawatib}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shalat Berjamaah</td>
                                                    <td>{{$isi4i->berjamaah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Al Ma’tsurat</td>
                                                    <td>{{$isi4i->matsurat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Shaum Sunnah</td>
                                                    <td>{{$isi4i->shaum_sunnah}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pengajian</td>
                                                    <td>{{$isi4i->pengajian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Durasi</td>
                                                    <td>{{$isi4i->durasi_pengajian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat</td>
                                                    <td>{{$isi4i->tempat_pengajian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mentoring</td>
                                                    <td>{{$isi4i->mentoring}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Durasi</td>
                                                    <td>{{$isi4i->durasi_mentoring}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat</td>
                                                    <td>{{$isi4i->tempat_mentoring}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Liqa</td>
                                                    <td>{{$isi4i->liqa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Durasi</td>
                                                    <td>{{$isi4i->durasi_liqa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat</td>
                                                    <td>{{$isi4i->tempat_liqa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Keputrian</td>
                                                    <td>{{$isi4i->keputrian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Durasi</td>
                                                    <td>{{$isi4i->durasi_keputrian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat</td>
                                                    <td>{{$isi4i->tempat_keputrian}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Baca Tulis Quran</td>
                                                    <td>{{$isi4i->baca_quran}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Durasi</td>
                                                    <td>{{$isi4i->durasi_baca_quran}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat</td>
                                                    <td>{{$isi4i->tempat_baca_quran}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Hafalan Quran</td>
                                                    <td>{{$isi4i->hafalan_quran}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sebutkan buku/ majalah/ tabloid/ bulletin islami yang pernah/ sering Anda baca!</td>
                                                    <td>{{$isi4i->buku_islam}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tuliskan tokoh Islam yang anda ketahui!</td>
                                                    <td>{{$isi4i->tokoh_islam}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berikan pendapat Anda tentang Jilbab! Untuk perempuan apakah anda menggunakan jilbab?</td>
                                                    <td>{{$isi4i->pendapat_jilbab}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bagaimana pendapat Anda mengenai ikhtilat (bercampur baur antara laki-laki dan perempuan) dan khalwat (berdua-duaan antara laki-laki dan perempuan yang bukan mahram)?</td>
                                                    <td>{{$isi4i->pendapat_ikhtilat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bagaimana pendapat Anda mengenai pacaran?</td>
                                                    <td>{{$isi4i->pendapat_pacaran}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apakah Anda menyukai bacaan tentang ramalan bintang?</td>
                                                    <td>{{$isi4i->ramalan_bintang}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apakah Anda merokok? Berikan pendapatmu!</td>
                                                    <td>{{$isi4i->pendapat_merokok}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bagaimana pendapat anda mengenai memilih pemimpin non muslim di suatu wilayah yang masyarakatnya mayoritas muslim?</td>
                                                    <td>{{$isi4i->pemimpin_non_muslim}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @elseif($isi->agama = 'protestan')
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asala Gereja</td>
                                                <td>{{$isi4p->asal_gereja}}</td>
                                            </tr>
                                            <tr>
                                                <td>Percaya atau tidak kalo masuk fmipa unpad itu jalan dari Tuhan? Ceritakan!</td>
                                                <td>{{$isi4p->masuk_fmipa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa Kesaksian perbuatan / pertolongan yang pernah dialami oleh anda?</td>
                                                <td>{{$isi4p->kesaksian_pertolongan}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa arti Natal menurut anda?</td>
                                                <td>{{$isi4p->arti_natal}}</td>
                                            </tr>
                                            <tr>
                                                <td>Siapa Yesus menurut anda?</td>
                                                <td>{{$isi4p->siapa_yesus}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernahkah anda melakukan pelayanan gereja?</td>
                                                <td>{{$isi4p->pelayanan_gereja}}</td>
                                            </tr>
                                            <tr>
                                                <td>Seberapa sering anda membaca alkitab</td>
                                                <td>{{$isi4p->membaca_alkitab}}</td>
                                            </tr>
                                            <tr>
                                                <td>Berminat PMK</td>
                                                <td>{{$isi4p->berminat_pmk}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ayat Disukai</td>
                                                <td>{{$isi4p->ayat_disukai}}</td>
                                            </tr>
                                            <tr>
                                                <td>Persekutuan FMIPA</td>
                                                <td>{{$isi4p->persekutuan_fmipa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Maukah kamu mengikutinya?</td>
                                                <td>{{$isi4p->maukah_ikut_persekutuan_fmipa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa arti pelayanan bagi anda?</td>
                                                <td>{{$isi4p->arti_pelayanan}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @elseif($isi->agama = 'katholik')
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asala Gereja</td>
                                                <td>{{$isi4k->asal_gereja}}</td>
                                            </tr>
                                            <tr>
                                                <td>Percaya atau tidak kalo masuk fmipa unpad itu jalan dari Tuhan? Ceritakan!</td>
                                                <td>{{$isi4k->masuk_fmipa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jelaskan mengenai trinitas?</td>
                                                <td>{{$isi4k->jelaskan_trinitas}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa arti Natal menurut anda?</td>
                                                <td>{{$isi4k->arti_natal}}</td>
                                            </tr>
                                            <tr>
                                                <td>Siapa Yesus menurut anda?</td>
                                                <td>{{$isi4k->siapa_yesus}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernahkah anda melakukan pelayanan gereja?</td>
                                                <td>{{$isi4k->pelayanan_gereja}}</td>
                                            </tr>
                                            <tr>
                                                <td>Seberapa sering anda membaca alkitab</td>
                                                <td>{{$isi4k->membaca_alkitab}}</td>
                                            </tr>
                                            <tr>
                                                <td>Berminat KMK</td>
                                                <td>{{$isi4k->berminat_kmk}}</td>
                                            </tr>
                                            <tr>
                                                <td>Adakah ayat pegangan?</td>
                                                <td>{{$isi4k->ayat_pegangan}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @elseif($isi->agama = 'hindu')
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Menurut pemahaman anda, apa hal yg paling esensi dari agama Hindu?</td>
                                                <td>{{$isi4k->pemahaman_agama_hindu}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa dasar agama Hindu yg anda ketahui?</td>
                                                <td>{{$isi4k->dasar_agama_hindu}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa tujuan anda melakukan Yadnya selama ini?</td>
                                                <td>{{$isi4k->tujuan_yadnya}}</td>
                                            </tr>
                                            <tr>
                                                <td>Pernahkah ada perasaan mengeluh dengan hal itu?</td>
                                                <td>{{$isi4k->pernahkah_mengeluh}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apakah anda berminat bergabung dengan KMH</td>
                                                <td>{{$isi4k->berminat_kmh}}</td>
                                            </tr>
                                            <tr>
                                                <td>Menurut anda apa program yg bagus untuk organisasi Hindu kedepannya?</td>
                                                <td>{{$isi4k->saran_program}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @elseif($isi->agama = 'buddha')
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Apa yang anda ketahui tentang Agama Buddha?</td>
                                                <td>{{$isi4k->tentang_agama_budha}}</td>
                                            </tr>
                                            <tr>
                                                <td>Mengapa anda memilih Agama Buddha?</td>
                                                <td>{{$isi4k->memilih_agama_budha}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apakah anda pernah mengikuti kelas Agama Buddha sebelumnya?</td>
                                                <td>{{$isi4k->kelas_agama_budha}}</td>
                                            </tr>
                                            <tr>
                                                <td>Apa yang anda ketahui tentang 4 hari besar Agama Buddha?</td>
                                                <td>{{$isi4k->hari_besar_budha}}</td>
                                            </tr>
                                            <tr>
                                                <td>Sebutkan dan jelaskan mengenai pancasila Buddhist!</td>
                                                <td>{{$isi4k->pancasila_buddhist}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</section>
@endsection