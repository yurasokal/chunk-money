import React, { useState, useEffect } from "react";
import "./FTable.scss";

// require("es6-promise").polyfill()
// require("isomorphic-fetch");

export function FTable() {
    // const [data, setData] = useState([]);
    // const [q, setQ] = useState("");

    // useEffect(() => {
    //     fetch("https://reqres.in/api/users?page=2")
    //     .then(response => response.json())
    //     .then((json) => setData(json));
    // }, [])

    return (
        <div>
            <div>filter goes here</div>
            <div>datatable goes here</div>
            <div>table with filters will be here: </div>
        </div>
    )
}
