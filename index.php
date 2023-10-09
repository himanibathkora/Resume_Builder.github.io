<?php include"header.php"?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	
</head>
<body>
        <header class = "header bg-bright" id = "header">
            <div class = "container">
                <div class = "header-content ">
                    <h1 class = " text-white">Create your standout resume effortlessly with our innovative online builder.</h1>
                    <p class = " text-white fs-15">"Build a polished resume that grabs attention and secures job opportunities with our user-friendly online resume builder." - try now for free!</p>
                    <a href = "resume.php" class = "btn btn-primary text-uppercase">create your resume</a>
                </div>   
            </div>
        </header>

        <div class="section-one bg-light" id="section-one">
            <div class="container">
                <div class = "section-one-content">
                    <div class="section-one-l">
                        <img src = "./img/anim.png">
                    </div>
                    <div class = "section-one-r text-center">
                        <h2 class = "lg-title">Crafting Your Future: Empower Your Resume with our Professional Builder</h2>
                        <p class = "text">Getting that dream job can seem like an impossible task. We're here to change that. Give yourself a real advantage with the best online resume maker: created by experts, imporved by data, trusted by millions of professionals.</p>
                        <div class = "btn-group">
                            <a href = "resume.php" class = "btn btn-primary text-uppercase">create your resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "section-two bg-bright" id="section-two">
            <div class="container">
                <div class="section-two-content">
                    <div class = "section-items">
                        <div class = "section-item">
                            <div class = "section-item-icon">
                            <img src = "./img/icon1.png">
                            </div>
                            <h5 class = "section-item-title">Make a resume that wins interviews!</h5>
                            <p class = "text">Use our resume maker with its advanced creation tools to tell professional story that engages recruiters, hiring managers and even CEOs.</p>
                        </div>

                        <div class = "section-item">
                            <div class = "section-item-icon">
                            <img src = "./img/icon2.png">
                            </div>
                            <h5 class = "section-item-title">Resume writing made easy!</h5>
                            <p class = "text">Resume writing has never been this effortless. Pre-generated text, visual designs and more - all already integrated into the resume maker. Just fill in your details.</p>
                        </div>

                        <div class = "section-item">
                            <div class = "section-item-icon">
                            <img src = "./img/icon3.png">
                            </div>
                            <h5 class = "section-item-title">A recruiter-tested CV maker tool</h5>
                            <p class = "text">Our resume builder and its pre-generated content are tested by recruiters and IT experts. We help your CV become truly competitive in the hiring process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <?php include"footer.php"?>
</body>
<script>

    
    // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</html>