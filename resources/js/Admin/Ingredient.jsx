import React from 'react'
import { useState, useEffect } from 'react';

const Ingredient = (props) => {

    const [values, setValues] = useState({
        id: props.position,
        ingredient_quantity: 0,
        ingredient_measurement: "",
        ingredient_name: "",
    });


    const handleChange = (event) => {
        setValues(previous_values => {
            return ({
                ...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }



    const updateIngredients = (props.position > 0) ? [...props.ingredient, values] : [values]

    const changingIngredients = () => {
        props.setIngredient(updateIngredients)
    }


    useEffect(() => {
        changingIngredients();
    }, [values]);


    return (
        <div>
            <p>Please enter ingredient {props.position + 1}</p>
            <div key={props.position} className="admin__ingredient__input">
                <input type="number" name="ingredient_quantity" value={values.ingredient_quantity} onChange={handleChange} placeholder="Quantity" />
                <input type="text" name="ingredient_measurement" value={values.ingredient_measurement} onChange={handleChange} placeholder="Unit" />
                <input type="text" name="ingredient_name" value={values.ingredient_name} onChange={handleChange} placeholder="Name" />
            </div>
        </div>
    )
}

export default Ingredient;