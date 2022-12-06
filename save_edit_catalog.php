<?php 
        include 'database.php';

        $id = $_POST['id'];
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
            'updated_at' =>$date_today,
        ];
        $con = new database();
        $con->update("catalogs",$data_final,$id);
        
        $return = [
            'status' => $con,
        ];
        echo json_encode($return);
        
?>