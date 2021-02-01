<?php 


include 'db.php';

if (isset($_POST['btn_generate'])) {
		
$msg = $_GET['msg'];

$form_name = $_POST['form_name'];




	
$select_query2 = "SELECT * from start_form where unique_id = '$msg'";

		$sql3 = mysqli_query($conn,$select_query2);




		$createQuery = "CREATE TABLE `$form_name` (
                        ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        ";

        foreach($sql3 as $ids){?>

        	<p style="display: hidden"><?php $f_id = $ids['id'];?></p>

        	<?php
			$field_ids = $_POST[$f_id];
			//$id2 = $ids['id'];

            if ($ids['field_type']==1) {
                
                $createQuery .= "`$field_ids` TEXT COLLATE utf8_general_ci NOT NULL,";

            }elseif($ids['field_type']==2){

                $createQuery .= "`$field_ids` INT(11) NOT NULL,";

            }elseif($ids['field_type']==3){

                $createQuery .= "`$field_ids` DATE NOT NULL,";

            }elseif($ids['field_type']==4){

                $createQuery .= "`$field_ids` VARCHAR(255) COLLATE utf8_general_ci NOT NULL,";
            }

        } 


        $createQuery .= "Status DECIMAL NOT NULL
                    )
                    ";
    
                        
        

        $crtQuery = mysqli_query($conn, $createQuery);



        //insert form name in another table
        $forms_query = "INSERT INTO all_forms 
                    SET 
                        `form_name` = '{$form_name}',
                        `form_unique_id` = '{$msg}'
                 
                ";

            

        $forms_q = mysqli_query($conn, $forms_query);



        header("Location: index.php");

}




if (isset($_POST['submit_btn'])) {
    
    $msg = $_GET['msg'];

    $form_query3 = "SELECT * from all_forms where form_id = '$msg'";

    $form3 = mysqli_query($conn,$form_query3);


    foreach($form3 as $f3){

        $forms_name = $f3['form_name'];
    }


$form_lower = strtolower($forms_name);


$form_query4 = "DESCRIBE `$form_lower`";

$form4 = mysqli_query($conn,$form_query4);


    $forms_query3 = "INSERT INTO `$forms_name` 
                    SET ";

                    foreach($form4 as $f4){

                        $input_field = strtolower(str_replace(' ','',$f4['Field']));

                        $input_fields = $_POST[$input_field.$msg];

                        $field_name = $f4['Field'];

                        if($field_name!='Status'){

                $forms_query3  .= " `$field_name` = '{$input_fields}',
                 
                ";

            }

            }


            $forms_query3 .= "`Status` = '1'";

        $forms_q3 = mysqli_query($conn, $forms_query3);


        header("Location: form_view.php?msg=".$msg);

}


?>
