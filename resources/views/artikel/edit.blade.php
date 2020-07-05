@extends('layouts.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Artikel</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/artikel/{{$artikel->id}}" method= "POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul artikel</label>
          <input type="text" class="form-control" id="judul" value ="{{$artikel->judul}}" name="judul" placeholder="Enter judul artikel">
        </div>
        <div class="form-group">
          <label for="isi">Isi artikel</label>
          <input type="text" class="form-control" id="isi" value ="{{$artikel->isi}}" name="isi" placeholder="isi">
        </div>
        <div class="form-group">
        <label for="tag">Tag Artikel</label>
        <input type="text" class="form-control" id="tag" value="{{$artikel->tag}}"name="tag" placeholder="tagnya mau apa">
      </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
</div>

@endsection