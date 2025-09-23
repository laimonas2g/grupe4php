import { useEffect, useState } from 'react';
import axios from 'axios';
import * as SETTINGS from '../Constants/settings';
 
export default function useBooks() {
 
 
    const [books, setBooks] = useState(null);
 
 
    useEffect(_ => {
        axios.get(SETTINGS.URL + 'books')
            .then(res => {
                setBooks(res.data)
            })
            .catch(error => {
                console.log(error)
            });
    }, []);
 
 
    return [books];
 
 
}