document.querySelector('.sign-in').addEventListener('click', () => {
    document.getElementById('sign-in-form').classList.toggle('hidden');
});

document.querySelector('.nav-list .list-items:nth-child(1) a').addEventListener('click', () => {
    document.getElementById('register-form').classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.querySelector('#register-form form');
    const registerMessage = document.querySelector('#register-message');

    registerForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(registerForm);

        fetch('register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                registerMessage.textContent = data.message;
                registerMessage.classList.remove('hidden');
                registerForm.reset(); // Optionally reset form
            } else {
                registerMessage.textContent = data.message;
                registerMessage.classList.remove('hidden');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            registerMessage.textContent = 'An error occurred. Please try again.';
            registerMessage.classList.remove('hidden');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#sign-in-form form');
    const messageDiv = document.getElementById('sign-in-message');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from refreshing the page

        const formData = new FormData(form);

        fetch('sign_in.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Check if the response status is OK
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                messageDiv.textContent = data.message;
                messageDiv.style.color = 'green';
            } else {
                messageDiv.textContent = data.message;
                messageDiv.style.color = 'red';
            }
        })
        .catch(error => {
            console.error('Error:', error); // Log detailed error message
            messageDiv.textContent = 'An error occurred. Please try again.';
            messageDiv.style.color = 'red';
        });
    });
});

document.getElementById("appointment-button").addEventListener("click", function() {
    // Scroll to the appointment form
    document.getElementById("appointment-form").scrollIntoView({
        behavior: "smooth"
    });
});
document.querySelector('.submit-appointment').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form from submitting normally
    
    // Get form data
    let form = document.querySelector('#appointment-form');
    let formData = new FormData(form);

    // Send data using Fetch API
    fetch('submit_appointment.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Check if the appointment was successfully saved
        if (data.status === 'success') {
            alert('Appointment successfully created.');
            form.reset(); // Clear the form
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the actual form element
    const form = document.querySelector('#sign-in-form-element'); // target the form

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const formData = new FormData(form); // Use the form element for FormData

        fetch('sign_in.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json()) // Convert response to JSON
        .then(data => {
            const signInMessage = document.getElementById('sign-in-message');
            const signInForm = document.getElementById('sign-in-form');

            // Handle success
            if (data.status === 'success') {
                signInMessage.textContent = data.message;
                signInMessage.style.color = 'green';

                // Hide form after 1 second (1000ms)
                setTimeout(() => {
                    signInForm.classList.add('hidden');
                }, 1000);
            } else {
                // Handle error
                signInMessage.textContent = data.message;
                signInMessage.style.color = 'red';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('sign-in-message').textContent = 'An error occurred. Please try again.';
        });
    });
});
// Toggle contact details visibility on click
document.querySelector('.nav-list .list-items:nth-child(4) a').addEventListener('click', () => {
    const contactDetails = document.getElementById('contact-details');
    contactDetails.classList.toggle('show'); // Use 'show' class to make it visible
});
// Add event listener for the "About Us" link
document.querySelector('.about-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior

    // Scroll smoothly to the footer or the end of the page
    document.getElementById('about-us').scrollIntoView({
        behavior: 'smooth'
    });
});
document.querySelector('.nav-list .list-items:nth-child(3) a').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior

    const helpContainer = document.getElementById('help');
    const overlay = document.querySelector('.overlay');
    
    if (helpContainer.classList.contains('hidden')) {
        helpContainer.classList.remove('hidden');
        helpContainer.style.display = 'block'; // Show help section
        overlay.style.display = 'block'; // Show overlay
    } else {
        helpContainer.classList.add('hidden');
        helpContainer.style.display = 'none';  // Hide help section
        overlay.style.display = 'none'; // Hide overlay
    }
    
    helpContainer.scrollIntoView({ behavior: 'smooth' });
});
// Function to toggle the contact details section
document.querySelector('.nav-list .list-items a[href="#Contact"]').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior

    const contactContainer = document.getElementById('contact-details');
    const overlay = document.querySelector('.overlay');

    // Toggle visibility of the contact details
    if (contactContainer.classList.contains('hidden')) {
        contactContainer.classList.remove('hidden');
        contactContainer.style.display = 'block'; // Show contact details
        overlay.style.display = 'block'; // Show overlay
    } else {
        contactContainer.classList.add('hidden');
        contactContainer.style.display = 'none'; // Hide contact details
        overlay.style.display = 'none'; // Hide overlay
    }

    contactContainer.scrollIntoView({ behavior: 'smooth' }); // Smooth scroll to contact details
});
