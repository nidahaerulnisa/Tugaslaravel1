@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/anggota/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" placeholder="Input Tanggal Pinjam;">
                    <label for="exampleInputEmail1">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" placeholder="Input Tanggal Kembali">
                        <!-- <label>Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" class="form-control">
                          <option></option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    <label for="exampleInputEmail1">Jurusan anggota</label>
                    <input type="text" class="form-control" name="jurusan_anggota" placeholder="Input Jurusan Anggota">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp_anggota" placeholder="Input No Telp Anggota">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat_anggota" placeholder="Input Alamat Anggota">
                  </div> -->
                <!-- /.card-body -->
</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection