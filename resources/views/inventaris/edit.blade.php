@extends('layout.admin')
@section('konten')
  <body>
    <form action="{{route('inventaris.update', $inventaris->id)}}" method="post" class="m-6">
        @csrf
        @method('PUT')
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
        <input class="form-control" id="exampleFormControlInput1" placeholder="Isi Nama" value="{{$inventaris ->kode_barang}}" name="kode_barang">
        </div>
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
        <input class="form-control" id="exampleFormControlInput1" value="{{$inventaris->jenis_barang}}" name="jenis_barang"></input>
        </div>
        <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Merk Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{$inventaris->merk_barang}}" placeholder="isi jenis barang" name="merk_barang"></input>
        </div>
        <select class="form-select" name="inventaris" aria-label="Default select example">
        <option selected>Open this select menu</option>
        @foreach($inventarisType as $inventaris)
        <option value="{{$inventaris->id}}" {{ $inventaris->id == $inventaris->inventaris_type_id ? 'selected' : '' }}>{{ $inventaris_types->inventaris_types }}</option>
   @endforeach
    </select>
        <div class="m-3">
        <label for="jumlah" class="form-label">Isi Jumlah</label>
        <input type="number" class="form-control" id="jumlah" value="1"  value="{{$inventaris->jumlah}}" placeholder="isi jenis barang" name="jumlah"></input>
        </div>

        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection
