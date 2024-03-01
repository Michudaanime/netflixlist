<?php
if (session_status() === 1) {
    session_start();
}
?>
<header class="header container-fluid">
    <div class="row">
        <div class="col">
            <section id="title">
                <p>My Netflix List</p>
            </section>
        </div>

        <div class="col">
            <ul class="navigation">
                <li><a id="activeH" class="navBtn" href="/rocnikovy/index">Home</a></li>
                <li><a id="activeA" class="navBtn" href="/rocnikovy/about">About</a></li>
                <li><a id="activeP" class="navBtn" href="/rocnikovy/profile">Profile</a></li>
                <li><a id="activeL" class="navBtn" href="/rocnikovy/list">List</a></li>
                <li><a id="activeS" class="navBtn" href="/rocnikovy/support">Support</a></li>
                <li><a id="activeC" class="navBtn" href="/rocnikovy/contact">Contact</a></li>
            </ul>
        </div>

        <div class="col">
            <section class="buttons">
                <?= isset($_SESSION['id']) ? '<a href="/rocnikovy/logout"><button class="Login">Logout</button></a>' : '<a href="/rocnikovy/login"><button class="Login">Login</button></a><a href="/rocnikovy/signup"><button class="SignUp">Sign Up</button></a>' ?>
                <div class="dropdown">
                    <a class="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://freesvg.org/storage/img/thumb/gearRed.png" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mt-10" aria-labelledby="dropdownMenuButton" style="top: 15px;">
                        <a class="dropdown-item" href="/rocnikovy/settings">Zmnena údajov</a>
                        <a class="dropdown-item" href="/rocnikovy/settings">Zmena hesla</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</header>