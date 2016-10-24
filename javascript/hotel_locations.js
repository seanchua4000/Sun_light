$(document).ready(function(){
	$("#res_branch").change(function(){
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax({
			type: "POST",
			url: "list_room.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#res_rmtype").html(html);
			}
		})
	});
});

$.ajax({
	url: "list_hotel.php",
	success: function(result)
	{
		$("#res_branch").html(result);
	}
});