import { useEffect, useReducer, useState } from 'react';
import axios from 'axios';
import * as SETTINGS from '../Constants/settings';
import * as A from '../Actions/books';
import booksReducer from '../Reducers/booksReducer';

export default function useBooks() {


    const [books, dispatchBooks] = useReducer(booksReducer, null)


    useEffect(_ => {
        axios.get(SETTINGS.URL + 'books')
            .then(res => {
                dispatchBooks(A.getBooks(res.data));
            })
            .catch(error => {
                console.log(error)
            });
    }, []);


    return [books, dispatchBooks];


}