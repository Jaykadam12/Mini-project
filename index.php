<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="bg-img">
        <header>
            <div class="header-items">
                <div class="live-img">
                    <img src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/logo.png" alt="Web Logo">
                </div>
                <div class="nav-list">
                    <ul class="list">
                        <li class="list-items"><a class="nav-a" href="#Register">Register</a></li>
                        <li class="list-items"><a class="nav-a"  href="#Departments">Departments</a></li>
                        <li class="list-items"><a class="nav-a" href="#Help">Help</a></li>
                        <!-- <li class="list-items"><a class="nav-a"  href="#Contact">Contact</a></li> -->
                        <li class="list-items">
                            <a class="nav-a" href="#Contact">Contact Us</a>
                            <div id="contact-details" class="contact-container hidden">
                                <h2>Contact Information</h2>
                                <ul class="contact-list">
                                        <li><strong>Jay kadam</strong>: jaykadam1235@gmail.com</li>
                                        <li><strong>Manas Choudhari</strong>: Manasc338@gmail.com</li>
                                        <li><strong>Shreyas Bhutkar</strong>: shreays12@gmail.com</li>
                                        <li><strong>Sairaj Aambrale</strong>: sairajabm12@gmail.com</li>
                                </ul>
                            </div>
                        </li>

                        <li class="list-items"><a class="nav-a about-link" href="#">About Us</a>
                        <!-- Overlay for background dimming -->
                            <!-- <div class="overlay"></div> -->
                            <div id="help" class="help-container hidden">
                                <h2>Help: How to Register for a Vaccine</h2>
                                <ol>
                                    <li><strong>Step 1:</strong> Go to the <a href="#Register">Register</a> section.</li>
                                    <li><strong>Step 2:</strong> Fill in your details, including your name, email, and phone number.</li>
                                    <li><strong>Step 3:</strong> Choose the vaccine you want to register for.</li>
                                    <li><strong>Step 4:</strong> Select the date for your appointment.</li>
                                    <li><strong>Step 5:</strong> Write any additional messages in the message box.</li>
                                    <li><strong>Step 6:</strong> Click the "Submit" button to complete your registration.</li>
                                    <li><strong>Step 7:</strong> You will receive a confirmation SMS 2 days before your appointment.</li>
                                </ol>
                            </div>
                        </li>
                            <!-- Registration form -->
                            <div id="register-form" class="register-form hidden">
                                <h2>Register</h2>
                                <form action="register.php" method="POST">
                                    <input class="register-input" type="text" name="username" placeholder="Username" required>
                                    <input class="register-input" type="password" name="password" placeholder="Password" required>
                                    <input class="register-input" type="email" name="email" placeholder="Email" required>
                                    <input class="register-input" type="text" name="phone_number" placeholder="Phone Number" required>
                                    <button class="register-submit" type="submit">Register</button>
                                    <div id="register-message" class="hidden"></div>

                                </form>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="sign-in">Sign in</div>
                            <!-- Sign-in form -->
                                   <!-- Sign-in form -->
                                   <div id="sign-in-form" class="sign-in-form">
                                        <h2>Sign In</h2>
                                        <form id="sign-in-form-element" method="POST">
                                            <input class="sign-in-input" type="text" name="username" placeholder="Username" required>
                                            <input class="sign-in-input" type="password" name="password" placeholder="Password" required>
                                            <button class="sign-in-submit" type="submit">Login</button>
                                            <div id="sign-in-message"></div> <!-- For displaying success or error messages -->
                                        </form>
                                    </div>


                 </div>
        </header>
        <div class="fake-header"></div>
        <main>
            <div class="page1">
                <div class="main-heading">
                    <p>We're determined for your better life.</p>
                    <p class="main-msg">You can get the care you need 24/7 – be it online or inperson. You will be treated by caring specialist doctors.</p>
                    <p ><button class="main-appointment" id="appointment-button">Register for Vaccine</button></p>
                </div>
                    
                <div class="main-container"><img class="main-img" src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/hero.png" alt="family img"></div>
            </div>
            <div class="eye-care">
                <div class="eye-img"><img src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/eye-care.png" alt=""></div>
                <div class="eye-text">
                    <div class="bold-text"><p>Eye Care with Top Professionals and In Budget.</p></div>
                    <div class="eye-msg"><p>We've built a healthcare system that puts your needs first. For us, there is nothing more important than the health of you and your loved ones.</p></div>
                    <div class="learn-more"><div class="eye-learn-more">Learn More</div></div>
                </div>
            </div>

            <div class="our-doctors">
                <p>Our Doctors</p>
            </div>
            <div class="doctors">
                <div class="first-doc"><img src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/anita.png" alt="">
                    <div class="doc-name"><p>Anita Deshai</p></div>
                    <div class="doc-degree"><p>Pediatrics, Gochi Medicine</p></div>
                    <div class="doc-info">Florida, United States 10 years experience</div>
                    <div class="view-profile">View Profile</div>
                </div>
                <div class="first-doc">
                    <img src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/jane.png" alt="">
                    <div class="doc-name"><p>Jane Flakis</p></div>
                    <div class="doc-degree"><p>Gynaecology, Abenka Care</p></div>
                    <div class="doc-info">Melbourne, Australi 12 years experience</div>
                    <div class="view-profile">View Profile</div>
                </div>
                <div class="first-doc">
                    <img src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/leo-mario.png" alt="">
                    <div class="doc-name"><p>Leo Mario</p></div>
                    <div class="doc-degree"><p>Physiotherapy, FitCare</p></div>
                    <div class="doc-info">London, England 25 years experience</div>
                    <div class="view-profile">View Profile</div>
                </div>
            </div>

            <div class="appointment">
                <div class="appointment-header"><h1>Register Vaccine of your child</h1></div>
            </div>
            <form id="appointment-form" method="post ">
            <div class="appointment-form-container">
                <div><img  class="appointment-img" src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/appointment.png" alt=""></div>
                <div id="appointment-form" class="appointment-form">
                    <div class="first-row">
                        <p>
                            <input class="appointment-box" type="text" placeholder="Name" name="name" required>
                        </p>
                        <p>
                            <input class="appointment-box" type="number" placeholder="Phone" name="phone" required>
                        </p>
                    </div>
                    <div class="first-row">
                        <p>
                            <input class="appointment-box" type="text" name="vaccine_name" placeholder="Vaccine Name" required>
                        </p>
                        <p>
                            <input class="appointment-box" type="date" name="date" placeholder="Date" required>
                        </p>
                    </div>
                    <div class="first-row">
                        <textarea class="appointment-box" id="message" name="message" placeholder="Message" required></textarea>
                    </div>
                    <div>
                        <button class="submit-appointment">Submit</button>
                    </div>
                </div>

            </div>
            </form>
            <footer id="about-us">
                <div>
                    <p class="footer-head">Get an update every week</p>
                    <p class="footer-info">Livedoc was created in order to improve the patient experience.</p>
                </div>
                <div>
                    <img class="footer-logo" src="https://technext.github.io/live-doc/v1.0.0/assets/img/gallery/footer-logo.png" alt="">
                    <p class="last">The world's most trusted telehealth company.</p>
                </div>
            </footer>
            <script src="script.js"></script>
        </main>
   </div>
   <script src="https://cdn.botpress.cloud/webchat/v2.1/inject.js"></script>
   <script src="https://mediafiles.botpress.cloud/839329ae-2871-4510-ad69-8dbb47f4d51a/webchat/v2.1/config.js"></script>
</body>
</html>
