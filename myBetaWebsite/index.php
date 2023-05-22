<?php 

include 'include/db_connect.php';

$sql = "SELECT * FROM `myportfolio` WHERE `id` = 77721";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data['site']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"><?=$data['site']?></a></h1>
      
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/main_wallpaper.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          
          <h1 class="hero-title mb-4"><?=$data['username']?></h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items=<?=$data['title']?>></span></p>
          
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial_pic.png" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?=$data['username']?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?=$data['title']?></span></p>
                        <p><span class="title-s">Email: </span> <span><?=$data['email']?></span></p>
                        <p><span class="title-s">WhatsApp: </span> <span><?=$data['phone']?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>SQL</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>OpenGL</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                    Hello, I'm <?= $data['username']?>, a passionate frontend developer, 
                    website designer, graphic designer, and blogger. Originally from Pakistan, 
                    I am currently based in the beautiful city of Baku, Azerbaijan. 
                    With a strong command over HTML, CSS, JavaScript, PHP, SQL, and OpenGL, 
                    I bring creativity and functionality to every project I undertake. 
                    My expertise lies in designing visually appealing and user-friendly websites 
                    that leave a lasting impression.
                    </p>
                    <p class="lead">
                    As a frontend developer, I leverage my skills in HTML, CSS, and JavaScript 
                    to create engaging and responsive websites. I am well-versed in using popular 
                    frameworks like Bootstrap, which enables me to deliver seamless user experiences 
                    across different devices. Whether it's developing custom functionalities or 
                    optimizing website performance, I strive to deliver high-quality work that aligns 
                    with the latest industry standards.
                    </p>
                    <p class="lead">
                    In addition to my frontend development skills, I am also a proficient graphic designer. 
                    I harness the power of Canva.com to create captivating visual designs that enhance the 
                    overall aesthetics of websites. By combining my knowledge of colors, typography, and 
                    layout, I ensure that each design element harmonizes with the brand's identity and 
                    conveys the intended message effectively. Furthermore, my experience as a blogger 
                    on platforms like Blogger.com allows me to understand the importance of compelling content 
                    and share my opinions and knowledge with others.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                What you can work on with me
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-code-slash"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                I am a web designer who specializes in creating visually captivating and 
                user-friendly websites. With expertise in HTML, CSS, JavaScript, and 
                responsive design, I craft customized designs that reflect my clients' 
                goals and brand identity. From concept to implementation, I deliver 
                exceptional results by paying meticulous attention to detail and 
                staying up-to-date with the latest design trends and technologies.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-box-fill"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                I am a web developer experienced in creating dynamic and interactive websites. 
                Utilizing my skills in HTML, CSS, JavaScript, PHP, and SQL, I build robust and 
                efficient web applications. From responsive designs to backend development, 
                I strive to deliver seamless user experiences and optimized performance for every 
                project.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-body-text"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                I am a graphic designer with a passion for creating visually captivating designs. 
                With expertise in using design tools like OpenGL, AutoCAD and Canva, I craft 
                stunning visuals that enhance brand identity and leave a lasting impact. 
                From logos to marketing materials, I bring creativity and attention to detail 
                to every graphic design project I undertake.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/secondary_wallpaper.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Let's work together!
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                      Whether you need a visually stunning website, eye-catching graphics, 
                      or engaging blog content, I'm here to turn your vision into a reality. 
                      I pride myself on delivering high-quality work that not only meets your 
                      expectations but exceeds them. Let's collaborate and bring your ideas to life!
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span><?=$data['location']?></li>
                        <li><span class="bi bi-phone"></span><?=$data['phone']?></li>
                        <li><span class="bi bi-envelope"></span><?= $data['email'] ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="<?$data['github']?>" target = "_blank"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        <li><a href="<?$data['linkedin']?>" target = "_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="<?$data['blogger']?>" target = "_blank"><span class="ico-circle"><i class="bi bi-bootstrap-fill"></i></span></a></li>
                        <li><a href="<?$data['instagram']?>" target = "_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong><?= $data['username']?></strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="">Bootstrap & <?= $data['username']?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>