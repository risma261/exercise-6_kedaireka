@extends('layout.admin')
@section('konten')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <h1>Data Barang</h1>
    <a href="{{route('inventaris.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>Kode Barang</th>
      <th>Jenis Barang</th>
      <th>Merk Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inventariss as $no => $inventaris)
    <tr>
      <td>{{ $inventariss->firstItem() + $no }}</td>
      <td>{{ $inventaris->kode_barang }}</td>
      <td>{{ $inventaris->Inventaris_type->jenis_barang }}</td>
      <td>{{ $inventaris->merk_barang }}</td>
      <td>{{ $inventaris->jumlah }}</td>
      <td>{{ $inventaris->harga }}</td>
      <td>{{ $inventaris->jumlah * $inventaris->harga }}</td>
      <td>
      <a href="{{route('inventaris.edit', $inventaris->id)}}" type="button" class="btn btn-success">edit</a>
      <form action="{{route('inventaris.destroy', $inventaris->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">hapus</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{  $inventariss -> links() }}
        </div>
    </div>
@endsection
