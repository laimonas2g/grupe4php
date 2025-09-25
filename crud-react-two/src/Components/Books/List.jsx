import { useContext, useEffect, useState } from 'react';
import DataContext from '../../Contexts/DataContext';
import { sortBooks } from '../../Actions/books';

export default function List() {

    const { books, setDeleteBook, setEditBook, dispatchBooks } = useContext(DataContext);

    const [selectSort, setSelectSort] = useState(0);

    useEffect(_ => {
        if (null === books) {
            return;
        }
        dispatchBooks(sortBooks(selectSort));
    }, [selectSort]);

    if (null === books) {
        return (
            <div className="card mt-5">
                <div className="card-header">
                    <h2>Books List</h2>
                </div>
                <div className="card-body">
                    <p className="card-text">Loading...</p>
                </div>
            </div>
        );
    }



    return (
        <div className="card mt-5 mb-5">
            <div className="card-header">
                <h2>Books List</h2>
                <select className="form-select select-sort" value={selectSort} onChange={e => setSelectSort(e.target.value)}>
                    <option value="0">Default Sort</option>
                    <option value="1">Sort by Title</option>
                    <option value="2">Sort by Author</option>
                </select>
            </div>
            <div className="card-body">
                <p className="card-text">List of all Books.</p>
                <ul className="list-group list-group-flush">
                    {
                        books.map(b => b.delete ? null : <li key={b.id}
                            className={'list-group-item' + (('' + b.id).startsWith('TMP') ? ' not-active-item' : '')}>
                            <div className="book-line">
                                <div className="book-line-data">
                                    <div className="title">
                                        {b.title}
                                    </div>
                                    <div className="author">
                                        {b.author}
                                    </div>
                                    <div className="year">
                                        {b.published_year}
                                    </div>
                                </div>
                                <div className="book-line-buttons">
                                    <button disabled={('' + b.id).startsWith('TMP')} type="button" className="btn btn-outline-success" onClick={_ => setEditBook(b)}>Edit</button>
                                    <button disabled={('' + b.id).startsWith('TMP')} type="button" className="btn btn-outline-danger" onClick={_ => setDeleteBook(b)} >Delete</button>
                                </div>
                            </div>
                        </li>)
                    }
                </ul>
            </div>
        </div>
    );
}