<header class="p-3 bg-dark text-light">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/bootstrap/"
                       class="nav-link px-2 link-<?= urlIs('/bootstrap/') ? 'primary' : 'light' ?>">Home</a></li>
                <li><a href="/bootstrap/about"
                       class="nav-link px-2 link-<?= urlIs('/bootstrap/about') ? 'primary' : 'light' ?>">About
                        us</a></li>
                <li><a href="/bootstrap/calendar"
                       class="nav-link px-2 link-<?= urlIs('/bootstrap/calendar') ? 'primary' : 'light' ?>">Calendar</a>
                </li>
                <li><a href="/bootstrap/contact"
                       class="nav-link px-2 link-<?= urlIs('/bootstrap/contact') ? 'primary' : 'light' ?>">Contact
                        us</a></li>

            </ul>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                         class="bi bi-person-fill"
                         viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    </svg>
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>