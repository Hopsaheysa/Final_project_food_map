import Admin from './Admin';
import { useState, useEffect } from 'react';

function App() {
  const [loggedInUser, setLoggedInUser] = useState({});

  const fetchUser = async () => {
    const response = await fetch(`/api/user`, {
      headers: {
        'Accept': 'application/json'
      }
    });
    const data = await response.json();
    setLoggedInUser(data);
  }

  useEffect(() => {
    fetchUser();
  }, []);



  return (
    <>
      {loggedInUser.admin ?
        <Admin />
        : ""}
    </>
  );
}

export default App;