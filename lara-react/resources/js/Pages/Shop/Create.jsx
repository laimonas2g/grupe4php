import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { useState } from 'react';

export default function Create() {
    const [name, setName] = useState('');
    const [price, setPrice] = useState('');
    const [description, setDescription] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        // Submit logic here (e.g., API call)
        alert(`Product: ${name}, Price: ${price}, Description: ${description}`);
    };

    return (
        <AuthenticatedLayout user={{ name: 'User' }}>
            <div className="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
                <h2 className="text-2xl font-bold mb-4">Add New Product</h2>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Name</label>
                        <input
                            type="text"
                            className="w-full border px-3 py-2 rounded"
                            value={name}
                            onChange={e => setName(e.target.value)}
                            required
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Price</label>
                        <input
                            type="number"
                            className="w-full border px-3 py-2 rounded"
                            value={price}
                            onChange={e => setPrice(e.target.value)}
                            required
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Product Image</label>
                        <input
                            type="file"
                            className="w-full border px-3 py-2 rounded"
                            accept="image/*"
                        />
                    </div>
                    <button
                        type="submit"
                        className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
                    >
                        Create Product
                    </button>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}



