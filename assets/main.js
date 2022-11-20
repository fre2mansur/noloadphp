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
	  	showFlash(msg);
	    console.log(msg);
	  });
	
}

function showFlash(msg) {
	msg = JSON.parse(msg);
	state = msg.state == 'error' ? 'danger' : 'success'; 
	$('#showFlash').removeClass('alert-danger').addClass('alert-'+state).html(msg.msg);
}
