@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Comics</h1>
    </div>
    <div class="container">
      <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Author</th>
          <th>Pencils</th>
          <th>Inks</th>
          <th>Cover By</th>
          <th>Rating</th>
          <th>Pages</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->author}}</td>
          <td>{{$comic->pencils}}</td>
          <td>{{$comic->inks}}</td>
          <td>{{$comic->cover_by}}</td>
          <td>{{$comic->rating}}</td>
          <td>{{$comic->pages}}</td>
          <td><a href="{{ route('comics.show', $comic)}}">gay</a></td>
        </tr>
        @empty
        <tr>
          <td colspan="100%">no info</td>
        </tr>
        @endforelse
      </tbody>

    </table>
    {{$comics->links()}}
    </div>
    
  </section>
@endsection