function processAjaxData(response, urlPath){
 document.getElementById("content").innerHTML = response;
 document.title = urlPath;
 if(urlPath == 'home') {
 	window.history.pushState("","", "/");
 } else {
 	window.history.pushState("","", urlPath);
 }
	}

function noload_route(route) {
	if(!route) {
		route = 'home';
	}
	$.ajax({
	  method: "GET",
	  url: "route.php",
	  data: { page: route  }
	})
	  .done(function( msg ) {
	    processAjaxData(msg, route)
	  });
}
function noload_action(form, action) {
	formData = $(form).serializeArray();
	data = {'action': action}
	$.each(formData, function(i, field) {
		data[field.name] = field.value;
	});

	$.ajax({
	  method: "GET",
	  url: "actions.php",
	  data: data
	})
	  .done(function( msg ) {
	    console.log(msg);
	  });
	
}

function noload_submit(route) {
	form = document.getElementById(route);
	fields = new FormData(form);

	let output
	for (const [key, value] of fields) {
	  output += `${key}: ${value},`;
	}
	console.log(output);
	$.ajax({
	  method: "POST",
	  url: "actions.php",
	  data: {output}
	})
	  .done(function( msg ) {
	  	alert(msg);

	    //processAjaxData(msg, route)
	  });
}