import { createContext, useState } from 'react';

const ShopContext = createContext();


export function ShopProvider({ children, ...props }) {

    const [messages, setMessages] = useState([]);
    const [deleteProduct, setDeleteProduct] = useState(null);

    // console.log('ShopContext props:', props?.initialPage?.props ?? {});

    const [products, setProducts] = useState(props?.initialPage?.props?.products || []);
    const siteUrl = props?.initialPage?.props?.siteUrl || '';
    const auth = props?.initialPage?.props?.auth || {};

    const addMessage = (msg, type) => {
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
        <ShopContext.Provider value={{
            auth, siteUrl, products, setProducts,
            messages, addMessage,
            deleteProduct, setDeleteProduct
        }}>
            {children}
        </ShopContext.Provider>
    );
}

export default ShopContext;