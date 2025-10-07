import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { useEffect, useRef, useState } from 'react';
import useImage from '@/Hooks/useImage';
import useCreateProduct from '@/Hooks/useCreateProduct';

export default function Create({ auth, siteUrl }) {
    const [name, setName] = useState('');
    const [price, setPrice] = useState('');
    const [description, setDescription] = useState('');
    const { image, handleImageChange } = useImage();
    const imageInputRef = useRef(null);

    const { createProduct, loading, error } = useCreateProduct(siteUrl);


    const handleSubmit = e => {
        e.preventDefault();
        const dataForm = new FormData();
        dataForm.append('name', name);
        dataForm.append('price', price);
        dataForm.append('description', description);
        if (image) {
            dataForm.append('image', imageInputRef.current.files[0]);
        }
        // siųsti dataForm į serverį naudojant fetch arba axios
        const response = createProduct(dataForm);
        console.log(response);
    };

    useEffect(_ => {
        if (error) {
            console.log('Error creating product:', error);
        }
    }, [error]);



    return (
        <AuthenticatedLayout user={auth.user}>
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
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Price</label>
                        <input
                            type="number"
                            className="w-full border px-3 py-2 rounded"
                            value={price}
                            onChange={e => setPrice(e.target.value)}
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Description</label>
                        <textarea
                            className="w-full border px-3 py-2 rounded"
                            value={description}
                            onChange={e => setDescription(e.target.value)}
                        ></textarea>
                    </div>
                    <div className="mb-4">
                        <label className="block mb-1 font-semibold">Product Image</label>
                        <input
                            type="file"
                            className="w-full border px-3 py-2 rounded"
                            accept="image/*"
                            onChange={handleImageChange}
                            ref={imageInputRef}
                        />
                    </div>
                    <div className="mb-4">
                        {image && <img src={image} alt="Product Preview" className="mt-2" />}
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