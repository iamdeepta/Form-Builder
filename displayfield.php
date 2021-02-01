<?php

include 'db.php';

extract($_POST);
if (isset($_POST['check']) && isset($_POST['uniq_id1'])) {
	
	




        $select_query = "SELECT * from start_form where unique_id = '$uniq_id1'";

		$sql1 = mysqli_query($conn,$select_query);
		//$sql_text = mysqli_fetch_array($sql1);


$formlist = '';

		foreach($sql1 as $sql_text){


			if ($sql_text['field_type']==1) {
				
				$type = 'text';

				$formlist .= '<div class="form-group">
							<label>Text</label>
							<input class="form-control" type="text" name="'.$sql_text['id'].'" id="'.$sql_text['id'].'">
						</div>';

			}elseif ($sql_text['field_type']==2) {
				
				$type = 'number';

				$formlist .= '<div class="form-group">
							<label>Number</label>
							<input class="form-control" type="text" name="'.$sql_text['id'].'" id="'.$sql_text['id'].'">
			
					</div>';
		
			}elseif ($sql_text['field_type']==3) {
				
				$type = 'date';

				$formlist .= '<div class="form-group">
							<label>Date</label>
							<input class="form-control" type="text" name="'.$sql_text['id'].'" id="'.$sql_text['id'].'">
						</div>';

			}elseif ($sql_text['field_type']==4) {
				
				$type = 'textarea';

				$formlist .= '<div class="form-group">
							<label>Text Area</label>
							<input class="form-control" type="text" name="'.$sql_text['id'].'" id="'.$sql_text['id'].'">
						</div>';
						
			}


			


		}


		echo $formlist;

}




?>