import React from 'react';
import { useState, useEffect } from 'react';
import { useParams } from 'react-router';

const Review = () => {
    let { recipeId } = useParams();
    const [fetchHelper, setFetchHelper] = useState(null);
    const [text, setText] = useState('');
    const [reviewArray, setReviewArray] = useState([]);


    // const fetchRecipe = async () => {
    //     const response = await fetch(`/api/recipe/${recipeId}`, {
    //         headers: {
    //             'Accept': 'application/json'
    //         }
    //     });
    //     const data = await response.json();
    //     console.log(data.id);
    //     setRecipe(data);
    // }

    // useEffect(() => {
    //     fetchRecipe();
    // }, []);

    const fetchReview = async () => {
        const response = await fetch(`/api/review/${recipeId}`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        console.log(data);
        setReviewArray(data)
    }

    useEffect(() => {
        fetchReview();
    }, [fetchHelper]);

    const handleTextChange = (event) => {
        setText(event.target.value);
    }

    const handleSubmit = async (event) => {
        event.preventDefault();
        const response = await fetch(`/api/recipe/${recipeId}/review`, {
            method: 'POST',
            body: JSON.stringify(event.target[0].innerHTML),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })

        const data = await response.json();
        setFetchHelper(data);
    }


    return (
        <>
            <form className="recipe-review" action="" onSubmit={handleSubmit}>


                <h1>Review recipe </h1>
                {/* "{ recipe.name }" */}


                <div className="form-group">

                    <label htmlFor="text">Text</label>
                    <textarea
                        name="text"
                        id="text"
                        cols="30"
                        rows="10"
                        value={text}
                        placeholder="Leave your review here..."
                        onChange={handleTextChange}
                    ></textarea>

                </div>

                <div className="form-group">

                    <button>Submit the review</button>

                </div>

            </form>


            <div>
                {reviewArray ?
                    reviewArray.map((review, i) => {
                        return (
                            <div key={i}>
                                <p>Review: {review.text}</p>
                                <p>Written by: {review.name}</p>
                            </div>
                        )
                    })
                    :
                    ""
                }
            </div>
        </>

    )

}


export default Review;