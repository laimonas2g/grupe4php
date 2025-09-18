import './App.scss';
import './buttons.scss';
import randomColor from './Functions/randomColor';
import random from './Functions/random';
import Bebras from './Components/070/Bebras';
import Box from './Components/070/Box';


function App() {


  console.log('GO!', random(0, 1));

  let kas = '';

  for (let i = 1; i < 10; i++) {
    kas += i;
  }

  const daug = _ => {
    return <h6>DAUGYBĖ</h6>;
  }

  const spalva = randomColor();

  const handle = 'Chrome';

  const mygtukas1 = _ => {
    console.log('CLICK 1');
  }

  const mygtukas2 = _ => {
    console.log('CLICK 2');
  }


  return (
    <>
      <button className="green" onClick={mygtukas1}>GO</button>
      <button className="red" onClick={mygtukas2()}>GO</button>
      
      
      <Box h={handle} dydis={random(50, 200)} plotis="200" dar={{
        spalva: 'skyblue',
        siena: '17px' 
      }}/><Box  h="Plastic" dydis="55" plotis="300" dar={{
        spalva: 'crimson',
        siena: '7px' 
      }}/>
      <Bebras/><Bebras/><Bebras/><Bebras/>
      <h1 style={
        {
          color: spalva,
          fontFamily: 'monospace',
          letterSpacing: '5px'
        }
      }>REACT - {kas}</h1>
      <Bebras/><Bebras/>
      <h2 style={{ color: spalva }}>Matematika 5 + 7 = {5 + 7} </h2>
      <div>{daug()} {randomColor()}</div>
      {random(0, 1) ? <h3>TAIP {randomColor()}</h3> : <h3>NE</h3>}
    </>
  );
}

export default App;