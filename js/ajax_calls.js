
//////////////////////-------FILE UPLOADING-----///////////////////

$(document).ready(function(){
var path = window.location.pathname;
var page = path.split("/").pop();
var sub_page = "";
if (page.includes("edit")) {
    sub_page = "../";
}
    //////////////////////-------UBI-----///////////////////
    ////////	CERTIFIED COPY OF A U.S. BIRTH CERTIFICATE
    $("#birth_certificate").on('change', function(e){
    	$("#upload_1_msg").html("Uploading...");
    	var form_data = new FormData()
    	$.each($('#birth_certificate')[0].files, function(i, file) {
    		form_data.append('file-'+i, file);
    	});
    	$.ajax({
    		xhr: function() {
    			var xhr = new window.XMLHttpRequest();
    			xhr.upload.addEventListener("progress", function(evt) {
    				if (evt.lengthComputable) {
    					var percentComplete = ((evt.loaded / evt.total) * 100);
    					console.log(percentComplete + '%');
    				}
    			}, false);
    			return xhr;
    		},
    		type: 'POST',
    		data: form_data,
    		contentType:false,
    		cache:false,
    		processData:false,
    		url : sub_page+"resources/ajax_calls/upload_files.php",
    		beforeSend: function(){
    			$("#upload_1_msg").html("Uploading...");
    			$(".upload_button_1").html('<i class="fa fa-spinner fa-spin"></i>');
    		},
    		error:function(){
    			$("#upload_1_main").addClass("uploadingerror");
    			$("#upload_1_main").removeClass("uploadingStat");
    			$("#upload_1_msg").html("There is an error while uploading.");
    			$(".upload_button_1").html('<i class="fa fa-times"></i>');
    			$("#upload_1_msg").addClass("text-danger");
    		},
    		success: function(resp){
    			$("#upload_1_msg").removeClass("text-danger");
    			$("#upload_1_main").addClass("uploadingStat");
    			$("#upload_1_main").removeClass("uploadingerror");
    			$("#upload_1_msg").html("Uploaded");
    			$(".upload_button_1").html('<i class="fa fa-check"></i>');
    			$("#birth_certificate_val").val(resp)
    		}
    	});
    });


    ////////	U.S. PASSPORT
    $("#us_passport").on('change', function(e){
    	$("#upload_2_msg").html("Uploading...");
    	var form_data = new FormData()
    	$.each($('#us_passport')[0].files, function(i, file) {
    		form_data.append('file-'+i, file);
    	});
    	$.ajax({
    		xhr: function() {
    			var xhr = new window.XMLHttpRequest();
    			xhr.upload.addEventListener("progress", function(evt) {
    				if (evt.lengthComputable) {
    					var percentComplete = ((evt.loaded / evt.total) * 100);
    					console.log(percentComplete + '%');
    				}
    			}, false);
    			return xhr;
    		},
    		type: 'POST',
    		data: form_data,
    		contentType:false,
    		cache:false,
    		processData:false,
    		url : sub_page+"resources/ajax_calls/upload_files.php",
    		beforeSend: function(){
    			$("#upload_2_msg").html("Uploading...");
    			$(".upload_button_2").html('<i class="fa fa-spinner fa-spin"></i>');
    		},
    		error:function(){
    			$("#upload_2_main").addClass("uploadingerror");
    			$("#upload_2_main").removeClass("uploadingStat");
    			$("#upload_2_msg").html("There is an error while uploading.");
    			$(".upload_button_2").html('<i class="fa fa-times"></i>');
    			$("#upload_2_msg").addClass("text-danger");
    		},
    		success: function(resp){
    			$("#upload_2_msg").removeClass("text-danger");
    			$("#upload_2_main").addClass("uploadingStat");
    			$("#upload_2_main").removeClass("uploadingerror");
    			$("#upload_2_msg").html("Uploaded");
    			$(".upload_button_2").html('<i class="fa fa-check"></i>');
    			$("#us_passport_val").val(resp)
    		}
    	});
    });


    ////////	STATE IDENTIFICAION CARD / STATE DRIVERS LICENSE CARD
    $("#identity_document").on('change', function(e){
    	$("#upload_3_msg").html("Uploading...");
    	var form_data = new FormData()
    	$.each($('#identity_document')[0].files, function(i, file) {
    		form_data.append('file-'+i, file);
    	});
    	$.ajax({
    		xhr: function() {
    			var xhr = new window.XMLHttpRequest();
    			xhr.upload.addEventListener("progress", function(evt) {
    				if (evt.lengthComputable) {
    					var percentComplete = ((evt.loaded / evt.total) * 100);
    					console.log(percentComplete + '%');
    				}
    			}, false);
    			return xhr;
    		},
    		type: 'POST',
    		data: form_data,
    		contentType:false,
    		cache:false,
    		processData:false,
    		url : sub_page+"resources/ajax_calls/upload_files.php",
    		beforeSend: function(){
    			$("#upload_3_msg").html("Uploading...");
    			$(".upload_button_3").html('<i class="fa fa-spinner fa-spin"></i>');
    		},
    		error:function(){
    			$("#upload_3_main").addClass("uploadingerror");
    			$("#upload_3_main").removeClass("uploadingStat");
    			$("#upload_3_msg").html("There is an error while uploading.");
    			$(".upload_button_3").html('<i class="fa fa-times"></i>');
    			$("#upload_3_msg").addClass("text-danger");
    		},
    		success: function(resp){
    			$("#upload_3_msg").removeClass("text-danger");
    			$("#upload_3_main").addClass("uploadingStat");
    			$("#upload_3_main").removeClass("uploadingerror");
    			$("#upload_3_msg").html("Uploaded");
    			$(".upload_button_3").html('<i class="fa fa-check"></i>');
    			$("#identity_document_val").val(resp)
    		}
    	});
    });


    ////////	STATE IDENTIFICAION CARD / STATE DRIVERS LICENSE CARD
    $("#resident_card").on('change', function(e){
    	$("#upload_4_msg").html("Uploading...");
    	var form_data = new FormData()
    	$.each($('#resident_card')[0].files, function(i, file) {
    		form_data.append('file-'+i, file);
    	});
    	$.ajax({
    		xhr: function() {
    			var xhr = new window.XMLHttpRequest();
    			xhr.upload.addEventListener("progress", function(evt) {
    				if (evt.lengthComputable) {
    					var percentComplete = ((evt.loaded / evt.total) * 100);
    					console.log(percentComplete + '%');
    				}
    			}, false);
    			return xhr;
    		},
    		type: 'POST',
    		data: form_data,
    		contentType:false,
    		cache:false,
    		processData:false,
    		url : sub_page+"resources/ajax_calls/upload_files.php",
    		beforeSend: function(){
    			$("#upload_4_msg").html("Uploading...");
    			$(".upload_button_4").html('<i class="fa fa-spinner fa-spin"></i>');
    		},
    		error:function(){
    			$("#upload_4_main").addClass("uploadingerror");
    			$("#upload_4_main").removeClass("uploadingStat");
    			$("#upload_4_msg").html("There is an error while uploading.");
    			$(".upload_button_4").html('<i class="fa fa-times"></i>');
    			$("#upload_4_msg").addClass("text-danger");
    		},
    		success: function(resp){
    			$("#upload_4_msg").removeClass("text-danger");
    			$("#upload_4_main").addClass("uploadingStat");
    			$("#upload_4_main").removeClass("uploadingerror");
    			$("#upload_4_msg").html("Uploaded");
    			$(".upload_button_4").html('<i class="fa fa-check"></i>');
    			$("#resident_card_val").val(resp)
    		}
    	});
    });

    ////////	AND SOCIAL SECURITY NUMBER CARD (SSN). YOU MUST SHOW PROOF OF YOUR SOCIAL SECURITY CARD WITH ONE OF THE ABOVE FOUR IDENTIFICATION DOCUMENTS
    $("#ssn_card").on('change', function(e){
    	$("#upload_5_msg").html("Uploading...");
    	var form_data = new FormData()
    	$.each($('#ssn_card')[0].files, function(i, file) {
    		form_data.append('file-'+i, file);
    	});
    	$.ajax({
    		xhr: function() {
    			var xhr = new window.XMLHttpRequest();
    			xhr.upload.addEventListener("progress", function(evt) {
    				if (evt.lengthComputable) {
    					var percentComplete = ((evt.loaded / evt.total) * 100);
    					console.log(percentComplete + '%');
    				}
    			}, false);
    			return xhr;
    		},
    		type: 'POST',
    		data: form_data,
    		contentType:false,
    		cache:false,
    		processData:false,
    		url : sub_page+"resources/ajax_calls/upload_files.php",
    		beforeSend: function(){
    			$("#upload_5_msg").html("Uploading...");
    			$(".upload_button_5").html('<i class="fa fa-spinner fa-spin"></i>');
    		},
    		error:function(){
    			$("#upload_5_main").addClass("uploadingerror");
    			$("#upload_5_main").removeClass("uploadingStat");
    			$("#upload_5_msg").html("There is an error while uploading.");
    			$(".upload_button_5").html('<i class="fa fa-times"></i>');
    			$("#upload_5_msg").addClass("text-danger");
    		},
    		success: function(resp){
    			$("#upload_5_msg").removeClass("text-danger");
    			$("#upload_5_main").addClass("uploadingStat");
    			$("#upload_5_main").removeClass("uploadingerror");
    			$("#upload_5_msg").html("Uploaded");
    			$(".upload_button_5").html('<i class="fa fa-check"></i>');
    			$("#ssn_card_val").val(resp)
    		}
    	});
    });





    //////////////////////-------EDC-----///////////////////
    ////////    UPLOAD COMPANY LOGO
    $("#business_logo").on('change', function(e){
        $("#upload_6_msg").html("Uploading...");
        var form_data = new FormData()
        $.each($('#business_logo')[0].files, function(i, file) {
            form_data.append('file-'+i, file);
        });
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        console.log(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            data: form_data,
            contentType:false,
            cache:false,
            processData:false,
            url : sub_page+"resources/ajax_calls/upload_files.php",
            beforeSend: function(){
                $("#upload_6_msg").html("Uploading...");
                $(".upload_button_6").html('<i class="fa fa-spinner fa-spin"></i>');
            },
            error:function(){
                $("#upload_6_main").addClass("uploadingerror");
                $("#upload_6_main").removeClass("uploadingStat");
                $("#upload_6_msg").html("There is an error while uploading.");
                $(".upload_button_6").html('<i class="fa fa-times"></i>');
                $("#upload_6_msg").addClass("text-danger");
            },
            success: function(resp){
                $("#upload_6_msg").removeClass("text-danger");
                $("#upload_6_main").addClass("uploadingStat");
                $("#upload_6_main").removeClass("uploadingerror");
                $("#upload_6_msg").html("Uploaded");
                $(".upload_button_6").html('<i class="fa fa-check"></i>');
                $("#business_logo_val").val(resp)
            }
        });
    });

    ////////    BUSINESS OWNER STATE IDENTIFICATION OR DRIVER’S LICENSE OR U.S PASSPORT
    $("#identity_document_edc").on('change', function(e){
        $("#upload_7_msg").html("Uploading...");
        var form_data = new FormData()
        $.each($('#identity_document_edc')[0].files, function(i, file) {
            form_data.append('file-'+i, file);
        });
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        console.log(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            data: form_data,
            contentType:false,
            cache:false,
            processData:false,
            url : sub_page+"resources/ajax_calls/upload_files.php",
            beforeSend: function(){
                $("#upload_7_msg").html("Uploading...");
                $(".upload_button_7").html('<i class="fa fa-spinner fa-spin"></i>');
            },
            error:function(){
                $("#upload_7_main").addClass("uploadingerror");
                $("#upload_7_main").removeClass("uploadingStat");
                $("#upload_7_msg").html("There is an error while uploading.");
                $(".upload_button_7").html('<i class="fa fa-times"></i>');
                $("#upload_7_msg").addClass("text-danger");
            },
            success: function(resp){
                $("#upload_7_msg").removeClass("text-danger");
                $("#upload_7_main").addClass("uploadingStat");
                $("#upload_7_main").removeClass("uploadingerror");
                $("#upload_7_msg").html("Uploaded");
                $(".upload_button_7").html('<i class="fa fa-check"></i>');
                $("#identity_document_edc_val").val(resp)
            }
        });
    });

    ////////    ARTCILES OF ORGANIZATION
    $("#articles_of_organization_edc").on('change', function(e){
        $("#upload_8_msg").html("Uploading...");
        var form_data = new FormData()
        $.each($('#articles_of_organization_edc')[0].files, function(i, file) {
            form_data.append('file-'+i, file);
        });
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        console.log(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            data: form_data,
            contentType:false,
            cache:false,
            processData:false,
            url : sub_page+"resources/ajax_calls/upload_files.php",
            beforeSend: function(){
                $("#upload_8_msg").html("Uploading...");
                $(".upload_button_8").html('<i class="fa fa-spinner fa-spin"></i>');
            },
            error:function(){
                $("#upload_8_main").addClass("uploadingerror");
                $("#upload_8_main").removeClass("uploadingStat");
                $("#upload_8_msg").html("There is an error while uploading.");
                $(".upload_button_8").html('<i class="fa fa-times"></i>');
                $("#upload_8_msg").addClass("text-danger");
            },
            success: function(resp){
                $("#upload_8_msg").removeClass("text-danger");
                $("#upload_8_main").addClass("uploadingStat");
                $("#upload_8_main").removeClass("uploadingerror");
                $("#upload_8_msg").html("Uploaded");
                $(".upload_button_8").html('<i class="fa fa-check"></i>');
                $("#articles_of_organization_edc_val").val(resp)
            }
        });
    });

    ////////    OFFICIAL STATE OR CITY BUSINESS LICENSE DOCUMENT
    $("#official_state_edc").on('change', function(e){
        $("#upload_9_msg").html("Uploading...");
        var form_data = new FormData()
        $.each($('#official_state_edc')[0].files, function(i, file) {
            form_data.append('file-'+i, file);
        });
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        console.log(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            data: form_data,
            contentType:false,
            cache:false,
            processData:false,
            url : sub_page+"resources/ajax_calls/upload_files.php",
            beforeSend: function(){
                $("#upload_9_msg").html("Uploading...");
                $(".upload_button_9").html('<i class="fa fa-spinner fa-spin"></i>');
            },
            error:function(){
                $("#upload_9_main").addClass("uploadingerror");
                $("#upload_9_main").removeClass("uploadingStat");
                $("#upload_9_msg").html("There is an error while uploading.");
                $(".upload_button_9").html('<i class="fa fa-times"></i>');
                $("#upload_9_msg").addClass("text-danger");
            },
            success: function(resp){
                $("#upload_9_msg").removeClass("text-danger");
                $("#upload_9_main").addClass("uploadingStat");
                $("#upload_9_main").removeClass("uploadingerror");
                $("#upload_9_msg").html("Uploaded");
                $(".upload_button_9").html('<i class="fa fa-check"></i>');
                $("#official_state_edc_val").val(resp)
            }
        });
    });
});