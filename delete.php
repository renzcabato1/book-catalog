<?php 
        include 'database.php';

        $id = $_POST['id'];
        $date_today = date("Y-m-d h:i");
        $data_final = [
            'archived' => 1,
            'updated_at' =>$date_today,
        ];
        $con = new database();
        $con->update("catalogs",$data_final,$id);
        
        $return = [
            'status' => $con,
        ];
        echo json_encode($return);
        
?>