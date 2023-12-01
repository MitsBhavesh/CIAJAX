function listEmployee(){
	$.ajax({
		type  : 'ajax',
		url   : 'emp/show',
		async : false,
		dataType : 'json',
		success : function(data){
			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].name+'</td>'+
						'<td>'+data[i].age+'</td>'+
						'<td>'+data[i].skills+'</td>'+		                        
						'<td>'+data[i].designation+'</td>'+
						'<td>'+data[i].address+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-age="'+data[i].age+'" data-skills="'+data[i].skills+'" data-designation="'+data[i].designation+'" data-address="'+data[i].address+'">Edit</a>'+' '+
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'">Delete</a>'+
						'</td>'+
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
}