import React from 'react';
import { useState, useEffect } from 'react';
import { useParams } from 'react-router';

const Review = () => {
    let { recipeId } = useParams();
    const [fetchHelper, setFetchHelper] = useState(null);
    const [text, setText] = useState('');
    const [reviewArray, setReviewArray] = useState([]);
    const [loggedInUser, setLoggedInUser] = useState({});


    const fetchReview = async () => {
        const response = await fetch(`/api/review/${recipeId}`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        console.log(data);
        setReviewArray(data.review);
        setLoggedInUser(data.user);
    }


    useEffect(() => {
        fetchReview() && setFetchHelper(null);
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

    const removeItem = async (e, id) => {
        e.preventDefault();
        console.log(id);
        const response = await fetch(`/api/removeReview/${id}`, {
            method: 'POST',
            body: JSON.stringify(id),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })

        // this deletes it from list on page -> we need to run it through backend -> done above
        // setData(data.filter((ing) => ing.id !== ingredient.id));
        setFetchHelper("changed");

    };

    return (
        <>
            <form className="recipe-review" action="" onSubmit={handleSubmit}>


                <h1>Review recipe </h1>



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
                                <p>Written by: {review.user.name}</p>

                                {review.user.id === loggedInUser.id || loggedInUser.admin ?

                                    <button className="btn" onClick={(e) => removeItem(e, review.id)} >X</button>
                                    : ""}

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