@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit mahasiswa</div>

                <div class="card-body">
                    <form action="{{route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Npm</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Tambahkan Npm" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}"> 
                                </div>
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Tambahkan Nama Mahasiswa" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa}}">
                                </div>
                                <div class="col">
                                    <label for="">Tempat lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Ttl" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir}}">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->jenis_kelamin }}">
                                    <option value="L" selected="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}">Laki laki</option>
                                    <option value="P" selected="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="text" name="telepon" class="form-control" placeholder="Tambahkan Telepon" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}">
                                </div>
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}">
                                </div>
                             </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
