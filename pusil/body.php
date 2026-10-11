    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/here/landing.php"><i class="bi bi-play"></i>Cinematix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i>Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-link"></i>Link</a>
                </li>
                <li class="nav-item" id="navAuthArea"></li>
            </ul>
            <form class="d-flex flex-column flex-sm-row position-relative" id="searchForm" role="search" novalidate>
                <div class="me-sm-2 flex-grow-1">
                    <input class="form-control" type="search" id="searchInput"
                           placeholder="Search movies, series…"
                           aria-label="Search"
                           autocomplete="off"
                           minlength="2"
                           maxlength="60"
                           required>
                    <div class="search-feedback" id="searchFeedback"></div>
                </div>
                <div>
                    <button class="btn btn-outline-success w-100" type="submit" id="searchBtn">Search</button>
                </div>
            </form>
            </div>
        </div>
        </nav>

                </section>

                <section>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMTJ5NDQwbmR4bzloYThwMjNkbGlrdWdsMm5uNzRlbTE1eGx1M2F4ZyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/10ADhj1QPawFna/giphy.gif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMTE1c3lxejkzZDl2ZHJmaGE0cWhzcHU5ZzVncGtldTQxcTgzdHd4MyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/aY5bi3nmGS9xr51HFt/giphy.gif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExa3Q5OXdvZG5jeXN6N3Rvd3RxbzQ1dHBudnYyaG9rc3Rwdjg2NGxvdSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/EERZRrRpdJawsMVC5f/giphy.gif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbWc1MjRhOWN6a3p3dHFweWM3dmZuc2F2bjJhYW9yZGlpeXg3bHZrNyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/5cZbRBLhW4tc4/giphy.gif" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section>
            <div class="container py-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-7">
                        <h1 class="fw-bold">Cinematix</h1>
                        <p class="text-secondary">
                            A feature-rich, modern web platform designed for movie enthusiasts to explore, discover, and organize their favorite films seamlessly. Built to deliver an immersive cinematic experience, the system bridges the gap between casual viewers and dedicated cinephiles.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="https://i.pinimg.com/1200x/7d/02/38/7d0238338466de36c96038991c644409.jpg" class="img-fluid rounded shadow-sm" alt="Cinematix hero image">
                    </div>
                </div>
            </div>

            <br><br>
        </section>

        <section>
  <div class="container" id="movies">
    <h2>MCU Upcoming Movies</h2>
    <br>
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/f0YBuh4hyiAheXhh4JnJWoKi9g5.jpg" class="card-img poster img-fluid w-100" alt="Avengers Secret Wars poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-1">Avengers Secret Wars</h5>
            <p class="card-text text-white-50 small mb-0">2027</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/40jN1UgNAYEkGt2M0i81ghLF3cc.jpg" class="card-img poster img-fluid w-100" alt="Avengers Doomsday poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-1">Avengers Doomsday</h5>
            <p class="card-text text-white-50 small mb-0">2026</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://muvitimes.com/data/images/movies/2026/eve.avengers-endgame-encore_500x740.webp" class="card-img poster img-fluid w-100" alt="Avengers Endgame Encore poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
          <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-1">Avengers Endgame Encore</h5>
            <p class="card-text text-white-50 small mb-0">2026</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://media.themoviedb.org/t/p/w220_and_h330_face/14iAUJSgublOVnkymVstP2K5Vn7.jpg" class="card-img poster img-fluid w-100" alt="Spider-Man:">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-success rounded-pill align-self-start mb-2">Released</span>
            <h5 class="card-title mb-1">Spiderman Brand New Day</h5>
            <p class="card-text text-white-50 small mb-0">2026</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>

  <div class="container" id="shows">
    <h2>Upcoming Movies</h2>
    <br>
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/lHNqO36BQjzvxWRPchfzPl0OzGy.jpg" class="card-img poster img-fluid w-100" alt="The Batman Part II poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-0">The Batman Part II</h5>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/9KAe39xqyZnv9J4W3DRGdQqX82h.jpg" class="card-img poster img-fluid w-100" alt="Spiderman Beyond the Spider-Verse poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-0">Spiderman Beyond the Spider-Verse</h5>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/hSmIJluOJmTWvJs4d7kHRxjc8s8.jpg" class="card-img poster img-fluid w-100" alt="Godzilla Minus Zero poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-0">Godzilla Minus Zero</h5>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card media-card text-white">
          <img src="https://image.tmdb.org/t/p/original/i3N9AKd9KbdrdvTVeXBjC8NIy7f.jpg" class="card-img poster img-fluid w-100" alt="Man of Tomorrow poster">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <span class="badge bg-dark rounded-pill align-self-start mb-2">Upcoming</span>
            <h5 class="card-title mb-0">Man of Tomorrow</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>

        <section class="py-5 bg-canopy text-dark" id="results">
            <div class="container">
                <blockquote class="blockquote text-center mb-0">
                <p class="fs-4 fst-italic">"Sometimes family isn't perfect. That doesn't mean they aren't good."</p>
                <footer class="blockquote-footer text-dark-50">Lilo (Maia Kealoha) in Lilo & Stitch (2025)</footer>
                </blockquote>
            </div>
        </section>

    <div class="container-fluid bg-light">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-3 bg-light d-flex justify-content-center">
                <div class="card" style="width: 18rem;"> 
                    <img src="https://image.tmdb.org/t/p/original/7NhWlXqmUHARvhVPX7kdLkaXRLx.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jim-nightshade-regular">Daredevil</h5>
                        <p class="card-text">Matt Murdock use his heightened senses from being blinded as a young boy to fight crime at night on the streets of New York City.</p>
                        <a href="https://en.wikipedia.org/wiki/Daredevil:_Born_Again" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-3 bg-light d-flex justify-content-center">
                <div class="card" style="width: 18rem;"> 
                    <img src="https://tse3.mm.bing.net/th/id/OIP.W-kJo7zs78nwT6fZYQB4zwHaLH?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jim-nightshade-regular">Punisher</h5>
                        <p class="card-text">After his revenge on those who murdered his family, aimless Marine veteran Frank Castle finds a new meaning in life as a vigilante.</p>
                        <a href="https://en.wikipedia.org/wiki/Punisher" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-3 bg-light d-flex justify-content-center">
                <div class="card" style="width: 18rem;"> 
                    <img src="https://th.bing.com/th/id/R.ced5245920112744ceb54ae3c5ec6e88?rik=4NvvurqcUK1e1w&riu=http%3a%2f%2fwww.impawards.com%2ftv%2fposters%2fmoon_knight_ver6_xxlg.jpg&ehk=CPcqowAYfYONsDa3EscS4cmKSBHuGAUJbFnINMTbAzI%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jim-nightshade-regular">Moon Knight</h5>
                        <p class="card-text">a street-level vigilante with minimal superhuman abilities, relying on his athletic conditioning, expert hand-to-hand combat.</p>
                        <a href="https://en.wikipedia.org/wiki/Moon_Knight_(miniseries)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-3 bg-light d-flex justify-content-center">
                <div class="card" style="width: 18rem;"> 
                    <img src="https://image.tmdb.org/t/p/original/hx0sdduAsr4rq03RZKZzglR25z7.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jim-nightshade-regular">Blade</h5>
                        <p class="card-text"> A half-vampire, half-mortal man becomes the protector of humanity against an underground army of vampires.</p>
                        <a href="https://en.wikipedia.org/wiki/Blade_(franchise)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
    (function () {
      'use strict';

      const SESSION_KEY    = 'cinematix_session';
      const USERS_KEY      = 'cinematix_users';
      const SESSION_MAX_MS = 60 * 60 * 1000;

      const navAuth      = document.getElementById('navAuthArea');
      const searchForm   = document.getElementById('searchForm');
      const searchInput  = document.getElementById('searchInput');
      const searchBtn    = document.getElementById('searchBtn');
      const searchFeed   = document.getElementById('searchFeedback');

      const SEARCH_RE = /^[A-Za-z0-9À-ÿ .,'&:!?()-]+$/;

      function escapeHtml(str) {
        return String(str).replace(/[&<>"']/g, function (c) {
          return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
        });
      }

      function getRawSession() {
        try { return JSON.parse(localStorage.getItem(SESSION_KEY)); }
        catch (e) { return null; }
      }

      function clearSession() {
        localStorage.removeItem(SESSION_KEY);
      }

      function isValidSession(s) {
        if (!s || typeof s !== 'object') return false;
        if (typeof s.email    !== 'string' || s.email.trim() === '') return false;
        if (typeof s.fullName !== 'string' || s.fullName.trim() === '') return false;
        if (typeof s.loginAt  !== 'number' || !isFinite(s.loginAt)) return false;
        if (s.loginAt > Date.now() + 60 * 1000) return false;
        if (Date.now() - s.loginAt > SESSION_MAX_MS) return false;

        const users = getUsers();
        const match = users.find(function (u) {
          return u.email.toLowerCase() === s.email.toLowerCase();
        });
        return !!match;
      }

      function getUsers() {
        let users = [];
        try { users = JSON.parse(localStorage.getItem(USERS_KEY)) || []; } catch (e) { users = []; }
        return Array.isArray(users) ? users : [];
      }

      function getSession() {
        const raw = getRawSession();
        if (!raw) return null;
        if (!isValidSession(raw)) { clearSession(); return null; }
        return raw;
      }

      function render() {
        const session = getSession();

        if (session) {
          navAuth.className = 'nav-item dropdown';
          navAuth.innerHTML =
            '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' +
              '<i class="bi bi-person-circle"></i> ' + escapeHtml(session.fullName) +
            '</a>' +
            '<ul class="dropdown-menu dropdown-menu-end">' +
              '<li><h6 class="dropdown-header">Signed in as<br>' + escapeHtml(session.email) + '</h6></li>' +
              '<li><hr class="dropdown-divider"></li>' +
              '<li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>' +
              '<li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>' +
              '<li><hr class="dropdown-divider"></li>' +
              '<li><a class="dropdown-item text-danger" href="#" id="logoutBtn"><i class="bi bi-box-arrow-right"></i> Logout</a></li>' +
            '</ul>';

          document.getElementById('logoutBtn').addEventListener('click', function (e) {
            e.preventDefault();
            if (window.confirm('Are you sure you want to log out?')) {
              clearSession();
              window.location.href = 'http://localhost/landing.php/';
            }
          });
        } else {
          navAuth.className = 'nav-item';
          navAuth.innerHTML =
            '<a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i>Login</a>';
        }
      }

      function setSearchFeedback(msg, ok) {
        searchFeed.textContent = msg || '';
        searchFeed.className = 'search-feedback ' + (ok ? 'text-success' : 'text-danger');
      }

      function validateSearch(silent) {
        const v = searchInput.value.trim();
        let msg = '';
        let valid = true;

        if (v.length === 0) {
          valid = false;
          msg = 'Search cannot be empty.';
        } else if (v.length < 2) {
          valid = false;
          msg = 'Enter at least 2 characters.';
        } else if (v.length > 60) {
          valid = false;
          msg = 'Search is too long (max 60 characters).';
        } else if (!SEARCH_RE.test(v)) {
          valid = false;
          msg = 'Only letters, numbers, spaces, and basic punctuation are allowed.';
        } else if (/^\s+$/.test(v)) {
          valid = false;
          msg = 'Search cannot contain only spaces.';
        } else if (/(.)\1{4,}/.test(v)) {
          valid = false;
          msg = 'Too many repeated characters.';
        }

        searchInput.classList.toggle('is-invalid', !valid);
        searchInput.classList.toggle('is-valid',   valid && v.length > 0);

        if (!silent) setSearchFeedback(valid ? 'Looks good!' : msg, valid);
        return valid;
      }

      searchInput.addEventListener('input', function () {
        searchInput.setCustomValidity('');
        if (searchInput.value.length === 0) {
          searchInput.classList.remove('is-invalid', 'is-valid');
          setSearchFeedback('', true);
        } else {
          validateSearch(true);
        }
      });

      searchInput.addEventListener('blur', function () {
        if (searchInput.value.trim() !== '') validateSearch(false);
      });

      searchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (!validateSearch(false)) {
          searchInput.focus();
          return;
        }

        const query = searchInput.value.trim();

        searchBtn.disabled = true;
        const original = searchBtn.textContent;
        searchBtn.textContent = 'Searching…';

        setTimeout(function () {
          searchBtn.disabled = false;
          searchBtn.textContent = original;
          setSearchFeedback('No results yet — search is a demo.', true);
          console.log('Search query:', query);
        }, 700);
      });

      render();

      window.addEventListener('storage', function (e) {
        if (e.key === SESSION_KEY) render();
      });
    })();
    </script>