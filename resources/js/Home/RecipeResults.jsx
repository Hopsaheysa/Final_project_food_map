function RecipeResults(props) {



  return (
    <>
      <div className="recipe">
         <div className="recipe__container">
             <h1 className="recipe__heading">Great choice!</h1>
             <h4>Roll up your sleeves and start making your {props.recipe.name}!</h4>
             <div className="recipe__ingredients">
                 <div className="recipe__ingredient">
                 <img src={`/images-food/${props.recipe.image}`} alt={props.recipe.name} />   
                 </div>
                 <div className="recipe__ingredient">
                    <ul>
                        <h3>Ingredients</h3>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                        <li>Ingredient</li>
                    </ul>
                    </div>
             </div>
                <div className="recipe__instructions">
                    <h3>Instructions</h3>
                    <div>
                    {props.recipe.instructions}
                    </div>

                </div>
                <h2>Bon Apetite!</h2>

                
            </div>
         
        
    </div>

      
    </>

      
  );

}

export default RecipeResults;