<!DOCTYPE html> 
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
</head>
<body>
	<div class="container">
		<h1 class="text-primary text-uppercase text-center">AJAX CRUD OPERATION</h1>
		<div class="d-flex justify-content-end">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
		  Add Record
		</button></div><br><br>


	<form id="createForm" method="POST">
	<!-- Modal -->
	<div class="modal fade" id="createModal" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Add Record</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">×</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="message-show">
			</div>
	        	<div class="form-group">
				    <label>Name</label>
				    <input type="text" class="form-control" placeholder="Name here" id="name">
				 </div>
				 <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" placeholder="Email here" id="email">
				 </div>
				 <div class="form-group">
				    <label>Address</label>
				    <input type="text" class="form-control" placeholder="Address Here" id="address">
				 </div>
				 <div class="form-group">
				    <label>Phone</label>
				    <input type="number" class="form-control" placeholder="PhoneNumber Here" id="phone">
				 </div>
	      </div>
	      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" id="add"  onclick="InsertUserDetails()">ADD</button>
	      </div>
	    </div>
	  </div>
<!-- edit the model view -->
</div>
<!-- <table id="example1" class="display table"> -->
<table id="example1" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>PDF</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody >
    <tr>
	<?php 
	$id=1;
    foreach ($data as $row) 
    {
    ?> 
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td></td>
        <td><button type="button" data-toggle="modal" data-target="#update_user_modal" onclick="GetUserDetails(<?php echo $row["id"]; ?>)"> EDIT</button>
            <button onclick="Deleteuser(<?php echo $row["id"]; ?>)" class="btn btn-danger">DELETE</button></td>
    </tr>
    <?php
    }
	$id++;
	?>
	</tbody>
</table>
<!-- ///////Update modal///// -->
<div class="modal fade" id="update_user_modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
  			<div class="modal-header">
    			<h5 class="modal-title" id="exampleModalLongTitle">Edit Record</h5>
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      			<span aria-hidden="true">×</span>
    			</button>
  			</div>
  			<div class="modal-body">
  				<div class="message-show">
				</div>
	  			<div class="form-group">
		    		<label for="name">Name</label>
		    		<input type="text" class="form-control"  id="updt_name" name="updt_name" >
		 		</div>
		 		<div class="form-group">
		    		<label for="email">Email</label>
		    		<input type="email" class="form-control"  id="updt_email" name="updt_email">
		 		</div>
		 		<div class="form-group">
		    		<label for="address">Address</label>
		    		<input type="text" class="form-control"  id="updt_address" name="updt_address">
		 		</div>
		 		<div class="form-group">
		    		<label for="phone">Phone</label>
		    		<input type="number" class="form-control"  id="updt_phone" name="updt_phone">
		 		</div>
   	   		</div>
  			<div class="modal-footer">
    			<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
    			<button type="submit" class="btn btn-primary" id="update_data" name="update_data">Update</button>
   			    <input type="hidden" class="form-control" name="id" id="updt_id">
  			</div>
		</div>
	</div>
</div>
</form>
<script>
    $(document).ready(function() 
    {  
      
    });
	</script>
<script>
	function InsertUserDetails()
	{
		var name = $('#name').val();
	    var email = $('#email').val();
	    var address = $('#address').val();
	    var phone = $('#phone').val();
	    // alert(phone); return false; 
	    if(name!='' & email!='' & address!='' & phone!='')
	    {
	     	$.ajax({
			type:'POST',
			data:{checking_add:true,name:name,email:email,address:address,phone:phone},
			url:"<?php echo base_url('User/insert'); ?>",
			success:function(response)
			{
				alert(response);
				// $('#createModal').modal('hide');
				$('.message-show').append('<div class="alert alert-success alert-dismissible fade show" role="alert">\
									  <strong>Hey!</strong> '+response+'\
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
									    <span aria-hidden="true">&times;</span>\
									  </button>\
									</div>');
					// $('.studentdata').html('');
				Reload_page();
			}
			});
		}
		else
		{
		     	// console.log("Please Enter All The Fields");
				$('.message-show').append('<div class="alert alert-warning alert-dismissible fade show" role="alert">\
									  <strong>Hey!</strong> "Please Enter All The Fields"\
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
									    <span aria-hidden="true">&times;</span>\
									  </button>\
									</div>');
    	}
	}
</script> 
<!-- <script>
		$(document).ready(function (){
			// getdata();
				
		});
		$(document).on("click","#add",function(e){
		e.preventDefault();
	    });
		
</script> -->
<script>
	
	function Deleteuser(deleteid)
	{
		var conf=confirm("Are you Sure want to delete?");
		if(conf==true)
		// alert(deleteid); return false;
		$.ajax({
			type:'post',
			data:{deleteid:deleteid},
			url:"<?php echo base_url('User/DELETE_Process'); ?>",
			success:function(data,status)
			{
				 // window.location.reload();
			}
		});
	}
</script>

<script>
	function GetUserDetails(id)
	{
		$.ajax({
		type:'post',
		data:{id:id},
		
		url:"<?php echo base_url('User/GETID_Process'); ?>",
		success: function(data) {
			// console.log(response);
			 // $('#update_user_modal').html(data);
		var user=JSON.parse(data);
			// alert(user); return false;
			// document.getElementById('updt_name').value = user.name;
				$('#updt_id').val(user.id);
				$('#updt_name').val(user.name);
				$('#updt_email').val(user.email);
				$('#updt_address').val(user.address);
				$('#updt_phone').val(user.phone);
		},
		error: function(xhr, status, error)
		{
            console.error(error);
	 	}
		});
			// $('#update_user_modal').modal("show");
	}
</script>
<script>
		function Reload_page()
		{
			// localStorage.clear();
			location.reload();
		}
		
</script>

<script>
$(document).ready(function() {
	
	$(document).on("click", "#update_data", function() { 
		$.ajax({
			url: "<?php echo base_url('User/UPDATE_Process');?>",
			type: "POST",
			cache: false,
			data:{
				id: $('#updt_id').val(),
				name: $('#updt_name').val(),
				email: $('#updt_email').val(),
				address: $('#updt_address').val(),
				phone: $('#updt_phone').val(),
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				// alert(dataResult);return false;
				if(dataResult.statusCode==200){
				// $('#update_country').modal().hide();
				alert('Data updated successfully !');
				location.reload();					
			}
			}
		});
	}); 
});
</script>
</body>
</html>

	