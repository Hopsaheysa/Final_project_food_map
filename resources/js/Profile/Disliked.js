import React from "react";
import { useState, useEffect } from "react";
import Input from "./Input";

function Disliked() {
    const [inputsNumber, setInputsNumber] = useState(1);
    const [inputArray, setInputArray] = useState([]);
    const [data, setData] = useState([]);
    const [removeList,setRemoveList] = useState([]);

    const fetchData = async () => {
        const response = await fetch("disliked");

        const data = await response.json();

        setData(data);
        console.log(data);
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
                <Input key={i} position={i} liked="disliked" what="meat" />
            );
        }
        setInputArray(list);
    };

    const remove = (user, ingredient) => {
        
    }

    const removeListFunction = () => {
        let list = [];
        for (let i = 0; i < data.length; i++) {
            list.push(
                <div>
                    <p key={i}>{data[i].name}</p><button onClick={remove(data[i].user_id, data[i].ingredient_id)}>x</button>
                </div>
            );
        }
        setRemoveList(list);
    }

    useEffect(() => {
        inputList();
    }, [inputsNumber]);

    useEffect(() => {
        removeListFunction();
    },[data]);    

    return (
        <>
            <div className="profile__inputs">
                <p>
                    <span className="profile__emoji">✕</span> I don't care for
                    these ingredients...
                </p>
                {removeList}
                {inputArray}
            </div>

            <button className="profile__add" onClick={(e) => addIngredient(e)}>
                +
            </button>
        </>
    );
}

export default Disliked;
