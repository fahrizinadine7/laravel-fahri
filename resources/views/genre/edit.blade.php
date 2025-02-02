@extends('template.master');
@section('atas', 'Edit Tabel Genre')
@section('judul', 'Edit Data Genre')
@section('conten')

  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('genre.update', $genre->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama Genre</label>
      <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Genre" value="{{ old('nama', $genre->nama) }}">
    </div>
    @error('nama')
      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
    @enderror
  </div>
  <div class="px-3 d-flex justify-content-between align-items-center">
    <!-- Tombol reset untuk mengembalikan nilai ke default -->
    <button type="reset" class="btn btn-warning">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

    </div>
    <!-- /.card -->
  </div>
@endsection