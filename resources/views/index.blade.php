@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Home Page</p>
                    <a href="{{ route('book.create') }}" class="btn btn-success">Create Book</a>
                    <br><br>
                    <table class="table table-responsive table-bordered table-striped" style="margin-top:10px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Published Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->Published_year }}</td>
                                <td>
                                    <a href="/book/{{ $book->id }}" class="btn btn-primary btn-xs py-0">Show</a>
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning btn-xs py-0">Edit</a>
                                    <form action="{{ route('book.destroy', $book->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
