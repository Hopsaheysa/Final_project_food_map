import React from 'react';
import { useState, useEffect } from 'react';

const Country = (props) => {
    const [values, setValues] = useState({
        id: props.position,
        country_name: ""
    });

    const handleChange = (event) => {
        setValues(previous_values => {
            return ({
                ...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }

    const updateCountries = (props.position > 0) ? [...props.country, values] : [values]

    const changingCountries = () => {
        props.setCountry(updateCountries)
    }


    useEffect(() => {
        changingCountries();
    }, [values]);

    return (
        <div>
            <input type="text" name="country_name" value={values.country_name} onChange={handleChange} placeholder="Country name" />
        </div>
    )
}

export default Country;
