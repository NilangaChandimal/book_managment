@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <p style="font-size:20px; font-weight:bold;">Edit Book</p>
            <form action="{{ route('book.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
                </div>

                <div class="form-group">
                    <label for="published_year">Published Year</label>
                    <input type="number" name="Published_year" id="published_year" class="form-control" value="{{ $book->Published_year }}" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update Book</button>
                <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
