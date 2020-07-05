@extends('layouts.master')

@section('content')

<div class="card card-primary mt-3">
  <div class="card-header">
    <h3 class="card-title">Artikel</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/artikel" method= "POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul artikel">
      </div>
      <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <input type="text" class="form-control" id="isi" name="isi" placeholder="masukkan isi artikel">
      </div>
      <div class="form-group">
        <label for="tag">Tag Artikel</label>
        <input type="text" class="form-control" id="tag" name="tag" placeholder="tagnya mau apa">
      </div>
      <input type="text" class="hidden" value=>
      
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

@endsection