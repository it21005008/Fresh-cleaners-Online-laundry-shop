<?php
include 'config.php';
?>

<!DOCKTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php

            $sql = "SELECT * FROM feedback;";
            $result = mysqli_query($conn,$sql);
            $resultCheck= mysqli_num_rows($result);

            if($resultCheck>0){
                while($row= mysqli_fetch_assoc($result)){
                    echo $row['FID'];
                }
            }

    ?>

<table border="1" cellspacing="0" width="100%">
	<tr>
	  <td>User Name</td>
	  <td>Email</td>
	  <td>Phone</td>
	  <td>age</td>
	  <td>message</td>
	</tr>
	<?php
	$sql="SELECT Fullname,email,age,phone,message FROM  feedback";
	$result= $conn->query($sql);
	if($result->num_rows>0){
			while($r=$result->fetch_assoc()){
	
			echo ' <tr>
						<td>'.$r['Fullname'].'</td>
						<td>'.$r['email'].'</td>
						<td>'.$r['age'].'</td>
						<td>'.$r['phone'].'</td>
						<td>'.$r['message'].'</td>
						
				   </tr>
			';
			
			
		}
		
	}
	
	
	?>
	
	
</table>

























    </body>
</html>