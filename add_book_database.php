<?php 
        include 'database.php';

        $title = $_POST['title'];
        $isbn = $_POST['isbn'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];
        $category = $_POST['category'];
        $date_today = date("Y-m-d h:i");
        $data_final = [
            'title' => $title,
            'isbn' => $isbn,
            'author' => $author,
            'publisher' => $publisher,
            'year_published' => $year,
            'category' => $category,
            'created_at' =>$date_today,
            'updated_at' =>$date_today,
        ];

        $con = new database();
        $con->insert("catalogs",$data_final);
        
        $return = [
            'status' => $con,
            'data' => $data_final,
            'last_id' => $con->id_insert,
        ];
        echo json_encode($return);
        
        // echo $_POST['title'];
?>