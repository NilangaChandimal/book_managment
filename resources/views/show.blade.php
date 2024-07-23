@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <p style="font-size:20px; font-weight:bold;">Book Details</p>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{ $book->title }}" readonly>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" value="{{ $book->author }}" readonly>
            </div>

            <div class="form-group">
                <label for="published_year">Published Year</label>
                <input type="text" class="form-control" value="{{ $book->Published_year }}" readonly>
            </div>
            <br>
            <a href="{{ route('index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
