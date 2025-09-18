import { useContext } from 'react';
import { MyContext, MySecondContext } from '../../App';



export default function C({ counter1 }) {

    const myValue = useContext(MyContext);

    const { digit, color } = useContext(MySecondContext);

    return (
        <div className="fancy-box">
            <h1 style={{color}}>{digit}</h1>
            <h2>{counter1}</h2>
            <h2>{myValue}</h2>
            <h2>
                <MyContext.Consumer>
                    {v => v}
                </MyContext.Consumer>
            </h2>
        </div>
    );
}