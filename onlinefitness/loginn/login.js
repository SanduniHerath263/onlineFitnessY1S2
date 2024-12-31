const form = document.getElementById('login-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const userRoleCheckbox = document.getElementById('user-role');
const trainerRoleCheckbox = document.getElementById('trainer-role');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent default form submission

  // Client-side validation (optional)
  const username = usernameInput.value.trim(); // Trim leading/trailing spaces
  const password = passwordInput.value;
  let selectedRole;

  if (username.length === 0 || password.length === 0) {
    alert('Please enter both username and password.');
    return;
  }

  if (!userRoleCheckbox.checked && !trainerRoleCheckbox.checked) {
    alert('Please select a role (User or Trainer).');
    return;
  }

  // Get selected role (if any)
  if (userRoleCheckbox.checked) {
    selectedRole = userRoleCheckbox.value;
  } else {
    selectedRole = trainerRoleCheckbox.value;
  }

  // If validation passes (replace with actual login logic)
  // You would typically send the data (username, password, role) to the server
  // for authentication and role handling using techniques like AJAX or form submission
  // (with server-side validation).
  alert('Login Successful! (placeholder) - Role: ' + selectedRole);
});