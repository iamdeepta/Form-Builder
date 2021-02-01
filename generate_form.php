<?php 

//$u_msg = $_GET['msg'];
$u_id = uniqid(time());

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

<div class="container d-flex justify-content-between mt-5">
	
	<div>
		<input type="hidden" name="uniq_id" id="uniq_id" value="<?=$u_id?>">

<form action="insert.php?msg=<?=$u_id?>" method="post">
		<div class="form-group">
			<label>Form Name</label>
			<input type="text" class="form-control" name="form_name" id="form_name">
		</div>

		
	<div class="form_div">

		
	</div>

	<button type="submit" class="btn btn-success btn-sm" name="btn_generate" id="btn_generate" style="display: none" >Generate</button>
</form>
</div>

<?php 

$text = 1;
$number = 2;
$date = 3;
$textarea = 4;
?>

	<div class="">
		<div><button type="button" class="btn btn-primary btn-sm" id="btn_text" onclick="generate(<?=$text?>)">Text</button></div>
		<div class="mt-2"><button class="btn btn-primary btn-sm" id="btn_number" onclick="generate1(<?=$number?>)">Number</button></div>
		<div class="mt-2"><button class="btn btn-primary btn-sm" id="btn_date" onclick="generate2(<?=$date?>)">Date</button></div>
		<div class="mt-2"><button class="btn btn-primary btn-sm" id="btn_text_area" onclick="generate3(<?=$textarea?>)">Text Area</button></div>
	</div>
</div>




<script type="text/javascript">
	
	$(document).ready(function(){

		//generate();

		//$("#btn_text").click(function(){

			

		//});

		// $("#btn_number").click(function(){

		// 	$(".form_div").html('<div class="form-group"><label>Number</label><input class="form-control" type="text" name="" id="number_input"></div>');

		// 	$("#btn_generate").show();

		

		// });
	});


	function generate(text){

			
			var uniq_id = $("#uniq_id").val();


			$("#btn_generate").show();

		
			$.ajax({

				url: 'form_start_page.php',
				type: 'post',
				data: {

					text : text,
					// number : number,
					// date : date,
					// textarea : textarea,
					uniq_id: uniq_id
				},

				success: function(data,status){

					displayfield(data);
				}

			});

		}

		function generate1(number){

			
			var uniq_id1 = $("#uniq_id").val();


			$("#btn_generate").show();

		
			$.ajax({

				url: 'form_start_page.php',
				type: 'post',
				data: {

					number : number,
					
					uniq_id1: uniq_id1
				},

				success: function(data,status){

					displayfield(data);
				}

			});

		}


		function generate2(date){

			
			var uniq_id2 = $("#uniq_id").val();


			$("#btn_generate").show();

		
			$.ajax({

				url: 'form_start_page.php',
				type: 'post',
				data: {

					date : date,
					
					uniq_id2: uniq_id2
				},

				success: function(data,status){

					displayfield(data);
				}

			});

		}


		function generate3(textarea){

			
			var uniq_id3 = $("#uniq_id").val();


			$("#btn_generate").show();

		
			$.ajax({

				url: 'form_start_page.php',
				type: 'post',
				data: {

					textarea : textarea,
					
					uniq_id3: uniq_id3
				},

				success: function(data,status){

					displayfield(data);
				}

			});

		}



		function displayfield(uniq_id1){

			var check = 'check';
			//var uniq_id1 = $("#uniq_id").val();

			
			$("#btn_generate").show();

		
			$.ajax({

				url: 'displayfield.php',
				type: 'post',
				data: {

					check : check,
					
					uniq_id1: uniq_id1
				},

				success: function(data,status){

					$(".form_div").html(data);
				}

			});


		}



		function createTable(){

			var form_name = $("#form_name").val();
			var uniq_id4 = $("#uniq_id").val();


			
			$("#btn_generate").show();

		
			$.ajax({

				url: 'create_table.php',
				type: 'post',
				data: {

					form_name : form_name,
					
					uniq_id4: uniq_id4
				},

				success: function(data,status){

					$(".form_div").html(data);
				}

			});


		}


	$(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

});

</script>
</body>
</html>