<?php require_once("Config/connection.php");
if (!isset($_SESSION["username"])) header('location:../Site/login.php');
$content = '<div id="MainDiv"><div class="ShowBox"><h1>Users</h1><hr><br>';

$content .= '<div style="max-height:350px ;overflow-y: scroll;"><table class="table table-striped table-hover table-bordered" >
	<thead>
		<tr>
			<th>Username</th>
			<th>Email Address</th>
			<th>Phone Number</th>
		</tr>
	</thead>
	<tbody>
		';

$query="SELECT * FROM users";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $content.='<tr>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>+1234567890</td>
                   </tr>';
    }
}

echo '		
	</tbody>
</table></div>';



show("users", $content);