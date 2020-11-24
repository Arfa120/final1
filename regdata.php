<?php
   $username = "root";
   $servername = "localhost";
   $password = "";
   $db_name = "final1";
   $con = mysqli_connect($servername, $username, $password, $db_name);
   $query = "select * from registration";
   $result_set = mysqli_query($con, $query);
   if (mysqli_num_rows($result_set) > 0) {
   	  while($row = mysqli_fetch_assoc($result_set)) {
   	  echo '
         <table border="" style="border-collapse:collapse;">
         <tr>
            <td>
               Username:
            </td>
            <td>
               '; echo $row["name"]; ;echo'
            </td>
         </tr>
         <tr>
            <td>
               Age:
            </td>
            <td>
               '; echo $row["age"]; ;echo'
            </td>
         </tr>
         <tr>
            <td>
               Password:
            </td>
            <td>
               '; echo $row["password"]; ;echo'
            </td>
         </tr>
   	  ';
   	}
   }
?>
