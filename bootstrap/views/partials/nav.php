<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/bootstrap/"
                        class="nav-link px-2 link-<?= urlIs('/bootstrap/') ? 'secondary' : 'dark' ?>">Home</a></li>
                <li><a href="/bootstrap/about"
                        class="nav-link px-2 link-<?= urlIs('/bootstrap/about') ? 'secondary' : 'dark' ?>">About
                        us</a></li>
                <li><a href="/bootstrap/calendar"
                        class="nav-link px-2 link-<?= urlIs('/bootstrap/calendar') ? 'secondary' : 'dark' ?>">Calendar</a>
                </li>
                <li><a href="/bootstrap/contact"
                        class="nav-link px-2 link-<?= urlIs('/bootstrap/contact') ? 'secondary' : 'dark' ?>">Contact
                        us</a></li>
            </ul>