<!DOCTYPE HTML>
<html>
<head>
<title>Crime Master Gogo</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_common.css">
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
<script src="assets/js/modernizr.custom.69142.js"></script>
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/js/bootstrap.min.js" ></script>
</head>
<body>
<div id="page-top" class="index">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand page-scroll" href="#page-top">Crime Master Gogo</a></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="page-scroll" href="#page-top">Home</a></li>          
          <li><a class="page-scroll" href="#about">Features</a></li>
          <li><a class="page-scroll" href="#team">Team</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
          <?php
          session_start();

          if(!isset($_SESSION['user']))
          {
          	echo "<li><a class='page-scroll' href='Login.php'>Log in</a></li>";
          }
          else
          {
          	//echo "<form action='' method='post'>";
          	echo "<li><a class='page-scroll' href='Logout.php'>Log out</a></li>";
          	//echo "<button type='submit' class='btn btn-primary'>Send Message</button>";
          	//echo "</form>";
          }
          ?>
          
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <!-- Header -->
  <header style="background-image:url(assets/img/Criminal-Law.jpg)">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Crime Master Gogo Welcomes You!</div>
        <div class="intro-heading">Solve Your Problems Here</div>
        <form action="search.php" method="post">
        <input type="text" class="form-control" name="crime">
        <br>
        <input type="submit" class="btn btn-primary" value="Ask">
    	</form>
        
    </div>
  </header>
</div>
    </div>
  </div>
</section>
<!-- ===== Team Section ===== -->
    </div>
  </div>
</section>
<script>	
Modernizr.load({
    test: Modernizr.csstransforms3d && Modernizr.csstransitions,
    yep: ['assets/js/jquery-1.10.1.min.js', 'assets/js/jquery.hoverfold.js'],
    nope: '',
    callback: function(url, result, key) {
        if (url === 'assets/js/jquery.hoverfold.js') {
            $('#grid').hoverfold();
        }
    }
});
</script> 
<!-- About Section -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Our Features</h2>
              </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image"><img class="ipc.jpeg" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading" style="color:#3680C1"><a href="report42.pdf" download="Indian_Penal_Code">Indian Penal Code (IPC)</a> </h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">The Indian Penal Code (IPC) is the main criminal code of India. It is a comprehensive code intended to cover all substantive aspects of criminal law.The Code has since been amended several times and is now supplemented by other criminal provisions.!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="img-circle img-responsive" src="assets/img/" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading" style="color:#3680C1"><a href="CrPC.pdf" download="CRPC">The Code of Criminal Procedure (CrPC )</a></h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">The Code of Criminal Procedure (CrPC ) is the main legislation on procedure for administration of substantive criminal law in India.[1] It was enacted in 1973 and came into force on 1 April 1974.!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image"><img class="img-circle img-responsive" src="assets/img/xperia-z4-tablet-black-1240x840-a07acf270af4d6789d0e83aea747b064.png" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading" style="color:#3680C1"><a href="ask.php">Ask the Expert</a></h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Professional who has acquired knowledge and skills through study and practice over the years, in a particular field or subject, to the extent that his or her opinion may be helpful in fact finding, problem solving, or understanding of a situation! !</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="" alt="">
              <img class="img-circle img-responsive" src="assets/img/" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading" style="color:#3680C1"><a href="search.php">Search IPC and CrPc Laws</a></h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Just put your keyword and we will give you all the IPC or CrPC laws that can help you.</p>
              </div>
            </div>
            </li>
            <li>
            <div class="timeline-image"><img class="img-circle img-responsive" src="assets/img/xperia-z4-tablet-black-1240x840-a07acf270af4d6789d0e83aea747b064.png" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading" style="color:#3680C1"><a href="contract.php">Give a Contract</a></h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Put forward a contract with all its details. APut your quotation and desciption of your case which can be taken by any lawyer</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Crime<br>
                Master<br>
                GoGo</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ===== Team Section ===== -->
<section id="team" class="bg-success">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Our Team</h2>
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member"><img src="assets/img/nabeel.jpg" class="img-responsive img-circle" alt="">
          <h4 style="color:#3680C1">Nabeel Sayed</h4>
         
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member"><img src="assets/img/ismail.jpg" class="img-responsive img-circle" alt="">
          <h4 style="color:#3680C1">Ismail Sayyad</h4>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member"><img src="assets/img/anas.jpg" class="img-responsive img-circle" alt="">
          <h4 style="color:#3680C1">Anas Shaikh</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== Contact Us ===== -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Contact Us</h2>
        <h3 class="section-subheading text-muted"></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form method="post" name="sentMessage" action="index1.php" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-md-offset-">
        <ul class="list-inline social-buttons">
          
        </ul>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h3 style="color:#3680C1">Thank You For Visiting</h3>
        
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</footer>
</body>
</html>