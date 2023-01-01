<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="/foundation/" style="color: <?=urlIs('/foundation/') ? 'lightblue' : ''?>;">Home</a></li>
            <li><a href="/foundation/about" style="color: <?=urlIs('/foundation/about') ? 'lightblue' : ''?>;">About
                    us</a></li>
            <li><a href="/foundation/calendar"
                    style="color: <?=urlIs('/foundation/calendar') ? 'lightblue' : ''?>;">Calendar</a></li>
            <li><a href="/foundation/contact"
                    style="color: <?=urlIs('/foundation/contact') ? 'lightblue' : ''?>;">Contact
                    us</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="has-submenu">
                <a href="/foundation/">Profile</a>
                <ul class="submenu menu vertical" data-submenu>
                    <li><a href="#0">My Profile</a></li>
                    <li><a href="#0">Settings</a></li>
                    <li><a href="#0">Log-out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>