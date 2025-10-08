import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function List({ auth, siteUrl, products }) {
    return (
        <AuthenticatedLayout user={auth.user}>
            <div className="container mx-auto px-4">
                <h1 className="text-2xl font-bold mb-4 mt-4">Product List</h1>
                <ul className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {products.map(product => (
                        <li key={product.id} className="bg-white rounded-lg shadow p-6 flex flex-col">
                            <img
                                src={product.image_path ? siteUrl + '/storage/' + product.image_path : siteUrl + '/no.png'}
                                alt={product.name}
                                className="w-full h-48 object-cover rounded mb-4"
                            />
                            <h2 className="text-lg font-semibold mb-2">{product.name}</h2>
                            <p className="text-gray-600 mb-2">{product.description}</p>
                            <div className="text-xl font-bold text-green-600 mb-4">${product.price}</div>
                            <div className="mt-auto flex gap-2">
                                <button className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                    View
                                </button>
                                <button className="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                    Edit
                                </button>
                                <button className="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                    Delete
                                </button>
                            </div>
                        </li>
                    ))}
                </ul>
            </div>
        </AuthenticatedLayout>
    );
}