@extends('layouts.master')

@section('isi')
<div class="container">
  <div class="card mt-3 mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <form action="">
            <div class="form-group">
              <label>Nama Pelanggan</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
              <label for="">Jenis Cucian</label>
              <select name="as" id="" class="form-control">
                <option value="">-- Pilih Jenis Cucian --</option>
                <option value="cuci kering">Cuci Kering | 1kg Rp.5000</option>
                <option value="cuci basah">Cuci Basah | 1kg Rp.6000</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Berat /Kg</label>
              <input type="number" name="berat" class="form-control">
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" id="" cols="30" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Total</label>
              <input type="number" name="berat" class="form-control">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Cucian</th>
                <th scope="col">Berat</th>
                <th scope="col">Total</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($datalaundry as $item)
                 <tr>
                   <td>{{ $item->id }}</td>
                   <td>{{ $item->nama }}</td>
                   <td>{{ $item->jenis }}</td>
                   <td>{{ $item->berat }}</td>
                   <td>Rp.{{ number_format($item->total) }},-</td>
                   <td>{{ $item->alamat }}</td>
                 </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection