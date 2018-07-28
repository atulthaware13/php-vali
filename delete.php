<?php
 $uid=base64_decode($_GET['uid']);
 require_once"dbconnect.php";
 $sql_qry="delete from register_user where user_id='$uid'";
 $res=mysqli_query($conn,$sql_qry);
 if($res){
       header("location:display.php");
 }
 else{
 	?>
 	<script type="text/javascript">
 		alert("Not Deleted");

 	</script>
 	<?php
 	header("location:display.php");
 }


?>