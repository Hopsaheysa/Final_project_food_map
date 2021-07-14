import React from 'react'
import { useState, useEffect } from 'react';
import Ingredient from './Ingredient';
import Country from './Country';

const Admin = () => {
    const [fetchedUsers, setFetchedUsers] = useState("");
    const [searchTerm, setSearchTerm] = useState('');

    const [ingredientsQuantity, setIngredientsQuantity] = useState(1);
    const [ingredientsList, setIngredientsList] = useState([]);

    const [countryQuantity, setCountryQuantity] = useState(1);
    const [countryList, setCountryList] = useState([]);

    const [values, setValues] = useState({
        name: "",
        isVegan: 0,
        isVegetarian: 0,
        isLactoseFree: 0,
        isGlutenFree: 0,
        isNutFree: 0,
        instructions: ""
    });

    const [ingredient, setIngredient] = useState({});
    const [country, setCountry] = useState({});

    const fetchUsers = async () => {
        const response = await fetch(`/api/allUsers`, {
            headers: {
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        setFetchedUsers(data);
    }

    // THIS WILL SAVE USER AS AN ADMIN!
    const addAdmin = async (e) => {
        e.preventDefault();

        fetchedUsers.map((usr) => {
            if (usr.name === searchTerm) {
                console.log("Hi");
            }
        })
        const response = await fetch(`/api/addAdmin/${searchTerm}`, {
            method: 'POST',
            body: JSON.stringify(searchTerm),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
    }
    const addIngredient = (e) => {
        e.preventDefault();
        setIngredientsQuantity(ingredientsQuantity + 1);
    };
    const creatingIngredientsList = () => {
        const list = [];
        for (let i = 0; i < ingredientsQuantity; i++) {
            list.push(
                <div key={i}>
                    <Ingredient position={i} ingredient={ingredient} setIngredient={setIngredient} />
                </div>
            );
        }
        setIngredientsList(list);
    }

    useEffect(() => {
        creatingIngredientsList();
    }, [ingredientsQuantity]);


    const addCountry = (e) => {
        e.preventDefault();
        setCountryQuantity(countryQuantity + 1);
    };
    const creatingCountryList = () => {
        const list = [];
        for (let i = 0; i < countryQuantity; i++) {
            list.push(
                <div key={i}>
                    <Country position={i} country={country} setCountry={setCountry} />
                </div>
            );
        }
        setCountryList(list);
    }

    useEffect(() => {
        creatingCountryList();
    }, [countryQuantity]);

    useEffect(() => {
        fetchUsers();
    }, []);

    const handleChange = (event) => {
        console.log(event);
        setValues(previous_values => {
            return ({
                ...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }

    const addRecipe = async (event) => {
        event.preventDefault();

        const response = await fetch(`/api/recipe/save`, {
            method: 'POST',
            body: JSON.stringify([values, ingredient, country]),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
    }

    console.log("country", country);

    return (
        <>
            <h1>Create a recipe</h1>
            <form action="" method="post" onSubmit={(e) => addRecipe(e)}>

                <label htmlFor="name">Recipe name</label>
                <input type="text" name="name" value={values.name} onChange={handleChange} placeholder="Enter name" /><br />

                <label htmlFor="isVegan">Vegan</label>
                <input type="checkbox" name="isVegan" value="1" onChange={handleChange} /><br />

                <label htmlFor="isVegetarian">Vegetarian</label>
                <input type="checkbox" name="isVegetarian" value="1" onChange={handleChange} /><br />

                <label htmlFor="isLactoseFree">Lactose free</label>
                <input type="checkbox" name="isLactoseFree" value="1" onChange={handleChange} /><br />

                <label htmlFor="isGlutenFree">Gluten free</label>
                <input type="checkbox" name="isGlutenFree" value="1" onChange={handleChange} /><br />

                <label htmlFor="isNutFree">Nut free</label>
                <input type="checkbox" name="isNutFree" value="1" onChange={handleChange} /><br />

                <label htmlFor="img">Select image:</label>
                <input type="file" id="img" name="img" accept="image/*"></input>

                <label htmlFor="instructions">Instructions:</label>
                <textarea name="instructions" id="" cols="30" rows="10" value={values.instructions} onChange={handleChange}></textarea>

                {ingredientsList}
                <button className="ingredient__add" onClick={(e) => addIngredient(e)}>
                    +
                </button>

                {countryList}
                <button className="country__add" onClick={(e) => addCountry(e)}>
                    +
                </button>

                <input type="submit" value="Submit" />

            </form>




            <form action="" method="post" onSubmit={(e) => addAdmin(e)}>
                <div className="searchAdmin__container">
                    <h1 className="searchAdmin__container__header">Search an user</h1>
                    <h2 className="searchAdmin__container__slogan"><span>Which you want to </span>make an admin</h2>
                    <div className="filter">
                        <input
                            type="search"
                            className="filter__input"
                            placeholder="e.g. User123"
                            onChange={(event) => { setSearchTerm(event.target.value) }}
                        />
                    </div>

                    <button className="add-admin" >Add admin</button>

                    <div>
                        {fetchedUsers ?
                            fetchedUsers.filter((val) => {
                                if (searchTerm == "") {
                                    return null
                                } else if (val.name.toLowerCase().includes(searchTerm.toLowerCase())) {
                                    return val
                                }
                            }).map((val, key) => {
                                return <div key={key} className="list">
                                    <div className="user-select" >
                                        Avalilable user: {val.name}
                                    </div>
                                </div>
                            })
                            : ""}
                    </div>

                </div>
            </form>
        </>

    )
}
export default Admin;
