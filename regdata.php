<?php
   $username = "root";
   $servername = "localhost";
   $password = "";
   $db_name = "final1";
   $con = mysqli_connect($servername, $username, $password, $db_name);
   $query = "select * from eshna";
   $result = mysqli_query($con, $query);
   if (mysqli_num_rows($result) > 0) {
   	  
   	  echo '
         <table border="" style="border-collapse:collapse;">
         <tr>
            <th>
               Username
            </th>
            <th>
               Age
            </th>
			<th>
				Password
            </th>
			
			<th>action</th>
			

            </tr>';
			while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>
            <td>'
            .$row["username"].'
            </td>
         
            <td>'
               .$row["age"].
            '</td>
            <td>'
                .$row["password"].
            '</td>
			<td>
			     <input type="submit" value="delete">
			     <input type="submit" value="edit">
				 </td>
         </tr>';
			}
   	 echo '</table>';
   	
   }
?>
