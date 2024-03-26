@extends('layouts.app')

@section('title', 'Add Comic')

@section('main-content')
  <section>
    <div class="container">
        
        <h1>add comic</h1>
        <form action="{{ route('comics.store')}}" method="POST" class='row'>
        @csrf
        <div class="mb-3 col-3">
            <label for="title" class="form-label">Title</label>
            <div class="input-group">
                <input type="text" max='50' class="form-control" id="title" aria-describedby="basic-addon3 basic-addon4" name='title'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="author" class="form-label">Author</label>
            <div class="input-group">
                <input type="text" max='25' class="form-control" id="author" aria-describedby="basic-addon3 basic-addon4" name='author'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="pencils" class="form-label">Pencils</label>
            <div class="input-group">
                <input type="text" max='50' class="form-control" id="pencils" aria-describedby="basic-addon3 basic-addon4" name='pencils'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="inks" class="form-label">Inks</label>
            <div class="input-group">
                <input type="text" max='50' class="form-control" id="inks" aria-describedby="basic-addon3 basic-addon4" name='inks'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="cover_by" class="form-label">Cover By</label>
            <div class="input-group">
                <input type="text" max='100' class="form-control" id="cover_by" aria-describedby="basic-addon3 basic-addon4" name='cover_by'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="rating" class="form-label">Rating</label>
            <div class="input-group">
                <input type="number" min='1' max='10' class="form-control" id="rating" aria-describedby="basic-addon3 basic-addon4" name='rating'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="pages" class="form-label">Pages</label>
            <div class="input-group">
                <input type="number" min='32' max='48' class="form-control" id="pages" aria-describedby="basic-addon3 basic-addon4" name='pages'>
            </div>
        </div>
        <div class="mb-3 col-12">
            <label for="synopsis" class="form-label">Synopsis</label>
            <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" name='synopsis'></textarea>
            </div>
        </div>

        <div class="col-3">
            <button class="btn btn-primary">save</button>
        </div>


        </form>
    </div>
  </section>
@endsection