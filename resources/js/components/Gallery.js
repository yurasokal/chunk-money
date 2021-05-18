import React from "react";
import ReactDOM from "react-dom";
import "./Gallery.scss";
import { GalleryReactLibrary } from "./GalleryReactLibrary";
import { Title } from "./Title";
import SimpleReactLightbox from "simple-react-lightbox";

const images = [
    { id: '1', imageName: 'img1.jpeg', tag: 'free' },
	{ id: '2', imageName: 'img2.jpeg', tag: 'new' },
	{ id: '3', imageName: 'img3.jpeg', tag: 'pro' },
	{ id: '4', imageName: 'img4.jpeg', tag: 'pro' },
	{ id: '5', imageName: 'img5.jpeg', tag: 'free' },
	{ id: '6', imageName: 'img6.jpeg', tag: 'new' },
	{ id: '7', imageName: 'img6.jpeg', tag: 'pro' },
	{ id: '8', imageName: 'img8.jpeg', tag: 'free' },
	{ id: '9', imageName: 'img9.jpeg', tag: 'new' },
	{ id: '10', imageName: 'img10.jpeg', tag: 'new' },
	{ id: '11', imageName: 'img11.jpeg', tag: 'new' },
	{ id: '12', imageName: 'img12.jpeg', tag: 'new' },
	{ id: '13', imageName: 'img13.jpeg', tag: 'free' },
	{ id: '14', imageName: 'img14.jpeg', tag: 'pro' },
	{ id: '15', imageName: 'img15.jpeg', tag: 'free' },
	{ id: '16', imageName: 'img16.jpeg', tag: 'new' }
];

const options = {
    settings: {
        overlayColor: "rgba(0,0,0,0.85)",
    },
    buttons: {
        backgroundColor: '#1f3222',
        iconColor: 'pink',
    }
}

export function Gallery() {
    return (
        <div className="Gallery">
            {/* <Title /> */}
            <GalleryReactLibrary
                images={images}
                options={options}
            />
        </div>
    );
}

if (document.getElementById("gallery")) {
    ReactDOM.render(
        <SimpleReactLightbox>
            <Gallery />
        </SimpleReactLightbox>,
    document.getElementById("gallery"));
}
