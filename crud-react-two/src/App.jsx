import './app.scss'
import Index from './Components/Books/Index'
import { DataProvider } from './Contexts/DataContext'

function App() {
  

  return (
    <DataProvider>
      <Index />
    </DataProvider>
  )
}

export default App
