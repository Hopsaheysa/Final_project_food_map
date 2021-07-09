import React from 'react';
import { useState, useEffect } from 'react'

function Input(props) {

    const addIngredient = (e) => {
        e.preventDefault()
        setInputsNumber(inputsNumber + 1);
    }
    console.log(props.position);
    return (
        <>
            <div className={`liked-input ${props.position}`} >
                <label key={props.position} htmlFor="ingredient ">Ingredient {props.position + 1}</label>
                <input type="text" name={`ingredient ${props.position}`} /><br />
            </div>

        </>
    )
}

export default Input;
