@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 aligh-self-center">
                    <h3>Siswa</h3>

                </div>
                <div class="col-4 text-right">
                    <button class="btn btn-sm text-secondary" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>

        <div class="card-body ">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form method="post" action="{{ route($url, $siswa->id ?? '') }}" enctype="multipart/form-data" >
                        @csrf
                        @if(isset($siswa))
                            @method('put')
                        @endif
                       
                        <div class="from-group">
                            <label for="nisn">NISN</label>
                            <input type="number" class="form-control"name="nisn" value="{{ $siswa->nisn ?? ''}}">
                            @error('nisn')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ $siswa->nik ?? ''}}">
                            @error('nik')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama ?? ''}}">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="{{ $siswa->asal_sekolah ?? ''}}">
                            @error('asal_sekolah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $siswa->agama ?? ''}}">
                            @error('agama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="ttl">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" name="ttl" value="{{ $siswa->ttl ?? ''}}">
                            @error('ttl')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $siswa->alamat ?? ''}}">
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $siswa->jurusan ?? ''}}">
                            @error('jurusan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin ?? ''}}">
                            @error('jenis_kelamin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group mt-3">
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input">
                                <label for="foto" class="custom-file-label">Foto</label><br><div class="text-danger">*pas foto HARUS DIISIII</div>
                                @error('foto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="from-group mt-4">
                            <button type="button" onclick="window.history.back()" class="btn btn-sm btn-primary button-spacing">Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm m-4">{{ $button }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(isset($siswa))
        <div class="modal fade" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div  class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                

                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus user </p>
                    </div>

                    <div class="modal-footer">
                        <form action="{{ route('dashboard.siswa.delete', $siswa->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection  