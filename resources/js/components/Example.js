import React from "react";
import ReactDOM from "react-dom";
import { Provider } from "react-redux";
import store from '../redux/store';
import '../../../resources/css/app.scss';
import './Example.scss'
import { Users } from './Users';

function Example () {
    return (
        <Users />
    )
}

export default Example;

if (document.getElementById("app")) {
    ReactDOM.render(
        <Provider store={store}>
            <Example />
        </Provider>,
        document.getElementById("app"),
    );
}
