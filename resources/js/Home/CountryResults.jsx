import RecipeResults from './RecipeResults'

function CountryResults() {


  return (
    <>
      <div className="country">
         <div className="country__container">
              <h1 className="country__heading">Meals from ""</h1>
              <h2 className="country__tag">A tasty dish is only a click away!</h2>
            </div>
            <div className="country__options">
                <div className= "country__option">
                    <h3>Meal Name</h3>
                    <img src="../img/placeholder.png" alt="meal name"/>
                </div>
                <div className= "country__option">
                    <h3>Meal Name</h3>
                    <img src="../img/placeholder.png" alt="meal name"/>
                </div>
                <div className= "country__option">
                    <h3>Meal Name</h3>
                    <img src="../img/placeholder.png" alt="meal name"/>
                </div>
            </div>
         

    </div>
    <RecipeResults />
      
    </>

      
  );

}

export default  CountryResults;