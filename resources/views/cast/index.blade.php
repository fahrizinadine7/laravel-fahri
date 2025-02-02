@extends ('template.master')
@section('atas', 'Tambah Data Genre')
@section ('judul', 'Tambah Data Genre')

@section('conten')
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data cast</h3>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse ($casts as $key =>$value)
                  <tr>
                    <td>
                      {{ $key + 1}}
                    </td>
                    <td>
                      {{ $value->nama }}
                    </td>
                    <td>
                      {{ $value->umur }}
                    </td>
                    <td>
                      {{ $value->bio }}
                    </td>
                    <td>
                      <form action="{{ route('cast.delete', $value->id) }}" method="post">
                  <a href="{{ route('cast.show', $value->id) }}" class="btn btn-sm btn-info">
                    Detail
                  </a>
                  <a href="{{ route('cast.edit', $value->id) }}" class="btn btn-sm btn-warning">
                    Edit
                  </a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                  </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td>Data Masih Kosong</td>
                  </tr>
                  @endforelse
                  </tbody>
                </table><br>
                <a href="{{ route('cast.create') }}" class="btn btn-primary">Tambah Data</a>
              </div>
            </div>
</div>
@endsection