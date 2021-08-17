$(document).ready(function(){
	getCountMenu();

	
})
function getCountMenu(){
	$.get('/menus/count',function(response){
		$.each(response.data,function(i,v){
			$(`.${v.name}-backend-count`).html(v.meats_count);
		})

		$.each(response.lastdate,function(i,v){
			//console.log(v[0].category.name);
			$(`.${v[0].category.name}-latestUpdate`).html(v[0].created_at);
		})
	})


}