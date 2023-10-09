<?php include"header.php"?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resume Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <header class="resume-container">
            <section id = "about-sc" >
                <div class = "container">
                    <div class = "about-cnt">
                        <form action="upload.php" method="post" class="cv-form" id = "cv-form" enctype="multipart/form-data">
                            <div class = "cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>about section</h3>
                                </div>
                                <div class = "cv-form-row cv-form-row-about">
                                    <div class = "cols-3">
                                        <div class = "form-elem">
                                            <label for = "name" class = "form-label">First Name</label>
                                            <input name = "firstname" type = "text" class = "form-control firstname" id = "name"  placeholder="e.g. Shiv">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Middle Name <span class = "opt-text">(optional)</span></label>
                                            <input name = "middlename" type = "text" class = "form-control middlename" id = "" placeholder="e.g. Singh">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Last Name</label>
                                            <input name = "lastname" type = "text" class = "form-control lastname" id = "" placeholder="e.g. Bisht">
                                            <span class="form-text"></span>
                                        </div>
                                    </div>

                                    <div class="cols-3">
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Your Image</label>
                                            <input name = "user_image" type = "file" class = "form-control image" id = "" accept = "image/*" >
                                        </div>
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Email</label>
                                            <input name = "email" type = "text" class = "form-control email" id = ""  placeholder="e.g. shiv123@gmail.com">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Address</label>
                                            <input name = "address" type = "text" class = "form-control address" id = ""  placeholder="e.g. Lake Street-23">
                                            <span class="form-text"></span>
                                        </div>
                                    </div>

                                    <div class = "cols-3">
                                    
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Phone No:</label>
                                            <input name = "phoneno" type = "text" class = "form-control phoneno" id = ""  placeholder="e.g. 9958478596">
                                            <span class="form-text"></span>
                                        </div>
                                        <div class = "form-elem">
                                            <label for = "" class = "form-label">Summary</label>
                                            <input name = "summary" type = "text" class = "form-control summary" id = ""  placeholder="e.g. Hard Working, Good team player, etc.">
                                            <span class="form-text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>education</h3>
                                </div>

                                <div class = "row-separator repeater">
                                    <div class = "repeater" data-repeater-list = "group-c">
                                        <div data-repeater-item>
                                            <div class = "cv-form-row cv-form-row-experience">
                                                <div class = "cols-3">
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">School</label>
                                                        <input name = "edu_school" type = "text" class = "form-control edu_school" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Degree</label>
                                                        <input name = "edu_degree" type = "text" class = "form-control edu_degree" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Percentage</label>
                                                        <input name = "edu_city" type = "number" class = "form-control edu_city" id = "">
                                                        <span class="form-text"></span>
                                                    </div>
                                                </div>

                                                

                                                <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                                </div>
                            </div>

                            <div class="cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>achievements</h3>
                                </div>

                                <div class = "row-separator repeater">
                                    <div class = "repeater" data-repeater-list = "group-a">
                                        <div data-repeater-item>
                                            <div class = "cv-form-row cv-form-row-achievement">
                                                <div class = "cols-2">
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Title</label>
                                                        <input name = "atitle" type = "text" class = "form-control achieve_title"  placeholder="e.g. class representative">
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Description</label>
                                                        <input name = "ades" type = "text" class = "form-control achieve_description"  placeholder="......">
                                                        <span class="form-text"></span>
                                                    </div>
                                                </div>
                                                <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                                </div>
                            </div>

                            <div class="cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>experience</h3>
                                </div>

                                <div class = "row-separator repeater">
                                    <div class = "repeater" data-repeater-list = "group-b">
                                        <div data-repeater-item>
                                            <div class = "cv-form-row cv-form-row-experience">
                                                <div class = "cols-3">
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Title</label>
                                                        <input name = "exptitle" type = "text" class = "form-control exp_title" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Company / Organization</label>
                                                        <input name = "exporg" type = "text" class = "form-control exp_organization" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Location</label>
                                                        <input name = "exp_location" type = "text" class = "form-control exp_location" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                </div>

                                                <div class = "cols-3">
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Start Date</label>
                                                        <input name = "exp_start_date" type = "date" class = "form-control exp_start_date" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">End Date</label>
                                                        <input name = "exp_end_date" type = "date" class = "form-control exp_end_date" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Description</label>
                                                        <input name = "exp_description" type = "text" class = "form-control exp_description" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                </div>

                                                <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                                </div>
                            </div>

                            

                            <div class="cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>projects</h3>
                                </div>

                                <div class = "row-separator repeater">
                                    <div class = "repeater" data-repeater-list = "group-d">
                                        <div data-repeater-item>
                                            <div class = "cv-form-row cv-form-row-experience">
                                                <div class = "cols-3">
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Project Name</label>
                                                        <input name = "proj_title" type = "text" class = "form-control proj_title" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Project link</label>
                                                        <input name = "proj_link" type = "text" class = "form-control proj_link" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                    <div class = "form-elem">
                                                        <label for = "" class = "form-label">Description</label>
                                                        <input name = "proj_description" type = "text" class = "form-control proj_description" id = "" >
                                                        <span class="form-text"></span>
                                                    </div>
                                                </div>
                                                <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                                </div>
                            </div>

                            <div class="cv-form-blk">
                                <div class = "cv-form-row-title">
                                    <h3>skills</h3>
                                </div>

                                <div class = "row-separator repeater">
                                    <div class = "repeater" data-repeater-list = "group-e">
                                        <div data-repeater-item>
                                            <div class = "cv-form-row cv-form-row-skills">
                                                <div class = "form-elem">
                                                    <label for = "" class = "form-label">Skill</label>
                                                    <input name = "skill" type = "text" class = "form-control skill" id = "" >
                                                    <span class="form-text"></span>
                                                </div>
                                                
                                                <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
                                    <div><br>
                                        <input type="submit" class = "btn btn-primary text-uppercase" name="next">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </header>


         <!-- jquery cdn -->
         <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <!-- jquery repeater cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- custom js -->
        <script src = "./js/app.js"></script>
        <!-- app js -->
        <script src="./js/script.js"></script>

        <?php include"footer.php"?>
    </body>
</html>
