<?php 
include 'include/db.php';
include 'include/header.php';
 ?>
           <div class="collapse navbar-collapse" id="navcol-1" style="background-color:#3b99e0;width:328px;margin:0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="style="text-decoration: underline;"nav-item" role="presentation"><a class="nav-link" href="signup.php">SIGNUP MEMBERS</a></li>
                    <li class="nav-item" role="presentation" ><a class="nav-link active" href="leaders.php">leaders</a></li>
                  <!--   <li class="nav-item" role="presentation" ><a class="nav-link" href="report.php">Monthly Report </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="offering.php">Offering </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li> -->
                </ul>

                  
      
           
            <a href="include/logout.php" class="btn btn-primary" type="submit" style="background-color:rgb(13,230,34);">LOGOUT <?=$_SESSION['name'];?></a>
          
      
  

                </div>
        </div>
    </nav>
    <main class="page pricing-table-page"></main>
    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
               <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">LEADERS DETAILS</span></strong></h2>
               <div class="row">
                    </div>
                </div>
            </div>
        </div>
      </div>
        
        <div class="container" style="background-color:#ffffff;">
        <div class="row">
          <div col-md-4>
             <div class="card" style="width: 18rem; background-color: #ccccb3;">
                  <img class="card-img-top" src="assets/img/leaders/1.jpg" alt="leaders">
                  <div class="card-body">
                    <h4 class="card-title"> Leader General</h4>
                      <h5 class="card-title">Conteh David</h5>
                    <p class="card-text">phone number</p>
                  </div>
                </div>
          </div>

          <div col-md-4>
             <div class="card" style="width: 18rem; background-color: #ccccb3;">
                  <img class="card-img-top" ssrc="assets/img/leaders/2.jpg" alt="leaders">
                  <div class="card-body">
                    <h4 class="card-title">Leader General</h4>
                      <h5 class="card-title">Anabilla Roland- D. </h5>
                    <p class="card-text">phone number</p>
                  </div>
                </div>
          </div>

          <div col-md-4>
             <div class="card" style="width: 18rem; background-color: #ccccb3;">
                  <img class="card-img-top" src="assets/img/avatars/avatar1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">TITLE</h4>
                      <h5 class="card-title">FULL NAME</h5>
                    <p class="card-text">phone number</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>





        </div>
      </div>

    <?php
        include 'include/footer.php';
    ?>