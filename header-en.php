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
            <a class="navbar-brand" href="index.php">FEI M<span>echatronics</span></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">About us<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="history.php">History</a>
                        </li>
                        <li>
                            <a href="management.php">Management of Institute</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Departments</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="department_oamm.php">Department of Applied Mechanics and Mechatronics
(OAMM)</a>
                                </li>

                                <li>
                                    <a href="department_oikr.php">Department of Information, Communication and Control Systems(OIKR)</a>
                                </li>
                                <li>
                                    <a href="department_oemp.php">Department of Electronics, Microcomputers and PLC
(OEMP)</a>
                                </li>

                                <li>
                                    <a href="department_oeap.php">Department of E-mobility, Automation and Drives
(OEAP)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pracovnici.php">Staff</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Study<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">For applicants</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="applicants-bachelor.php">Bachelor study</a>
                                </li>

                                <li>
                                    <a href="applicants-master.php">Master study</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Bachelor study</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="bachelor-info.php">General information</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Bachelor thesis</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="bachelor-instructions.php">Instructions</a>
                                        </li>

                                        <li>
                                            <a href="bachelor-thesis.php">Free thesis</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Master study</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="master-info.php">General information</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Master thesis</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="master-instructions.php">Instructions</a>
                                        </li>

                                        <li>
                                            <a href="master-thesis.php">Free thesis</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="doctor-info.php">Doctor study</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Research<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="vyskum-projekty.php">Projets</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Research topics</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="vyskum-motokara.php">Electric go-kart</a>
                                </li>

                                <li>
                                    <a href="vyskum-vozidlo.php">Autonomous vehicle 6×6</a>
                                </li>
                                <li>
                                    <a href="vyskum-kocka.php">3D LED cube</a>
                                </li>

                                <li>
                                    <a href="vyskum-biomechanika.php">Biomechatronics</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="aktuality.php">News</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
    "dropdown" data-toggle="dropdown" href="#">Activities<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="photo-galery.php">Photos</a>
                        </li>
                        <li>
                            <a href="video-galery.php">Video</a>
                        </li>
                        <li>
                            <a href="media.php">Media</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Our thematic web pages</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="http://www.e-mobilita.fei.stuba.sk">Electromobility</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>

                <li>
                    <a href="login.php">Intranet</a>
                </li>

            </ul>
        </div>
    </div>
</header>
<!--header end-->';