@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
  <h1>Data Artikel</h1>
  <a href="/artikel/create" class="btn btn-primary mb-3">
  Buat artikel baru
  </a>

  <table class="table table-bordered mt-2">
      <thead>                  
        <tr>
          <th style="width: 10px">No</th>
          <th>Judul Artikel</th>
          <th>Detail Artikel</th>
          <th>Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($artikel as $key => $artikel)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$artikel->judul}}</td>
          <td>
            <a href="{{url('/artikel/'.$artikel->id) }}">
              <button class="btn btn-primary"> Detail artikel</button>
            </a>
          </td>
          <td>
          <a href="{{url('/artikel/'.$artikel->id) . '/edit' }}">
              <button class="btn btn-primary">Edit</button>
          </a>

          <form action="{{url('/artikel/'. $artikel->id)}}" style="display: inline" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn  btn-danger">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
  </table>
</div>
@endsection

@push('scripts')
  
  <script>
      Swal.fire({
          title: 'Berhasil!',
          text: 'Memasangkan script sweet alert',
          icon: 'success',
          confirmButtonText: 'Cool'
      });
  </script>
@endpush