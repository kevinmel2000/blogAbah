var postID;

$(document).ready(function(){

    $('.yesDelete').click(function(){
    	//console.log("delete yes");
    	$.ajax({
		    type: 'GET',
		    dataType: 'JSON',
		    data: { 	id: postID  },
		    url: delete_url,
		    success: function(data){
		        //console.log(data.data);
		       //refreshTable(urlData);
		       var table = $('#dataTable').DataTable( {
				    ajax: urlData,
				} );
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
	// /console.log("confirm");
}



/*
function refreshTable(urlData){
	$.getJSON(urlData, null, function( json )
	{
		table = $("#dataTable").dataTable();
		oSettings = table.fnSettings();
		table.fnClearTable(this);

		for (var i=0; i<json.data.length; i++)
		{
		  	table.oApi._fnAddData(oSettings, json.data[i]);
		}
		oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
		table.fnDraw();
	});
}*/
