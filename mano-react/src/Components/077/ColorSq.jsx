import { useContext } from 'react';
import ColorsContext from '../../Contexts/ColorsContext';

export default function ColorSq() {


    const { color } = useContext(ColorsContext);

    return (
        <div className="sq" style={{
            borderColor: color,
            backgroundColor: color + '70'
        }}></div>
    );
}