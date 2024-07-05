
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