import Footer from './Footer'
import { useState, useEffect } from 'react'

function RecipeResults(props) {

  const [user, setUser] = useState(null);


  const loadUser = async () => {
    const response = await fetch(`/api/user`, {
      headers: {
        'Accept': 'application/json'
      }
    });
    const data = await response.json();

    setUser(data);
  }

  useEffect(() => {
    loadUser();
  }, [])


  const instructionsSteps = props.recipe.instructions.split('\n')
  console.log(props.recipe);
  return (
    <>
      <div className="recipe">
        <div className="recipe__container">
          <div className="recipe__card">
            <h1 className="recipe__heading">{props.recipe.name}</h1>
            <h3 className="recipe__easy">It's easy peasy lemon squeezy!</h3>
            <div className="recipe__requirements">

              <p className="recipe__is">Vegetarian
                {
                  props.recipe.isVegetarian ?
                    <p className="recipe__dietary">✓</p>
                    :
                    <p className="recipe__dietary">✕</p>
                }
              </p>
              <p className="recipe__is">Lactose Free
                {
                  props.recipe.isLactoseFree ?
                    <p className="recipe__dietary">✓</p>
                    :
                    <p className="recipe__dietary">✕</p>
                }
              </p>
              <p className="recipe__is">Gluten Free
                {
                  props.recipe.isGlutenFree ?
                    <p className="recipe__dietary">✓</p>
                    :
                    <p className="recipe__dietary">✕</p>
                }
              </p>
              <p className="recipe__is">Nut Free
                {
                  props.recipe.isNutFree ?
                    <p className="recipe__dietary">✓</p>
                    :
                    <p className="recipe__dietary">✕</p>
                }
              </p>

              <p className="recipe__is"> Vegan
                {
                  props.recipe.isVegan ?
                    <p className="recipe__dietary">✓</p>
                    :
                    <p className="recipe__dietary">✕</p>
                }
              </p>

            </div>

            <div className="recipe__ingredients">


              <div className="recipe__ingredient">

                <h3>Ingredients</h3>

                {
                  props.recipe.ingredients.map((n, i) => (
                    <ul key={i}>
                      <li >
                        {n.pivot.quantity ?

                          <span>{n.pivot.quantity} </span>
                          : ""
                        }

                        {n.pivot.measurement ?

                          <span>{n.pivot.measurement} </span>
                          : ""
                        }

                        {n.name}
                      </li>
                    </ul>

                  ))
                }

              </div>

              <div className="recipe__ingredient">

                <img src={`/images-food/${props.recipe.image}`} alt={props.recipe.name} />

              </div>

            </div>
          </div>
          <div className="recipe__container__bottom">
            <div className="recipe__instructions">
              <h2>Roll up your sleeves and start cooking your {props.recipe.name}!</h2>
              <h3>Step by step</h3>
              <ol>
                {
                  instructionsSteps.map((step, i) => (
                    <>
                      <li key={i}>{step.trim()}</li>
                      <br />
                    </>

                  ))
                }


              </ol>
              {user ?
                <a className="recipe__review" href={`/recipe/${props.recipe.id}`}>Like this meal? <span>Leave a review</span></a>
                : <p className="recipe__login">Login to review this recipe</p>}
              <div className="recipe__container__bon">

                <img src="../img/chef.png" />

                <h3>...Enjoy your meal! ...Bon appétit!  ...Dobar tek! ...Smakelijk eten! ...Καλή όρεξη! ...Hyvää ruokahalua! ...Dobrou chuť! ...食飯! ...Buon appetito! ...Jó étvágyat!</h3>
              </div>
            </div>

          </div>

        </div>



      </div>


      <Footer />


    </>


  );

}

export default RecipeResults;