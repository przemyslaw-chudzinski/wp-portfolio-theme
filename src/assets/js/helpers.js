const preloadImage = (imageUrl) => {
    if (!imageUrl) throw new Error('imageUrl is not specified');
    return new Promise(resolve => {
        const img = document.createElement('img');
        img.src = imageUrl;

        img.addEventListener('load', () =>  resolve(imageUrl));

    });
};



module.exports = {
    preloadImage
};
