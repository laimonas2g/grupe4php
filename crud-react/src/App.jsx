import Create from './Components/Create';
import List from './Components/List';
import axios from 'axios';
import './index.scss';
import { useEffect, useState } from 'react';
import Delete from './Components/Delete';

export default function App() {

    const URL = 'http://localhost/grupe4php/crud-laravel/public/api/';

    const [books, setBooks] = useState(null);

    const [storeBook, setStoreBook] = useState(null);

    const [deleteBook, setDeleteBook] = useState(null);
    const [destroyBook, setDestroyBook] = useState(null);

    useEffect(_ => {
        if (null === storeBook) {
            return;
        }
        const id = 'TMP' + Math.floor(Math.random() * 1000000); // laikinas ID
        setBooks(bs => [{ ...storeBook, id }, ...bs]);

        axios.post(URL + 'book', storeBook)
            .then(res => {
                console.log(res.data);
                setBooks(bs => bs.map(b => id === b.id ? { ...b, id: res.data.id } : b));
            })
            .catch(error => {
                console.log(error);
                setBooks(bs => bs.filter(b => b.id !== id));
            });

    }, [storeBook]);

    useEffect(_ => {
        if (null === destroyBook) {
            return;
        }

        setBooks(bs => bs.map(b => destroyBook.id === b.id ? { ...b, delete: true } : b));

        axios.delete(URL + 'book/' + destroyBook.id)
            .then(res => {
                console.log(res);
                setBooks(bs => bs.filter(b => b.id !== destroyBook.id));
            })
            .catch(error => {
                console.log(error);
                setBooks(bs => bs.map(b => destroyBook.id === b.id ? { ...b, delete: false } : b));
            });

    }, [destroyBook]);


    useEffect(_ => {
        axios.get(URL + 'books')
            .then(res => {
                setBooks(res.data)
            })
            .catch(error => {
                console.log(error)
            });
    }, []);


    return (
        <>
            <div className="container">
                <div className="row">
                    <div className="col-4">
                        <Create setStoreBook={setStoreBook} />
                    </div>
                    <div className="col-8">
                        <List books={books} setDeleteBook={setDeleteBook} />
                    </div>
                </div>
            </div>
            <Delete deleteBook={deleteBook} setDeleteBook={setDeleteBook} setDestroyBook={setDestroyBook} />
        </>
    );
}