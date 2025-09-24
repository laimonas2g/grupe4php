import { useState, useEffect } from 'react';
import axios from 'axios';
import * as SETTINGS from '../Constants/settings';
import * as A from '../Actions/books';

export default function useEditBook(dispatchBooks, msg) {

    const [editBook, setEditBook] = useState(null);
    const [updateBook, setUpdateBook] = useState(null);

    useEffect(_ => {
        if (null === updateBook) {
            return;
        }

        setBooks(bs => bs.map(b => b.id === updateBook.id ? { ...b, ...updateBook, copy: { ...b } } : b));
        const msgId = msg({
            title: 'Updating...',
            text: 'Your book are updating...',
            type: 'info'
        });

        axios.put(URL + 'book/' + updateBook.id, updateBook)
            .then(res => {
                console.log(res.data);

                msg({
                    title: 'Updated',
                    text: 'Your book was updated',
                    type: 'info'
                }, msgId);
            })
            .catch(error => {
                console.log(error);
                setBooks(bs => bs.map(b => b.id === updateBook.id ? b.copy : b));
                msg({
                    title: 'Updating error',
                    text: 'Your book was not updated',
                    type: 'alert'
                }, msgId);
            });
    }, [updateBook, msg]);


    return { editBook, setEditBook, setUpdateBook }
}