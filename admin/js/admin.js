// --- Functionality for pertial page updates ---
const listItems = document.querySelectorAll('.controls ul li');
const contentBoxes = document.querySelectorAll('.my-content-box');


function hideAllContentBoxes() {
    contentBoxes.forEach(box => {
        box.style.display = 'none';
    });
}

hideAllContentBoxes();
contentBoxes[0].style.display = 'block';


listItems.forEach((item, index) => {
    item.addEventListener('click', function () {
       
        hideAllContentBoxes();
        contentBoxes[index].style.display = 'block';

        listItems.forEach(item => item.classList.remove('active'));
        item.classList.add('active');
    });
});


// --- Functionality for modal ---
let updateBtns = document.querySelectorAll('#update-btn');
let updateModal = document.querySelector('.update-modal');
let closeBtn = document.querySelector('.modal-container i');
let modalUpdateBtn = document.querySelector('#modal-update-btn');

updateBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        updateModal.style.zIndex = '20';
    })
})

closeBtn.addEventListener('click', () => {
    updateModal.style.zIndex = '-10';
})

modalUpdateBtn.addEventListener('click', () => {
    updateModal.style.zIndex = '-10';
})