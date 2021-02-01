<?php 

include 'db.php';

$form_msg1 = $_GET['msg'];

$form_query5 = "SELECT * from all_forms where form_id = '$form_msg1'";

$form5 = mysqli_query($conn,$form_query5);



foreach($form5 as $forms){

	$forms_name = $forms['form_name'];

}

$form_query6 = "SELECT * from `$forms_name`";

$form6 = mysqli_query($conn,$form_query6);


$form_query7 = "DESCRIBE `$forms_name`";

$form7 = mysqli_query($conn,$form_query7);

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
		
		<div class="card-header"><?=$forms_name?></div>


		<div class="card-body">

			<table class="table table-striped table-hover table-bordered" id="dtBasicExample">
				
				<thead>
					<tr>
						<?php 

						foreach($form7 as $forms7){

							if ($forms7['Type']!='int(11) unsigned' && $forms7['Type']!='decimal(10,0)') {
							

						?>
						<th><?=$forms7['Field']?></th>


						<?php } }?>
					</tr>
				</thead>

				<tbody>

					<?php foreach($form6 as $forms6){?>

					<tr>
						<?php foreach($form7 as $f7){

							$field_names = $f7['Field'];
							$field_type = $f7['Type'];

							if ($field_type!='int(11) unsigned' && $field_type!='decimal(10,0)') {
	
							?>

						<td><?=$forms6[$field_names]?></td>

					<?php } }?>

					</tr>

				<?php }?>
				</tbody>
			</table>
			
		</div>
		
	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});
</script>

</body>
</html>