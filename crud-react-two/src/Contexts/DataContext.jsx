import { createContext } from "react";
import useBooks from "../Hooks/useBooks";


const DataContext = createContext();


export const DataProvider = ({ children }) => {

    const [books] = useBooks();


    return (
        <DataContext.Provider value={{
            books
        }}>
            {children}
        </DataContext.Provider>
    );

}


export default DataContext;