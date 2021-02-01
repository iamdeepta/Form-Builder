<?php

include 'db.php';

extract($_POST);
if (isset($_POST['text']) && isset($_POST['uniq_id'])) {
	
	

		$query = "INSERT INTO start_form 
                    SET 
                        `field_type` = '{$text}',
                        `unique_id` = '{$uniq_id}',
                        `status` = '1'
                        
                      
                ";

            

        $insert_q = mysqli_query($conn, $query);

	
	echo $uniq_id;


}



if (isset($_POST['number']) && isset($_POST['uniq_id1'])) {
	

		$query1 = "INSERT INTO start_form 
                    SET 
                        `field_type` = '{$number}',
                        `unique_id` = '{$uniq_id1}',
                        `status` = '1'
                        
                      
                ";

            

        $insert_q1 = mysqli_query($conn, $query1);


	echo $uniq_id1;


}


if (isset($_POST['date']) && isset($_POST['uniq_id2'])) {
	

		$query2 = "INSERT INTO start_form 
                    SET 
                        `field_type` = '{$date}',
                        `unique_id` = '{$uniq_id2}',
                        `status` = '1'
                        
                      
                ";

            

        $insert_q2 = mysqli_query($conn, $query2);


	echo $uniq_id2;


}


if (isset($_POST['textarea']) && isset($_POST['uniq_id3'])) {
	

		$query3 = "INSERT INTO start_form 
                    SET 
                        `field_type` = '{$textarea}',
                        `unique_id` = '{$uniq_id3}',
                        `status` = '1'
                        
                      
                ";

            

        $insert_q3 = mysqli_query($conn, $query3);


	echo $uniq_id3;


}




?>