@extends('layout.admin')
@section('konten')
<body>
    <div class="col-4"></div>
        <div class="col-8">
        <form action="{{route('inventaristype.update', $inventaristype->id)}}" method="post" class="ml-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$inventaristype->jenis_barang}}" placeholder="isi jenis barang" name="jenis_barang">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Deskripsi Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$inventaristype->deskripsi_barang}}" placeholder="isi deskripsi barang" name="deskripsi_barang"></input>
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection
