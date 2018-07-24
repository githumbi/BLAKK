<?php
include 'include/db.php';
include 'include/header.php';


$sql = "SELECT * FROM form order by username";

$result1 = $db->query($sql);
?>
            <div class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="style="text-decoration: underline;"nav-item" role="presentation"><a class="nav-link active" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link" href="leaders.php">leaders</a></li>
                  <!--   <li class="nav-item" role="presentation" ><a class="nav-link" href="report.php">Monthly Report </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li> -->
                </ul>

                  
      
           
            <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);">LOGOUT <?=$_SESSION['name'];?></a>
          
      
  

                </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="height:92px;background-color:rgba(255,255,255,0);">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="height:40px;padding:-23px;margin:-49px;color:rgb(255,255,255);font-size:39px;"><strong><span style="text-decoration: underline;">SIGNUP MEMBERS</span></strong></h2>
                </div>
            </div>
        </section>
    </main>
    <div data-aos="fade">
        <div class="container">
            <div class="row" style="background-color:#ffffff;">
                <div class="col-md-12">
<!-- Contact -->

  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                  <h3>
                                     <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                  </h3>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>
      </div>
      <div class="row">

        <!-- Contact Info -->
        <div class="col-lg-6">
          <div class="section_title"><h2>Personal Details</h2></div>
          <div class="contact_form_container">
             <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="phone" placeholder="phone">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="work" placeholder="occupation">
                </div>
                <div class="form-group">
                   <div class="container">
                   <div class="row">
                      <div class="col-lg-6">
                       <label>Male</label>
                    <input class="form-control" value="male" type="radio" name="gender">
                    </div>
                    <div class="col-lg-6">
                       <label>Female</label>
                    <input class="form-control" value="female" type="radio" name="gender">
                    </div>
                   </div>
                   </div>
                </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-6 form_col">
          <div class="section_title"><h2>Your address</h2></div>
          <div class="contact_form_container">
               <div class="form-group">
                    <input class="form-control" type="text" name="address" placeholder="address">
                </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="city" placeholder="city">
                </div>
                <div class="form-group">
                   <label for="african-countries">African Countries</i></label>
                <select type="text" class="form-control " id="african-countries" name="country">
                <option selected>Choose</option>
                <option value="algeria">Algeria</option>
                <option value="angola">Angola</option>
                <option value="benin">Benin</option>
                <option value="botswana">Botswana</option>
                <option value="burkina Faso">Burkina Faso</option>
                <option value="burundi">Burundi</option>
                <option value="cameroon">Cameroon</option>
                <option value="cape-verde">Cape Verde</option>
                <option value="central-african-republic">Central African Republic</option>
                <option value="chad">Chad</option>
                <option value="comoros">Comoros</option>
                <option value="congo-brazzaville">Congo - Brazzaville</option>
                <option value="congo-kinshasa">Congo - Kinshasa</option>
                <option value="ivory-coast">Côte d’Ivoire</option>
                <option value="djibouti">Djibouti</option>
                <option value="egypt">Egypt</option>
                <option value="equatorial-guinea">Equatorial Guinea</option>
                <option value="eritrea">Eritrea</option>
                <option value="ethiopia">Ethiopia</option>
                <option value="gabon">Gabon</option>
                <option value="gambia">Gambia</option>
                <option value="ghana">Ghana</option>
                <option value="guinea">Guinea</option>
                <option value="guinea-bissau">Guinea-Bissau</option>
                <option value="kenya">Kenya</option>
                <option value="lesotho">Lesotho</option>
                <option value="liberia">Liberia</option>
                <option value="libya">Libya</option>
                <option value="madagascar">Madagascar</option>
                <option value="malawi">Malawi</option>
                <option value="mali">Mali</option>
                <option value="mauritania">Mauritania</option>
                <option value="mauritius">Mauritius</option>
                <option value="mayotte">Mayotte</option>
                <option value="morocco">Morocco</option>
                <option value="mozambique">Mozambique</option>
                <option value="namibia">Namibia</option>
                <option value="niger">Niger</option>
                <option value="nigeria">Nigeria</option>
                <option value="rwanda">Rwanda</option>
                <option value="reunion">Réunion</option>
                <option value="saint-helena">Saint Helena</option>
                <option value="senegal">Senegal</option>
                <option value="seychelles">Seychelles</option>
                <option value="sierra-leone">Sierra Leone</option>
                <option value="somalia">Somalia</option>
                <option value="south-africa">South Africa</option>
                <option value="sudan">Sudan</option>
                <option value="south-sudan">Sudan</option>
                <option value="swaziland">Swaziland</option>
                <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                <option value="tanzania">Tanzania</option>
                <option value="togo">Togo</option>
                <option value="tunisia">Tunisia</option>
                <option value="uganda">Uganda</option>
                <option value="western-sahara">Western Sahara</option>
                <option value="zambia">Zambia</option>
                <option value="zimbabwe">Zimbabwe</option>
                </select>
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                </div>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
            </div>
        </div>
    </div>
    <?php
        include 'include/footer.php';
    ?>