<?php
session_start();
$username=$_SESSION['username'];
    // error_reporting(0);
   $host="localhost";
   $db="project";
   $user="root";
   $password="";
   $conc=mysqli_connect($host,$user,$password,$db);
   if(mysqli_connect_error()){
       echo mysqli_connect_error();
       exit;
   }
 
   $sql="SELECT * FROM `resum` WHERE username='$username' ORDER BY crr_date DESC LIMIT 1;";
   $result=mysqli_query($conc,$sql);
   if(!$result)
   {
    echo "<script>
    alert('SQL error');
    history.back();
    </script>
   "; 
   }
   else{

        while($data=mysqli_fetch_assoc($result))
        {       $firstname=ucwords($data['fn']);
            $middlename=ucwords($data['mn']);
            $lastname=ucwords($data['ln']);
            $email=ucwords($data['email']);
            $address=ucwords($data['ad']);
            $phoneno=$data['phone'];
            $summary=ucwords($data['summary']);
            $skill=(unserialize($data['skill']));
            $uimage=$data['uimage'];

            $atitle=unserialize($data['atitle']);
            $ades=unserialize($data['ades']);

            // unserialize($data['']);

            $exptitle=unserialize($data['etitle']);
            $exporg=unserialize($data['eorg']);
            $explocation=unserialize($data['elocation']);
            $expsdate=unserialize($data['esdate']);
            $expedate=unserialize($data['eedate']);
            $expdesc=unserialize($data['edes']);

            $school=unserialize($data['school']);
            $degree=unserialize($data['degree']);
            $cgpa=unserialize($data['cgpa']);
    


            $pname=unserialize($data['pname']);
            $plink=unserialize($data['plink']);
            $pdes=unserialize($data['pdes']);
            // $_POST['layout_ooe'])

            // echo ($_POST['layout']);
            // die;
        
            if($_POST['layout']=='layout1')
            {
            echo"
             
            <link rel='stylesheet' href='css/template1.css'>
            <div id='inner-nav'></div>
            <div id='container'>
                <div id='profile'>
                    <div id='image'>
                        <img id='profile-photo' src='user_images/$uimage' alt='Profile-Image'>
                       
                    </div><br>
                    <p id='name'>$firstname $middlename $lastname</p>
                    <hr><br>
                    <div id='about'>
                        <p style='display:inline;'>About</p>
                    </div>
                    <p id='year-graduation'>Year of Graduation<br><strong>July, 2023</strong></p>
                    <p id='email'>Email<br><strong>$email</strong></p>
                    <p id='telephone'>Telephone<br><strong>$phoneno</strong></p>
                    <p id='address'>Address<br><strong>$address</strong></p>
                    <p id='Summary'>Summary<br><strong>$summary</strong></p><br><br>
                    <div id='skills'>
                        <p style='display:inline;'>Skills</p>
                    </div>
                    <ul id='skillshow'>";
                  
                    for($i=0;$i<count($skill);$i++){
                  echo"       
                     <li id='skill1'>";echo ucwords($skill[$i]) ;echo"</li> ";
                   ?>                
                  <?php }
                    echo"
                     </ul>
                       <br><br>
                   
                        
                        
                </div>
                <div id='info-cards'>
                    
                    
                    <div class='card'>
                        <p><i class='fas fa-graduation-cap stroke-transparent'></i>&nbsp;&nbsp;&nbsp;Education</p>
                        <ul>";
                        for($i=0;$i<count($school);$i++){
                            echo"       
                               
                            <li><p class='tags'>";echo ucwords($school[$i]) ;echo"<br><span>";echo ucwords($degree[$i]) ;echo"| <span>";echo ucwords($cgpa[$i]) ;echo"%</span></span></p></li>";
                            ?>                
                           <?php }
                             echo"
                              </ul> 
                              
                              </div>
                    <div class='card'>
                        <p><i class='fas fa-briefcase stroke-transparent'></i>&nbsp;&nbsp;&nbsp;Work Experience and Internships</p>
                         <ul>";
                        for($i=0;$i<count($exptitle);$i++){
                            echo"       
                            
                            <li><p class='tags'>";echo ucwords($exptitle[$i]) ;echo" at ";echo ucwords($exporg[$i]) ;echo"<span> ";echo ucwords($explocation[$i]) ;echo"| <span>";echo ucwords($expsdate[$i]) ;echo" to ";echo ucwords($expedate[$i]) ;echo"<span></span><br>
                            <span>";echo ucwords($expdesc[$i]) ;echo"</span></p></li>";
                            ?>                
                           <?php }
                             echo"
                              </ul></div>
                    <div class='card'>
                        <p><i class='fas fa-briefcase stroke-transparent'></i>&nbsp;&nbsp;&nbsp;Project</p>
                        <ul>";
                        for($i=0;$i<count($pname);$i++){
                            echo" 
                            <li><p class='tags'>";echo ucwords($pname[$i]) ;echo"<span><a href='$plink[$i]'> Click to view Project!!</a></span><br>
                            <span>";echo ucwords($pdes[$i]) ;echo" </span></p></li>";
                            ?>                
                           <?php }
                             echo"
                              </ul>
                    </div>
                    <div class='card'>
                    <p>Achievements</p>
                
                
                         <ul id=''>";
                         for($i=0;$i<count($atitle);$i++){
                        echo"       
                       
                        <li><p class='tags'>";echo ucwords($atitle[$i]) ;echo"<span><br>";echo ucwords($ades[$i]) ;echo"</span><br></p></li>";
                        ?>                
                       <?php }
                         echo"
                          </ul>

                          </div>
                </div>
            </div>
            
            <div id=printResume>
            <button id='printRes' onClick=printResume() class='no-print btn btn-primary btn-block my-2 w-25'>Print</button>
            </div>
            ";
        }
     
        else if($_POST['layout']=='layout2')
        {
            echo"
            <link rel='stylesheet' href='css/template2.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' integrity='sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <div class='container' id='container'>
       
        <div class='left' id='left' >
            <!-- =============profile pic and Text===================== -->
            <div class='profileText' id='profileText'>
                <div class='imgBx' id='imgBx'>
                    <img id='img' src='user_images/$uimage' alt='' >
                </div>
                <h2 id='name'>$firstname $middlename $lastname</h2>
            </div>

            <div class='contactInfo'>
                <h3 class='title'>Contact</h3>
                <ul>
                    <li>
                    
                        <span class='text' id='phone'>$phoneno</span>
                    </li>
                    <li>
                       
                        <span class='text' id='mail'>$email</span>
                    </li>
                    <li>
                       
                        <span class='text' id='address'>$address</span>
                    </li>
                   
                </ul>
            </div>

            <div class='contactInfo education '>
                <h3 class='title'>Education</h3>
                <ul>";
                for($i=0;$i<count($school);$i++){
                    echo"<li>
                    <h5 id='school1'>";echo ucwords($school[$i]);echo"</h5>    
                    <h6 id='degree1'>";echo ucwords($degree[$i]);echo"<span> | </span><span  id='cgpa1'>";echo ucwords($cgpa[$i]);echo"%</span></h6>
                    
                    </li>";?>
                    <?php }
                    echo"   
                </ul>
            </div>
            <div class='contactInfo skills'>
                <h3 class='title'>skills</h3>
                <ul>
                    <ul id='skillshow'>";
                    for($i=0;$i<count($skill);$i++){
                  echo" 
                        <li id='skill1'>";echo ucwords($skill[$i]); echo"</li>";
                    ?>
                    <?php }
                    echo"</ul>
                </ul>
            </div>
           
            
        </div>
        
        <!-- ===================right part======================== -->
        <div class='right'>
            <div class='summary'>
                <h3 class='title2'>summary</h3>
                <p id='description'>$summary</p>
             </div>
            <div class='projects'>
                <h2 class='title2'>PROJECTS </h2>  
                <ul>";
                for($i=0;$i<count($pname);$i++){
                    echo"
                    <li>
                        <p id='project1' class='p-head'>"; echo ucwords($pname[$i]); echo"</p>
                        <a id='P-link1' href='$plink[$i]'><p>visit my project</p></a>
                        <p id='description1'>";echo ucwords($pdes[$i]) ;echo"</p>
                    </li>";
                ?>
                <?php }
                echo" 
                </ul>               
                
            </div>

            <div class='experience'>
                <h2 class='title2'>EXPERIENCE</h2> 
                <ul>";
                for($i=0;$i<count($exptitle);$i++){
                    echo"
                    <li>
                        <p id='Experience-title1' class='p-head'>";echo ucwords($exporg[$i]) ;echo"<span> | <span>"; echo ucwords($explocation[$i]) ; echo"</span> | <span>"; echo ucwords($expsdate[$i]) ; echo" to "; echo ucwords($expedate[$i]) ; echo"</span><br>
                        <span>";echo ucwords($expdesc[$i]) ; echo"</span></p>
                    </li>";
                ?>
                <?php }
                echo"
                </ul>
            </div>

            <div class='acheivments'>
                <h2 class='title2'>ACHEIVEMENTS</h2>  
                <ul>";
                for($i=0;$i<count($atitle);$i++){
                    echo"
                    <li>
                        <p id='acheivment1' class='p-head'>"; echo ucwords($atitle[$i]) ; echo"</p>
                       
                        <p id='acheivment-description1'>";echo ucwords($ades[$i]) ; echo"</p>
                    </li>";
                ?>
                <?php }
                echo"
                </ul>
            </div>
        </div>
    </div>
    <div id=printResume>
    <button id='printRes' onClick=printResume() class='no-print btn btn-primary btn-block my-2 w-25'>Print</button>
    </div>

            ";
        }
        else if($_POST['layout']=='layout3')
        {
            echo"
            <link rel='stylesheet' href='css/temp3.css'>
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css'>
            
            <section class='main-section'>
        <div class='left-part'>
            <div class='photo-container'>
                <img src='user_images/$uimage' alt='>
            </div>
            <div class='contact-container'>
                <h2 class='title'>Contact Me</h2>
                <div class='contact-list'>
                    <div class='icon-container'>
                        <i class='bi bi-geo-alt-fill'></i>
                    </div>
                    <div class='contact-text'>
                        <p>$address</p>
                    </div>
                </div>
                <div class='contact-list'>
                    <div class='icon-container'>
                        <i class='bi bi-envelope-fill'></i>
                    </div>
                    <div class='contact-text'>
                        <p>$email</p>
                    </div>
                </div>
                <div class='contact-list'>
                    <div class='icon-container'>
                        <i class='bi bi-telephone'></i>
                    </div>
                    <div class='contact-text'>
                        <p>$phoneno</p>
                    </div>
                </div>
            </div>

            <div class='education-container'>
                <h2 class='title'>Education</h2>
                <div class='course'>";
                for($i=0;$i<count($school);$i++){
                    echo"
                    <h2 class='education-title'>";echo ucwords($degree[$i]) ;echo"</h2>
                    <p >";echo ucwords($school[$i]) ;echo"<span> | </span>";echo ucwords($cgpa[$i]) ;echo"%</p>";
                ?>
                <?php }
                echo"
                </div>
            </div>

            <div class='skills-container'>
                <h2 class='title'>Skills</h2>
                <div class='skill'>
                    <div class='left-skill'>";
                    for($i=0;$i<count($skill);$i++){
                        echo"
                        <p>";echo ucwords($skill[$i]) ;echo"</p>";
                    ?>
                    <?php }
                    echo"
                    </div>
                </div>
            </div>
        </div>
        <div class='right-part'>
            <div class='banner'>
                <h1 class='firstname'>$firstname $middlename</h1>
                <h1 class='lastname'>$lastname</h1>               
            </div>

            <div class='summary-container'>
                <h2 class='title'>summary</h2>                
                        <p class='summary-text'>$summary</p>
                        
            </div>

            <div class='work-container '>
                <h2 class='title text-left'>work experience</h2>
                <div class='work'>";
                for($i=0;$i<count($exptitle);$i++){
                    echo"
                    <div class='job-date'>
                        <p class='job'>";echo ucwords($exptitle[$i])  ;echo"</p>
                        <p class='date'> <span>";echo ucwords($expsdate[$i]) ;echo"</span><span> to </span> <span>";echo ucwords($expedate[$i]) ;echo"</span></p>
                    </div>
                    <h2 class='company-name'>"; echo ucwords($exporg[$i]) ;echo"<span> | </span> <span>";echo ucwords($explocation[$i]) ;echo"</span></h2>
                    <p class='work-text'>";echo ucwords($expdesc[$i]) ;echo"</p>";
                ?>
                <?php } 
                echo"
                </div>
            </div>

            <div class='Project-container'>
                <h2 class='title'>Project</h2><br>";
                for($i=0;$i<count($pname);$i++){
                    echo"
                <h4 class='project-name'>";echo ucwords($pname[$i]) ;echo"<span><a href=' $plink[$i]'>  click to the link</a></span></h4>
               
                <p class='project-text'>";echo ucwords($pdes[$i]) ;echo"</p>";
                ?>
                <?php } 
                echo"
            </div>

            <div class='achivement-container'>
                <h2 class='title'>Achivement</h2>";
                for($i=0;$i<count($atitle);$i++){
                    echo"                 
                <h4 class='achivement-name'>";echo ucwords($atitle[$i]) ;echo"</h4>
                <p class='achivement-text'>";echo ucwords($ades[$i]) ;echo"</p>";
                ?>
                <?php } 
                echo"                       
            </div>
            
        </div>
    </section>
    <div id=printResume>
    <button id='printRes' onClick=printResume() class='no-print btn btn-primary btn-block my-2 w-25'>Print</button>
    </div>
            ";
        }
        else 
    {
        echo"
        <link rel='stylesheet' type='text/css' href='css/temp4.css'/>
       
        <div class='main'>
        <div class='top-section'>
            <img src='user_images/$uimage' class='profile' />
            <p class='p1'>$firstname $middlename $lastname</p>
        </div>
        <div class='clearfix'></div>

        <div class='col-div-4'>
            <div class='content-box' style='padding-left: 40px;'>
            <p class='head'>about</p>			
            <p class='p3'><i class='fa fa-phone' aria-hidden='true'>-  </i>$phoneno</p>
            <p class='p3'><i class='fa fa-envelope' aria-hidden='true'> -</i>$email</p>
            <p class='p3'><i class='fa fa-home' aria-hidden='true'>  -</i>$address</p>
            

            <br/>
            <p class='head'>my skills</p>
            <ul class='skills'>";

            for($i=0;$i<count($skill);$i++){
                echo"
                <li><span>"; echo ucwords($skill[$i]) ; echo"</span></li>";
            ?>
            <?php }
            echo"
            </ul>

            <br/>
            <p class='head'>Achievements</p>";
            for ($i=0;$i<count($atitle);$i++) {
                echo"
                <li>"; echo ucwords($atitle[$i]) ; echo"</li>
                <p class='p3'>"; echo ucwords($ades[$i]) ;echo"</p><br>
            <br/>";
            ?>
            <?php }
            echo"
            <p class='head'>Project</p>";
            for($i=0;$i<count($pname);$i++){
                echo" 
            <p class='p3'>";echo ucwords($pname[$i]) ;echo "<span><a href='$plink[$i]'> Click to view Project!!</a></span></p>
            <p>";echo ucwords($pdes[$i]) ;echo"</p>";
            ?>
            <?php }
            echo"
            </div>
        </div>
        <div class='line'></div>
        <div class='col-div-8'>
            <div class='content-box'>
            <p class='head'>summary</p>
            <p class='p3' style='font-size: 14px;'>$summary</p>
            <br/>
            <p class='head'>EXPERIENCE</p>
                <ul>";
                for($i=0;$i<count($exptitle);$i++){
                    echo"
                    <li>
                        <h5>"; echo ucwords($exptitle[$i]) ;echo" <span> | </span><span>"; echo ucwords($explocation[$i]) ;echo"</span><span> | </span> <span>";echo ucwords($expsdate[$i]) ;echo"</span><span> to </span><span>";echo ucwords($expedate[$i]) ;echo"</span></h5>
                        <span class='title'>";echo ucwords($exporg[$i]) ;echo"</span><p class='p-4'>";echo ucwords($expdesc[$i]) ;echo"</p>

                    </li>";
                    ?>
                <?php }
                 echo"
                </ul>
            <br/>
                
            <p class='head'>Education</p>";
            for($i=0;$i<count($school);$i++){
                echo" 
            <p class='p-4' >";echo ucwords($school[$i]) ;echo" <span>|</span> <span>";echo ucwords($degree[$i]) ;echo"</span> <span>|</span> <span>";echo ucwords($cgpa[$i]) ;echo"%</span></p>";
            ?>
            <?php }
            echo"
            </div>
        </div>

        <div class='clearfix'></div>

    </div>
	<br/>
    <div id=printResume>
    <button id='printRes' onClick=printResume() class='no-print btn btn-primary btn-block my-2 w-25'>Print</button>
    </div>
        ";
    }

        
    }
}
?>
<script>
    function printResume(){
        
        window.print();
        
    }
</script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>