$(document).ready(function(){
    $("#search").keyup(function(){
        var txt = $(this).val();
        $("#searchresults").show();
        $.ajax({
        	type:'GET',
        	url:'search.php',
        	data:'q='+txt;
        	success:function(data){
        		#("#searchresults").html(data);
        	}
        });
    }) ;
});