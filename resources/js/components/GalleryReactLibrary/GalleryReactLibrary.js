import React, { useEffect, useState } from "react";
import './GalleryReactLibrary.scss';
import { SRLWrapper} from "simple-react-lightbox";
import { TagButton } from "./TagButton";

export const GalleryReactLibrary = ({ images, options }) => {
    const [tag, setTag] = useState('all');
	const [filteredImages, setFilteredImages] = useState([]);

	useEffect(
		() => {
			tag === 'all' ? setFilteredImages(images) : setFilteredImages(images.filter(image => image.tag === tag));
		},
		[tag]
	);

    return (
        <div className="galleryReactLibrary">
            <div className="tags">
            <TagButton name="all" handleSetTag={setTag} tagActive={ tag === 'all' ? true : false } />
            <TagButton name="new" handleSetTag={setTag} tagActive={ tag === 'new' ? true : false } />
            <TagButton name="free" handleSetTag={setTag} tagActive={ tag === 'free' ? true : false } />
            <TagButton name="pro" handleSetTag={setTag} tagActive={ tag === 'pro' ? true : false } />
            </div>
            <SRLWrapper options={options}>
                <div className="container">
                    {filteredImages.map(image => (
                        <div key={image.id} className="image-card">
                            <a href={`/images/gallery/${image.imageName}`}>
                                <img className="image" src={`/images/gallery/${image.imageName}`} alt="" />
                            </a>
                        </div>
                    ))}
                </div>
            </SRLWrapper>
        </div>
    );
};
