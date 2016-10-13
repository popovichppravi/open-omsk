$(document).ready(function() {

//открытие меню на мобильном устройстве
$("#toggle_menu").click(
function () {
	$(this).toggleClass("on");
	$(".top_menu").slideToggle();
}
	);


//показать всё
$(".show_cont").click(
function (event) {
	event.preventDefault();
	if ($(this).find("span").html()=="показать всё")
		{
			$(this).find("span").html("скрыть");
			degrees=180;
		}
	else
		{
			$(this).find("span").html("показать всё");
			degrees=0;
		}
	$(".cont_hidden").toggleClass("visible_cont");
	$(this).find("i").css({'transform' : 'rotate('+ degrees +'deg)'});

}
	);

//таблица открытых данных
    // Setup - add a text input to each footer cell
    $('#example thead th div').each( function () {
        var title = $(this).text();
        $(this).html( '<input class="filter form-control input-sm" type="text" placeholder="" /><i class="fa fa-times" aria-hidden="true"></i>' );
    } );
 
    // DataTable
    var table = $('#example').DataTable({
    	"scrollX": "100%",
    	"sort": true,
    	"info": false,
    	"autoWidth": false,
    	"fixedHeader": true,
    	"aaSorting": [],
    	"language": 
    		{
    			"lengthMenu": "Строк: <b>"+$('#example tr').length+"</b>, показывать по: _MENU_",
    			"zeroRecords": "По Вашему запросу ничего не найдено",
    			searchPlaceholder: "Поиск по всей таблице",
    			"search": "",
    			"paginate": 
    				{
      					"previous": "&laquo;",
      					"next": "&raquo;"
    				},
  			}
  			
    });

 

      $('#example tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column(colIdx).nodes() ).addClass( 'highlight' );
        } );
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
            $(this).next("i").css("display", "inline-block"); 

        } );

                $('.dataTables_scroll thead th div i').on('click', function(e){
$(this).prev("input").val(""); 
that.search("").draw();
});
    });



    $('.filter').on('click', function(e){
   e.stopPropagation();    
});



        $('.dataTables_scroll thead th div').on('click', function(e){
   e.stopPropagation();    
});




/*************************************/

});


