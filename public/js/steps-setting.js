const state = {
	init: () => { 
		$('.alert-warning').hide();
		$('.passwords').keyup(function(){
			let password = $('#password').val();
			let confirm_password = $('#confirm-password').val();
			
			if(password != confirm_password){				
				if(confirm_password){
					$('.alert-warning').show();
				}
			}else{
				$('.alert-warning').hide();
			}
		});
	}
}

window.addEventListener("load", state.init);

$(".tab-wizard").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> #title#',
	labels: {
		finish: "Submit"
	},
	onStepChanged: function (event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
	},
	onFinished: function (event, currentIndex) {
		$('#success-modal').modal('show');
	}
});

$(".tab-wizard2").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
	labels: {
		finish: "Submit",
		next: "Next",
		previous: "Previous",
	},
	onStepChanged: function(event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
		if(currentIndex == 3){
			let show_email = $('#email').val();
			let show_username = $('#username').val();
			let show_gender = $('#male').is(':checked') ? 'Male':'Female';			
			let show_address = $('#address').val();
			let first_name = $('#first-name').val().toUpperCase();
			let middle_name = $('#middle-name').val().toUpperCase();
			let last_name = $('#last-name').val().toUpperCase();
			let show_full_name;

			if(middle_name){
				show_full_name = `${last_name}, ${first_name} ${middle_name}`;
			}else{
				show_full_name = `${last_name}, ${first_name}`;				
			}

			$('#show-email').html(show_email);
			$('#show-username').html(show_username);
			$('#show-gender').html(show_gender);
			$('#show-fullname').html(show_full_name);
			$('#show-address').html(show_address);
		}
	},
	onFinished: function(event, currentIndex) {
		// $('#success-modal-btn').trigger('click');
		$('#success-modal').modal('show');
	}
});