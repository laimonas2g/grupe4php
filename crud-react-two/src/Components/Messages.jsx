import { useContext } from 'react';
import MsgContext from '../Contexts/MsgContext';

export default function Messages() {

    const { messages, closeMsg } = useContext(MsgContext);
    
    return (
        <ul className="message-bin">
            {
                messages.map(m => <li key={m.id}>
                    <div className={`alert alert-${m.type} alert-dismissible fade show`} role="alert">
                        <strong>{m.title}</strong> {m.text}
                        <button type="button" className="btn-close" aria-label="Close" onClick={_ => closeMsg(m.id)}></button>
                    </div>
                </li>)
            }
        </ul>

    );
}