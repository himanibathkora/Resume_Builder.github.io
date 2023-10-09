<?php include"header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format</title>
    <style>
        body{
            background-color: #6AC49C;
        }
        .header{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header-content{
            max-width: 750px;
            margin:auto;
        }
        .header-content p{
            margin-bottom: 2.6rem;
            line-height: 1.6;
            text-align: center;
        }
        .header-content h1{
            text-align: center;
            font-size:45px;
        }
        .title{
            color: #053339;
            margin: 20px;
        }
        .section{
                display: flex;
                justify-content:space-around;
        }
        .format{
            max-width: 545px;
            margin: 20px;
        }
            
        h3{
            margin-left: 40%;
            color: #1e2532;
        }
        .btn{
            background-color:#646175;
            border: none;
            color: white;
            padding: 1.4rem 1.6rem;
            border-radius: 4px;
            display: inline-block;
            text-align: center;
            font-size: 14.5px;
            font-weight: 600;
            border: 1px solid #646175;
            transition: var(--transition);
            margin: 10px 45% ;             
        }
        .btn:hover{
            color: #646175;
            background-color: transparent;
            cursor:pointer;
        }
        .rdo {
            position: absolute;
            left: -9999px;
        }

input[type=radio]:checked + label>img {
  border: 1px solid #fff;
  box-shadow: 0 0 3px 3px #1A91F0;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px solid #444;
  width: 400px;
  height: 450px;
  transition: 500ms all;
}

input[type=radio]:checked + label>img {
  transform: scale(1.1);
  z-index: 2;
  box-shadow: 5px 5px 5px #053339;
}

</style>
</head>
<body>
    <header id = "header">
        <div class = "container">
            <div class = "header-content text-center">
                <h1 class = "title">Choose a Template</h1>
                <p>"Select your ideal resume template to showcase your skills and experience effectively. Our diverse collection ensures you'll find the perfect format to impress employers and land your dream job. Make your first step count." </p>
            </div>
        </div>
    </header>
    <form action="data_extract.php" method="post">
        <div class="section">       
            <div class="format">
            <input type="radio" name="layout" id="temp1" class="rdo" value="layout1"/>
            <label for="temp1">
                <h3>FORMAT-1</h3>
                <img src="./img/temp1.jpg" alt="temp1" width="400px" height="450px">
            </label>
            </div>
            
            <div class="format">
            <input type="radio" name="layout" id="temp2" class="rdo" value="layout2"/>
            <label for="temp2">
                <h3>FORMAT-2</h3>
                <img src="./img/temp2.jpg" alt="temp" width="400px" height="450px">
            </label>
            </div>
            
        </div>

        <div class="section">
            <div class="format">
                <input type="radio" name="layout" id="temp3" class="rdo" value="layout3"/>
                <label for="temp3">
                    <h3>FORMAT-3</h3>
                    <img src="./img/temp3.jpg" alt="temp3" width="400px" height="450px">
                </label>
            </div>
            <div class="format">
                <input type="radio" name="layout" id="temp4" class="rdo" value="layout4"/>
                <label for="temp4">
                    <h3>FORMAT-4</h3>
                    <img src="./img/temp4.jpg" alt="temp4" width="400px" height="450px" class="center">
                </label>
            </div>
        </div>
         
        <input type="submit" value="PROCEED" class="btn">
    </form>
    
    <?php include"footer.php"?>
</body>

</html>