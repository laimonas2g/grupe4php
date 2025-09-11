import { useEffect } from 'react';

export default function Sq({el, spinIt}) {

    useEffect(_ => {
        console.log('Naujas', el.mark);
        return _ => {
            console.log('Nutrintas', el.mark);
        }
    }, []);

    return (
        <div
            className={'sq' + (el.spin ? ' spin' : '')}
            style={{
                borderColor: el.color,
                background: el.color + '80'
            }}
            onClick={_ => spinIt(el.id)}
        >{el.mark}</div>
    );
}