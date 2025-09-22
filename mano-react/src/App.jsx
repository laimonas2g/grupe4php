
import './App.scss';
import './buttons.scss';
import Button from './Components/077/Button';
import ColorSq from './Components/077/ColorSq';
import { Colors } from './Contexts/ColorsContext';

export default function App() {

 


    return (
        <Colors>
            <h2>Hello, Context Children</h2>
            <div className="sq-bin">
                <ColorSq/>
            </div>
            <Button>Go Fancy Color</Button>
        </Colors>


    );
}