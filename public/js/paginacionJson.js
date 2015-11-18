$(document).on('click','.pagination a',function(e)

{
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	console.log(page);
	var route = "planificacionlist";
	$.ajax(
	{
		url:route,
		data:{page: page},
		type:'GET',
		dataType: 'json',
		success:function(data){
			console.log(data);
			$(".container").html(data);
		}
	});
	
});