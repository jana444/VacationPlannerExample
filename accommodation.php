<?php
  // Import functions
  require_once 'validation.php';
  require_once 'database/database.php';
  require_once 'templates/functions/template_functions.php';
  //connect to database 
  $pdo = db_connect();
  // Validate form submission
  validate();
 ?>

<!DOCTYPE html>

<html lang="en">
    <body>
        <div id="bckgdimg">
            <?php
            include 'head.php';
            ?>
            <header class="hold">                    
                <img class="slides slides-hidden" id="header1" src="images/1.jpg" alt="1">
                <img class="slides slides-hidden" id="header2" src="images/2.jpg" alt="2">
                <img class="slides slides-hidden" id="header3" src="images/3.jpg" alt="3">
                <img class="slides slides-hidden" id="header4" src="images/4.jpg" alt="4">
                <div class="centered">
                    <h1 id="webtitle">Accommodation</h1>
                </div>
            </header>
            <div class="leather">
                <nav>
                    <ul>
                        <li class="home"><a href="index.html">Home</a></li>
                        <li class="accomm">Accommodation</li>
                        <li class="activ"><a href="activities.php">Activities</a></li>
                    </ul>
                </nav>
                <main class="accomm">
                    <div id="container">
                        <h5>Enter your accommodation information</h5>
                        <form action="accommodation.php" method="post">

                            <label for="accommName">  Accommodation name:

                            <input type="text" name="accommName" id="accommName" autocomplete="false">
                            <!-- Display validation message for first name -->
                            <?php the_validation_message('accommName'); ?>

                            </label>

                            <label for="address">  Address:

                            <input type="text" name="address" id="address" autocomplete="false">
                            <!-- Display validation message for address input -->
                            <?php the_validation_message('address'); ?>

                            </label>

                            <label for="email">  Email address:

                            <input type="text" name="email" id="email" autocomplete="false">
                            <!-- Display validation message for email input -->
                            <?php the_validation_message('email'); ?>

                            </label>


                            <label for="phoneNr">  Phone number:

                            <input type="text" name="phoneNr" id="phoneNr" autocomplete="false">
                            <!-- Display validation message for last name -->
                            <?php the_validation_message('phoneNr'); ?>

                            </label>

                            <fieldset>
                            <legend> Choose type of accommodation </legend>

                                <input type="radio" name="accommodation" id="hotel" value="Hotel">
                                <label for="hotel">Hotel</label>

                                <input type="radio" name="accommodation" id="airbnb" value="AirBnb">
                                <label for="airbnb">AirBnb</label>

                                <input type="radio" name="accommodation" id="other" value="Other">
                                <label for="other">Other</label>
                                <!-- Display validation message for radio group -->
                                
                            </fieldset>
                            <?php the_validation_message('accommodation'); ?>

                            <div class="sticker"><input type="reset" name="" value="Reset Form"></div>

                            <div class="sticker"><input type="submit" value="Submit Form"></div>

                        </form>

                        <!-- Display the results -->
                        <?php the_results(); ?>

                    </div>
                    <br>
                    <footer>
                        Jana Krizanova CPSC2030 Project
                    </footer>
                </main>
            </div>
            
            <footer>
    
            </footer>
        </div>
    </body>
</html>