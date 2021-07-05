import JSONDATA from './MOCK_DATA.json'
import {useState} from 'react'; 
import CountryResults from './CountryResults'

function Home() {

  const[searchTerm, setSearchTerm] = useState(''); 

  const loadCountries = async () => {
        const response = await fetch(`/api/country/${searchTerm}`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();

        setSearchTerm(data);

    }

    useEffect(() => {
       loadCountries();
    }, [])

  return (
    <>
      <div className="main">
          <div className="home__container">      
            <h1 className="home__container__header">World <span>Kitchen</span></h1>
            <h2 className="home__container__slogan"><span>Finding you recipes </span>from around the world</h2>
                  <div className="filter">
                    Search Country
                    <input 
                    type="text" 
                    className="filter__input" 
                    placeholder="e.g Czech Republic" 
                    onChange={(event) => {setSearchTerm(event.target.value)}}
                    />
                  </div> 

                    {JSONDATA.filter((val)=> {
                      if(searchTerm == "") {
                        return null
                      } else if (val.name.toLowerCase().includes(searchTerm.toLowerCase())) {
                        return val
                      }
                    }).map((val, key) => {
                       return <div key={key} className="list">
                                <div className="country-select">{val.name}</div>
                              </div>
                    })

                    }
                   

                    
          </div>
        
        </div>

        <CountryResults />

      
    </>

      
  );

}

export default Home;