import React from "react";
import { useState, useEffect } from "react";
import Input from "./Input";

function Disliked() {
    const [inputsNumber, setInputsNumber] = useState(1);
    const [inputArray, setInputArray] = useState([]);
    const [data, setData] = useState([]);
    const [dislikeList, setDislikeList] = useState([]);

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
        console.log(e);
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
        console.log(ingredient.id)

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
                <p>
                    <span className="profile__emoji">✕</span> I don't care for
                    these ingredients...
                </p>
                <form action="" method="post" onSubmit={(e) => handleDeleteSubmit(e)}>
                    <ul>
                        {
                            data.map((ingredient) => (
                                <li key={ingredient.id}>
                                    <p> {ingredient.name}</p>
                                    <button className="btn" onClick={(e) => removeItem(e, ingredient)} >X</button>
                                </li >
                            ))
                        }
                        {dislikeList}
                    </ul>
                </form>

                <ul>
                    {inputArray}
                </ul>
            </div>

            <button className="profile__add" onClick={(e) => addIngredient(e)}>
                +
            </button>
        </>
    );
}

export default Disliked;
