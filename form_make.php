<?php 

include 'db.php';

$form_msg = $_GET['msg'];

$form_query1 = "SELECT * from all_forms where form_id = '$form_msg'";

$form1 = mysqli_query($conn,$form_query1);



foreach($form1 as $forms){

	$card_header = $forms['form_name'];

}

$card_header1 = strtolower($card_header);


$form_query2 = "DESCRIBE `$card_header1`";

$form2 = mysqli_query($conn,$form_query2);

/*foreach($form2 as $f2){

	echo ($f2['Field'] .'-'. $f2['Type']);
}*/


//echo $form2;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/addons/datatables.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script type="text/javascript" src="js/addons/datatables.min.js"></script>
  
</head>
<body>


	<?php include 'navbar.php';?>

<div class="container mt-5">
	<div class="card">
		<form action="insert.php?msg=<?=$form_msg?>" method="post">
		<div class="card-header"><?=$card_header?></div>


		<div class="card-body">

			<?php 
				foreach($form2 as $f2){

					if ($f2['Type']!= 'int(11) unsigned' && $f2['Type']!= 'decimal(10,0)') {

						if ($f2['Type']== 'int(11)') {?>

							<div class="form-group">
				<label><?=$f2['Field']?></label>
				<label style="display: none"><?php $input_id = strtolower(str_replace(' ','',$f2['Field']));?></label>
				<input class="form-control" type="number" name="<?=$input_id.$form_msg?>" id="<?=$input_id.$form_msg?>">
			</div>
							

				<?php
					}elseif($f2['Type']== 'varchar(255)'){?>


						<div class="form-group">
				<label><?=$f2['Field']?></label>
				<label style="display: none"><?php $input_id = strtolower(str_replace(' ','',$f2['Field']));?></label>
				<textarea class="form-control" type="text" name="<?=$input_id.$form_msg?>" id="<?=$input_id.$form_msg?>"></textarea>
			</div>

				<?php	}elseif($f2['Type']== 'date'){?>


						<div class="form-group">
				<label><?=$f2['Field']?></label>
				<label style="display: none"><?php $input_id = strtolower(str_replace(' ','',$f2['Field']));?></label>
				<input class="form-control" type="date" name="<?=$input_id.$form_msg?>" id="<?=$input_id.$form_msg?>">
			</div>

				<?php
				}elseif($f2['Type']== 'text'){?>

							<div class="form-group">
							<label><?=$f2['Field']?></label>
							<label style="display: none"><?php $input_id = strtolower(str_replace(' ','',$f2['Field']));?></label>
							<input class="form-control" type="text" name="<?=$input_id.$form_msg?>" id="<?=$input_id.$form_msg?>">
						</div>


			<?php	}
			?>
			

		<?php
			}
		 }?>

		 <button type="submit" name="submit_btn" class="btn btn-success btn-sm">Submit</button>


			
		</div>
		
	</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});
</script>

</body>
</html>