@extends('layout.admin')
@section('konten')
    <div class="col-4"></div>
        <div class="col-8">
        <form action="{{route('inventaris.store')}}" method="post" class="ml-5">
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi kode barang" name="kode_barang">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" >Jenis Barang</label>
        <select class="custom-select d-block w-100 form-control" name="jenis_barang">
                @foreach($inventariss as $inventaris)
                    <option value="{{ $inventaris->id }}"> {{ $inventaris->jenis_barang }} </option>
                @endforeach
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merk Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk barang" name="merk_barang"></input>
        </div>
        <div class="mb-3">
        <label for="jumlah" class="form-label">Isi Jumlah</label>
        <input type="number" class="form-control" id="jumlah"  placeholder="isi jumlah" name="jumlah"></input>
        </div>
        <button type="submit" class="btn btn-primary m-3">Tambah</button>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

@endsection
