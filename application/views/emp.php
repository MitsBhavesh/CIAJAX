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

<!-- Modal -->
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
        <form  action="" method="post">


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


               <!--  <div class="form-group">
                     <button type="submit" id="submit">Submit</button>
                </div> -->

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="add">Save</button>
      </div>

            </form>

      </div>
    </div>
  </div>
</div>
<!-- edit the modal data -->
<!-- <div class="modal" tabindex="-1" role="dialog" id="view-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Name:</b>
        <p id="name-info"></p>
        <b>Email:</b>
        <p id="email-info"></p>
        <b>Address:</b>
        <p id="address-info"></p>
        <b>Phone:</b>
        <p id="phone-info"></p>
      </div>
    </div>
  </div>
</div> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<!-- <script type="text/javascript">
    function Submit()
    {
        alert('hiii'); return false;
        event.preventDefault();
    // Retrieve the data from the form
    var name = $('#name').val();
    var email = $('#email').val();
    var address = $('#address').val();
    var phone = $('#phone').val();
    // Send the data to the controller using Ajax
    $.ajax({
        url: '<?php echo base_url() ?>/Project/insert_data',
        method: 'post',
        data: {
            name: name,
            email: email,
            address: address,
            phone: phone
        },
        success: function(response) {
            alert(response);
        }
    });
    }
</script> -->

<!-- <script>
$(document).ready(function() {
    $('#myform').on('click', function() {

        alert('hiii');return false;
        var name = $('#name').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var phone = $('#phone').val();
        alert(phone);return false;
        // var password = $('#password').val();
        if(name!="" && email!="" && phone!="" && city!=""){
            $("#butsave").attr("disabled", "disabled");
            $.ajax({
                url: "<?php echo base_url("Project/insert_data");?>",
                type: "POST",
                data: {
                    type: 1,
                    name: name,
                    email: email,
                    phone: phone,
                    city: city
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Data added successfully !');                        
                    }
                    else if(dataResult.statusCode==201){
                       alert("Error occured !");
                    }
                    
                }
            });
        }
        else{
            alert('Please fill all the field !');
        }
    });
});
</script> -->
<!-- 
<script type="text/javascript">
    var url = "items";
</script>
 -->
<!-- <script>
    // Listen for the submit event on the form
$('#myForm').submit(function(event) {
    event.preventDefault();
    alert(event); return false;
    // Retrieve the data from the form
    var name = $('#name').val();
    alert(name); return false;
    var email = $('#email').val();
    var address = $('#address').val();
    var phone = $('#phone').val();
    // Send the data to the controller using Ajax
    $.ajax({
        url: '<?php echo base_url() ?>Project/insert_data',
        method: 'post',
        data: {
            name: name,
            email: email,
            address: address,
            phone: phone
        },
        success: function(response) {
            alert(response);
        }
    });
});
</script> -->
<!-- <script src="/js/item-ajax.js"></script>  -->

