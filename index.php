<?php ob_start(); session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JhouWebDev</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/7-three-bounce.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112631399-1');
</script>
<body>


<header>
    <div class="loader">
        <div class="sk-three-bounce">
            <div class=" sk-child sk-bounce1"></div>
            <div class=" sk-child sk-bounce2"></div>
            <div class=" sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="home" class="header-container">
        <nav class="animated">
            <div class="container nav">
                <a class="nav-icon" data-scroll href="#home">Jhou</a>

                <button id="navButton"><span id="navBurger"></span></button>
                <ul class="nav-items">
                    <li><a class='scroll' data-scroll href="#home">Home</a></li>
                    <li><a class='scroll' data-scroll href="#portfolio">Portfolio</a></li>
                    <li><a class='scroll' data-scroll href="#skills">Skills</a></li>
                    <li><a class='scroll' data-scroll href="#about">About</a></li>
                    <li><a class='scroll' data-scroll href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="header">
            <h1 class="animated" data-animation="fadeIn" data-animation-delay="250">Jarrell Houston</h1>
            <h2 class="animated" data-animation="fadeIn" data-animation-delay="400">Full Stack Web Developer</h2>
            <div class="header-btn animated" data-animation="fadeIn" data-animation-delay="550">
                <a id="header-btn" data-scroll href="#portfolio">View My Projects</a>
            </div>
        </div>
    </div>
</header>

