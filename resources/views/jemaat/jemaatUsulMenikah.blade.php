@extends("default.default")
@section("head")
    <title>Usulan menikah</title>
@endsection

@section("content")

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Usulan Pernikahan</h3>
        </div>

        <div class="box-body">

            <form role="form" action="/simpan-data-usulan-jemaat" method="post">

                {{ csrf_field() }}

                <input type="hidden" name="anggota_id" value="{{ $anggota->anggota_id }}" class="form-control" readonly>

                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Nama Jemaat <label class="text-danger">*</label></label>
                                <input type="text" value="{{ $anggota->nama_lengkap }}" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Daftar <label class="text-danger">*</label></label>
                                <input type="date" name="tgl_daftar" class="form-control" placeholder="Tanggal Daftar">
                                <label class="text-danger">{{$errors->first("tgl_daftar") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Lengkap pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="nama_lengkap_pasangan" class="form-control" placeholder="Nama Lengkap pasangan">
                                <label class="text-danger">{{$errors->first("nama_lengkap_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tempat Lahir pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="tempat_lahir_pasangan" class="form-control" placeholder="Tempat Lahir pasangan">
                                <label class="text-danger">{{$errors->first("tempat_lahir_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Lahir pasangan <label class="text-danger">*</label></label>
                                <input type="date" name="tgl_lahir_pasangan" class="form-control" placeholder="Tanggal Lahir pasangan">
                                <label class="text-danger">{{$errors->first("tgl_lahir_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="alamat_pasangan" class="form-control" placeholder="Alamat pasangan">
                                <label class="text-danger">{{$errors->first("alamat_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">No telp pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="no_tlp_pasangan" class="form-control" placeholder="No telp pasangan">
                                <label class="text-danger">{{$errors->first("no_tlp_pasangan") }}</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Pekerjaan pasangan<label class="text-danger">*</label></label>
                                <input type="text" name="pekerjaan_pasangan" class="form-control" placeholder="pekerjaan pasangan">
                                <label class="text-danger">{{$errors->first("pekerjaan_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Kewarganegaraan pasangan <label class="text-danger">*</label></label>
                                <select name="kewarganegaraan_pasangan" class="form-control">
                                    <option value="WNI" selected>WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                                <label class="text-danger">{{$errors->first("kewarganegaraan_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Ayah pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="nama_ayah_pasangan" class="form-control" placeholder="Nama Ayah pasangan">
                                <label class="text-danger">{{$errors->first("nama_ayah_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Ibu pasangan <label class="text-danger">*</label></label>
                                <input type="text" name="nama_ibu_pasangan" class="form-control" placeholder="Nama Ibu pasangan">
                                <label class="text-danger">{{$errors->first("nama_ibu_pasangan") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Menikah <label class="text-danger">*</label></label>
                                <input type="date" name="tgl_menikah" class="form-control" placeholder="Tanggal Menikah">
                                <label class="text-danger">{{$errors->first("tgl_menikah") }}</label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Gereja <label class="text-danger">*</label></label>
                                <input type="text" name="gereja" class="form-control" placeholder="Gereja ">
                                <label class="text-danger">{{$errors->first("gereja") }}</label>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>


    </div>

@endsection