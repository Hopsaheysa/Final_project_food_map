import Footer from './Footer'

function RecipeResults(props) {

const instructionsSteps = props.recipe.instructions.split('\n')
console.log(instructionsSteps)

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
                            <li>
                              {n.pivot.quantity  ?
                              
                                <span>{n.pivot.quantity} </span>
                               : ""
                               }

                              {n.pivot.measurement  ?
                              
                                <span>{n.pivot.measurement} </span>
                               : ""
                               }

                               {n.name}
                              </li>
                          </ul>

                      ))
                     }
 
                  
                    </div>
                </div>
                <div className="recipe__instructions">
                    <h3>Instructions</h3>
                    <ol>
                      {
                        instructionsSteps.map((step, i) => (
                          <>
                          <li key={i}>{step.trim()}</li>
                           <br/>
                           </>
                          
                        ))
                      }
                     
                    </ol>
                    
                </div>
                <h2 className="recipe__bon">Bon Apetite!</h2>

                
            </div>
         
        
    </div>

    <Footer />

      
    </>

      
  );

}

export default RecipeResults;