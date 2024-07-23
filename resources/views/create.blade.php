@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <a href="{{route('index')}}" class="btn btn-success"> Home </a>
                <p style="font-size:20px; font-weight:bold;">Create New Book</p>
                <form action="{{ route('book.store') }}" class="was-validated" method="POST" novalidate>
                    @csrf
                    <div class="form-group has-validation">
                        <label for="title">Book Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group has-validation">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>

                    <div class="form-group has-validation">
                        <label for="published_year">Published Year</label>
                        <input type="number" name="published_year" id="published_year" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create Book</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
