@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <nav aria-label="breadcrumb primary">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('books.index') }}">Buku</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
        </ol>
      </nav>
      <div class="card">
        <div class="card-header">Data Buku</div>
        <br>
        <div class="card-body">
          {!! Form::model($book, ['url' => route('books.update', $book->id),
          'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
          @include('books._form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection