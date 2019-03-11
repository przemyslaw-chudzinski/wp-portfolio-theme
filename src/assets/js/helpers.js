const preloadImage = (imageUrl) => {
    if (!imageUrl) throw new Error('imageUrl is not specified');
    return new Promise(resolve => {
        const img = document.createElement('img');
        img.src = imageUrl;

        img.addEventListener('load', () =>  resolve(imageUrl));

    });
};

const isInViewPortY = element => {
    const scroll = window.scrollY || window.pageYOffset;
    const boundsTop = element.getBoundingClientRect().top + scroll;
    const viewport = {
        top: scroll,
        bottom: scroll + window.innerHeight
    };
    const bounds = {
        top: boundsTop,
        bottom: boundsTop + element.clientHeight,
    };
    return ( bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom )
        || ( bounds.top <= viewport.bottom && bounds.top >= viewport.top );
};

const throttle = (fn, delay = 300) => {
   if (!fn || typeof fn !== 'function') throw new Error('fn mus be a callable function');
    let _timeout = null;
    return (...args) => {
        clearTimeout(_timeout);
        _timeout = setTimeout(() => fn.apply(null, args), delay);
    };
};

module.exports = {
    preloadImage,
    isInViewPortY,
    throttle
};
