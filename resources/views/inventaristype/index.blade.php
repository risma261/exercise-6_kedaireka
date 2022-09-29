@extends('layout.admin')
@section('konten')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h1>Jenis Barang</h1>
    <a href="{{route('inventaristype.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>Jenis Barang</th>
      <th>Deskripsi Barang</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inventaristypes as $no => $inventaristype)
    <tr>
      <td>{{ $no + 1 }}</td>
      <td>{{ $inventaristype->jenis_barang }}</td>
      <td>{{ $inventaristype->deskripsi_barang }}</td>
      <td>
      <a href="{{route('inventaristype.edit', $inventaristype->id)}}" type="button" class="btn btn-success">edit</a>
      <form action="{{route('inventaristype.destroy', $inventaristype->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">hapus</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{  $inventaristypes -> links() }}
        </div>
    </div>
@endsection
