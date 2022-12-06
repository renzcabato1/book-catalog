<html>
<head>
<title>Catalog</title>
<!-- <link rel="icon" type="image/x-icon"  href=""/> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Roboto:300,400,500,700%7CHind+Madurai:400,500&amp;subset=latin-ext" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="content-wrap">
    <div class="container clearfix">
        <div class="row mt-5 pt-5">
            <div class="col-md-6" >
                <form id="search" method='get'>
                    <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="search_input" name='search' placeholder="Enter your keywords">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>  
                </form>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-3">
                <a href="recent.php" target="_blank" class="btn btn-block btn-secondary m-1">Recent</a>
            </div>
            <div class="col-md-3">
                <a href="archived.php" target="_blank" class="btn btn-block btn-secondary m-1">Archived</a>
            </div>
            <div class="col-md-4">
                <!-- <a href="recent.php" class="btn btn-block btn-secondary m-1">Archived</a> -->
            </div>
            <div class="col-md-2 float-right mb-5">
                <a href="recent.php" class="btn btn-block btn-secondary m-1 btn-success float-right" data-toggle="modal" data-target="#add_catalog">Add</a>
            </div>
            <div class="col-md-12 mt-1 p=0">
            
            <table  class="table table-bordered table-striped bg-light text-center">
                <thead>
                    <tr>
                        <th scope="col">TITLE</th>
                        <th scope="col">ISBN </th>
                        <th scope="col">AUTHOR </th>
                        <th scope="col">PUBLISHER </th>
                        <th scope="col">YEAR PUBLISH</th>
                        <th scope="col">CATEGORY </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id='body_table'>
                </tbody>
            </table>
                
            </div>
            <!-- <ul id="pagination-demo" class="pagination-sm"></ul> -->
            <div class="col-md-12 mt-1 p=0 text-center float-right">
                <div id="buttons">
                    <ul id="pagination" class="pagination-sm" ></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('add_catalog.php');?>
<?php include('edit_catalog.php');?>
<script src="js.js"></script>
</body>
</html>