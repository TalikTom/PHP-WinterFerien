<nav class="header">
    <ul class="nav-container">
        <li><a href="/customcss/">Home</a></li>
        <li><a href="/customcss/about">About us</a></li>
        <li><a href="/customcss/calendar">Calendar</a></li>
        <li><a href="/customcss/contact">Contact us</a></li>
        <?= $login ? '<li><a href="/customcss/logout">Log out</a></li>' : '<li><a href="/customcss/login">Log in</a></li>' ?>
        <?= $login ? '<li><a href="/customcss/protected">Protected</a></li>' : '' ?>
    </ul>

</nav>