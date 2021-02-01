<?php

include 'db.php';

extract($_POST);
if (isset($_POST['form_name']) && isset($_POST['uniq_id4'])) {
	
	
$select_query2 = "SELECT * from start_form where unique_id = '$uniq_id4'";

		$sql3 = mysqli_query($conn,$select_query2);




		$createQuery = "CREATE TABLE `$form_name` (
                        ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        ";

        foreach($sql3 as $ids){?>

        	<p style="display: hidden"><?php $f_id = $ids['id'];?></p>

        	<?php
			$field_ids = $_POST[$f_id];
			//$id2 = $ids['id'];

            $createQuery .= "`$field_ids` TEXT COLLATE utf8_general_ci NOT NULL,";
        } 


        $createQuery .= "Status DECIMAL NOT NULL
                    )
                    ";
    
                        
        

        $crtQuery = mysqli_query($conn, $createQuery);



        echo $createQuery;


}




?>