jQuery('input[type=file]').bind('change', function() {
	var filesize = this.files[0].size/1024/1024;
	var extention = this.files[0].name.split('.').pop().toLowerCase();

	if (filesize > 16) {
		alert('O tamanho do arquivo é maior do que o tamanho permitido de 15MB')
		jQuery(this).val("");
	}
});

jQuery('form#briefing').submit(function(e) {
	// var formData = new FormData();

	jQuery.ajax({
		method: "POST",
		url: "briefing.php",
		data: new FormData(this),
		dataType: "json",
		success: function(data) {
			console.log(data);
		}
	})

	return false;
});