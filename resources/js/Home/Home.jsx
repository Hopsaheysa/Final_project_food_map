
import JSONDATA from './COUNTRY.json'
import { useState, useEffect } from 'react';
import CountryResults from './CountryResults'
import NoResults from './NoResults'
import Hero from './Hero'


function Home() {

  const [searchTerm, setSearchTerm] = useState('');
  const [countryResult, setCountryResult] = useState('')
  const [recipesResult, setRecipesResult] = useState(null);

  const loadCountries = async (searchTerm) => {
    const response = await fetch(`/api/search/${searchTerm}`, {
      headers: {
        'Accept': 'application/json'
      }
    });
    const data = await response.json();

    setCountryResult(data);
  }

  


  const loadRecipes = async (countryResult) => {
    if (countryResult) {
      const response = await fetch(`/api/country/${countryResult[0].id}`, {
        headers: {
          'Accept': 'application/json'
        }
      });
      const data = await response.json();
      console.log(data);
      setRecipesResult(data);

      console.log(setRecipesResult)


    }
  }

  useEffect(() =>  {
    // let rect = document.querySelector('.results__container').getBoundingClientRect();
    // window.scrollTo(0, rect.top + rect.height);
    window.scrollTo(0, 1500);

  }, [recipesResult])



  const handleClick = () => {
    loadCountries(searchTerm)
    
  }


  useEffect(() => {
    countryResult && loadRecipes(countryResult);
  }, [countryResult])

  return (
    <>
      {/* <div className="main"> */}
        <div className="home__container">
          <h1 className="home__container__header">World <span>Kitchen</span></h1>
          <h2 className="home__container__slogan"><span>Finding you recipes </span>from around the world</h2>
          <div className="filter"> 
            <input
              type="text"
              className="filter__input"
              placeholder="e.g Czech Republic"
              onChange={(event) => { setSearchTerm(event.target.value) }}

            />
          </div>

          {JSONDATA.filter((val) => {
            if (searchTerm == "") {
              return null
            } else if (val.name.toLowerCase().includes(searchTerm.toLowerCase())) {
              return val
            }
          }).map((val, key) => {
            return <div key={key} className="list">
              <div className="country-select" onClick={handleClick}>{val.name}</div>
            </div>
          })}





        </div>

      {/* </div> */}
       <Hero />
      {recipesResult && recipesResult.length > 0 ?
        <CountryResults recipes={recipesResult} countries={countryResult} />
        : <NoResults countries={countryResult} />

      }
     

    </>


  );

}

export default Home;