const input = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');
const progressBar = document.getElementById('password-strength');
const result = document.getElementById('result');
const criteria = {
  lowUpper: document.querySelector('.password-strength-items .low-upper-case'),
  number: document.querySelector('.password-strength-items .number'),
  specialChar: document.querySelector('.password-strength-items .special-char'),
  minLength: document.querySelector('.password-strength-items .min-length')
};

togglePassword.addEventListener('click', () => {
  if (input.type === 'password') {
    input.type = 'text';
    togglePassword.src = 'assets/opened-eye.svg'; // mắt mở khi hiện mật khẩu
  } else {
    input.type = 'password';
    togglePassword.src = 'assets/closed-eye.svg'; // mắt đóng khi ẩn mật khẩu
  }
});

input.addEventListener('input', () => {
  const value = input.value;
  let strength = 0;

  // Check lowercase & uppercase
  if (/[a-z]/.test(value) && /[A-Z]/.test(value)) {
    strength++;
    criteria.lowUpper.classList.add('valid');
  } else {
    criteria.lowUpper.classList.remove('valid');
  }

  // Check number
  if (/\d/.test(value)) {
    strength++;
    criteria.number.classList.add('valid');
  } else {
    criteria.number.classList.remove('valid');
  }

  // Check special char
  if (/[!@#$%^&*(),.?":{}|<>]/.test(value)) {
    strength++;
    criteria.specialChar.classList.add('valid');
  } else {
    criteria.specialChar.classList.remove('valid');
  }

  // Check length
  if (value.length >= 8) {
    strength++;
    criteria.minLength.classList.add('valid');
  } else {
    criteria.minLength.classList.remove('valid');
  }

  // Update progress bar and text
  const percent = (strength / 4) * 100;
  progressBar.style.width = percent + '%';

  if (percent === 0) {
    result.textContent = '';
    progressBar.style.backgroundColor = '#ddd';
  } else if (percent <= 50) {
    result.textContent = 'Weak';
    progressBar.style.backgroundColor = 'var(--danger)';
  } else if (percent < 100) {
    result.textContent = 'Medium';
    progressBar.style.backgroundColor = 'var(--warning)';
  } else {
    result.textContent = 'Strong';
    progressBar.style.backgroundColor = 'var(--success)';
  }
});
