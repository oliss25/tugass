
<?php 
 session_start();    
 // cek apakah session ada atau tidak
if(isset($_SESSION['nama'])){
    header("location:login.php");
   } 
  ?> 
  <title>Web Kami</title>
<h1>Selamat Datang </h1>
        <body>
 <link rel="stylesheet" type="text/css" href="style.css"> </head> 
 <div class="kotak_login"> 
 <p class="tulisan_login">Silahkan login</p>   
 <form action="proseslogin.php" method="post" name="form_input">    
<label for="username">Username</label>
 <input type="text" name="username" class="form_login" placeholder="Masukan Username" required><br>
<label for="nama">Password</label>  
 <input type="password" name="password" class="form_login" placeholder="Masukan Pasword" require>   
 <div class="tombol">
     <button type="submit" class="tombol_login">MASUK</button> 
 
 <br/>  
 <br/> 
</form> 
</div> 
</body>        