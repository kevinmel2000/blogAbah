var postID;
var potoID;
var pdfID;
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

     $('.deletePic').click(function(){
        	$.ajax({
		    type: 'GET',
		    dataType: 'JSON',
		    data: { 	id: potoID  },
		    url: delete_img,
		    success: function(data){
		       location.reload();
		    },
		    error: function(xhr){
		        console.log(xhr.responseText);
		    }
		});
    });

    $('.deletePdf').click(function(){
        	$.ajax({
		    type: 'GET',
		    dataType: 'JSON',
		    data: { 	id: pdfID  },
		    url: deletepdfurl,
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

function confirmPotoDelete(id){
	potoID= id;
	$('#myModal').modal();
}

function uploadPDF() {
	$('#pdf_upload').modal();
}

function deletePDF(pdf_id){
	pdfID = pdf_id;
	$('#delete_pdf').modal();
}

/*

function next(totalPage){
	var currentPage = +$("#next").attr('value');
	if (currentPage<=totalPage) {
		if (currentPage == 1) {
		var nextPage = 2;
		}else{
			var nextPage = currentPage +1;
		}
		$.ajax({
			    type: 'GET',
			    dataType: 'JSON',
			    data: { 	next: nextPage  },
			    url: nextUrl,
			    success: function(data){
			    	//console.log(data);
			    	//location.reload(data);
			    	//$("html").html(data);
			    	
			    	var nextVal = ((+data['page']));
			        $("#next").attr("value", nextVal);
			        console.log(data['post']);
			        
			    },
			    error: function(xhr){
			        //console.log(xhr.responseText);
			        $("html").html(xhr.responseText);
			        $("head").html(head);
			    }
		});
	}
}

function prev(){
	console.log("prev");
	console.log(prevUrl);
}

*/