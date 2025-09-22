import { useContext } from 'react';
import ColorsContext from '../../Contexts/ColorsContext';

export default function Button({children}) {

    const { changeColor } = useContext(ColorsContext);

    return (
         <button className="yellow" onClick={changeColor}>{children}</button>
    );

}