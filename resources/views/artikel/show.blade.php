@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary">Detail Artikel</h1>
  </div>
  <div class="card-body">
    <h2>Judul Artikel: {{$artikel->judul}}</h2>
    <h5>Slug: {{$artikel->slug}}</h5>
    <p>{{$artikel->isi}}</p>
    <button class="btn btn-primary">{{$artikel->tag}}</button>
    
  </div>
  
</div>
<a href="/artikel" class="btn btn-primary mb-3 ml-3" style="width:80px">Back</a>
@endsection