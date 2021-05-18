import React from "react";
import ReactDOM from "react-dom";
import './Project.scss'
import { Table } from './Table';
import { tableData } from './api';

function Project () {
    return (
        <Table tableData={tableData} />
    )
}

export default Project;

if (document.getElementById("table")) {
    ReactDOM.render(
        <Project />,
        document.getElementById("table"),
    );
}
