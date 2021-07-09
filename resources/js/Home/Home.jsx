import { useState, useEffect } from 'react';
import CountryResults from './CountryResults'
import NoResults from './NoResults'
import Hero from './Hero'


function Home() {

  const [searchTerm, setSearchTerm] = useState('');
  const [countriesAll, setCountriesAll] = useState([]);
  const [countryResult, setCountryResult] = useState('');
  const [recipesResult, setRecipesResult] = useState(null);

  const loadCountries = async () => {
    const response = await fetch(`/api/search`, {
      headers: {
        'Accept': 'application/json'
      }
    });
    const data = await response.json();
    setCountriesAll(data);
  }

  useEffect(() => {
    loadCountries();
  }, [])



  const loadRecipes = async (countryResult) => {
    if (countryResult) {
      const response = await fetch(`/api/country/${countryResult}`, {
        headers: {
          'Accept': 'application/json'
        }
      });
      const data = await response.json();
      console.log(data[0][0]);
      setRecipesResult(data);

    }
  }

  useEffect(() => {
    // let rect = document.querySelector('.results__container').getBoundingClientRect();
    // window.scrollTo(0, rect.top + rect.height);
    window.scrollTo(0, 1500);

  }, [recipesResult])



  const handleClick = (country) => {
    setCountryResult(country);
    loadRecipes(country.id)

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

        {countriesAll.filter((val) => {
          if (searchTerm == "") {
            return null
          } else if (val.name.toLowerCase().includes(searchTerm.toLowerCase())) {
            return val
          }
        }).map((val, key) => {
          return <div key={key} className="list">
            <div className="country-select" onClick={(event) => handleClick(val)}>{val.name}</div>
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