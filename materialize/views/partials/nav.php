<nav class="nav-extended">
    <div class="nav-wrapper grey darken-4">

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/materialize/" class="<?= urlIs('/materialize/') ? 'blue-text text-darken-2' : ''; ?>">Home</a>
            </li>
            <li><a href="./about" class="<?= urlIs('/materialize/about') ? 'blue-text text-darken-2' : ''; ?>">About
                    us</a></li>
            <li><a href="./calendar"
                    class="<?= urlIs('/materialize/calendar') ? 'blue-text text-darken-2' : ''; ?>">Calendar</a></li>
            <li><a href="./contact"
                    class="<?= urlIs('/materialize/contact') ? 'blue-text text-darken-2' : ''; ?>">Contact us</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Profile<i
                        class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">My Profile</a></li>
            <li><a href="#!">Settings</a></li>
            <li class="divider"></li>
            <li><a href="#!">Log-out</a></li>
        </ul>
    </div>

</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="/materialize/">Home</a></li>
    <li><a href="./about">About us</a></li>
    <li><a href="/materialize/calendar">Calendar</a></li>
    <li><a href="./contact">Contact us</a></li>
</ul>