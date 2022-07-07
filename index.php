<?php 

    $mesg = "";

    if(isset($_POST['btn'])) {
        $name = $_POST['name'];
        $budget = $_POST['Budget'];
        $msg = $_POST['msg'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];

        $conn = mysqli_connect("localhost" , "root" , "" ,"pf");

       if(mysqli_query($conn, "INSERT INTO `contact` (`name` , `budget` , `msg` ,`phone` ,`email` ) VALUES ('$name' , '$budget' , '$msg' , '$phone' , '$email')")){
            header("Location: thanks.php");
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <!-- styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Abbravei</title>
</head>
<body>
    <div class="container">
        <div class="bg-primary">
            <header id="header" class="header">
                <div class="mobile-nav">
                    <div class="logo-container">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="abbravei logo" class="logo" />
                        </a>
                    </div>
                    <i class="fas fa-bars fa-2x" id="menu"></i>
                </div>
                <div class="logo-container-main">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="abbravei logo" class="logo" />
                        </a>
                </div>
                <ul class="navigation">
                    <li class="nav-item"><a href="#about" class="nav-link">about me</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link">portfolio</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">services</a></li>
                    <li class="nav-item"><a href="#testimonials" class="nav-link">testimonials</a></li>
                    <li class="nav-item"><a href="#contact" class="btn-primary btn">contact us</a></li>
                </ul>
                <ul class="mobile-navigation" id="mobile-navigation">
                     <li class="nav-item"><a href="#about" class="nav-link">about me</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link">portfolio</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">services</a></li>
                    <li class="nav-item"><a href="#testimonials" class="nav-link">testimonials</a></li>
                    <li class="nav-item"><a href="#contact" class="btn-primary btn">contact us</a></li>
                </ul>
            </header>
            <div class="hero" id="about">
                <div class="img-container">
                    <img src="assets/images/men.png" alt="Abbravei" class="main-image" />
                </div>
                <div class="hero-text">
                    <p class="btn-light">Welcome! I'm</p>
                    <h1 class="fs-1">Ayoub Berouijel</h1>
                    <h3 class="fs-3">Web developer</h3>
                    <p class="mt-1 lh-lg">
                        i'm Professional Web developer . and i'm very passionate and dedicated to my work. with 2 years ence as a Web developer. i have acquired the skills and the knowledge neccessary to make your project a success.   
                    </p>
                </div>
            </div>
        </div>
        <main>
            <div class="bg-secondary">
                <div id="portfolio">
                    <div class="portfolio-header">
                        <div class="portfolio-header-text">
                            <h2 class="fs-2">Portfolio</h2>
                            <p class="mt-1 text-capitalize">this is the project i have done on the past two years</p>
                        </div>
                    </div>
                    <div class="portfolio-grid mt-5">
                        <div class="item-grid"><a href="https://abbravei.netlify.app" target="_blank"><img src="assets/images/portfolio.png" alt="portfolio design" class="img-fluid"></a></div>
                        <div class="item-grid"><a href="https://shockjump.store" target="_blank"><img src="assets/images/store.png" alt="store app" class="img-fluid"></a></div>
                        
                        <div class="item-grid"><img src="assets/images/school.png" alt="school app" class="img-fluid"></div>
                        <div class="item-grid"><a href="http://theshorty.online" target="_blank"><img src="assets/images/shorty.png" alt="short url app" class="img-fluid"></a></div>
                        <div class="item-grid"><a href="http://neon-magic.online" target="_blank"><img src="assets/images/neon-magic.png" alt="neon magic app" class="img-fluid"></a></div>
                        <div class="item-grid"><img src="assets/images/blog.png" alt="blog design" class="img-fluid"></div>
                        <div class="item-grid"><a href="http://digitalfontain.com" target="_blank"><img src="assets/images/webo.png" alt="webo landing page" class="img-fluid"></a></div>
                        <div class="item-grid"><img src="assets/images/teamy.png" alt="task management app" class="img-fluid"></div>
                        <div class="item-grid"><img src="assets/images/fishy.png" alt="fish stock managemnt app" class="img-fluid"></div>
                    </div>
                </div>
            </div>
            <div class="bg-primary">
                <div id="services">
                    <div class="services-header">
                        <div class="mb-3">
                            <h2 class="fs-2">Services</h2>
                            <p class="mt-1 text-capitalize">this is the Service i can Offre to you </p>
                        </div>
                    </div>
                    <div class="services-grid">
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fas fa-file-code text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">Web Devlopement</h4>
                                <p class="mt-1 lh-lg text-capitalize">Create all kind of web applications , web design and Extensions with diffrent language and possibilities.</p>
                            </div>
                        </div>
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fas fa-database text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">Hosting Services</h4>
                                <p class="mt-1 lh-lg text-capitalize">Host and manage your website on a server, going live and buy domain names.</p>
                            </div>
                        </div>
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fas fa-mobile-screen text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">Application Mobile</h4>
                                <p class="mt-1 lh-lg text-capitalize">create native mobile applications with multiple options.  </p>
                            </div>
                        </div>
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fas fa-hashtag text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">Social Media Marketing</h4>
                                <p class="mt-1 lh-lg text-capitalize">run and manage compaigns on social media with several platform, and Search Engine Optimization.</p>
                            </div>
                        </div>
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fab fa-wordpress text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">Content Management System</h4>
                                <p class="mt-1 lh-lg text-capitalize">Manage several Content Management System like wordpress, shopify and drupal. </p>
                            </div>
                        </div>
                        <div class="item-grid">
                            <div class="text-center mb-3">
                                <i class="fas fa-store text-primary fa-2x"></i>
                                <h4 class="fs-4 mt-1">E-commerce</h4>
                                <p class="mt-1 lh-lg text-capitalize">create an E-commerce store with multiple choice and options. </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="bg-secondary">
                <div id="testimonials">
                       <div class="testimonials-header">
                            <div class="mb-3">
                                <h2 class="fs-2">testimonials</h2>
                                <h3 class="mt-1 fs-3 text-capitalize">What client say </h3>
                            </div>
                        </div>
                        <div class="cards">

                            <div class="card">
                                <div class="card-header">
                                    <p class="quote-sign">''</p>
                                    <p class="revies-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                 </div>
                                 <div class="card-body">
                                   <p class="mt-1">You are always available, we are very satisfied with your online store. thank you.</p>
                                </div>
                                <div class="card-footer mt-1">
                                    <img src="assets/images/mrini.jpg" class="img-rounded" alt="Mohammed mrini" />
                                    <div class="name-job">
                                        <h5 class="fs-5">Mohammed mrini</h5>
                                        <p class="job-title">Entrepreneur</p>
                                    </div>
                               </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <p class="quote-sign">''</p>
                                    <p class="revies-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                 </div>
                                 <div class="card-body">
                                   <p class="mt-1">We are very satisfied Working With you, the design is very beautiful, the site is fast, flexible and secure.</p>
                                </div>
                                <div class="card-footer mt-1">
                                    <img src="assets/images/jones.jpg" class="img-rounded" alt="Mohammed mrini" />
                                    <div class="name-job">
                                        <h5 class="fs-5">Nora Jones</h5>
                                        <p class="job-title">Entrepreneur</p>
                                    </div>
                               </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <p class="quote-sign">''</p>
                                    <p class="revies-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </p>
                                 </div>
                                 <div class="card-body">
                                   <p class="mt-1">Your real estate application is very complete, made many tasks easier for me, easily allows me to manage rents and generate e-receipts.</p>
                                </div>
                                <div class="card-footer mt-1">
                                    <img src="assets/images/moawi.jpg" class="img-rounded" alt="Mohammed mrini" />
                                    <div class="name-job">
                                        <h5 class="fs-5">Brahim Moawi</h5>
                                        <p class="job-title">Real Estate Agent</p>
                                    </div>
                               </div>
                            </div>
                       </div>
                </div>
            </div>
             <div class="bg-primary">
                  <div id="contact">
                            <div class="contact-container">
                                <div class="Contact-header">
                                    <div class="mb-3">
                                        <h2 class="fs-2">Contact Us</h2>
                                        <p class="mt-1 text-capitalize lh-lg">Let's make something now , diffrente and more meaningful or make things more visual or conceptual .</p>
                                    </div>
                                </div>

                                <div class="contact-info">
                                    <div id="phone">
                                        <div class="img-rounded p-2 bg-danger text-center">
                                            <i class="fas fa-phone fa-2x"></i>
                                        </div>
                                        <div class="info">
                                            <p class="text-gray">Call Me</p>
                                            <p class="mt-1">+212 635747467</p>
                                        </div>
                                    </div>
                                    <div id="email">
                                        <div class="img-rounded p-2 bg-danger text-center">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div class="info">
                                            <p class="text-gray">Email</p>
                                            <p class="mt-1">aberouijel@gmail.com</p>
                                        </div>
                                    </div>
                                    <div id="address"> 
                                       <div class="img-rounded p-2 bg-danger text-center">
                                            <i class="fas fa-map-marker fa-2x"></i>
                                        </div>
                                        <div class="info">
                                            <p class="text-gray">Address</p>
                                            <p class="mt-1">sidi dris tangier</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form mt-4">
                                <h2 class="fs-2">Drop a Line</h2>
                                <form  method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                        <input type="text" class="form-control" name="Email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Phone" placeholder="Phone">
                                        <input type="text" class="form-control" name="Budget"  placeholder="Budget en $">
                                    </div>
                                    <textarea name="msg" class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    <button class="btn btn-primary w-25" type="submit" name="btn" >Submit</button>
                                   <p class="text-success"><?php echo $mesg ?></p>  
                                </form>
                            </div>
                     </div>
                </div>
            </div>  
        </main>

        <footer class="footer bg-secondary ">
            <div class=" text-center pt-4">
                <div class="round-circle ">
                    <div class="cont">
                        <h2 class="fs-2">Lets Say Hi</h2>
                        <div class="d-flex mt-1">
                           <a href="#">  
                               <i class="fab fa-facebook text-primary fa-2x"></i>
                           </a> 
                           <a href="#">  
                               <i class="fab fa-tiktok text-primary fa-2x"></i>
                           </a> 
                           <a href="#">  
                               <i class="fab fa-instagram text-primary fa-2x"></i>
                           </a> 
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <p class="mt-2 text-center">
                &copy; 2022 - Abbravei | All right reserved
            </p>
        </footer>
    </div>
    <script src="assets/main.js"></script>
</body>
</html>