import RecipeResults from './RecipeResults'

function CountryResults(props) {


  return (
    <div className="results__container">
      <div className="country">
         <div className="country__container">
              <h1 className="country__heading">Meals from {props.countries[0].name}</h1>
              <h2 className="country__tag">A tasty dish is only a click away!</h2>
            </div>
            <div className="country__options">
                <div className= "country__option">
                    <h3>{props.recipes[0].name}</h3>
                    <img src={props.recipes[0].image} alt={props.recipes[0].name}/>
                </div>
                <div className= "country__option">
                    <h3>{props.recipes[1].name}</h3>
                    <img src={props.recipes[1].image} alt={props.recipes[1].name}/>
                </div>
                <div className= "country__option">
          
                    <h3>{props.recipes[2].name}</h3>
                    <img src={props.recipes[2].image} alt={props.recipes[2].name}/>
                </div>
            </div>
         

    </div>
    {/* <RecipeResults /> */}
      
    </div>

      
  );

}

export default  CountryResults;