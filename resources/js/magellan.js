function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        (rect.top >= 0 || (rect.top <=0 && (rect.bottom*2) >= (window.innerHeight || document.documentElement.clientHeight))) &&
        rect.left >= 0 &&
        (rect.top * 2) <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

export default isInViewport;