<!-- <script type="text/javascript">
 
     
    showAllemployee();
 
    /*
        This function will get all the project records
    */
    // function showAllemployee()
    // {
    //     let url = <?php echo base_url('Project/store');?>,
    //     // let url = $('meta[name=app-url]').attr("content") + "Project/show-all";
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         success: function(response) {
    //             $("#employee-table-body").html("");
    //             let employee = response;
    //             for (var i = 0; i < employee.length; i++) 
    //             {
    //                 let showBtn =  '<button ' +
    //                                     ' class="btn btn-outline-info" ' +
    //                                     ' onclick="showProject(' + employee[i].id + ')">Show' +
    //                                 '</button> ';
    //                 let editBtn =  '<button ' +
    //                                     ' class="btn btn-outline-success" ' +
    //                                     ' onclick="editProject(' + employee[i].id + ')">Edit' +
    //                                 '</button> ';
    //                 let deleteBtn =  '<button ' +
    //                                     ' class="btn btn-outline-danger" ' +
    //                                     ' onclick="destroyProject(' + employee[i].id + ')">Delete' +
    //                                 '</button>';
 
    //                 let projectRow = '<tr>' +
    //                                     '<td>' + employee[i].name + '</td>' +
    //                                     '<td>' + employee[i].email + '</td>' +
    //                                     '<td>' + employee[i].address + '</td>' +
    //                                     '<td>' + employee[i].phone + '</td>' +
    //                                     '<td>' + showBtn + editBtn + deleteBtn + '</td>' +
    //                                 '</tr>';
    //                 $("#employee-table-body").append(projectRow);
    //             }
 
                 
    //         },
    //         error: function(response) {
    //             console.log(response)
    //         }
    //     });
    // }
 
    /*
        check if form submitted is for creating or updating
    */
    // $("#save-project-btn").click(function(event ){
    //     // alert('hi'); return false;
    //     event.preventDefault();
    //     if($("#update_id").val() == null || $("#update_id").val() == "")
    //     {
    //         storeProject();
    //     } else {
    //         updateProject();
    //     }
    // })
 
    /*
        show modal for creating a record and 
        empty the values of form and remove existing alerts
    */
    // function createProject()
    // {
    //     $("#alert-div").html("");
    //     $("#modal-alert-div").html("");
    //     $("#update_id").val("");
    //     $("#name").val("");
    //     $("#email").val("");
    //     $("#address").val("");
    //     $("#phone").val("");
    //     $("#form-modal").modal('show'); 
    // }
 
    /*
        submit the form and will be stored to the database
    */
    // function storeProject()
    // { 
    //     $("#save-project-btn").prop('disabled', true);
    //     // let url = $('meta[name=app-url]').attr("content") + "/Project/store";
    //     let url = <?php echo base_url('Project/store');?>

    //     let data = {
    //         name: $("#name").val(),
    //         email: $("#email").val(),
    //         address: $("#address").val(),
    //         phone: $("#phone").val(),
    //     };
    //     // alert(data); return false;
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         data: data,
    //         success: function(response) {
 
    //             $("#save-project-btn").prop('disabled', false);
    //             let successHtml = '<div class="alert alert-success" role="alert"><b>Project Created Successfully</b></div>';
    //             $("#alert-div").html(successHtml);
    //             $("#name").val("");
    //             $("#email").val("");
    //             $("#address").val("");
    //             $("#phone").val("");
    //             showAllemployee();
    //             $("#form-modal").modal('hide');
    //         },
    //         error: function(response) {
    //             $("#save-project-btn").prop('disabled', false);
            
    //             let responseData = JSON.parse(response.responseText);
    //             console.log(responseData.errors);
 
    //             if (typeof responseData.errors !== 'undefined') 
    //             {
    //                 let errorHtml = '<div class="alert alert-danger" role="alert">' +
    //                                     '<b>Validation Error!</b>' +
    //                                     responseData.errors +
    //                                 '</div>';
    //                 $("#modal-alert-div").html(errorHtml);      
    //             }
    //         }
    //     });
    // }
 
 
    /*
        edit record function
        it will get the existing value and show the project form
    */
    // function editProject(id)
    // {
    //     let url = $('meta[name=app-url]').attr("content") + "Project/edit/" + id ;
    //     $.ajax({
    //         url: url,
    //         type: "GET",
    //         success: function(response) {
    //             let project = response;
    //             $("#alert-div").html("");
    //             $("#modal-alert-div").html("");
    //             $("#update_id").val(project.id);
    //             $("#name").val(project.name);
    //             $("#email").val(project.email);
    //             $("#address").val(project.address);
    //             $("#phone").val(project.phone);
    //             $("#form-modal").modal('show'); 
    //         },
    //         error: function(response) {
                 
    //         }
    //     });
    // }
 
    /*
        sumbit the form and will update a record
    */
    // function updateProject()
    // {
    //     $("#save-project-btn").prop('disabled', true);
    //     let url = $('meta[name=app-url]').attr("content") + "Project/update/" + $("#update_id").val();
    //     let data = {
    //         id: $("#update_id").val(),
    //         name: $("#name").val(),
    //         eamil: $("#email").val(),
    //         address: $("#address").val(),
    //         phone: $("#phone").val(),
    //     };
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         data: data,
    //         success: function(response) {
    //             $("#save-project-btn").prop('disabled', false);
    //             let successHtml = '<div class="alert alert-success" role="alert"><b>Project Updated Successfully</b></div>';
    //             $("#alert-div").html(successHtml);
    //             $("#name").val("");
    //             $("#email").val("");
    //             $("#address").val("");
    //             $("#phone").val("");
    //             showAllemployee();
    //             $("#form-modal").modal('hide');
    //         },
    //         error: function(response) {
    //             /*
    //                 show validation error
    //             */
    //             $("#save-project-btn").prop('disabled', false);
            
    //             let responseData = JSON.parse(response.responseText);
    //             console.log(responseData.errors);
 
    //             if (typeof responseData.errors !== 'undefined') 
    //             {
    //                 let errorHtml = '<div class="alert alert-danger" role="alert">' +
    //                                     '<b>Validation Error!</b>' +
    //                                     responseData.errors +
    //                                 '</div>';
    //                 $("#modal-alert-div").html(errorHtml);      
    //             }
    //         }
    //     });
    // }
 
    /*
        get and display the record info on modal
    */
    // function showProject(id)
    // {
    //     $("#name-info").html("");
    //     $("#description-info").html("");
    //     let url = $('meta[name=app-url]').attr("content") + "Project/show/" + id +"";
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         success: function(response) {
    //             console.log(response);
    //             let project = response;
    //             $("#name-info").html(project.name);
    //             $("#email-info").html(project.email);
    //             $("#address-info").html(project.address);
    //             $("#phone-info").html(project.phone);
    //             $("#view-modal").modal('show'); 
                 
    //         },
    //         error: function(response) {
    //             console.log(response)
    //         }
    //     });
    // }
 
    /*
        delete record function
    */
    // function destroyProject(id)
    // {
    //     let url = $('meta[name=app-url]').attr("content") + "/Project/delete/" + id;
    //     let data = {
    //         name: $("#name").val(),
    //         email: $("#email").val(),
    //         address: $("#address").val(),
    //         phone: $("#phone").val(),
    //     };
    //     $.ajax({
    //         url: url,
    //         type: "DELETE",
    //         data: data,
    //         success: function(response) {
    //             let successHtml = '<div class="alert alert-success" role="alert"><b>Project Deleted Successfully</b></div>';
    //             $("#alert-div").html(successHtml);
    //             showAllemployee();
    //         },
    //         error: function(response) {
    //             console.log(response)
    //         }
    //     });
    // }
 
</script> -->
</body>
</html>