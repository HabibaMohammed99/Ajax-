window.onload = function(){
	$("button").click(function(){

		// var xhr = new XMLHttpRequest();
		// xhr.open("get","data/dataTest.txt",true);
		// xhr.send();

		// xhr.onreadystatechange =function(){
		// 	if(xhr.readyState == 4 && xhr.status == 200){
		// 		$(".content").html(xhr.response);
		// 	}
		// }
		$.get("data/dataTest.txt",function(data){
			$(".content").html(data);
		})

		})

	

}