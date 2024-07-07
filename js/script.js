// --- Functionality for Slider Buttons --- 
document.querySelector('.slide-left').addEventListener('click', function() {
    document.querySelector('.product-row').scrollBy({
        left: -900,
        behavior: 'smooth'
    });
});

document.querySelector('.slide-right').addEventListener('click', function() {
    document.querySelector('.product-row').scrollBy({
        left: 900,
        behavior: 'smooth'
    });
});
