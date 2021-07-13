import RecipeResults from './RecipeResults'
import { useState, useEffect } from 'react';

function CountryResults(props) {
const [getRecipeResult, setGetRecipeResult] = useState(null)
const [recipe, setRecipe] = useState('')

  const handleClick = (event, recipe) => {
    event.preventDefault()
    setRecipe(recipe)
    
  }

  useEffect(() => {
    window.scrollTo(0, 2000);
  }, [recipe])


  return (
    // <div className="results__container">
      <div className="country">
         <div className="country__container">
              <h1 className="country__heading">Meals from {props.countries.name}</h1>
              <h2 className="country__tag">A tasty dish is only a click away!</h2>
            </div>
            <div className="country__options">
              {
                props.recipes.map((recipe, i) => (
                    <div key={i} className= "country__option" onClick={(event) => handleClick(event, recipe)}>

                         <img src={`/images-food/${recipe.image}`} alt={recipe.name}/>
                          <p className="country__name">{recipe.name}</p>
            
                  </div>
                ))
              }
                
                
            </div>
         

    {/* </div> */}
     {
       recipe ? 
       <RecipeResults recipe={recipe}  />
     :
     null 
    }
  
      
    </div>

      
  );

}

export default  CountryResults;