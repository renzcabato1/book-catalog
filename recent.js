



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

        function manageData() {
            $.ajax({
                dataType: 'json',
                url: 'get_data.php',
                data: {page:page,search:search_data}
            }).done(function(data){

                var totalRows = data.total;
                total_page = Math.ceil(totalRows/10);
                current_page = page;
                $('#pagination_archived').twbsPagination({
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
                body += "<td data-id='"+value.id+"'>"+value.updated_at+"</td>";
                body += "</tr>";
            });
            $("#recent_table").html(body);
        }

        $(document).on('submit',"#search",function(e) {
            e.preventDefault();
            var search = document.getElementById('search_input').value;
            getPageData(search);
        
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
