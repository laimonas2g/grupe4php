<div class="card">
    <div class="card-header">
        <h2>Edit Author</h2>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $author->lastname }}">
            </div>
            <div class="mb-3">
                <label for="birth_year" class="form-label">Birth Year</label>
                <input type="number" class="form-control" id="birth_year" name="birth_year" value="{{ $author->birth_year }}">
            </div>
            <button type="button" data-action="update" data-action-url="{{ route('authors-update', $author->id) }}" class="btn btn-primary">Save</button>
            <button type="button" data-action="cancel" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
</div>