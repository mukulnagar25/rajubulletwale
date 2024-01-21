const form =document.getElementById('booking-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const serviceInput = document.getElementById('service');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  if (nameInput.value.trim() === '') {
    alert('Please enter your name.');
    nameInput.focus();
    return false;
  }
  
  if (emailInput.value.trim() === '') {
    alert('Please enter your email.');
    emailInput.focus();
    return false;
  }
  
  if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(emailInput.value)) {
    alert('Please enter a valid email address.');
    emailInput.focus();
    return false;
  }
  
  if (phoneInput.value.trim() === '') {
    alert('Please enter your phone number.');
    phoneInput.focus();
    return false;
  } 
  
  if (!/^\d{10}$/.test(phoneInput.value)) {
    alert('Please enter a valid phone number.');
    phoneInput.focus();
    return false;
  }
  
  if (dateInput.value.trim() === '') {
    alert('Please select a date.');
    dateInput.focus();
    return false;
  }
  
  if (timeInput.value.trim() === '') {
    alert('Please select a time.');
    timeInput.focus();
    return false;
  }
  
  if (serviceInput.value === '') {
    alert('Please select a service.');
    serviceInput.focus();
    return false;
  }
  
  // If all the required fields are filled out correctly, submit the form
  form.submit();
});
