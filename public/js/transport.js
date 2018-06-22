$(function(){
	Transport.init();
});



Transport = {
	reloadTime: 5000,

	init: function() {
		this.initReload();
		this.initAdd();
	},

	//Обновление страницы
	initReload: function() {
		var $this = this;


		setInterval(function(){
			$('.transportWrap').load('/ #table-transport');
		}, $this.reloadTime);
	},

	//Добавление события
	initAdd: function() {
		$('#addEvent').submit(function(e){
			e.preventDefault();

			var form = $(this);
			var data = form.serialize();

			$.ajax({
	            url: '',
	            headers: {
	                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
	            },
	            data: data,
	            method: "POST",
	            dataType: "JSON",
	            complete: function(res) {
	            	form.find('.alert').remove();

	            	if (res.status == 200) {
	            		form.find('input[type=text]').each(function(){
		            		$(this).val('');
		            	});

		            	form.prepend('<div class="alert alert-success">Запись успешно добавлена!</div>');
	            	} else {
						var json = res.responseJSON;

						for (var i in json.errors) {
							form.prepend('<div class="alert alert-warning">' + json.errors[i][0] + '</div>');
						}
	            	}
	            },
	        });
		});
		
	},
}