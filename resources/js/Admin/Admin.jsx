import React from 'react'
import { useState, useEffect } from 'react';
import Ingredient from './Ingredient';
import Country from './Country';
import axios from "axios";

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
        img: "",
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
        let value = null;
        if (event.target.name === "img") {
            value = event.target.files[0]

        } else {
            value = event.target.value
        }
        setValues(previous_values => {
            return ({
                ...previous_values,
                [event.target.name]: value
            });
        });
    }

    const addRecipe = async (event) => {
        event.preventDefault();

        const dataArray = new FormData();
        for (let key in values) {
            dataArray.append(`values[${key}]`, values[key]);
        }
        for (let key in ingredient) {
            let ingrString = JSON.stringify(ingredient[key]);
            dataArray.append(`ingredient[${key}]`, ingrString);

        }
        for (let key in country) {
            let countryString = JSON.stringify(country[key]);
            dataArray.append(`country[${key}]`, countryString);

        }
        console.log("saving")
        axios
            .post("/api/recipe/save", dataArray, {
                headers: {
                    'Accept': 'application/json',
                    "Content-Type": "multipart/form-data",
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
    }


    return (
        <div className="admin">
            <div className="admin__recipe__create">
                <h1>Create a recipe</h1>
                <form action="" method="post" onSubmit={(e) => addRecipe(e)} encType="multipart/form-data">
                    <div className="admin__form-group">
                        <label htmlFor="name" className="admin__form-group__label">What is the name of the recipe?</label>
                        <input type="text" name="name" value={values.name} onChange={handleChange} placeholder="Recipe Name" /><br />
                    </div>

                    <div className="admin__form-group__pref">
                        <label htmlFor="isVegan">Vegan</label>
                        <input type="checkbox" name="isVegan" value="1" onChange={handleChange} /> <br />
                        <label htmlFor="isVegetarian">Vegetarian</label>
                        <input type="checkbox" name="isVegetarian" value="1" onChange={handleChange} /><br />
                        <label htmlFor="isLactoseFree">Lactose free</label>
                        <input type="checkbox" name="isLactoseFree" value="1" onChange={handleChange} /><br />
                        <label htmlFor="isGlutenFree">Gluten free</label>
                        <input type="checkbox" name="isGlutenFree" value="1" onChange={handleChange} /><br />
                        <label htmlFor="isNutFree">Nut free</label>
                        <input type="checkbox" name="isNutFree" value="1" onChange={handleChange} /><br />
                    </div>

                    <div className="admin__form-group">
                        <label htmlFor="img" className="admin__form-group__label">Upload meal image:</label>
                        <input type="file" id="img" name="img" accept="image/*" onChange={handleChange}></input>
                    </div>

                    <div className="admin__form-group">
                        <label htmlFor="instructions" className="admin__form-group__label">Instructions:</label>
                        <textarea name="instructions" id="" cols="20" rows="5" value={values.instructions} onChange={handleChange}></textarea>
                    </div>

                    <div className="admin__form-group">
                        {ingredientsList}
                        <button className="admin__add" onClick={(e) => addIngredient(e)}>
                            +
                        </button>
                    </div>

                    <div className="admin__form-group">
                        {countryList}
                        <button className="admin__add" onClick={(e) => addCountry(e)}>
                            +
                        </button>
                    </div>

                    <input className="admin__submit" type="submit" value="Submit" />

                </form>
            </div>



            <form action="" method="post" onSubmit={(e) => addAdmin(e)}>
                <div className="searchAdmin__container">
                    <h1 className="searchAdmin__container__header">Admin creator</h1>

                    <div className="filter">
                        <input
                            type="search"
                            className="filter__input"
                            placeholder="e.g. User123"
                            onChange={(event) => { setSearchTerm(event.target.value) }}
                        />
                    </div>



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
                    <button className="searchAdmin__btn" >Add admin</button>
                </div>
            </form>
        </div>

    )
}
export default Admin;
