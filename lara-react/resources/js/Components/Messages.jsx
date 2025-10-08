import { useContext } from 'react';
import ShopContext from '@/ShopContext';

export default function Messages() {

    const messages = useContext(ShopContext).messages;
    // const { messages } = useContext(ShopContext);

    if (messages.length === 0) {
        return null;
    }

    return (
        <div className="fixed top-5 right-5 z-50 flex flex-col gap-3">
            {messages.map(msg => (
                <div
                    key={msg.id}
                    className={`px-4 py-2 rounded shadow-lg text-white ${
                        msg.type === 'success'
                            ? 'bg-green-500'
                            : 'bg-red-500'
                    }`}
                >
                    {msg.text}
                </div>
            ))}
        </div>
    );
}