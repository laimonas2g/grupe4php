<div class="card">
    <div class="card-header">
        <h2>Authors list</h2>
    </div>
    <div class="card-body">
        <button class="btn btn-primary mt-2 mb-2" data-action="create" data-action-url="{{ route('authors-create') }}">Add
            Author</button>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Birth Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->lastname }}</td>
                        <td>{{ $author->birth_year }}</td>
                        <td>
                            <button data-action="edit" data-action-url="{{ route('authors-edit', $author->id) }}" class="btn btn-warning me-2">Edit</button>
                            <button data-action="delete" data-action-url="{{ route('authors-delete', $author->id) }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div data-paginator>
            {{ $authors->links() }}
        </div>
    </div>
</div>
