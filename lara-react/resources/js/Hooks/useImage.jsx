import { useState } from 'react';

export default function useImage() {
    const [image, setImage] = useState(null);

    const handleImageChange = e => {
        const file = e.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader(); // sukuriamas naujas FileReader objektas
            reader.onloadend = _ => { // laukia kol baigsis failo nuskaitymas
                setImage(reader.result);
            };
            reader.readAsDataURL(file); // pradeda failo nuskaitymą kaip duomenų URL
        } else {
            setImage(null);
        }
    };

    return { image, handleImageChange };
}