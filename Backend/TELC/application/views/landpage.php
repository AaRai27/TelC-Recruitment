<!DOCTYPE html>
<html>
<title>Home</title>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="myPage">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-teal">
                <i class="fa fa-home w3-margin-right"></i>Home</a>
            <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
            <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
            <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Price</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
            <?php if ($this->session->has_userdata('username')) : ?>
                <a href="<?= base_url('auth/logout') ?>" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search">
                    <b style="color:red">Logout</b>
                </a>
                <b style="color:white;float:right;padding-top: 7px;"><?= $user['username'] ?></b>
            <?php else : ?>
                <a href="<?= base_url('auth') ?>" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search">
                    <b class="">Login</b>
                </a>
            <?php endif ?>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#team" class="w3-bar-item w3-button">Team</a>
            <a href="#work" class="w3-bar-item w3-button">Work</a>
            <a href="#pricing" class="w3-bar-item w3-button">Price</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            <a href="loginregis.html" class="w3-bar-item w3-button">Login</a>
        </div>
    </div>

    <!-- Image Header -->
    <div class="w3-display-container w3-animate-opacity">
        <img src="<?= base_url('assets/Landingpage.jpg') ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    </div>
    <p style="color:white;background-color: black;"><?= $this->session->flashdata('pesan'); ?></p>
    <!-- Team Container -->
    <div class="w3-container w3-padding-64 w3-center" id="team">
        <h2>OUR TEAM</h2>
        <p>Meet the team - our office rats:</p>

        <div class="w3-row"><br>

            <div class="w3-quarter">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
                <h3>mang oleh</h3>
                <p>Web Designer</p>
            </div>

            <div class="w3-quarter">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>mang oleh</h3>
                <p>Support</p>
            </div>

            <div class="w3-quarter">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>mang oleh</h3>
                <p>Boss man</p>
            </div>

            <div class="w3-quarter">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>mang oleh</h3>
                <p>Fixer</p>
            </div>

        </div>
    </div>

    <!-- Work Row -->
    <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

        <div class="w3-quarter">
            <h2>Our Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Snow" style="width:100%">
                <div class="w3-container">
                    <h3>mang oleh</h3>
                    <h4>Marketing Odading</h4>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Lights" style="width:100%">
                <div class="w3-container">
                    <h3>mang oleh</h3>
                    <h4>Marketing Odading</h4>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="<?= base_url('assets/mang_oleh.jpg') ?>" alt="Mountains" style="width:100%">
                <div class="w3-container">
                    <h3>mang oleh</h3>
                    <h4>Marketing Odading</h4>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum</p>
                </div>
            </div>
        </div>

    </div>


    <!-- Pricing Row -->
    <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
        <h2>Harga Odading</h2>
        <p>Choose odading that fits your needs.</p><br>
        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme">
                    <p class="w3-xlarge">Lorem Ipsum</p>
                </li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">
                        <i class="fa fa-usd"></i>
                        Lorem Ipsum</h2>
                    <span class="w3-opacity">Lorem Ipsum</span>
                </li>
                <li class="w3-theme-l5 w3-padding-24">
                    <button class="w3-button w3-teal w3-padding-large">
                        <i class="fa fa-check"></i>
                        Sign Up</button>
                </li>
            </ul>
        </div>

        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme-l2">
                    <p class="w3-xlarge">Lorem Ipsum</p>
                </li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">
                        <i class="fa fa-usd"></i>
                        Lorem Ipsum</h2>
                    <span class="w3-opacity">Lorem Ipsum</span>
                </li>
                <li class="w3-theme-l5 w3-padding-24">
                    <button class="w3-button w3-teal w3-padding-large">
                        <i class="fa fa-check"></i>
                        Sign Up</button>
                </li>
            </ul>
        </div>

        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme">
                    <p class="w3-xlarge">Lorem Ipsum</p>
                </li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <b>Lorem Ipsum</b>
                    Lorem Ipsum</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">
                        <i class="fa fa-usd"></i>
                        Lorem Ipsum</h2>
                    <span class="w3-opacity">Lorem Ipsum</span>
                </li>
                <li class="w3-theme-l5 w3-padding-24">
                    <button class="w3-button w3-teal w3-padding-large">
                        <i class="fa fa-check"></i>
                        Sign Up</button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
        <div class="w3-row">
            <div class="w3-col m5">
                <div class="w3-padding-16">
                    <span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
                <h3>Address</h3>
                <p>
                    <i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>
                    Telkom University, Fakultas Informatika, F207</p>
                <p>
                    <i class="fa fa-phone w3-text-teal w3-xlarge"></i>
                    082121262273</p>
                <p>
                    <i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>
                    contact.telc@gmail.com</p>
            </div>
            <div class="w3-col m7">
                <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                    <div class="w3-section">
                        <label>Name</label>
                        <input class="w3-input" type="text" name="Name" required="required">
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input" type="text" name="Email" required="required">
                    </div>
                    <div class="w3-section">
                        <label>Message</label>
                        <input class="w3-input" type="text" name="Message" required="required">
                    </div>
                    <input class="w3-check" type="checkbox" checked="checked" name="Like">
                    <label>I Like it!</label>
                    <button type="submit" class="w3-button w3-right w3-theme">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
        <h4>Follow Us</h4>
        <a class="w3-button w3-large w3-teal" href="https://www.instagram.com/telclab/" title="Instagram">
            <i class="fa fa-instagram"></i>
        </a>
        <a class="w3-button w3-large w3-teal w3-hide-small" href="https://timeline.line.me/user/_dTiNiqr5zS90zzPJOuG30LUon2l5lzU4BtaQxRk?utm_medium=osx&utm_source=desktop&utm_campaign=OA_Profile" title="Line">
            <i class='fab fa-line'></i>
        </a>
        <p></p>

        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
            <a class="w3-button w3-theme" href="#myPage">
                <span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
    </footer>

    <script>
        // Script for side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "300px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }

        // Close side navigation
        function w3_close() {
            document
                .getElementById("mySidebar")
                .style
                .display = "none";
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x
                    .className
                    .replace(" w3-show", "");
            }
        }
    </script>

</body>

</html>