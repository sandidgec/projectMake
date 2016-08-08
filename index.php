<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project Makers</title>
    <?php require_once("lib/headUtls.php");?>

  </head>
  <body>
    <?php require_once("lib/header.php");?>
    <div class="headline col-md-10 col-md-offset-1">
      <h3 class="topText">Countdown to the Project Makers 1st Annual Soapbox Derby</h><br>
        <div id="clockdiv">
          <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
          </div>
          <div>
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
          </div>
          <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
          </div>
          <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
          </div>
        </div>
      </div>
    </div>


      <div class="row col-md-10 col-md-offset-1">
          <div class="container contain1">
            <div class="col-md-4 blockRed">
                <h4 class="text1">Project Makers Soap Box Derby<br>(3 week program)</h>
                  <ol>
                    <li class="boxText">15 Students will be selected from the Thomas Bell Community Center after school starting on Aug. 11.</li>
                    <li class="boxText">Students attend Explora for a two day workshop on Aug. 30th and Sept. 1st</li>
                    <li class="boxText">Students build the cars at Thomas Bell during the week of Sept. 4th facilitated
                            by college students from the CNM Automotive Department. The ramp will be completed by the Carpentry
                            Department during this time.</li>
                    <li class="boxText">Cars will be painted and allowed to dry the week of Sept. 11.</li>
                    <li class="boxText">The race will take place Sept. 17th in the morning at the Thomas Bell parking lot.</li>
                  </ol>
            </div>

            <div class="col-md-6 blockPics">
                <h4 class="boxText4">More information: email aaron@projectmakers.org</h>
            </div>
          </div>
      </div>

      <div class="row col-md-10 col-md-offset-1">
          <div class="container">
            <div class="col-md-6 blockPics2">
                <iframe width="550" height="300" src="https://www.youtube.com/embed/XKeH8nZfByU"
                frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-md-4 blockRed">
                <h5 class="textCenter">Sign up for our mailing list today</h>

                  <?php

                    if (!empty($_POST['email'])) {

                      $subject = "Someone Signed up for your mailing list";
                      $message = "their email is " .
                        $_POST['email'];

                      $accepted = mail("charles@cultivatingcoders.com", $subject, $message);

                      if ($accepted) {

                  ?>
                        <div class="page-header text-center">
                          <h5>Thanks for signing up with us.</h5>
                        </div>

                  <?php

                      } else {

                  ?>
                        <div class="page-header text-center">
                          <h5>Something went wrong. Please try again soon.</h5>
                        </div>

                  <?php

                      }

                    } else {
                      // Render form
                  ?>
                      <form method="POST" action="index.php" >
                        <div class="form-group">
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" id="inputEmail" class="form-control" name="email"
                                     placeholder="sample@gmail.com">

                               <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Send</button>
                               </div>
                      </form>

                  <?php

                    }

                  ?>

                </div>
                <div id="paypalbtn">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FSMNNBGF64FPQ">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
                </div>
          </div>
      </div>

          <div class="container contain1">
            <div class="col-md-4 blockYellow">
                <h4 class="text1">Project Makers Soap Box Derby<br>September 17, 2016</h>
                  <p class="boxText">Here's more information about the soap box derby that will
                  be going on next month.</p>
                  <p class="boxText">If you're interested in helping out or volunteering, please
                  email aaron@projectmakers.com</p>
            </div>

            <div class="col-md-6 blockPics3">
              <h4 class="boxText4">Come Watch - September 17th 10 am <br>Thomas Bell Community Center</h>

            </div>
          </div>
      </div>


  </body>
</html>
