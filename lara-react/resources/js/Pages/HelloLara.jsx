import { Link } from '@inertiajs/react';

export default function HelloLara({ laraIs, auth, laraColors }) {

    return (
        <div className="p-6 bg-white border-b border-gray-200">
            {laraIs}
            <div className="mt-2 text-sm text-gray-500">
                {laraColors.map(color => (
                    <span key={color} className="mr-2" style={{ color }}>
                        {color}
                    </span>
                ))}
            </div>
            <div className="mt-2 text-sm text-gray-500">
                <Link href={`/users/${auth.user.id}`}>
                    Lara and {auth.user.name}
                </Link>
            </div>
        </div>
    );
}