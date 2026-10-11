<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinematix - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .bg-scenic {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
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

  <body class="bg-scenic d-flex flex-column justify-content-between">

    <div></div>

    <div class="container d-flex justify-content-center align-items-center my-auto py-5">
      <div class="row w-100 justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="card auth-card shadow-lg p-4">

            <div class="text-center mb-4">
              <h3 class="fw-bold text-dark">Login</h3>
              <p class="text-muted small mb-0">Welcome back to Cinematix</p>
            </div>

            <div id="alertBox"></div>

            <form id="loginForm" novalidate>

              <div class="mb-3">
                <label for="email" class="form-label text-muted small fw-semibold">
                  Email address <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email"
                         placeholder="name@example.com"
                         autocomplete="email"
                         maxlength="254"
                         required>
                  <div class="invalid-feedback">Please enter a valid email address (max 254 characters).</div>
                </div>
              </div>

              <div class="mb-4">
                <label for="password" class="form-label text-muted small fw-semibold">
                  Password <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password"
                         placeholder="Password"
                         autocomplete="current-password"
                         maxlength="64"
                         required>
                  <div class="invalid-feedback">Password is required (max 64 characters).</div>
                </div>
              </div>

              <button type="submit" id="loginBtn" class="btn btn-dark w-100 py-2 fw-semibold mb-3">
                Login
              </button>

              <div class="text-center">
                <p class="small text-muted mb-0">
                  Don't have an account?
                  <a href="register.php" class="text-dark fw-bold text-decoration-none">Register</a>
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

      const MAX_ATTEMPTS  = 5;
      const COOLDOWN      = 1 * 60 * 1000;
      const LOCK_KEY      = 'cinematix_lockout';
      const USERS_KEY     = 'cinematix_users';
      const FLASH_KEY     = 'cinematix_flash';
      const SESSION_KEY   = 'cinematix_session';

      const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

      const form          = document.getElementById('loginForm');
      const emailInput    = document.getElementById('email');
      const passwordInput = document.getElementById('password');
      const submitBtn     = document.getElementById('loginBtn');
      const alertBox      = document.getElementById('alertBox');

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

      function getLock() {
        try {
          const s = JSON.parse(localStorage.getItem(LOCK_KEY)) || {};
          return {
            attempts:    Number(s.attempts) || 0,
            lockedUntil: Number(s.lockedUntil) || 0
          };
        } catch (e) {
          return { attempts: 0, lockedUntil: 0 };
        }
      }
      function setLock(state) { localStorage.setItem(LOCK_KEY, JSON.stringify(state)); }

      function lockRemaining() {
        return Math.max(0, getLock().lockedUntil - Date.now());
      }

      function fmtTime(ms) {
        const total = Math.ceil(ms / 1000);
        const m = String(Math.floor(total / 60)).padStart(2, '0');
        const s = String(total % 60).padStart(2, '0');
        return m + ':' + s;
      }

      let timerId = null;

      function setFormDisabled(disabled) {
        emailInput.disabled = disabled;
        passwordInput.disabled = disabled;
        submitBtn.disabled = disabled;
      }

      function renderLock() {
        const left = lockRemaining();

        if (left <= 0) { renderUnlocked(); return; }

        setFormDisabled(true);

        if (timerId) return;

        alertBox.innerHTML =
          '<div class="alert alert-danger py-2 px-3 small mb-3" role="alert">' +
            'Too many failed attempts. Account temporarily locked for 1 minute. ' +
            'Try again in <strong id="lockTimer">' + fmtTime(left) + '</strong>.' +
          '</div>';

        const timerEl = document.getElementById('lockTimer');
        submitBtn.textContent = 'Locked (' + fmtTime(left) + ')';

        timerId = setInterval(function () {
          const remaining = lockRemaining();

          if (remaining <= 0) {
            clearInterval(timerId);
            timerId = null;
            setLock({ attempts: 0, lockedUntil: 0 });
            renderUnlocked();
            return;
          }

          if (timerEl) timerEl.textContent = fmtTime(remaining);
          submitBtn.textContent = 'Locked (' + fmtTime(remaining) + ')';
        }, 500);
      }

      function renderUnlocked() {
        setFormDisabled(false);
        submitBtn.textContent = 'Login';

        const attempts = getLock().attempts;
        const left     = MAX_ATTEMPTS - attempts;

        if (attempts > 0 && left > 0) {
          showAlert('warning',
            'Invalid email or password. You have <strong>' + left + '</strong> attempt' +
            (left === 1 ? '' : 's') + ' left before a 1-minute lock.');
        } else {
          clearAlert();
        }
      }

      emailInput.addEventListener('input', function () {
        emailInput.setCustomValidity('');
      });
      passwordInput.addEventListener('input', function () {
        passwordInput.setCustomValidity('');
      });

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (lockRemaining() > 0) { renderLock(); return; }

        const email    = emailInput.value.trim();
        const password = passwordInput.value;

        emailInput.setCustomValidity(
          email.length === 0 ? 'required' :
          (!EMAIL_RE.test(email) ? 'invalid' : '')
        );
        passwordInput.setCustomValidity(password.length === 0 ? 'required' : '');

        form.classList.add('was-validated');
        if (!form.checkValidity()) return;

        const users = getUsers();

        if (users.length === 0) {
          clearAlert();
          showAlert('danger',
            'No registered accounts yet. ' +
            '<a href="register.php" class="alert-link">Register first</a>.');
          return;
        }

        const user = users.find(function (u) {
          return u.email.toLowerCase() === email.toLowerCase();
        });

        if (user && user.password === password) {
          setLock({ attempts: 0, lockedUntil: 0 });
          clearAlert();

          localStorage.setItem(SESSION_KEY, JSON.stringify({
            email:    user.email,
            fullName: user.fullName,
            loginAt:  Date.now()
          }));

          showAlert('success', 'Login successful! Welcome back, ' + user.fullName + '. Redirecting…');
          setFormDisabled(true);
          submitBtn.textContent = 'Logged in';

          setTimeout(function () {
            window.location.href = 'landing.php';
          }, 900);
          return;
        }

        const state = getLock();
        state.attempts += 1;

        if (state.attempts >= MAX_ATTEMPTS) {
          state.attempts    = 0;
          state.lockedUntil = Date.now() + COOLDOWN;
          setLock(state);
          renderLock();
        } else {
          setLock(state);
          const left = MAX_ATTEMPTS - state.attempts;
          showAlert('danger',
            'Invalid email or password. <strong>' + left + '</strong> attempt' +
            (left === 1 ? '' : 's') + ' remaining before a 1-minute lock.');
          passwordInput.value = '';
          passwordInput.focus();
        }
      });

      renderLock();

      const flash = localStorage.getItem(FLASH_KEY);
      if (flash) {
        localStorage.removeItem(FLASH_KEY);
        try {
          const msg = JSON.parse(flash);
          showAlert(msg.type || 'success', msg.text || '');
        } catch (e) { }
      }
    })();
    </script>
  </body>
</html>