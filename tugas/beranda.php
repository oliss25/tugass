<?php
session_start();
?>
<html> 
    <body><h5 align="center"><a href="logout.php">Logout</a></h5>

        
        <table border="1" height="40%" width="50%" align="center" >
           <td><h3 align="center"> Selamat Datang Pengguna <?php echo $_SESSION['username']; ?> Di Blog Ini </h3></td>
        </table>
    </body>
</html>