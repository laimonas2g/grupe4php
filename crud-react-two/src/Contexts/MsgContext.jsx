import { createContext, useState, useCallback } from 'react';

const MsgContext = createContext();

export const MsgProvider = ({ children }) => {

    const [messages, setMessages] = useState([]);

    const msg = useCallback((data, id = null) => {
        if (!id) {
            id = Math.random().toString(36).substring(2, 9);
            setMessages(m => [{ ...data, id }, ...m]);
            setTimeout(_ => {
                setMessages(m => m.filter(ms => ms.id !== id));
            }, 15000);
        } else {
            setMessages(prevMessages => prevMessages.map(prevMessageItem => prevMessageItem.id === id ? { ...prevMessageItem, ...data } : prevMessageItem));
        }
        return id;
    }, []);

    const closeMsg = id => setMessages(m => m.filter(ms => ms.id !== id));

    return (
        <MsgContext.Provider value={{
            messages,
            msg,
            closeMsg
        }}>
            {children}
        </MsgContext.Provider>
    );
}

export default MsgContext;