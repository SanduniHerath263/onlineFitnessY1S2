const form = document.getElementById('signup-form');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission

  // Client-side validation (optional but recommended)
  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Simple validation checks (improve based on your requirements)
  if (username.length < 5) {
    alert('Username must be at least 5 characters long.');
    return; // Prevent further processing if validation fails
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (password.length < 8) {
    alert('Password must be at least 8 characters long.');
    return;
  }

  // If validation passes (replace with actual signup logic)
  alert('Sign Up Successful! (placeholder)');

  // You would typically send the data (username, email, password) to the server
  // for further processing (e.g., database insertion) using techniques like
  // AJAX or form submission (with server-side validation).
});