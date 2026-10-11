<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinematix - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .bg-scenic-dark {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                        url('https://i.pinimg.com/736x/cf/3c/3e/cf3c3e47b80f45de793df052a91cedec.jpg')
                        no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 1rem;
        }
        .form-control:focus { box-shadow: none; border-color: #212529; }
    </style>
  </head>

  <body class="bg-scenic-dark d-flex flex-column justify-content-between">

    <div></div>

    <div class="container d-flex justify-content-center align-items-center my-auto py-5">
      <div class="row w-100 justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card auth-card shadow-lg p-4">

            <div class="text-center mb-3">
              <h3 class="fw-bold text-dark">Register</h3>
              <p class="text-muted small mb-0">Create your Cinematix account</p>
            </div>

            <div id="alertBox"></div>

            <form id="registerForm" novalidate>

              <div class="mb-3">
                <label for="fullname" class="form-label text-muted small fw-semibold">
                  Full Name <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="text" class="form-control" id="fullname"
                         placeholder="ex. Lebron James"
                         autocomplete="name"
                         minlength="2"
                         maxlength="60"
                         required>
                  <div class="invalid-feedback">
                    Please enter your full name (2–60 characters, letters and spaces only).
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label text-muted small fw-semibold">
                  Email Address <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email"
                         placeholder="lebron23@example.com"
                         autocomplete="email"
                         maxlength="254"
                         required>
                  <div class="invalid-feedback">
                    Please enter a valid email address (max 254 characters).
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label text-muted small fw-semibold">
                  Phone Number <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="tel" class="form-control" id="phone"
                         placeholder="09123456789 or +639123456789"
                         autocomplete="tel"
                         inputmode="tel"
                         maxlength="15"
                         required>
                  <div class="invalid-feedback">
                    Enter a valid PH mobile number (e.g., 09123456789 or +639123456789).
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label text-muted small fw-semibold">
                  Password <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password"
                         placeholder="Password"
                         autocomplete="new-password"
                         minlength="8"
                         maxlength="64"
                         required>
                  <div class="invalid-feedback">
                    Password must be 8–64 characters and include at least one letter and one number.
                  </div>
                </div>
              </div>

              <div class="mb-4">
                <label for="confirm-password" class="form-label text-muted small fw-semibold">
                  Confirm Password <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="password" class="form-control" id="confirm-password"
                         placeholder="Confirm Password"
                         autocomplete="new-password"
                         minlength="8"
                         maxlength="64"
                         required>
                  <div class="invalid-feedback">
                    Passwords do not match (max 64 characters).
                  </div>
                </div>
              </div>

              <button type="submit" id="registerBtn" class="btn btn-dark w-100 py-2 fw-semibold mb-3">
                Register
              </button>

              <div class="text-center">
                <p class="small text-muted mb-0">
                  Already have an account?
                  <a href="login.php" class="text-dark fw-bold text-decoration-none">Login here</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center text-white-50 py-3 small">
      &copy; 2026 Cinematix. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
    (function () {
      'use strict';

      const USERS_KEY = 'cinematix_users';
      const FLASH_KEY = 'cinematix_flash';

      const NAME_RE  = /^[A-Za-zÀ-ÿ' .-]+$/;
      const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
      const PHONE_RE = /^(\+?63|0)9\d{9}$/;

      const form        = document.getElementById('registerForm');
      const nameInput   = document.getElementById('fullname');
      const emailInput  = document.getElementById('email');
      const phoneInput  = document.getElementById('phone');
      const passInput   = document.getElementById('password');
      const confirmInput= document.getElementById('confirm-password');
      const submitBtn   = document.getElementById('registerBtn');
      const alertBox    = document.getElementById('alertBox');

      function showAlert(type, html) {
        alertBox.innerHTML =
          '<div class="alert alert-' + type + ' py-2 px-3 small mb-3" role="alert">' + html + '</div>';
      }
      function clearAlert() { alertBox.innerHTML = ''; }

      function getUsers() {
        let users = [];
        try { users = JSON.parse(localStorage.getItem(USERS_KEY)) || []; } catch (e) { users = []; }
        return Array.isArray(users) ? users : [];
      }

      [nameInput, emailInput, phoneInput, passInput, confirmInput].forEach(function (inp) {
        inp.addEventListener('input', function () { inp.setCustomValidity(''); });
      });

      function validateName(silent) {
        const v = nameInput.value.trim();
        let msg = '';
        if (v.length === 0)                     msg = 'required';
        else if (v.length < 2)                  msg = 'too short';
        else if (!NAME_RE.test(v))              msg = 'invalid characters';
        if (!silent) nameInput.setCustomValidity(msg);
        return msg === '';
      }

      function validateEmail(silent) {
        const v = emailInput.value.trim();
        let msg = '';
        if (v.length === 0)            msg = 'required';
        else if (!EMAIL_RE.test(v))    msg = 'invalid';
        if (!silent) emailInput.setCustomValidity(msg);
        return msg === '';
      }

      function validatePhone(silent) {
        const v = phoneInput.value.trim().replace(/[\s-]/g, '');
        let msg = '';
        if (v.length === 0)            msg = 'required';
        else if (!PHONE_RE.test(v))    msg = 'invalid';
        if (!silent) phoneInput.setCustomValidity(msg);
        return msg === '';
      }

      function validatePassword(silent) {
        const v = passInput.value;
        let msg = '';
        if (v.length === 0)                              msg = 'required';
        else if (v.length < 8)                           msg = 'too short';
        else if (v.length > 64)                          msg = 'too long';
        else if (!/[A-Za-z]/.test(v) || !/[0-9]/.test(v)) msg = 'needs letter and number';
        if (!silent) passInput.setCustomValidity(msg);
        return msg === '';
      }

      function validateConfirm(silent) {
        const v = confirmInput.value;
        let msg = '';
        if (v.length === 0)                 msg = 'required';
        else if (v !== passInput.value)     msg = 'mismatch';
        if (!silent) confirmInput.setCustomValidity(msg);
        return msg === '';
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        clearAlert();

        const ok =
          validateName()    &&
          validateEmail()   &&
          validatePhone()   &&
          validatePassword()&&
          validateConfirm();

        form.classList.add('was-validated');

        if (!ok) {
          showAlert('danger', 'Please fix the highlighted fields.');
          const firstInvalid = form.querySelector(':invalid');
          if (firstInvalid) firstInvalid.focus();
          return;
        }

        const email    = emailInput.value.trim().toLowerCase();
        const users    = getUsers();
        const existing = users.find(function (u) { return u.email.toLowerCase() === email; });

        if (existing) {
          emailInput.setCustomValidity('duplicate');
          showAlert('danger',
            'An account with this email already exists. ' +
            '<a href="login.php" class="alert-link">Login instead</a>.');
          emailInput.focus();
          return;
        }

        const newUser = {
          fullName: nameInput.value.trim(),
          email:    emailInput.value.trim(),
          phone:    phoneInput.value.trim(),
          password: passInput.value,
          createdAt: Date.now()
        };

        users.push(newUser);
        localStorage.setItem(USERS_KEY, JSON.stringify(users));

        submitBtn.disabled = true;
        submitBtn.textContent = 'Creating account…';

        showAlert('success', 'Account created! Redirecting to login…');

        localStorage.setItem(FLASH_KEY, JSON.stringify({
          type: 'success',
          text: 'Registration successful. Please log in, ' + newUser.fullName + '.'
        }));

        setTimeout(function () {
          window.location.href = 'login.php';
        }, 1200);
      });

      nameInput.addEventListener('blur',    function () { validateName(false);    form.classList.add('was-validated'); });
      emailInput.addEventListener('blur',   function () { validateEmail(false);   form.classList.add('was-validated'); });
      phoneInput.addEventListener('blur',   function () { validatePhone(false);   form.classList.add('was-validated'); });
      passInput.addEventListener('blur',    function () { validatePassword(false);form.classList.add('was-validated'); });
      confirmInput.addEventListener('blur', function () { validateConfirm(false); form.classList.add('was-validated'); });

      passInput.addEventListener('input', function () {
        if (confirmInput.value.length > 0) {
          validateConfirm(false);
        }
      });

    })();
    </script>
  </body>
</html>