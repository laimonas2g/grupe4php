import { useState, useReducer } from 'react';
import './App.scss';
import './buttons.scss';
import countReducer from './Reducers/countReducer';



function App() {

    const [counter1, setCounter1] = useState(0);

    const [counter2, dispachCounter2] = useReducer(countReducer, 0);

    const [input, setInput] = useState(10);


    const goCounter1 = _ => {
        setCounter1(prev => prev + 1);
    }

    const goCounter2 = _ => {

        const actionObject2 = {
            type: 'ADD_ONE'
        }

        dispachCounter2(actionObject2);

    }

    
    const goCounter3 = _ => {

        const actionObject2 = {
            type: 'REM_ONE'
        }

        dispachCounter2(actionObject2);

    }

    const goCounter4 = _ => {

        const actionObject2 = {
            type: 'ADD_MANY',
            payload: input
        }

        dispachCounter2(actionObject2);

    }

    

    return (
        <>
            <h2>Hello, Reducer</h2>
            <button className="green" onClick={goCounter1}>{counter1}</button>
            <button className="blue" onClick={goCounter2}>{counter2}</button>
            <button className="red" onClick={goCounter3}>{counter2}</button>
            <hr/>
            <button className="yellow" onClick={goCounter4}>{counter2}</button>
            <input type="number" value={input} onChange={e => setInput(e.target.value)} style={{
                fontSize: '20px',
                padding: '10px 5px',
                width: '56px'
            }}></input>
        </>


    );
}

export default App;