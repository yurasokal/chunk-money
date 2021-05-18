import React from "react";
import ReactDOM from "react-dom";
import './Project.scss'
import { MTable } from './MTable';

export function TableMaterialUA () {
    return (
        <MTable />
    )
}

if (document.getElementById("tableMaterialUA")) {
    ReactDOM.render(
        <TableMaterialUA />,
        document.getElementById("tableMaterialUA"),
    );
}
