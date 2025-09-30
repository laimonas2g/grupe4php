import { createContext, useContext, useState } from 'react';
import useBooks from '../Hooks/useBooks';
import useDeleteBook from '../Hooks/useDeleteBook';
import useCreateBook from '../Hooks/useCreateBook';
import useEditBook from '../Hooks/useEditBook';
import MsgContext from './MsgContext';

const DataContext = createContext();


export const DataProvider = ({ children }) => {

    const { msg } = useContext(MsgContext);

    const [serverErrors, setServerErrors] = useState(null);
    // galimi serverio klaidų nustatymo būdai:
    // 1. globalus state'as (kaip čia)
    // 2. context'as (pvz. ServerErrorsContext)
    // 3. custom hook'as (pvz. useServerErrors)
    // 4. state kiekviename komponente atskirai (mažiausiai patogu, bet galima ir taip)

    const [serverSuccess, setServerSuccess] = useState(null);
    // galimi serverio sėkmės nustatymo būdai:
    // 1. globalus state'as (kaip čia)
    // 2. context'as (pvz. ServerSuccessContext)
    // 3. custom hook'as (pvz. useServerSuccess)
    // 4. state kiekviename komponente atskirai (mažiausiai patogu, bet galima ir taip)

    const [books, dispatchBooks] = useBooks();
    const { deleteBook, setDeleteBook, destroyBook, setDestroyBook } = useDeleteBook(dispatchBooks, msg);
    const { setStoreBook } = useCreateBook(dispatchBooks, msg, setServerErrors, setServerSuccess);
    const { editBook, setEditBook, setUpdateBook } = useEditBook(dispatchBooks, msg);




    return (
        <DataContext.Provider value={{
            books, dispatchBooks,
            deleteBook, setDeleteBook, destroyBook, setDestroyBook,
            setStoreBook,
            editBook, setEditBook, setUpdateBook,
            serverErrors, setServerErrors,
            serverSuccess, setServerSuccess
        }}>
            {children}
        </DataContext.Provider>
    );

}

export default DataContext;