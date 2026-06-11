<?php

function setHeader($data)
{
    echo '<header class="header">
            <div class="container">
                <div class="header-flex">

                    <img src="'.$data['logo'].'" alt="logo">';

    echo '<nav class="navigation">';

    foreach ($data['navs'] as $nav) {
        echo '<a href="'.$nav['link'].'" class="nav-link">'.$nav['title'].'</a>';
    }

    echo '</nav>
            </div>
        </div>
    </header>';
}


function heroSection($data)
{
    echo '
    <section class="first-section" id="first-section">
        <div class="first-section-content">
            <h1 class="main-title">'.$data['title'].'</h1>
            <p class="description">'.$data['description'].'</p>
            <a href="#" class="button">'.$data['button'].'</a>
        </div>
    </section>';
}


function roomsSection($rooms)
{
    echo '
    <section class="second-section" id="second-section">
        <div class="container">

        <h2 class="secondary-title">Rooms & Rates</h2>

        <div class="rooms-gallery">';

    foreach ($rooms as $room) {

        echo '
        <div class="rooms-card">

            <img src="'.$room['image'].'" alt="room">

            <div class="overlay"></div>

            <div class="cards-content">
                <h3 class="card-title">'.$room['title'].'</h3>
                <a href="#" class="button button-small">
                    Check Rates
                </a>
            </div>

        </div>';
    }

    echo '
        </div>
      </div>
    </section>';
}


function contactSection($data)
{
    echo '
    <section class="third-section" id="third-section">
        <div class="container">

            <div class="contact-us">
                <h2 class="secondary-title">'.$data['title'].'</h2>

                <a href="#" class="button">
                    '.$data['buttons'][0].'
                </a>

                <a href="#" class="button">
                    '.$data['buttons'][1].'
                </a>

            </div>

        </div>
    </section>';
}


function setFooter($data)
{
    echo '
    <footer>
        <div class="container">

            <div class="footer-content">

                <img src="'.$data['logo'].'" alt="logo">

                <nav class="footer-navigation">';

    foreach ($data['navs'] as $nav) {
        echo '<a href="#" class="footer-nav-links">'.$nav.'</a>';
    }

    echo '
                </nav>

                <div class="footer-text">
                    <p>'.$data['address'].'</p>

                    <a href="tel:'.$data['phone'].'">
                        '.$data['phone'].'
                    </a>

                    <a href="mailto:'.$data['email'].'">
                        '.$data['email'].'
                    </a>
                </div>

            </div>

        </div>
    </footer>';
}