import { createContext, useState } from 'react';
import useColor from '../Hooks/useColor';


const ColorsContext = createContext();



export const Colors = ({ children }) => {


    const [color, changeColor] = useColor('#742858');

    return (
        <ColorsContext.Provider value={{
            color,
            changeColor,
        }}>
            {children}
        </ColorsContext.Provider>
    );



}





export default ColorsContext;