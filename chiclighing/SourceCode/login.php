
<?php
session_start();
require_once('db/dbhelper.php');
require_once('utyls/utility.php');
    if(!empty($_POST)) {
          $name = $_POST['name'];
          $pass = $_POST['pass'];
          $sql = "select * from user where name = '$name' and pass = '$pass' ";
          $user = executeResult($sql, true);

          if($user != null) {
               $_SESSION['cuser'] = $user;

               header('Location: admin_list.php');
               die();
          }
     }
               ?>
               
</script>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>GET in PHP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=roboto=condensed:Wght@700&display=swap" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="style_login/style.css">
     <link rel="stylesheet" type="text/css" href="style_login/style_input.css">

</head>
<body>
     <div class="s0">
          <div class="s1">
               <div class="s2">
                    <div class="s3"onclick="come_back()"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg></div>
               <form method="post" onsubmit="return validateData();">
                    <center>
                         <h3 class="pont">login to the admin</h3>
                    </center>
                    <center>
                         <p class="pont pont2">
                              Sign in with your Account to use your bookmarks, activity history, passwords, and other settings across all your devices                         
                         </p>
                    </center>

                    <div class="b1">
                         <div class="containers">
                              <div class="input-form">
                                   <input required type="text"  name="name">
                                   <div class="underline"></div>
                                   <label class="pont">name</label>
                              </div>
                         </div>
                    </div>

                    <div class="b1">
                         <div class="containers">
                              <div class="input-form">
                                   <input required type="password"  name="pass" id="pass1" >
                                   
                                   <div class="underline"></div>
                                   <label class="pont">password </label>
                                   </div>
                              </div>
                         </div>                    
                    </div>
                    <div class="pass1 pont b1"><input onclick="pwd()" type="checkbox" name="sport">show password
                    </div>


                    <div class="form-group">
                         <button class="btn btn-success pont"  >log in</button>
                    </div>
               </form>
               <div class="form-group2">
               </div>
               </div>
          </div>
     </div>
     <script type="text/javascript">
          var x =true ;
          function pwd(){
               if(x){
                    document.getElementById('pass1').type="text";
                    x= false;
               }else{
                    document.getElementById('pass1').type='Password';
                    x=true;
               }
          }
               </script>
          
</body>
<script>
      function come_back(){
          history.back();
      }
  </script>
</html>
