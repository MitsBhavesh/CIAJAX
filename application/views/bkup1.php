<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax CRUD</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?> bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Ajax CRUD </h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
			ADD
			</button>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
				</tbody>
			</table>
		</div>
	</div>
	<!-- <?php echo $modal; ?> -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="myform" method="post" >
				<div class="row">
					<div class="col-md-3">
						<label class="control-label" style="position:relative; top:7px;">Name:</label>
					</div>
					<div class="col-md-9">
						<input type="name" class="form-control" name="name" data-error="Please enter name." required>
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-md-3">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-md-9">
						<input type="email" class="form-control" name="email" data-error="Please enter email." required>
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-md-3">
						<label class="control-label" style="position:relative; top:7px;">Address:</label>
					</div>
					<div class="col-md-9">
						 <textarea name="address" class="form-control" data-error="Please enter address." required></textarea>
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-md-3">
						<label class="control-label" style="position:relative; top:7px;">Phone:</label>
					</div>
					<div class="col-md-9">
						<input type="number" class="form-control" name="phone" data-error="Please enter phone." required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<script type="text/javascript">

$(document).ready(function() {
    $('#myform').on('click', function() {	//create a global variable for our base url
	var url = '<?php echo base_url(); ?>';
 
	//fetch table data
	showTable();
 
	//show add modal
	$('#add').click(function(){
		$('#exampleModalLong').modal('show');
		$('#myform')[0].reset();
	});
 
	//submit add form
	$('#myform').submit(function(e){
		e.preventDefault();
		var user = $('#myform').serialize();
			$.ajax({
				type: 'POST',
				url: url + 'user/insert',
				data: user,
				success:function(){
					$('#exampleModalLong').modal('hide');
					showTable();
				}
			});
	});
 
	//show edit modal
	// $(document).on('click', '.edit', function(){
	// 	var id = $(this).data('id');
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: url + 'user/getuser',
	// 		dataType: 'json',
	// 		data: {id: id},
	// 		success:function(response){
	// 			console.log(response);
	// 			$('#email').val(response.email);
	// 			$('#password').val(response.password);
	// 			$('#fname').val(response.fname);
	// 			$('#userid').val(response.id);
	// 			$('#editmodal').modal('show');
	// 		}
	// 	});
	// });
 
	//update selected user
	// $('#editForm').submit(function(e){
	// 	e.preventDefault();
	// 	var user = $('#editForm').serialize();
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: url + 'user/update',
	// 		data: user,
	// 		success:function(){
	// 			$('#editmodal').modal('hide');
	// 			showTable();
	// 		}
	// 	});
	// });
 
	//show delete modal
	// $(document).on('click', '.delete', function(){
	// 	var id = $(this).data('id');
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: url + 'user/getuser',
	// 		dataType: 'json',
	// 		data: {id: id},
	// 		success:function(response){
	// 			console.log(response);
	// 			$('#delfname').html(response.fname);
	// 			$('#delid').val(response.id);
	// 			$('#delmodal').modal('show');
	// 		}
	// 	});
	// });
 
// 	$('#delid').click(function(){
// 		var id = $(this).val();
// 		$.ajax({
// 			type: 'POST',
// 			url: url + 'user/delete',
// 			data: {id: id},
// 			success:function(){
// 				$('#delmodal').modal('hide');
// 				showTable();
// 			}
// 		});
// 	});
 
// });
 
function showTable(){
	var url = '<?php echo base_url(); ?>';
	$.ajax({
		type: 'POST',
		url: url + 'user/show',
		success:function(response){
			$('#tbody').html(response);
		}
	});
}
</script>
</div>
</body>
</html>