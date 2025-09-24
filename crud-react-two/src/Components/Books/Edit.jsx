import { useContext, useEffect, useState } from 'react';
import DataContext from '../../Contexts/DataContext';

export default function Edit() {

    const { editBook, setEditBook, setUpdateBook } = useContext(DataContext);

    const [inputs, setInputs] = useState({
        title: '',
        author: '',
        published_year: ''
    });

    const handleInput = e => {
        setInputs(i => ({ ...i, [e.target.name]: e.target.value }))
    }

    const update = _ => {
        setUpdateBook({
            title: inputs.title,
            author: inputs.author,
            published_year: inputs.published_year,
            id: editBook.id
        });
        setEditBook(null);
    }

    useEffect(_ => {
        if (null === editBook) {
            return
        }
        setInputs({
            title: editBook.title,
            author: editBook.author,
            published_year: editBook.published_year
        });

    }, [editBook]);


    if (null === editBook) {
        return null;
    }


    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">Edit Book</h5>
                        <button type="button" className="btn-close" onClick={_ => setEditBook(null)}></button>
                    </div>
                    <div className="modal-body">
                        <p className="card-text">Fill form to edit book.</p>
                        <div className="mb-3">
                            <label className="form-label">Title</label>
                            <input type="text" className="form-control" onChange={handleInput} name="title" value={inputs.title} />
                        </div>
                        <div className="mb-3">
                            <label className="form-label">Author</label>
                            <input type="text" className="form-control" onChange={handleInput} name="author" value={inputs.author} />
                        </div>
                        <div className="mb-3">
                            <label className="form-label">Year</label>
                            <input type="text" className="form-control" onChange={handleInput} name="published_year" value={inputs.published_year} />
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" onClick={_ => setEditBook(null)}>Cancel</button>
                        <button type="button" className="btn btn-success" onClick={update}>Save</button>
                    </div>
                </div>
            </div>
        </div>
    );
}