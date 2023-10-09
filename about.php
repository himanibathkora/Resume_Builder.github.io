<?php include"header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body{
      background-color:#6AC49C;
    }
    #container{
    max-width: 1050px;
    margin: 0 auto;
    padding: 0 1.6rem;
}
h1{
    font-family:'Ubuntu', sans-serif ;
    
}
.imgbox {
  width: 70%;
  position: relative;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  display: flex;
  height: 700px;
  min-height: auto;
}

.image1 {
  margin-top: 39%;
  margin-right: 80%;
  margin-bottom: 29%;
  margin-left: 0px;
  height: 32%;
  width: 20%;
  position: absolute;
  border: 2px solid #000;
}

.image2 {
  margin-top: 19%;
  margin-right: 42%;
  margin-bottom: 42%;
  margin-left: 23%;
  width: 35%;
  height: 39%;
  position: absolute;
  border: 2px solid #000;
}

.image3 {
  width: 13%;
  height: 21%;
  position: absolute;
  margin-top: 62%;
  margin-right: 64%;
  margin-bottom: 30%;
  margin-left: 23%;
  border: 2px solid #000;
}

.image4 {
  width: 54%;
  height: 33%;
  position: absolute;
  margin-top: 62%;
  margin-right: 27%;
  margin-bottom: 0px;
  margin-left: 39%;
  border: 2px solid #000;
}

.image5 {
  position: absolute;
  width: 33%;
  height: 21%;
  margin-top: 37%;
  margin-right: 27%;
  margin-bottom: 41%;
  margin-left: 60%;
  border: 2px solid #000;
}

.image6 {
  position: absolute;
  margin-top: 0px;
  margin-right: 3%;
  margin-bottom: 67%;
  margin-left: 62%;
  width: 65%;
  height: 33%;
  border: 2px solid #000;
}

.image7 {
  position: absolute;
  width: 45%;
  margin-top: 37%;
  margin-right: 0px;
  margin-bottom: 18%;
  margin-left: 95%;
  height: 42%;
  border: 2px solid #000;
}


.column {
  float: left;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  margin-bottom: 10px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

</style>
<body> <br><br>
     <header class = "">
        <h1 class = " text-blue text-center">Build your resume with proCV+ and unlock opportunities</h1><br>
        
    </header>
   
    
    <div id="container">
            <div class="imgbox">
                <img src="./img/img1.avif" alt="" class="image1">
                <img src="./img/img2.avif" alt="" class="image2">
                <img src="./img/format2.jpeg" alt="" class="image3">
                <!-- <img src="./img/img4.avif" alt="" class="image3"> -->
                <img src="./img/img4.avif" alt="" class="image4">
                <img src="./img/img5.avif" alt="" class="image5">
                <img src="./img/img6.avif" alt="" class="image6">
                <img src="./img/img7.avif" alt="" class="image7">
            </div>
          
              <BR>
               <p class="text-black">Welcome to proCV+, your ultimate destination for creating professional resumes with ease and confidence. We understand that crafting a compelling resume can be a daunting task, and that's why we're here to simplify the process for you.</p><br>
               <p class="text-black">our mission is to empower job seekers like you to stand out from the crowd and land your dream job. We believe that a well-crafted resume is the key to opening doors to exciting career opportunities. That's why we've developed a user-friendly platform that provides you with all the tools and resources you need to build a stellar resume that showcases your skills, experience, and achievements.</p><br>
               <p class="text-black">With proCV+, you can effortlessly create a visually appealing and ATS-friendly resume that captures the attention of hiring managers. Our intuitive editor allows you to personalize every aspect of your resume, from font styles and colors to section layouts and bullet points. You can easily add and rearrange sections, import your existing resume, and even integrate online portfolios or LinkedIn profiles to enhance your professional brand.</p><br>
               <p class="text-black">We are committed to providing you with the most up-to-date resume-building techniques and industry insights. Our blog features a wealth of articles, guides, and tips to help you navigate the job search process successfully. Whether you need advice on resume writing, interview preparation, or job search strategies, we're here to support you every step of the way.</p><br>
               <p class="text-black">Start building your resume today and take the first step toward unlocking your career potential. At proCV+, we are dedicated to your success. Your dream job is just a resume away.</p>
    </div>
    
    <br>
    <header class = "">
        <h1 class = " text-blue text-center">OUR TEAM</h1><BR></BR>
    </header>
    <div class="row">
        <div class="column">
            <div class="card">
            <img src="./img/HIMANI.jpg" alt="Jane" style="width:100%"><br>
            <div class="container">
                    <h2>Himani Bathkora</h2>
                    <p class="title">Frontent Developer</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p><br> -->
                    <h5 class="text-blue-dark">himanibathkora24@gmail.com</h5>
                    <br>
                
            </div>
        </div>
  </div>

  <div class="row">
        <div class="column">
            <div class="card">
            <img src="./img/ISHIKA.jpg" alt="Jane" style="width:100%"><br>
            <div class="container">
                    <h2>Ishika Mehra</h2>
                    <p class="title">Backend Developer</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p><br> -->
                    <h5 class="text-blue-dark">mehraishika22@gmail.com</h5>
                    <br>
                
            </div>
        </div>
  </div>

  <div class="row">
        <div class="column">
            <div class="card">
            <img src="./img/HEMANT.jpg" alt="Jane" style="width:100%"><br>
            <div class="container">
                    <h2>Hemant Singh </h2>
                    <p class="title">Backend Developer</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p><br> -->
                    <h5 class="text-blue-dark">hemantsinghparihar13@gmail.com</h5>
                    <br>
                
            </div>
        </div>
  </div>

  <div class="row">
        <div class="column">
            <div class="card">
            <img src="./img/HARSH.jpg" alt="Jane" style="width:100%"><br>
            <div class="container">
                    <h2>Harshvardhan</h2>
                    <p class="title">Frontent Developer</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p><br> -->
                    <h5 class="text-blue-dark">singhharsh9524@gmail.com</h5>
                    <br>
                
            </div>
        </div>
  </div>

  <div class="row">
        <div class="column">
            <div class="card">
            <img src="./img/JATIN.jpeg" alt="Jane" style="width:100%"><br>
            <div class="container">
                    <h2>Jatin Bisht</h2>
                    <p class="title">Frontent Developer</p>
                    <!-- <p>Some text that describes me lorem ipsum ipsum lorem.</p><br> -->
                    <h5 class="text-blue-dark">jatinborabisht@gmail.com</h5>
                    <br>
                
            </div>
        </div>
  </div>

  

</div>
    <?php include"footer.php"?> 
</body>
</html>