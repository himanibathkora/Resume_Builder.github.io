<?php
session_start();

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
//    echo"hello";
//    if(isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phoneno']) && isset($_POST['atitle']) && isset($_POST['ades']) && isset($_POST['exptitle']) && isset($_POST['exporg'])){
    if(isset($_POST['next']))
    {
        //PERSONAL DETAILS
        $username=$_SESSION['username'];
       $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phoneno=$_POST['phoneno'];
        $summary=$_POST['summary'];
        // echo var_dump($_FILES);
        // die;
        $filename=$_FILES['user_image']['name'];
        // echo $filename;
        // die;
        $tempname=$_FILES['user_image']['tmp_name'];

        $folder="user_images/".$filename;
        // echo $folder;
        move_uploaded_file($tempname, $folder);
        $Agroup=($_POST['group-a']);
        $Bgroup=($_POST['group-b']);
        $Cgroup=($_POST['group-c']);
        $Dgroup=($_POST['group-d']);
        $Egroup=($_POST['group-e']);
        // echo var_dump($_POST);



        //Achievements
        $atitle=array();
        $ades=array();
        foreach($Agroup as $key=> $value){
            
            foreach($value as $index=> $output){
                if($index=='atitle'){
                    // echo $output;
                    array_push($atitle,$output);
                }
                else{
                    array_push($ades,$output);
                }
            }
        }
       $atitle=serialize($atitle);
       $ades=serialize($ades);


       //Experience
       $exptitle=array();
        $exporg=array();
        $explocation=array();
        $expsdate=array();
        $expedate=array();
        $expdesc=array();
        foreach($Bgroup as $key=> $value){
            
            foreach($value as $index=> $output){
                if($index=='exptitle'){
                    // echo $output;
                    array_push($exptitle,$output);
                }
                else if($index=='exporg'){
                    array_push($exporg,$output);
                }
                else if($index=='exp_location'){
                    array_push($explocation,$output);
                }
                else if($index=='exp_start_date'){
                    array_push($expsdate,$output);
                }
                else if($index=='exp_end_date'){
                    array_push($expedate,$output);
                }
                else{
                    array_push($expdesc,$output);
                }
            }
        }
        // echo var_dump($expedate);
        // echo"<br>";
        // echo var_dump($expsdate);
        // die;
      $exptitle=serialize($exptitle);
      $expdesc=serialize($expdesc);
      $exporg=serialize($exporg);
      $explocation=serialize($explocation);
      $expsdate=serialize($expsdate);
      $expedate=serialize($expedate);
        // echo var_dump($_POST);
       

        //EDUCATION
        $school=array();
        $degree=array();
        $cgpa=array();

        foreach($Cgroup as $key=> $value){
            
            foreach($value as $index=> $output){
                if($index=='edu_school'){
                    // echo $output;
                    array_push($school,$output);
                }
                else if($index=='edu_degree'){
                    array_push($degree,$output);
                }
             
                else{
                    array_push($cgpa,$output);
                }
            }
        }
        $school=serialize($school);
        $degree=serialize($degree);
        $cgpa=serialize($cgpa);

        //PROJECT
        $pname=array();
        $plink=array();
        $pdes=array();

        foreach($Dgroup as $key=> $value){
            
            foreach($value as $index=> $output){
                if($index=='proj_title'){
                    // echo $output;
                    array_push($pname,$output);
                }
                else if($index=='proj_link'){
                    array_push($plink,$output);
                }
             
                else{
                    array_push($pdes,$output);
                }
            }
        }

        $pname=serialize($pname);
        $plink=serialize($plink);
        $pdes=serialize($pdes);


        //SKILL
        $skill=array();
        foreach($Egroup as $key=> $value){
            
            foreach($value as $index=> $output){
                if($index=='skill'){
                    // echo $output;
                    array_push($skill,$output);
                }
            }
        }
            $skill=serialize($skill);
        $sql="INSERT INTO resum (username,fn,mn,ln,email,uimage,ad,phone,summary,atitle,ades,etitle,eorg,elocation,esdate,eedate,edes,school,degree,cgpa,pname,plink,pdes,skill) VALUES ('$username','$firstname','$middlename', '$lastname','$email','$filename','$address','$phoneno','$summary','$atitle','$ades','$exptitle','$exporg','$explocation','$expsdate','$expedate','$expdesc','$school','$degree','$cgpa','$pname','$plink','$pdes','$skill');";
            
       
     // $sql = "INSERT INTO `resum` VALUES (?,)";
        // echo $sql;
        $result=mysqli_query($conc,$sql);
        if($result)
        {
           echo "<script>
           alert('record inserted successfully');
           </script>
           "; 
           header("location:format.php");
        //    header("location:format.html");
           //    history.back();
        }
        else
        {     
         echo mysqli_error($conc);
        }
        mysqli_close($conc);
    }
    
?>