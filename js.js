



$(document).ready(function(){

    const params = new URLSearchParams(document.location.search);
    if (params.get("search"))
    {

        document.getElementById("search_input").value = params.get("search");
    }
    var search_data = params.get("search");
   

    var page = 1;
    var current_page = 1;
    var total_page = 0;
    var is_ajax_fire = 0;

    manageData(search_data);
    var year_today = new Date().getFullYear();
    document.getElementById("year").max = year_today;
    

        function manageData(search_data) {
            $.ajax({
                dataType: 'json',
                url: 'get_data.php',
                data: {page:page,search:search_data}
            }).done(function(data){

                var totalRows = data.total;
                total_page = Math.ceil(totalRows/10);
                current_page = page;
                $('#pagination').twbsPagination({
                    totalPages: total_page,
                    visiblePages: total_page,
                    first: '',
                    prev: '',
                    next: '',
                    last: '',
                    onPageClick: function (event, pageL) {
                        page = pageL;
                        if(is_ajax_fire != 0){
                          getPageData();
                        }
                    }
                });
                manageRow(data.data);
                is_ajax_fire = 1;
            });
        }

        function getPageData(search_data) {
            var search = search_data;
            $.ajax({
                dataType: 'json',
                url: 'get_data.php',
                data: {page:page,search:search}
            }).done(function(data){
                console.log(data);
                manageRow(data.data);
            });
        }

        function manageRow(data)
        {
            // console.log(data);
            var	body = '';
            $.each( data, function( key, value ) {
                body += "<tr>";
                body += "<td>"+value.title+"</td>";
                body += "<td>"+value.isbn+"</td>";
                body += "<td>"+value.author+"</td>";
                body += "<td>"+value.publisher+"</td>";
                body += "<td>"+value.year_published+"</td>";
                body += "<td>"+value.category+"</td>";
                body += "<td data-id='"+value.id+"'><button type='button' data-toggle='modal' data-target='#edit_catalog' class='btn btn-secondary btn-sm edit-book'>Edit</button> ";
                body += "<button type='button' class='btn btn-secondary btn-sm remove-item'>Delete</button>";
                body += "</td>";
                body += "</tr>";
            });


            $("#body_table").html(body);
        }

        // $(document).on('submit',"#search",function(e) {
        //     e.preventDefault();
        //     var search = document.getElementById('search_input').value;
        //     getPageData(search);
        
        // });

        $("body").on("click",".edit-book",function(){

            // alert("renz");
            var id = $(this).parent("td").data('id');
            var title = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var isbn = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var author = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var publisher = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var year = $(this).parent("td").prev("td").prev("td").text();
            var category = $(this).parent("td").prev("td").text();
        
        
            $("#edit_catalog").find("input[name='title']").val(title);
            $("#edit_catalog").find("input[name='isbn']").val(isbn);
            $("#edit_catalog").find("input[name='author']").val(author);
            $("#edit_catalog").find("input[name='publisher']").val(publisher);
            $("#edit_catalog").find("input[name='year']").val(year);
            $("#edit_catalog").find("input[name='category']").val(category);
            $("#edit_catalog").find(".edit-id").val(id);
        
        
        });


        $("body").on("click",".remove-item",function(){
            var id = $(this).parent("td").data('id');
            var c_obj = $(this).parents("tr");
        
            swal({
                title: "Are you sure you want to delete this item?",
                text: "Once deleted, you will not be able to recover this,but you may view it in the archived tab!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                     $.ajax({
                        dataType: 'json',
                        type:'POST',
                        url: 'delete.php',
                        data:{id:id}
                    }).done(function(data){
                        c_obj.remove();
                        
                        // getPageData();
                        swal("This item is moved in the archived tab.", {
                            icon: "success",
                        });
                        getPageData();
                    });
                   
                } 
            });
        });

        $(document).on('submit',"#addCatalogRequest",function(e) {
            e.preventDefault();
           
            dataAll = {};
            var title = document.getElementById('title').value;
            var isbn = document.getElementById('isbn').value;
            var author = document.getElementById('author').value;
            var publisher = document.getElementById('publisher').value;
            var year = document.getElementById('year').value;
            var category = document.getElementById('category').value;
            
            dataAll.title = title;
            dataAll.isbn = isbn;
            dataAll.author = author;
            dataAll.publisher = publisher;
            dataAll.year = year;
            dataAll.category = category;
            $.ajax({ url: "add_book_database.php",
            dataType: 'JSON',
            type : "POST",
            data : dataAll,
            // context: document.body,
            success: function(data){
                        $('#add_catalog').modal('toggle');
                        swal("Successfully Created", {
                            icon: "success",
                        });
                        $("#add_catalog").find("input[name='title']").val('');
                        $("#add_catalog").find("input[name='isbn']").val('');
                        $("#add_catalog").find("input[name='author']").val('');
                        $("#add_catalog").find("input[name='publisher']").val('');
                        $("#add_catalog").find("input[name='year']").val('');
                        $("#add_catalog").find("input[name='category']").val('');
                        getPageData();
                        }
                    });
    
        });

        $(document).on('submit',"#editCatalogRequest",function(e) {
            e.preventDefault();
           
            dataAll = {};
            var title = $("#editCatalogRequest").find("input[name='title']").val();
            var isbn = $("#editCatalogRequest").find("input[name='isbn']").val();
            var author = $("#editCatalogRequest").find("input[name='author']").val();
            var publisher = $("#editCatalogRequest").find("input[name='publisher']").val();
            var year = $("#editCatalogRequest").find("input[name='year']").val();
            var category = $("#editCatalogRequest").find("input[name='category']").val();

            var id = $("#editCatalogRequest").find(".edit-id").val();
            
            dataAll.id = id;
            dataAll.title = title;
            dataAll.isbn = isbn;
            dataAll.author = author;
            dataAll.publisher = publisher;
            dataAll.year = year;
            dataAll.category = category;

            
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'save_edit_catalog.php',
                data:dataAll
            }).done(function(data){
                $(".modal").modal('hide');
                    swal("Successfully Updated", {
                        icon: "success",
                    });
                getPageData();
            });
    
        });

        $('th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}
        })
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
});
