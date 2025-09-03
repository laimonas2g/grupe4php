@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Books list</h1></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Pages</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->pages }}</td>
                                    <td>
                                        @if (auth()->user() && auth()->user()->role === 'Admin')
                                            <a href="{{ route('books-edit', $book->id) }}" class="btn btn-warning me-2">Edit</a>
                                        @endif
                                        <a href="{{ route('books-delete', $book->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection