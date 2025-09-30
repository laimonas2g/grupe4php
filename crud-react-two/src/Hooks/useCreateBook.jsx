import { useState, useEffect } from 'react';
import axios from 'axios';
import * as SETTINGS from '../Constants/settings';
import * as A from '../Actions/books';

export default function useCreateBook(dispatchBooks, msg, setServerErrors, setServerSuccess) {

    const [storeBook, setStoreBook] = useState(null);

    useEffect(() => {
        if (null === storeBook) {
            return;
        }
        const id = 'TMP' + Math.floor(Math.random() * 1000000); // laikinas ID
        dispatchBooks(A.addNewBook(storeBook, id));
        const msgId = msg({
            title: 'Storing...',
            text: 'Your book is sending to server',
            type: 'info'
        });

        axios.post(SETTINGS.URL + 'book', storeBook)
            .then(res => {
                console.log(res.data);
                dispatchBooks(A.confirmAddingNewBook(id, res.data.id));
                setServerSuccess(res.data);
                msg({
                    title: 'Stored',
                    text: 'Your book was stored',
                    type: 'success'
                }, msgId);
            })
            .catch(error => {
                console.log(error);
                dispatchBooks(A.cancelAddingNewBook(id));

                if (error.response && error.response.data && error.response.data.errors) {
                    setServerErrors(error.response.data.errors);
                }

                msg({
                    title: 'Storing Failed',
                    text: 'Your book was rejected',
                    type: 'warning'
                }, msgId);
            });

    }, [storeBook, msg]);

    return { setStoreBook }
}