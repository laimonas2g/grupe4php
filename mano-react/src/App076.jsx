import { createContext, useState } from 'react';
import './App.scss';
import './buttons.scss';
import A from './Components/076/A';
import randColor from './Functions/randomColor';
import rand from './Functions/random';


export const MyContext = createContext();
export const MySecondContext = createContext();


export default function App() {

    const [counter1, setCounter1] = useState(0);
    const [counter2, setCounter2] = useState(0);

    const [random, setRandom] = useState(0);
    const [randomColor, setRandomColor] = useState(0);

    const doRandom = _ => {
        setRandom(rand(100, 999));
        setRandomColor(randColor());
    }


    return (
        <>
            <h2>Hello, Context</h2>

            <button className="red" onClick={_ => setCounter1(c => c + 1)}>{counter1}</button>
            <button className="blue" onClick={_ => setCounter2(c => c + 1)}>{counter2}</button>
            <button className="yellow" onClick={doRandom}>RAND</button>

            <MySecondContext.Provider value={{
                digit: random,
                color: randomColor
            }}>
                <MyContext.Provider value={counter2}>
                    <A counter1={counter1} />
                </MyContext.Provider>
            </MySecondContext.Provider>

        </>


    );
}