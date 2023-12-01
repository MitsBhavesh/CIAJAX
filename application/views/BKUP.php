<!DOCTYPE html>
<html>
<head>
    <title>CRUD OPERATION USING AJAX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>CRUD OPERATION USING AJAX</h2>
      </div>
      <div class="pull-right">
     <!--    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item"> ADD</button> -->
      </div>
    </div>
</div>
<table class="table table-bordered">
<thead>
        <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th width="200px">Action</th>
        </tr>
</thead>
<tbody>
</tbody>
</table>
<ul id="pagination" class="pagination-sm"></ul>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  ADD
</button>
	<!-- <?php echo $modal; ?> -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label" for="title">Name:</label>
                    <input type="text" name="name" class="form-control" data-error="Please enter name." required />
                    <div class="help-block with-errors"></div>
                </div>
                 <div class="form-group">
                    <label class="control-label" for="title">Email:</label>
                    <input type="text" name="email" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>
               
                <div class="form-group">
                    <label class="control-label" for="title">Address:</label>
                    <textarea name="address" class="form-control" data-error="Please enter address." required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                  <div class="form-group">
                    <label class="control-label" for="title">Phone:</label>
                    <input type="text" name="phone" class="form-control" data-error="Please enter phone." required />
                    <div class="help-block with-errors"></div>
                </div>
           		<div class="modal-footer">
		       
		        <button type="submit" onclick="Submit()" name="submit_btn" id="submit" class="btn btn-light-primary font-weight-bold" >save</button>
		        </div>
            </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

</div>
</body>
</html>
<script type="text/javascript">

function Submit()
     {	
     	alert('hii'); return false;
	
	}

</script>
