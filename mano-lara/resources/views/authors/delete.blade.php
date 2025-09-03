<div class="modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the author <b>{{ $author->name }} {{ $author->lastname }}</b>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-danger" data-action="delete" data-action-url="{{ route('authors-destroy', $author->id) }}">Delete</button>      </div>
    </div>
  </div>
</div>
 