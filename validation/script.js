$(document).ready(function(){


		$('#registration-form').validate({
	    rules: {		  
		 user: {
	        minlength: 2,
	        required: true
	      },
		 password: {
				required: true,
				minlength: 6
			},
		 nama: {
	        required: true,
	       required: true
	      },
		    alamat: {
	      	minlength: 10,
	        required: true
	      },		  
	      email: {
	        required: true,
	        email: true
	      },
		    telp: {
	      	number: true,
	        required: true
	      },
	      judul: {
	        minlength: 6,
	        required: true
	      },
		  tanggal: {
	        date: true,
	        required: true
	      },
		  keterangan: {
	      	minlength: 10,
	        required: true
	      },
		  namafile: {
	        gambar: true,
	       gambar: true
	      },
		  agree: "required"
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready