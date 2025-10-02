export default function MainGuest({ children, auth }) {

    if (auth.user) {
        return null;
    }

    return (
        <div className="min-h-screen bg-gray-100">
            <header className="bg-white shadow">
                <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 className="text-3xl font-bold text-gray-900">Hello stranger</h1>
                    {children[1]}
                </div>
            </header>
            <main>
                {children[0]}
            </main>
        </div>
    );
}