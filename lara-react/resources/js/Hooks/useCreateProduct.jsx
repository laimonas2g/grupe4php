import { useState } from 'react';
import axios from 'axios';

export default function useCreateProduct(url) {
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);

    console.log('API URL:', url);

    const createProduct = async (data) => {
        setLoading(true);
        setError(null);
        try {
            const response = await axios.post(url + '/shop/products', data);
            return response.data;
        } catch (err) {
            setError(err.response.data); // nustatome klaidos būseną su serverio atsakymu
        } finally {
            setLoading(false); // patenkame visada, nesvarbu ar užklausa pavyko ar ne
        }
    };

    return { createProduct, loading, error };
}