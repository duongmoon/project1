<?php
session_start();
require_once('utyls/utility.php');     
require_once('db/dbhelper.php');
$error=[];
function isFormValidated(){
    global $error;
    return count($error) == 0;
}
if(!empty($_POST)){
  if(strlen(getPost('phone')) != 10){
      $error[]= "SSID must 10 number";
  }
}
$customer_name = $email = $phone =$idea = "";     
if( !empty($_POST) && isFormValidated()) {
    $customer_name = getPost('customer_name');   
    $email = getPost('email');
    $phone = getPost('phone');
    $idea = getPost('idea');

    $sql = "insert into feedback(customer_name, email,phone,idea ) values ('$customer_name', '$email', '$phone','$idea')";  
    execute($sql);                    
    header('Location: contact.php');    
    var_dump($sql); 
    die();
}


?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tạo Contact Form</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style_compare_vs_contact/lienhe.css">
 </head>
 <body>
 <?php if (!empty($_POST) && !isFormValidated()) : ?>
            <ul style="color:red;text-align:center;">
                <?php
                  $message = "phone must has 10 digist";
                  
                  echo "<script type='text/javascript'>alert('$message');</script>"
                ?>
            </ul>
<?php endif;?>
  <section>
   <div class="container">
     <div class="containerinfo">
       <div>
         <h2>Contact Info</h2>
         <ul class="info">
           <li>
             <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
             <span>54 Le Thanh Nghi<br />
               Hai Ba Trung District<br />
               Hanoi City
             </span>
           </li>
           <li>
             <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
             <span>Aptech1@aprotrain.com</span>
           </li>
          <li>
             <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
             <span>1800-1141</span>
           </li>
         </ul>
       </div>
       <ul class="sci">
         <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
       </ul>
    </div>
   
    <form method ="post">
    <div class="containerForm">
           <h2>Send Message</h2>
           <div class="formBox">
               <div class="inputBox w50">
                   <input type="text" name="customer_name" required>
                   <span>First and Last Name</span>
               </div>
               <div class="inputBox w50">
                   <input type="email" name="email" required>
                   <span>Email</span>
               </div>
               <div class="inputBox w50">
                   <input type="number" name="phone" required>
                   <span>Phone Number</span>
               </div>
               <div class="inputBox w100">
                   <textarea name="idea" required></textarea>
                   <span>Your Contributions</span>
               </div>
               <div class="inputBox w100">
                   <input type="submit" value="To Send">                
                   <a class = "Home" href="index.php" style="margin-left: 100px; ">Home</a>

               </div>
               
           </div>
       </div>
    </form>   
</div>
</section>
<div class="question"></div>

 </body>
 <script>
      function come_back(){
          history.back();
      }
  </script>
 </html>