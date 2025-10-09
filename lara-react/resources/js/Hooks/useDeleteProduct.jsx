import { useState, useContext } from 'react';
import axios from 'axios';
import ShopContext from '@/ShopContext';

export default function useDeleteProduct() {
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);
    const { siteUrl } = useContext(ShopContext);

    console.log('API URL:', siteUrl);

    const destroyProduct = async (data) => {
        setLoading(true);
        setError(null);
        try {
            const response = await axios.delete(siteUrl + '/shop/products/' + data.id);
            return response.data;
        } catch (err) {
            setError(err); // nustatome klaidos būseną su serverio atsakymu
        } finally {
            setLoading(false); // patenkame visada, nesvarbu ar užklausa pavyko ar ne
        }
    };

    return { destroyProduct, loading, error };
}