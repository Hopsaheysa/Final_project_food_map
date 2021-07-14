import React from 'react'
import { useState, useEffect } from 'react';

const Admin = () => {

    const [fetchedUsers, setFetchedUsers] = useState("");
    const [userAdmin, setUserAdmin] = useState("");
    const [searchTerm, setSearchTerm] = useState('');
    const [searchResult, setSearchResult] = useState("");





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

        // this deletes it from list on page -> we need to run it through backend -> done above
        // setData(data.filter((ing) => ing.id !== ingredient.id));

    }


    useEffect(() => {
        fetchUsers();
    }, []);




    return (
        <>

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


