<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); 
    exit();
}

if ($_SESSION['user']['role'] !== 'ICTteacher12') {
    header("Location: index.php");  
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Dashboard</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="upload.css">
      <link rel="stylesheet" href="studentshome.css">
      <style>
        .btn {
  width: 100%;
  height: 45px;
  background: #162938;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1em;
  color: white;
  font-weight: 500;
  

}
      </style>
  </head>
  <body>
    
        <header>
            <h2 class="logo"> 
                EmpowerEDU
            </h2>
            <a href="logout.php"><button class="btn">Logout</button></a>
        </header>

        <section>
            <div class="left-sidebar">
                <div class="profile">
                    <img class="profile-picture" src="img/blob.jpg">
                    <div class="student-info">
                        <p>ICT Adviser</p>
                        <p class="strand">ICT</p>
                    </div>
                   
                </div>
                
            </div>

            <a href="ICT12hands1.php"><div class="folders">
                <div class="folder-module1-2">
                   <img class="folder" src="img/folderblue.png">
                   <p>Handouts 1-2</p>
                </div>
                 </div>
            </div></a>

            <div class="modules-wrap">
                
            </div>
         </section>

         <script src="script.js"></script>
         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
             
  </body>
</html>