<div id="portfolio" class="section">
    <div  class="section-container">
        <h1 class="section-h1 animated" data-animation="fadeIn" data-animation-delay="100">My Projects</h1>

        <div id="filter-projects">
            <button class="btn btn-dark animated" data-filter="all" data-animation="fadeIn" data-animation-delay="200">All</button>
            <button class="btn btn-outline-dark animated" data-filter="personal" data-animation="fadeIn" data-animation-delay="350">Personal</button>
            <button class="btn btn-outline-dark animated" data-filter="client" data-animation="fadeIn" data-animation-delay="550">Client Work</button>
        </div>
        <div class="portfolio-items">
            <div class="all personal animated" data-animation="fadeIn" data-animation-delay="150" data-toggle="modal" data-target="#jestate"><img src="img/realestate.jpg" alt=""></div>
            <div class="all client animated" data-animation="fadeIn" data-animation-delay="300" data-toggle="modal" data-target="#edposh"><img src="img/edposh.jpg" alt=""></div>
            <div class="all personal animated" data-animation="fadeIn" data-animation-delay="450" data-toggle="modal" data-target="#thbeats"><img src="img/thbeats.jpg" alt=""></div>
            <div class="all client animated" data-animation="fadeIn" data-animation-delay="150" data-toggle="modal" data-target="#slide"><img src="img/slide.jpg" alt=""></div>
            <div class="all personal animated" data-animation="fadeIn" data-animation-delay="300" data-toggle="modal" data-target="#jimmyclone"><img src="img/jimmyclone.jpg" alt=""></div>
            <div class="all personal animated" data-animation="fadeIn" data-animation-delay="450" data-toggle="modal" data-target="#clique"><img src="img/cliqueimg.jpg" alt=""></div>
            <div class="all client animated" data-animation="fadeIn" data-animation-delay="150" data-toggle="modal" data-target="#jlservices"><img src="img/jlservices.jpg" alt=""></div>
            <div class="all client animated" data-animation="fadeIn" data-animation-delay="300" data-toggle="modal" data-target="#tritan"><img src="img/tritan.jpg" alt=""></div>

            <div class="modal fade portfolio-popup" id="jestate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">J Estate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> 
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="/img/realestate.jpg" alt="Real Estate Web App Image">
                                </div>
                                <p>Real Estate Web App that allows you to search for property within the radius of an address. View location of property via google maps and click marker or photo for detailed information. Filter real estate listings and favorite them for quick access using heart feature. All property data received from Attom data solutions API. Images are all randomly generated google images due to lack of images from API.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>Javascript</li>
                                    <li>API</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="/J-Estate" target="_blank">Local Site</a></li>
                                    <li><a href="https://github.com/Jarrell28/JEstate" target="_blank">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade portfolio-popup" id="jimmyclone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Jimmy Clone</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="/img/jimmyclone.jpg" alt="Jimmy Clone project image">
                                </div>
                                <p>Clone of an existing e-commerce clothing website. Search for clothing, filter products, add items to cart, and pay with sandbox paypal. All products are fake with google images manually inserted into a MySQL database. Built using Laravel Framework.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>Bootstrap</li>
                                    <li>PHP</li>
                                    <li>Laravel</li>
                                    <li>MySQL</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="/jimmyclone" target="_blank">Local Site</a></li>
                                    <li><a href="https://github.com/Jarrell28/jimmyjazz" target="_blank">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="thbeats" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">TH Beats</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="img/thbeats.jpg" alt="Music E-Commerce Website">
                                </div>
                                <p>A music ecommerce website that I built for a family member. Users can sample music beats, select a service plan to upload their music to be mixed and mastered, add beats to cart and purchase beats using sandbox paypal. The owner has a admin side that allows him to update his music being displayed, view messages, orders, and google analytics chart directly from admin. Built using slim framework, twig's templating engine and laravel's eloquent ORM</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>SCSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>PHP</li>
                                    <li>MySQL</li>
                                    <li>Slim</li>
                                    <li>Twig</li>
                                    <li>Eloquent</li>
                                    <li>Bootstrap</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="/THBeats/public/" target="_blank">Local Site</a></li>
                                    <li><a href="https://github.com/Jarrell28/THBeats" target="_blank">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="clique" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Clique</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="img/cliqueimg.jpg" alt="Clique Animation Site">
                                </div>
                                <p>A clone of an existing companies' homepage. Clean design filled with animations.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="/clique" target="_blank">Local Site</a></li>
                                    <li><a href="https://github.com/Jarrell28/clique" target="_blank">Github</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="slide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Slide Products</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="img/slide.jpg" alt="Slide E-Commerce Website">
                                </div>
                                <p>A live website that sells a variety of cleaning materials for machinery. Worked with another developer to build this website from scratch. I built all of the frontend while occasionally working on backend to display dynamic data from the database on pages like products, categories, account information, orders, cart, and samples using his custom framework.  Features that I specifically built include all of the form submissions using phpmailer and a lightbox popup that shows training videos from youtube.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>SCSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>PHP</li>
                                    <li>MySQL</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a>In Progress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="edposh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ed Posh Scholarship</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="img/edposh.jpg" alt="Ed Posh Scholarship">
                                </div>
                                <p>A live website that raises college scholarships for high school students. Built entire website from scratch with few photoshop designs provided. For the pages that wasn't designed, I freestyled them to match the designs from other pages. Also built contact form using phpmailer and has a gallery with lightbox popup for images.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>SCSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>PHP</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a target="_blank">In Progress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="tritan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tritan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="img/tritan.jpg" alt="Tritan Image">
                                </div>
                                <p>A live e-commerce website that sells a variety of mechanical parts. Built the frontend of the website from scratch using the photoshop design provided. Also built the contact form using phpmailer. The website later combined with an existing website which became the online catalog page of tritanpt.com.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>SCSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>PHP</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="http://www.tritanpt.com" target="_blank">Live Site</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade portfolio-popup" id="jlservices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog h-100" role="document">
                    <div class="modal-content h-100">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">JL Services</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="project-content">
                                <div>
                                    <img src="/img/jlservices.jpg" alt="JLServices Image">
                                </div>
                                <p>A live website that offers a variety of cleaning services. I built the fleet washing page that replaced an existing page and added additional fields to the client's contact form. Design for fleet washing page was provided as a photoshop file.</p>
                            </div>
                            <div class="project-desc">
                                <p>Tools:</p>
                                <ul class="project-tools">
                                    <li>HTML</li>
                                    <li>SCSS</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>PHP</li>
                                </ul>
                                <p>Links:</p>
                                <ul class="project-links">
                                    <li><a href="https://www.jlservicesgroup.com" target="_blank">Live Site</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="skills" class="section animated">
    <div class="section-container">
        <h1 class="section-h1 animated" data-animation="fadeIn" data-animation-delay="100">My Skills</h1>

        <div class="skill-items">
            <div class="skills-services">
                <div class="animated" data-animation="fadeIn" data-animation-delay="200"><i class="fas fa-shopping-cart"></i>
                    <h4>E-Commerce</h4>
                    <p>Do you need a website to sell your product? I am skilled in e-commerce websites and can build you your online store to boost your business. You will have an admin page to create, update, delete and view your products and orders. Also I can build a dashboard so you can view overall activity of your website. </p>
                </div>

                <div class="animated" data-animation="fadeIn" data-animation-delay="300"><i class="fas fa-file"></i>
                    <h4>Single Page</h4>
                    <p>Maybe you just need a single page website to display your work and provide contact information. I can build you a gallery website where you can show off your work with an about you section or any other content you want to add. Also can include a contact form so customers can email you directly from website if needed.</p>
                </div>

                <div class="animated" data-animation="fadeIn" data-animation-delay="400"><i class="fas fa-mobile"></i>
                    <h4>Responsiveness</h4>
                    <p>Everyone has a mobile phone nowadays. Your website will be fully responsive on mobile phones, ipads, tablets, you name it. Anyone will be able to view your website on whichever device they are using.</p>
                </div>

                <div class="animated" data-animation="fadeIn" data-animation-delay="200"><i class="fas fa-image"></i>
                    <h4>Design</h4>
                    <p>Have a custom design for your website? I can take that design and build it to look exactly the same as the design. Purchase a great design from a web designer or online to make your website stand out, and I will bring that design to life. </p>
                </div>

                <div class="animated" data-animation="fadeIn" data-animation-delay="300"><i class="fas fa-wrench"></i>
                    <h4>Maintenance</h4>
                    <p>Have any problems with your existing website? I can fix your website and apply any changes required. Maybe you want to update your website or redesign it. I can do all those things and anything else you need.</p>
                </div>

                <div class="animated" data-animation="fadeIn" data-animation-delay="400"><i class="fas fa-clipboard-list"></i>
                    <h4>Planning</h4>
                    <p>To get your website up and running as quickly as possible, you must provide a web design and the content in order for me to work as fast as possible. You also require a domain name and hosting. If you do not know about hosting and making your website live, I can set it up for you and provide hosting if necessary.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="about" class="section">
    <div class="section-container">
        <h1 class="section-h1 animated" data-animation="fadeIn" data-animation-delay="100">About Me</h1>
        <div class="about-section">
            <div class="about-me">
                <div class="about-img animated" data-animation="fadeIn" data-animation-delay="100">
                    <img src="img/me.jpg" alt="">
                </div>
                <div class="about-desc animated" data-animation="fadeIn" data-animation-delay="200">
                    <p>Self taught web developer who is extremely passionate and motivated to produce high quality responsive websites that satisfy customer needs. My love for code pushes me to improve daily and expand my knowledge of both frontend and backend.</p>
                </div>
            </div>
            <div class="about-skills">
                <ul>
                    <li>
                        <ul>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="200"><strong>Frontend:</strong></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="250">HTML</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="300">CSS</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="350">SCSS</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="400">Javascript</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="450">Jquery</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="500">Bootstrap</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="200"><strong>Backend:</strong></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="250">PHP</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="300">MYSQL</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="350">Laravel</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="400">Slim</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="450">Twig</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="500">Wordpress</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="200"><strong>Version Control:</strong></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="250">Git</li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="300">Github</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="200"><strong>Design:</strong></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="250">Photoshop</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="200"><strong>Links:</strong></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="250"><a href="https://github.com/Jarrell28" target="_blank">Github</a></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="300"><a href="https://www.linkedin.com/in/jarrell-houston-9857b210a/" target="_blank">LinkedIn</a></li>
                            <li class="animated" data-animation="fadeIn" data-animation-delay="350"><a href="/img/RESUME.pdf" download>Resume</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div id="contact" class="section">
    <div class="section-container">
        <h1 class="section-h1 animated" data-animation="fadeIn" data-animation-delay="100">Contact Me</h1>

        <div class="contact-section">
            <form action="mail.php" method="post" class="contact-form">
                <?php if(isset($_SESSION['email'])){
                    echo "<p class='email-message'>{$_SESSION['email']}</p>";
                    unset($_SESSION['email']);
                }?>
                <p class="animated" data-animation="fadeIn" data-animation-delay="250"><label for="email">Email</label><input type="email" name="email" id="email" placeholder="Email"></p>
                <p class="animated" data-animation="fadeIn" data-animation-delay="350"><label for="subject">Subject</label><input type="text" id="subject" name="subject" placeholder="Subject"></p>

                <p class="animated" data-animation="fadeIn" data-animation-delay="450"><label for="message">Message</label><textarea name="message" id="message" cols="30" rows="5" placeholder="Message" ></textarea>
                </p>
                <p class="text-center animated" data-animation="fadeIn" data-animation-delay="550"><button type="submit" name="submit" class="submitButton">Submit</button></p>
            </form>
        </div>
    </div>
</div>

<footer>
    <a href="#home" data-scroll class="top animated" data-animation="fadeIn" data-animation-delay="150"><i class="fas fa-angle-double-up"></i></a>
    <div class="contact-socials">
        <p class="animated" data-animation="fadeIn" data-animation-delay="350"><a class="d-flex align-center" href="mailto:jhouston2882@gmail.com"><i class="fas fa-envelope"></i></a></p>
        <p class="animated" data-animation="fadeIn" data-animation-delay="450"><a class="d-flex align-center" href="https://www.linkedin.com/in/jarrell-houston-9857b210a/" target="_blank"><i class="fab fa-linkedin"></i></a></p>
        <p class="animated" data-animation="fadeIn" data-animation-delay="550"><a class="d-flex align-center" href="https://github.com/Jarrell28"><i class="fab fa-github"></i></a></p>
    </div>;
    <p class="text-center text-white m-0 animated" data-animation="fadeIn" data-animation-delay="250" style="font-size: 14px;">Jarrell Houston &copy;<?php echo date('Y');?></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/js/smooth-scroll.polyfills.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<script type="" src="js/script.js"></script>

<script>

</script>

</body>
</html>