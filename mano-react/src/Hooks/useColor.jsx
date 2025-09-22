import { useState } from 'react';
 
export default function useColor(defaultColor) {
 
    const [color, setColor] = useState(defaultColor);
 
    const randColor = _ => {
        return '#' + Math.floor(Math.random() * 16777215).toString(16).padEnd(6, '0');
    }
 
    const changeColor = _ => {
        setColor(randColor);
    }
 
    return [color, changeColor];
}