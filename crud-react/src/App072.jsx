import { useState, useRef, useEffect, useCallback } from 'react';
import './App.scss';
import './buttons.scss';
import randomColor from './Functions/randomColor';
import random from './Functions/random';
import { v4 } from 'uuid';
import Sq from './Components/072/Sq';

function App() {

    const [sq, setSq] = useState([]);
    const [count, setCount] = useState(0);
    const [spinCount, setSpinCount] = useState(0);

    const rowCounter = useRef(1);

    const addSq = useCallback(_ => {
        setSq(s => [...s, {
            id: v4(),
            color: randomColor(),
            mark: random(1000, 9999),
            row: rowCounter.current++,
            show: true,
            spin: false
        }]);
    }, []);

    useEffect(_ => {
        setCount(sq.reduce((count, el) => el.show ? count + 1 : count, 0));
    }, [sq]);

    useEffect(_ => {
        setSpinCount(sq.reduce((count, el) => el.show && el.spin ? count + 1 : count, 0));
    }, [sq]);

    useEffect(_ => {
        console.log('start');
        addSq();
        addSq();
        addSq();
    }, [addSq]);




    const remSq = _ => {
        setSq(s => {
            const copy = [...s];
            copy.pop();
            return copy;
        });
    }


    const sortAsc = _ => {
        setSq(s => s.toSorted((a, b) => a.mark - b.mark));
    }

    const sortDesc = _ => {
        setSq(s => s.toSorted((a, b) => b.mark - a.mark));
    }

    const sortDefault = _ => {
        setSq(s => s.toSorted((a, b) => a.row - b.row));
    }

    const more5000 = _ => {
        setSq(s => s.map(el => el.mark > 5000 ? { ...el, show: true } : { ...el, show: false }));
    }

    const showDefault = _ => {
        setSq(s => s.map(el => ({ ...el, show: true })));
    }

    const spinIt = id => {
        setSq(s => s.map(el => el.id === id ? { ...el, spin: !el.spin } : el));
    }


    return (
        <>
            <h1>SQ: {count}</h1><h2>SPIN: {spinCount}</h2>
            <div className="sq-bin">
                {
                    sq.map(el => el.show
                        ?
                        <Sq key={el.id} el={el} spinIt={spinIt}/>
                        :
                        null)
                }
            </div>

            <hr />
            <button className="blue" onClick={addSq}>+[]</button>
            <button className="red" onClick={remSq}>-[]</button>
            <button className="yellow" onClick={sortAsc}>123...9</button>
            <button className="yellow" onClick={sortDesc}>987...1</button>
            <button className="yellow" onClick={sortDefault}>NAT...</button>
            <button className="teal" onClick={more5000} >&gt;5000</button>
            <button className="teal" onClick={showDefault}>&lt;[]&gt;</button>
        </>
    );
}

export default App;