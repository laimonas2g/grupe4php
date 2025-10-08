import { useContext } from 'react';
import Modal from '@/Components/Modal';
import ShopContext from '@/ShopContext';



export default function Delete() {

    const { deleteProduct } = useContext(ShopContext);

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
                        onClick={() => {
                            // Handle delete confirmation
                        }}
                    >
                        Delete
                    </button>
                    <button
                        className="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition"
                        onClick={() => window.history.back()}
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </Modal>

    );


}