<?php include "files/header.php";?>
 
<?php 

$p_id =(int)$_GET['id'];

 if(isset($_GET['id'])){


$get_pro_d ="select* from product where p_id ='$p_id'";

$run_pro_d =mysqli_query($connect,$get_pro_d);



 }



?>
<div class ="panle r" style ="width:660px;"></div>
<div class ="panle 1" style ="width:320px;"></div>

<?php include "files/footer.php";?>