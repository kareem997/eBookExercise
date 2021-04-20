@extends('app')
@section('title', 'Services')
@section('content')
    <h1>Services</h1>
      <ul>
          @foreach($services as $book)
      <li>Name: {{ $book['name'] }} ISBN: {{ $book['ISBN']}} category: {{ $book['category']}} Pages: {{ $book['pages']}}</li>

          @endforeach
        </ul>
@endsection
