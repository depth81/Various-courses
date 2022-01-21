import logo from './logo.svg';
import './App.css';
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';
import HeaderComponent from './shared/components/header/HeaderComponent';
import LoginPage from './login/LoginPage';
import RegisterPage from './register/RegisterPage';

function App() {
  return (

    <Router>
      <HeaderComponent />
      <Switch>
        <Route exact path="/" component={LoginPage} />
        <Route path="/register">
          <RegisterPage />
        </Route>
      </Switch>
    </Router>    
    
  );
}

export default App;
