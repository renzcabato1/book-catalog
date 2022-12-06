<?php 
        include 'database.php';
        $con = new database();
        $num_rec_per_page = 10;

        if (isset($_GET["page"])) 
        { 
            $page  = $_GET["page"]; 
        } 
        else
        { 
            $page=1; 
        };
        if(isset($_GET["status"]))
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        if(isset($_GET["search"]))
        {
            $search = $_GET["search"];
            $where = "(title LIKE '%".$search."%' OR isbn LIKE '%".$search."%' OR author LIKE '%".$search."%' OR publisher LIKE '%".$search."%' OR year_published LIKE '%".$search."%' OR category LIKE '%".$search."%' OR archived LIKE '%".$search."%') AND archived=".$status;
        }
        else
        {
            $where = 'archived='.$status;
        }
       
        
        $start_from = ($page-1) * $num_rec_per_page;

        $con->select("catalogs","*",$where,$start_from,$num_rec_per_page);
        $result = $con->sql;
        // var_dump($result);
        echo json_encode($con); 
?>