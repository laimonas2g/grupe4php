import { createContext, useState } from 'react';

const ShopContext = createContext();


export function ShopProvider({ children }) {

    const [messages, setMessages] = useState([]);
    const [deleteProduct, setDeleteProduct] = useState(null);

    const addMessage = (msg, type) => {
        console.log('Validation error:', msg);
        const msgId = Math.random().toString(36).substring(2, 9);
        if (typeof msg === 'string') {
            setMessages(m => [...m, { id: msgId, text: msg, type: type }]);
            setTimeout(_ => {
                setMessages(currentMessages => currentMessages.filter(m => m.id !== msgId));
            }, 5000);
        } else if (typeof msg === 'object' && msg !== null) {
            if (msg.response && msg.response.data && msg.response.status === 422) {
                const errors = msg.response.data.errors;
                for (const key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        addMessage(errors[key][0], 'error');
                    }
                }
            }
        }
    };

    return (
        <ShopContext.Provider value={{ messages, addMessage }}>
            {children}
        </ShopContext.Provider>
    );
}

export default ShopContext;