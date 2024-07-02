// --- Initializing the Variables
let minusBtn = document.querySelectorAll('.fa-minus');
let plusBtn = document.querySelectorAll('.fa-plus');
let itemCount = document.querySelectorAll('.item-count');
let productPrice = document.querySelectorAll('.price');
let totalPrice = document.getElementById('total-price');
let finalAmount = document.getElementById('total-amount');

// --- Functionality to Quantity Counter 
minusBtn.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        let count = parseInt(itemCount[index].innerText);
        if (count > 1) {
            itemCount[index].innerText = count - 1;
            updateTotalAmount();
        }
    });
});

plusBtn.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        let count = parseInt(itemCount[index].innerText);
        if (count < 10) {
            itemCount[index].innerText = count + 1;
            updateTotalAmount();
        }
    });
});

// --- Function to Update Total Amount 
function updateTotalAmount() {
    let total = 0;
    itemCount.forEach((count, index) => {
        let price = parseInt(productPrice[index].innerText.replace(/[^0-9]/g, ''));
        total += parseInt(count.innerText) * price;
    });
    totalPrice.innerText = `₹ ${total.toLocaleString()}`;
    finalAmount.innerText = `₹ ${total.toLocaleString()}`;
}

updateTotalAmount();
