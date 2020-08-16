jQuery.validator.setDefaults({
	errorPlacement: function(error, element) {
		jQuery(element).closest('div.form-group').find('.form-text').html(error.html());
	},
	highlight: function(element) {
		jQuery(element).closest('div.form-group').removeClass('has-success').addClass('has-error');
	},
	unhighlight: function(element, errorClass, validClass) {
		jQuery(element).closest('div.form-group').removeClass('has-error').addClass('has-success');
		jQuery(element).closest('div.form-group').find('.form-text').html('');
	}
});

$(document).ready(function() {
	var $form, $loader, $modal, $messageModalContent;

	$loader = $("#loader");
	$form = $("#contactForm");
	$modal = $("#messageModal");
	$messageModalContent = $("#messageModalContent")

	$loader.hide();
	$form.validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: "Please enter a name"
			},
			email: {
				required: "Please enter an email"
			},
			message: {
				required: "Please enter a message"
			}
		}
	});

	$form.bind('submit', function (e) {
        $form.ajaxForm({
        	headers: {
		        "Access-Control-Allow-Origin": "*"
		    },
            type: "POST",
            url: "http://34.214.1.191/mail.php",
            dataType: "json",
            beforeSubmit: function() {
				if(!$form.valid()) {
					return false;
				}
				$loader.show();
			},
            success: function(res) {
				$loader.hide();
				$messageModalContent.removeClass("alert-danger").addClass("alert-success");
				$messageModalContent.html("Message sent successfully!")
				$modal.modal("show");
            },
			error: function(error) {
				$loader.hide();
				$messageModalContent.removeClass("alert-success").addClass("alert-danger");
				$messageModalContent.html("Failed to send the message...")
				$modal.modal("show");
			}
        });
        e.preventDefault();
        return false;
	});
})