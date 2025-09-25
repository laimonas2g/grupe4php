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
        dispatchBooks(A.updateBook(updateBook));
        const msgId = msg({
            title: 'Updating...',
            text: 'Your book are updating...',
            type: 'info'
        });
        axios.put(SETTINGS.URL + 'book/' + updateBook.id, updateBook)
            .then(res => {
                console.log(res.data);
                dispatchBooks(A.confirmUpdatingBook());
                msg({
                    title: 'Updated',
                    text: 'Your book was updated',
                    type: 'info'
                }, msgId);
            })
            .catch(error => {
                console.log(error);
                dispatchBooks(A.cancelUpdatingBook(updateBook.id));
                msg({
                    title: 'Updating error',
                    text: 'Your book was not updated',
                    type: 'warning'
                }, msgId);
            });
    }, [updateBook, msg]);
 
 
    return { editBook, setEditBook, setUpdateBook }
}