import React from "react";
import './TagButton.scss';

export const TagButton = ({ name, handleSetTag, tagActive }) => {
    return (
        <button
            className={ `tag ${ tagActive ? 'active' : null}`}
            type="button"
            onClick={() => handleSetTag(name)}>
                {name.toUpperCase()}
        </button>
    )
}
