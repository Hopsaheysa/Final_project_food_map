import React from 'react';
import { useState, useEffect } from 'react';
import { useParams } from 'react-router';

const Review = () => {
    let { recipeId } = useParams();
    const [fetchHelper, setFetchHelper] = useState(null);
    const [text, setText] = useState('');
    const [textEdit, setTextEdit] = useState('');

    const [reviewArray, setReviewArray] = useState([]);
    const [loggedInUser, setLoggedInUser] = useState({});
    const [edit, setEdit] = useState(0);




    const fetchReview = async () => {
        const response = await fetch(`/api/review/${recipeId}`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        setReviewArray(data.review);
        setLoggedInUser(data.user);
    }


    useEffect(() => {
        fetchReview() && setFetchHelper(null);
    }, [fetchHelper]);

    const handleTextChange = (event) => {
        setText(event.target.value);
    }

    const handleTextEditChange = (event) => {
        setTextEdit(event.target.value);
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

    const handleSubmitEdit = async (event) => {
        event.preventDefault();
        let review_id = event.target[0].id
        let change = event.target[0].innerHTML;
        console.log(event.target[0].innerHTML);
        const response = await fetch(`/api/recipe/${recipeId}/review/${review_id}`, {
            method: 'POST',
            body: JSON.stringify({ change }),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        const data = await response.json();
        console.log(data);
        setFetchHelper(data);
        setEdit(0);
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


    const editItem = (e, review) => {
        e.preventDefault();
        setEdit(review.id);
        setTextEdit(review.text);
        console.log(review.id);
    };


    return (


        <div className="review__container">

            <form className="review__form" action="" onSubmit={handleSubmit}>


                <h3 className="review__heading">Let us know!</h3>
                {/* "{ recipe.name }" */}


                <div className="review__group">

                    {/* <label htmlFor="text"></label> */}
                    <textarea
                        name="text"
                        id="text"
                        cols="30"
                        rows="8"
                        value={text}
                        placeholder="Leave your review here..."
                        onChange={handleTextChange}
                    ></textarea>

                </div>

                <div className="review__group">

                    <button className="review__btn">Submit</button>

                </div>

            </form>


            <div>
                {reviewArray ?
                    reviewArray.map((review, i) => {
                        return (
                            <div className="review__comment" key={i}>
                                {review.id == edit ?
                                    (<form className="review__form" action="" onSubmit={handleSubmitEdit}>

                                        <textarea
                                            name="text"
                                            id={edit}
                                            cols="30"
                                            rows="8"
                                            value={textEdit}
                                            onChange={handleTextEditChange}
                                        ></textarea>


                                        <button className="review__btn">Save</button>

                                    </form>)
                                    :
                                    (<>
                                      <cite>User: {review.user.name}</cite>
                                        <blockquote>"{review.text}"</blockquote>
                                      
                                    </>)
                                }

                                {review.user.id === loggedInUser.id || loggedInUser.admin ?
                                    <>
                                        <button className="review__remove" onClick={(e) => removeItem(e, review.id)} >Remove</button>
                                   
                                        <button className="review__edit" onClick={(e) => editItem(e, review)} >Edit</button>
                                    </>
                                    : ""
                                }

                            </div>
                        )
                    })
                    :
                    ""
                }
            </div>


        </div>



    )

}


export default Review;