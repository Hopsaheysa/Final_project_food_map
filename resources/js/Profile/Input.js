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
       
            <div className={`liked-input ${props.position}`}>
                <label key={props.position} htmlFor="ingredient ">
                    Ingredient
                </label>
                <input type="text" name={`ingredient ${props.liked} ${props.position}`} className="profile__input" />
                <br />
            </div>
         
        </>
    );
}

export default Input;
