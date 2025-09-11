import { useState } from 'react';
import './App.scss';
import './buttons.scss';
import View from './Components/071/view';
import randomColor from './Functions/randomColor';

function App() {

    console.log('PASILEIDO');

    const mygtukas1 = _ => {
        console.log('CLICK 1');
    }

    const mygtukas2 = e => {
        console.log('CLICK 2', e.target.name);
    }

    const kitiMygtukai = spalva => {
        console.log('CLICK', spalva);
    }

    const mygtukas3 = (e, kas) => {
        console.log('CLICK 2', e.target.name, kas);
    }

    const [counter, setCounter] = useState(1);

    const plus1 = _ => {
        setCounter(sena => sena + 1)
        setCounter(sena => sena + 1)
        setCounter(sena => sena + 1)
        // setCounter(counter + 1)
        // setCounter(counter + 1)
        console.log(counter);
    }

    const mas1 = [
        <h3>Vienas <i>1</i></h3>,
        <h3>Du <i>2</i></h3>,
        <h3>Trys <i>3</i></h3>,
        <h3>Keturi <i>4</i></h3>
    ];

    const mas2 = [
        { name: 'Vienas', id: 1 },
        { name: 'Du', id: 2 },
        { name: 'Trys', id: 3 },
        { name: 'Keturi', id: 4 }
    ];

    const [sq, setSq] = useState([]);

    const addSq = _ => {
        setSq(s => [randomColor(), ...s]);
    }

    const remSq = _ => {
        setSq(s => {
            const copy = [...s];
            copy.shift();
            return copy;
        });
    }

    return (
        <>
            <button className="green" onClick={mygtukas1}>GO</button>
            <button className="red" name="raudonas" onClick={mygtukas2}>GO</button>

            <button className="yellow" onClick={_ => kitiMygtukai('Geltonas')}>GO</button>
            <button className="black" onClick={_ => kitiMygtukai('Juodas')}>GO</button>
            <button className="blue" onClick={_ => kitiMygtukai('Mėlynas')}>GO</button>

            <button className="teal" name="keista" onClick={e => mygtukas3(e, 'spalva')}>GO</button>

            <hr />
            <h2>{counter}</h2>
            <button className="green" onClick={plus1}>+1</button>

            <hr />

            {/* {
                mas2.map((el, i) => <h3 key={i}>{el.name} <i>{el.id}</i></h3>)
            }

            {
                mas2.map((el, i) => <View key={i} el={el}/>)
            } */}


            <div className="sq-bin">
                {
                    sq.map((el, i) => <div className="sq" key={i} style={{
                        borderColor: el,
                        background: el + '80'
                    }}></div>)
                }
            </div>

            <hr />
            <button className="blue" onClick={addSq}>+[]</button>
            <button className="red" onClick={remSq}>-[]</button>

        </>
    );
}

export default App;