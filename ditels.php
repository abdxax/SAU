<?php include "files/header.php";?>
 
<?php 

/*
if(!empty($p_id))
$p_id = (int) $_GET['id'];

 if(isset($_GET['id'])){
if(!empty($get_pro_d))

$get_pro_d ="select* from product where p_id ='$p_id'";

if(!empty($run_pro_d))

$run_pro_d =mysqli_query($connect,$get_pro_d);

if(!empty($row_pro_d))
$row_pro_d=mysqli_fetch_array($run_pro_d);

if(isset($_GET['id'])){
	$p_id=$_GET['id'];
	$get_pro_d ="SELECT * FROM product where p_id ='$p_id'";
	$run_pro_dS=mysqli_query($connect,$get_pro_d);
	//$row_pro_d=mysqli_fetch_array($run_pro_d);
	$desc;
	$pricce;
	$cotar;
	$key;
	$name;
	$image;
	print_r($run_pro_dS);
	while ($rw=mysqli_fetch_array($run_pro_dS)) {
		
		$name=$rw['p_title'];
		$desc=$rw['p_desc'];
		$pricce=$rw['p_price'];
		$cotar=$rw['p_category'];
		$key=$rw['p_keyword'];
		$image=$rw['p_img'];

	}

}

 //}

*/
if(isset($_GET['id'])){
	$p_id=$_GET['id'];
	$get_pro_d ="SELECT * FROM product where p_id ='$p_id'";
	$run_pro_dS=mysqli_query($connect,$get_pro_d);
	//$row_pro_d=mysqli_fetch_array($run_pro_d);
	$desc='';
	$pricce='';
	$cotar='';
	$key='';
	$name='';
	$image='';
	//print_r($run_pro_dS);
	while ($rw=mysqli_fetch_array($run_pro_dS)) {
		
		$name=$rw['p_title'];
		$desc=$rw['p_desc'];
		$pricce=$rw['p_price'];
		$cotar=$rw['p_category'];
		$key=$rw['p_keyword'];
		$image=$rw['p_img'];

	}
	//echo $name."-".$desc."-".$pricce."-".$image;

}
?>
<div class ="panle r" style ="width:660px;">

<div class ="panle title" > <?php echo$name;?> </div>

<div class ="panle body" >
	
	
	
	<img src=<?php echo "images/".$image;?> >

</br>
<p><?php  echo $desc;?></p>
</div>

</div>






<div class ="panle 1" style ="width:320px;">
	
<div class ="panle title" > describe :<?php echo $desc;?></div>

<div class ="panle body" >
	
<div id ="p_info" >price :<?php echo $pricce;?></div>

<div id ="p_info" >category :<?php
//
        // if(!empty($row_pro_d))
		// $cat=$row_pro_d['p_category'];
           
           // if(!empty( $get_cat))
		// $get_cat ="select *from category where c_id ='$cat'";

           
           // if(!empty( $run_cat))
		// $run_cat = mysqli_query($connect,$get_cat);
		 

	//	 if(!empty( $row_cat))
		// $row_cat = mysqli_fetch_array( $run_cat );



		  //if(//!empty( $row_cat)) echo  $row_cat['c_name'];

 echo $cotar;
 ?>
 	
 </div>

<div id ="p_info" >keyword:<?php //if(!empty($row_pro_d)) echo $row_pro_d['p_keyword'];
 echo $key;
?></div>


</div>


</div>

<div class ="c"></div>



















<?php include "files/footer.php";?>