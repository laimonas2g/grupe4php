import { useState, useEffect } from 'react';
import axios from 'axios';
import * as SETTINGS from '../Constants/settings';
import * as A from '../Actions/books';


export default function useDeleteBook(dispatchBooks, msg) {

    const [deleteBook, setDeleteBook] = useState(null);
    const [destroyBook, setDestroyBook] = useState(null);

    useEffect(_ => {
        if (null === destroyBook) {
            return;
        }

        dispatchBooks(A.markToDelete(destroyBook.id));
        const msgId = msg({
            title: 'Deleting...',
            text: 'Your book is about to delete',
            type: 'info'
        });

        axios.delete(SETTINGS.URL + 'book/' + destroyBook.id)
            .then(res => {
                console.log(res);
                dispatchBooks(A.Delete(destroyBook.id));
                msg({
                    title: 'Deleted',
                    text: 'Your book was deleted',
                    type: 'success'
                }, msgId);
            })
            .catch(error => {
                console.log(error);
                dispatchBooks(A.restoreDeleted(destroyBook.id));
                msg({
                    title: 'Deleting Failed',
                    text: 'Your book was NOT deleted',
                    type: 'warning'
                }, msgId);
            });

    }, [destroyBook, msg]);


    return { deleteBook, setDeleteBook, destroyBook, setDestroyBook }


}