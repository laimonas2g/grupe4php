import { useState } from 'react';
import './App.scss';
import './buttons.scss';
import Gate from './Components/077/Gate';
import House from './Components/077/House';
import Person from './Components/077/Person';

export default function App() {

    const [lock, setLock] = useState('locked');
    const [flat, setFlat] = useState(1);

    return (
        <>
            <h2>Hello, Children</h2>

            {/* {
                lock === 'unlocked' ? <House flat={flat}>
                    <Person />
                </House> : null
            } */}


            <Gate lock={lock}>
                <House flat={flat}>
                    <Person />
                </House>
            </Gate>

            <button className="blue" onClick={_ => setLock('unlocked')}>Unlock Gate</button>
            <button className="red" onClick={_ => setLock('locked')}>Lock Gate</button>

            <button className="teal" onClick={_ => setFlat(1)}>Go to flat 1</button>
            <button className="teal" onClick={_ => setFlat(2)}>Go to flat 2</button>
            <button className="teal" onClick={_ => setFlat(3)}>Go to flat 3</button>





        </>


    );
}