import Home from './Home'
import About from './About'
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';
function App() {
  return (
    <Router>
 
     <Home />
     <Route exact path="/about" component={ About }/>
   
    </Router>
  );
} 

export default App;