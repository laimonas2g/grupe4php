@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h1 class="mb-0">Books list</h1>
                    <form action="{{ route('books-index') }}" class="ms-auto d-flex align-items-center">
                        <div class="form-check ms-3 d-flex align-items-center">
                        <label for="range4" class="form-label"  style="min-width: 100px">Min pages</label>
                        <input type="range" class="form-range me-2" style="min-width: 150px" name="min_pages" min="100" max="1000" value="{{ $min_pages }}" id="range4">
                        <output for="range4" id="rangeValue" aria-hidden="true" style="min-width: 50px"></output>
                        </div>

                        <script>
                            // This is an example script, please modify as needed
                            const rangeInput = document.getElementById('range4');
                            const rangeOutput = document.getElementById('rangeValue');

                            // Set initial value
                            rangeOutput.textContent = rangeInput.value;

                            rangeInput.addEventListener('input', function() {
                                rangeOutput.textContent = this.value;
                            });
                        </script>

                        <div class="input-group">
                            <label class="input-group-text" for="sort">Sort by</label>
                            <select name="sort" class="form-select">
                                <option value="">Select</option>
                                <option value="title" {{ $sort==='title' ? 'selected' : '' }}>Title</option>
                                <option value="author" {{ $sort==='author' ? 'selected' : '' }}>Author</option>
                                <option value="pages" {{ $sort==='pages' ? 'selected' : '' }}>Pages</option>
                            </select>
                        </div>
                        <div class="form-check ms-3 d-flex align-items-center" style="min-width: 100px">
                            <input class="form-check-input" type="checkbox" name="show_all" id="show_all" value="1" {{
                                $show_all ? 'checked' : '' }}>
                            <label class="form-check-label ms-1" for="show_all">
                                Show all
                            </label>
                        </div>
                        <button class="btn btn-secondary ms-2" type="submit">Sort</button>
                        <a href="{{ route('books-index') }}" class="btn btn-secondary ms-2">Clear</a>
                    </form>
                </div>
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
                                <td>{{ $book->author->name . ' ' . $book->author->lastname }}</td>
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
                    @if (!$show_all)
                    {{ $books->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection