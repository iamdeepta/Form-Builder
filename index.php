<?php 

include 'db.php';

$form_query = "SELECT * from all_forms";

$form = mysqli_query($conn,$form_query);

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
		<div class="card-header">Form List</div>

		<div class="card-body">
			<table class="table table-hover table-bordered table-striped" id="dtBasicExample">
				<thead>
					<tr>
						<th>Sl.</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php 
					$sl = 0;
					foreach($form as $forms){
						$sl++;
					?>
					<tr>
						<td style="width: 15%"><?=$sl?></td>
						<td><a href="form_make.php?msg=<?=$forms['form_id']?>"><?=$forms['form_name']?></a></td>
						<td style="width: 15%">
							
							<a href="form_view.php?msg=<?=$forms['form_id']?>"><button type="submit" class="btn btn-success btn-sm ml-3">Reports</button></a>
						</td>
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