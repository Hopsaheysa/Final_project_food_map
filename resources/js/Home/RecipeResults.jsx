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
                      <h3>Ingredients</h3>

                  {
                          props.recipe.ingredients.map((n, i) => (
                          <ul key={i}>
                              {n.pivot.quantity  ?
                              
                                <li>{n.pivot.quantity}</li>
                               : <li>{n.name}</li>
                               }
                          </ul>

                      ))
                     }
 
                  
                    </div>
                </div>
                <div className="recipe__instructions">
                    <h3>Instructions</h3>
                    <div>
                    {props.recipe.instructions}
                    </div>

                </div>
                <h2 className="recipe__bon">Bon Apetite!</h2>

                
            </div>
         
        
    </div>

      
    </>

      
  );

}

export default RecipeResults;