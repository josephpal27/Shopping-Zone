    // --- Initializing the Variables
    let editBtn = document.querySelectorAll('.edit-btn');
    let saveBtn = document.querySelectorAll('.save-btn');

    // --- Functionality to Edit Button 
    editBtn.forEach((editButton) => {
       editButton.addEventListener('click', (event) => {
      
        let inputField = event.target.closest('div').querySelector('input');
        inputField.removeAttribute('readonly');
        inputField.style.backgroundColor = 'white';
        inputField.focus();
        let value = inputField.value;
        inputField.setSelectionRange(value.length, value.length);

        let saveButton = event.target.closest('div').querySelector('.save-btn');
        saveButton.style.display = 'inline-block';
      });
    });
  
 
    // --- Functionality to Save Button
    saveBtn.forEach((saveButton) => {
      saveButton.addEventListener('click', (event) => {

        let inputField = event.target.closest('div').querySelector('input');
        inputField.setAttribute('readonly', true);
        inputField.style.backgroundColor = 'rgb(243, 243, 243)';

        let editButton = event.target.closest('div').querySelector('.edit-btn');
        editButton.style.display = 'inline-block';
      });
    });
  