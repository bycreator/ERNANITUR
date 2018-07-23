document.ready = $(function(){
	$('#spa-create-account').on("submit", function(){
		//create-user
		let query   = $(this).serialize();
		
		let create = $.ajax({
			url: '/ernanitur/panel/post/createUser',
			method: 'POST',
			data: query,
			dataType: 'json',
			
			success: function(req){
				if(req.status == 400){
					toastr.error(req.callback);

					return;
				}
				
				toastr.success("Nice! tudo certo, faça algo.");
			}
		
		});
		
		return false;
	});
});