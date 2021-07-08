import React from 'react';
import { useState, useEffect } from 'react'
import Input from './Input';

function Liked() {
    const [inputsNumber, setInputsNumber] = useState(1);
    const [inputArray, setInputArray] = useState([]);

    const addIngredient = (e) => {
        e.preventDefault()
        setInputsNumber(inputsNumber + 1);
    }

    const inputList = () => {
        const list = [];
        for (let i = 0; i < inputsNumber; i++) {
            list.push(<Input key={i} position={i} />)
        }
        setInputArray(list);
    }

    useEffect(() => {
        inputList()
    }, [inputsNumber])

    return (
        <>
            <div className="profile__inputs">
                <p>I love these ingredients...</p>
                {inputArray}
            </div>

            <button className="profile__add" onClick={(e) => addIngredient(e)}>+</button>
        </>
    )
}

export default Liked;
