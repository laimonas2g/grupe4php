export default function List({ books }) {

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
            </div>
            <div className="card-body">
                <p className="card-text">List of all Books.</p>
                <ul className="list-group list-group-flush">
                    {
                        books.map(b => <li key={b.id} className="list-group-item">
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
                                    <button type="button" className="btn btn-outline-success">Edit</button>
                                    <button type="button" className="btn btn-outline-danger">Delete</button>
                                </div>
                            </div>
                        </li>)
                    }
                </ul>
            </div>
        </div>
    );
}