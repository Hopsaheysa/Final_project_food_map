import React from 'react';
import { useState, useEffect } from 'react';
import { useParams } from 'react-router';

const Review = () => {
    let { recipeId } = useParams();
    const [recipe, setRecipe] = useState(null);

    const [values, setValues] = useState({
        text: ''
    });

    const fetchRecipe = async () => {
        const response = await fetch(`/api/recipe/${recipeId}`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        setRecipe(data);
    }

    useEffect(() => {
        fetchRecipe();
    }, []);

    const handleChange = (event) => {
        setValues(previous_values => {
            return ({
                ...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }

    // const handleSubmit = async (event) => {
    //     event.preventDefault();

    //     const response = await fetch(`/api/recipe/${props.recipe.id}/review`, {
    //         method: 'POST',
    //         body: JSON.stringify(values),
    //         headers: {
    //             'Accept': 'application/json',
    //             'Content-type': 'application/json',
    //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //         },
    //     })

    //     const data = await response.json();



    return (

        <form className="recipe-review" action="" >
            {/* onSubmit={handleSubmit} */}

            <h1>Review recipe </h1>
            {/* "{ recipe.name }" */}


            <div className="form-group">

                <label htmlFor="text">Text</label>
                <textarea
                    name="text"
                    id="text"
                    cols="30"
                    rows="10"
                    value={values.text}
                    onChange={handleChange}
                ></textarea>

            </div>

            <div className="form-group">

                <button>Submit the review</button>

            </div>

        </form>

    )

}
// }

export default Review;