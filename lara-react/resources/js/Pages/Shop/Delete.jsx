import { useContext, useEffect } from 'react';
import Modal from '@/Components/Modal';
import ShopContext from '@/ShopContext';
import useDeleteProduct from '@/Hooks/useDeleteProduct';



export default function Delete() {

    const { deleteProduct, setDeleteProduct, addMessage, setProducts } = useContext(ShopContext);

    const { destroyProduct, loading, error } = useDeleteProduct();

    useEffect(_ => {
        if (error) {
            addMessage(error, 'error');
        }
    }, [error]);

    if (!deleteProduct) {
        return null;
    }

    return (
        <Modal show={true}>
            <div className="p-6">
                <h2 className="text-2xl font-bold mb-4">Delete Product</h2>
                <p className="mb-4">Are you sure you want to delete the product "{deleteProduct?.name}"?</p>
                <div className="flex gap-2">
                    <button
                        className="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        onClick={_ => destroyProduct(deleteProduct).then(response => {
                            if (response && response.success) {
                                setDeleteProduct(null);
                                addMessage(response.message, 'success');
                                setProducts(prevProducts => prevProducts.filter(p => p.id !== deleteProduct.id));
                            }
                        })}
                        disabled={loading}
                    >
                        {loading ? (
                            <svg className="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                                <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                            </svg>
                        ) : null}
                        {loading ? 'Deleting...' : 'Delete Product'}
                    </button>
                    <button
                        className="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition"
                        onClick={_ => setDeleteProduct(null)}
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </Modal>

    );


}