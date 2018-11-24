var postID;

$(document).ready(function(){
    $('.yesDelete').click(function(){
        	$.ajax({
		    type: 'GET',
		    dataType: 'JSON',
		    data: { 	id: postID  },
		    url: delete_url,
		    success: function(data){
		       location.reload();
		    },
		    error: function(xhr){
		        console.log(xhr.responseText);
		    }
		});
    });
});

function confimrationDelete(id){
	postID = id;
	$('#myModal').modal();
}
