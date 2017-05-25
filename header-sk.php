<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 25.5.2017
 * Time: 14:13
 */

echo '
<!--header start-->
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php">FEI M<span>echatronika</span></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">O nás<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="history.php">História</a>
                        </li>
                        <li>
                            <a href="management.php">Vedenie ústavu</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Oddelenia</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="department_oamm.php">Oddelenie aplikovanej mechaniky a mechatroniky
(OAMM)</a>
                                </li>

                                <li>
                                    <a href="department_oikr.php">Oddelenie informačných, komunikačných a riadiacich
                                        systémov (OIKR)</a>
                                </li>
                                <li>
                                    <a href="department_oemp.php">Oddelenie elektroniky, mikropočítačov a PLC systémov
(OEMP)</a>
                                </li>

                                <li>
                                    <a href="department_oeap.php">Oddelenie E-mobility, automatizácie a pohonov
(OEAP)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pracovnici.php">Pracovníci</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Štúdium<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Pre uchádzačov o štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="applicants-bachelor.php">Bakalárske štúdium</a>
                                </li>

                                <li>
                                    <a href="applicants-master.php">Inžinierske štúdium</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Bakalárske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="bachelor-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Bakalárske práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="bachelor-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="bachelor-thesis.php">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Inžinierske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="master-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Diplomové práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="master-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="master-thesis.php">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="doctor-info.php">Doktorandské štúdium</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Výskum<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="vyskum-projekty.php">Projekty</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Výskumné oblasti</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="vyskum-motokara.php">Elektrická motokára</a>
                                </li>

                                <li>
                                    <a href="vyskum-vozidlo.php">Autonómne vozidlo 6×6</a>
                                </li>
                                <li>
                                    <a href="vyskum-kocka.php">3D LED kocka</a>
                                </li>

                                <li>
                                    <a href="vyskum-biomechanika.php">Biomechatronika</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="aktuality.php">Aktuality</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Aktivity<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="photo-galery.php">Fotogaléria</a>
                        </li>
                        <li>
                            <a href="video-galery.php">Videá</a>
                        </li>
                        <li>
                            <a href="media.php">Média</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Naše tématické web stránky</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="http://www.e-mobilita.fei.stuba.sk">Elektromobilita</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.php">Kontakt</a>
                </li>

                <li>
                    <a href="login.php">Intranet</a>
                </li>

            </ul>
        </div>
    </div>
</header>
<!--header end-->';