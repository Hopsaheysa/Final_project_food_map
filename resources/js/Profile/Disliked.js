import React from "react";
import { useState, useEffect } from "react";
import Input from "./Input";

function Disliked() {
    const [inputsNumber, setInputsNumber] = useState(1);
    const [inputArray, setInputArray] = useState([]);
    const [data, setData] = useState([]);

    const fetchData = async () => {
        const response = await fetch("disliked");
        const data = await response.json();
        setData(data);
    };



    useEffect(() => {
        fetchData();
    }, []);

    const addIngredient = (e) => {
        e.preventDefault();
        setInputsNumber(inputsNumber + 1);
    };

    const inputList = () => {
        const list = [];
        for (let i = 0; i < inputsNumber; i++) {
            list.push(
                <li key={i}>
                    <Input position={i} liked="disliked" />
                </li>
            );
        }
        setInputArray(list);
    };


    useEffect(() => {
        inputList();
    }, [inputsNumber]);

    const removeItem = async (e, ingredient) => {
        e.preventDefault();

        const response = await fetch(`/api/removeIngredient/${ingredient.id}`, {
            method: 'POST',
            body: JSON.stringify(ingredient.id),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })

        // this deletes it from list on page -> we need to run it through backend -> done above
        setData(data.filter((ing) => ing.id !== ingredient.id));

    };


    return (
        <>
            <div className="profile__inputs">
                <h2>
                    {/* <span className="profile__emoji">✕</span>  */}
                    I don't care for
                    these ingredients...
                </h2>
                <form action="" method="post" onSubmit={(e) => handleDeleteSubmit(e)}>
                    <ul>
                        {
                            data.map((ingredient) => (
                                <li key={ingredient.id}>
                                    <div class="profile__ingredient"> {ingredient.name}<button className="profile__remove" onClick={(e) => removeItem(e, ingredient)} >x</button></div>

                                </li >
                            ))
                        }
                       <p class="profile__give">Give me another input <button className="profile__add" onClick={(e) => addIngredient(e)}>+</button> </p>
                    </ul>
                </form>

                <ul>
                    {inputArray}
                        
                </ul>
             
            </div>

           



        </>
    );
}

export default Disliked;
