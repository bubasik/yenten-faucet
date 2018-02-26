$(document).ready(function () {

		$('form').submit(function (event) {
    
$('#exampleModalCenter').modal('hide');    

		var formData = $("form").serialize();
$('#error').removeClass('alertaerro');

		$.ajax({
			type: 'POST',
			url: 'faucet.php',
			data: formData,
			dataType: 'json',
			encode: true
		}).done(function (data) {
			
			if (data.errors) {
				if (data.errors.human) {

					$('#error').append('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' + data.errors.human + '</div>');
					$('input[name=address]').val("");
				}
				if (data.errors.address) {

					$('#error').append('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' + data.errors.address + '</div>');
					$('input[name=address]').val("");

				}
				if (data.errors.balance) {

					$('#error').append('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' + data.errors.balance + '</div>');
					$('input[name=address]').val("");
				}


			} else {
				$('#error').append('<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h2>' + data.boa + '</h2></div>');
					$('input[name=address]').val("");

			}
		}).fail(function (data) {
			// console.log(data);
		});

		event.preventDefault();

	});
});
