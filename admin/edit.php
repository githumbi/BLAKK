<?php
    include 'include/db.php';
   include 'include/header.php';

               //Links for PHPMAILER 
                  use PHPMailer\PHPMailer\PHPMailer; 
                  use PHPMailer\PHPMailer\Exception; 
                  require 'PHPMailer/src/Exception.php';
                  require 'PHPMailer/src/PHPMailer.php'; 
                  require 'PHPMailer/src/SMTP.php'; 


//function for uploading profile picture
function change_profile_image($id, $file_temp, $file_extn){
  
    $db = mysqli_connect("localhost", "root", "","blakk");
  $file_path = 'profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
  move_uploaded_file($file_temp, $file_path);
  mysqli_query($db, "UPDATE signup SET profile='".$file_path."'  WHERE id =$id");

}



//update records

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $country = $_POST['country'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $work = $_POST['work'];
  $message = $_POST['message'];
  $id= $_POST['id'];
  $approve = $_POST['approve'];
  


  mysqli_query($db, "UPDATE signup SET  name='$name',  country='$country',  phone ='$phone', email='$email', gender='$gender', work='$work' , message='$message', amount='$amount' WHERE id=$id ");


           
              if ($approve=='yes') {
                mysqli_query($db, "UPDATE signup SET approve='$approve' WHERE id=$id");

               

                  //Send email to specific member approved
                  $body = file_get_contents('mail/mail.html');
                  $mail = new PHPMailer();
                  $mail->isSMTP();
                  $mail->SMTPAuth = true;
                  $mail->SMTPSecure = 'ssl';
                  $mail->Host = 'rbx103.truehost.cloud';
                  $mail->Port = '465';
                  $mail->isHTML(true);
                  $mail->Username = 'info@thumbi.co.ke';
                  $mail->Password = '232j120g0038k'; 
                  $mail->SetFrom('githumbi@gmail.com');
                  $mail->Subject = 'Succesfully Registered!';
                  $mail->MsgHTML($body);
                  $mail->AddAddress("$email");
                  $mail->Send();

              }elseif ($approve=='no') {
                 mysqli_query($db, "UPDATE signup SET approve='$approve' WHERE id=$id");
              }


  $_SESSION['msg'] = "The information has been Updated";
  header('Location: index.php');
  
}



//retrieve tithe in form of months
$results = mysqli_query($db, "SELECT * from signup;");



//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT * from signup WHERE id=$id;");
  $record = mysqli_fetch_array($rec);
  $name = $record['name'];
  $country = $record['country'];
  $email = $record['email'];
  $phone= $record['phone'];
  $gender = $record['gender'];
  $work = $record['work'];
  $profile = $record['profile'];
  $message = $record['message'];
  $approve = $record['approve'];
  $amount = $record['amount'];

}
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
    <section class="clean-block about-us" style="height:136px;">
       
    </section>
    <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-4 offset-xl-4">
                    <h2 style="color:rgb(255,255,255);"><strong><span style="text-decoration: underline;">EDIT DETAILS</span></strong></h2>
     
                </div>
            </div>
             <div class="row">
                        <div class="col">
                      <?php if (isset($_SESSION['msg'])):  ?>
                                <div class="alert alert-success" role="alert"><span><strong>
                                  <?php
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  ?>
                                </strong></span><button class="close"><span aria-hidden="true">×</span></button></div>
                                <?php endif ?>
                        </div>
                    </div>
        </div>



     <?php if($row = mysqli_fetch_array($results)) { ?>

<div class="container" style="background-color:rgba(246,246,246,0.76);">
    <div data-aos="fade">
        <div class="container">
          <form  method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-12" style="background-color:#ffffff;">

                        <?php
              if (isset($_FILES['profile'])===true){
                if (empty($_FILES['profile']['name'])===true){
                    echo "please choose an image!";
                } else {
                  $allowed = array('jpg','jpeg','png','gif');

                  $file_name = $_FILES['profile']['name'];
                  $file_ext = explode('.', $file_name);
                  $file_extn=strtolower(end($file_ext));
                  $file_temp = $_FILES['profile']['tmp_name'];

                  if (in_array($file_extn, $allowed)===true){
                      change_profile_image($id, $file_temp, $file_extn);
                      header("Refresh:0");
                     
                  } else {
                    echo "incorect file. Upload:";
                    echo implode(', ', $allowed);
                  }
                }
              }

              if (empty($profile) === false){
                  echo '<img class="square-circle" src="', $profile , '" alt="', $name ,'" width="200px" height="200px" style="margin:12px;">';
              }else echo '<img class="square-circle" src="profile/index.png" alt="', $name ,'" width="200px" height="200px" style="margin:12px;">';
            ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding:15px;background-color:#ffffff;">
                  <input type="file" name="profile"> 
                  <!-- <button class="btn btn-primary" type="submit" name="profile" class="btn">update</button> -->
                </div>
            </div>
        
        </div>
    </div>


    <div data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin:0;background-color:#ffffff;"><form style="background-color: white;" method="post" action="server.php"  class="table table-bordered">
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
    <tr>

      <th colspan="4"><h3><?php echo $name; ?></h3></th>
    </tr>
    <tr>
      
      
     
     
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">Name</th>
      <td><input type="text" name="name"  value="<?php echo $name; ?>"></td>
    </tr>
    <tr>
      <th scope="col">country</th>
      <td><input type="text" name="country"  value="<?php echo $country; ?>"></td>
    </tr>
     <tr>
      <th scope="col">email</th>
      <td><input type="text" name="email"  value="<?php echo $email; ?>"></td>
    </tr>
     <tr>
       <th scope="col">phone</th>
      <td><input type="text" name="phone"  value="<?php echo $phone; ?>"></td>
    </tr>
     <tr>
       <th scope="col">Gender</th>
      <td><input type="text" name="gender"  value="<?php echo $gender; ?>"></td>
    </tr>
     <tr>
      <th scope="col">occupation</th>
      <td><input type="text" name="work"  value="<?php echo $work; ?>"></td>
    </tr>
     <tr>
      <th scope="col">Amount Paid</th>
      <td><input type="text" name="amount"  value="<?php echo $amount; ?>"></td>
    </tr>
     <tr>
      <th scope="col">approved</th>
            <?php 
              if ($approve=='yes') { ?>
                <td><?php echo $approve ?></td>
            <?php  }elseif ($approve=='no') { ?>
             <td> <input type='text' name='approve' value="<?php echo $approve; ?>"></td>
            <?php }
            ?>
    </tr>
   
  </tbody>

    </table>



      <div class="form-group">
                      <h2 style="color: black; " for="message">COMMENTS</h2>
                      <textarea style="color: black; height: 100px !important; width: 600px !important; font-size: 14px !important; background-color:   #E0E0E0;" cols="30" rows="10" class="form-control" id="message"  name="message" ><?php echo $message; ?></textarea>
                    </div>
    <?php }


    ?>
    
 
          <div class="container">
             <button class="btn btn-primary" type="submit" name="update" class="btn">update</button>
          </div>
</form></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>

</form>
</div>
    
    <div></div>
    <main class="page contact-us-page"></main>
    <?php
        include 'include/footer.php';
    ?>