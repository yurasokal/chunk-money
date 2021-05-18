import React from "react";
import ReactDOM from "react-dom";
import './TableMaterialUAOne.scss'
import { FTable } from './FTable';

export function TableMaterialUAOne () {
    return (
        <FTable />
    )
}

if (document.getElementById("tableMaterialUAOne")) {
    ReactDOM.render(
        <TableMaterialUAOne />,
        document.getElementById("tableMaterialUAOne"),
    );
}
