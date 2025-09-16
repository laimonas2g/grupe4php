export default function Delete({ deleteBook, setDeleteBook, setDestroyBook }) {

    const destroy = _ => {
        setDestroyBook(deleteBook);
        setDeleteBook(null);
    }


    if (null === deleteBook) {
        return null;
    }

    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">Delete Confirmation</h5>
                        <button type="button" className="btn-close" onClick={_ => setDeleteBook(null)}></button>
                    </div>
                    <div className="modal-body">
                        <p>Are you sure you want to delete <strong>{deleteBook.title}</strong>?</p>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" onClick={_ => setDeleteBook(null)}>Cancel</button>
                        <button type="button" className="btn btn-danger" onClick={destroy}>Delete</button>
                    </div>
                </div>
            </div>
        </div>
    );
}