import './app.scss';
import Index from './Components/Books/Index';
import { DataProvider } from './Contexts/DataContext';
import { MsgProvider } from './Contexts/MsgContext';
import Messages from './Components/Messages';

function App() {


  return (
    <MsgProvider>
      <DataProvider>
        <Index />
      </DataProvider>
      <Messages />
    </MsgProvider>
  );
}

export default App