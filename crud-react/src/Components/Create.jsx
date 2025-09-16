import { useState } from 'react';

export default function Create({setStoreBook}) {

    const [title, setTitle] = useState('');
    const [author, setAuthor] = useState('');
    const [published_year, setPublished_year] = useState('');

    const handleTitle = e => {
        setTitle(e.target.value);
    }

    const handleAuthor = e => {
        setAuthor(e.target.value);
    }

    const handlePublished_year = e => {
        setPublished_year(e.target.value);
    }

    const handleSave = _ => {
        setStoreBook({
            title,
            author,
            published_year
        });
        // reiktu perkelt kitur
        setTitle('');
        setAuthor('');
        setPublished_year('');
    }

    return (
        <div className="card mt-5 mb-5">
            <div className="card-header">
                <h2>Create new Book</h2>
            </div>
            <div className="card-body">
                <p className="card-text">Fill form to add new book.</p>
                <div className="mb-3">
                    <label className="form-label">Title</label>
                    <input type="text" className="form-control" onChange={handleTitle} value={title} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Author</label>
                    <input type="text" className="form-control" onChange={handleAuthor} value={author} />
                </div>
                <div className="mb-3">
                    <label className="form-label">Year</label>
                    <input type="text" className="form-control" onChange={handlePublished_year} value={published_year} />
                </div>

                <button type="button" className="btn btn-outline-primary" onClick={handleSave}>Save</button>
            </div>
        </div>
    );
}