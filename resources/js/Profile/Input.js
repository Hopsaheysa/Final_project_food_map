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
                <label key={props.position} htmlFor="ingredient "></label>
                <input type="text" name="ingredient" placeholder="enter an ingredient" className="profile__input"/>
            </div>

        </>
    )
}

export default Input;
