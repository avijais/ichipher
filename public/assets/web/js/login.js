$(document).ready(function() {

	/**
    * Description   
    * @login and go ahead for dashboard view
    *
    * @Author : 
    *
    * */
	$('#login').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();
        // var formData = $(this).serializeArray();
        // formData.push({ name: 'submit', value: '1' },{ name: 'company_id', value: $('#employer-company').val() });
        console.log($(this).serialize())
        $.ajax({
            url: config.BASEURL + '/goinside',
            data: $(this).serialize(),
            type: "POST",
            statusCode: {
                404: function() {
                	// alertify.error(messagesDictionary[config.lang_code]['page not found']);
                },
                500: function() {
                	// alertify.error(messagesDictionary[config.lang_code]['Internal server error']);
                },
                403: function() {
                    // alertify.error(messagesDictionary[config.lang_code]['Please complete your profile and company information']);
                    // $.unblockUI();
                }
            },
            beforeSend: function() {
                // blockUser();
            },
            success: function(data) {
                console.log(data.redirectTo)
                // return false;
                if (data.status == 'success') {
                    window.location = data.data.redirectTo
                    // alertify.error(data.msg);
                } else if (data.status == 'error') {
                    // alertify.success(data.msg);
                }
            },
            error: function(request) {
                if(request.status == 401){
                    // alertify.error(messagesDictionary[config.lang_code]['You have been logged out due to inactivity. Please login to continue']);
                    // window.location.href = config.BASEURL;
                }
            }
        });/* End - ajax {*/
	})/* End - login submit {*/

})/* End - $(document).ready {*/