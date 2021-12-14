<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db connection </title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">
    <div class="header-section d-flex justify-content-lg-center">
        <h1>CRUD operation in php using ajax </h1>
    </div>
    <div class="button-section">
      

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewUserModel">Add new users</button>
    </div>

<!-- Modal -->
<div class="modal fade" id="addNewUserModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="mb-3">
          <label for="complatename" class="form-label">Name</label>
          <input placeholder="Enter your name" type="text" class="form-control" id="complatename">
        </div>

        <div class="mb-3">
          <label for="complateemail" class="form-label">Email</label>
          <input placeholder="Enter your email" type="email" class="form-control" id="complateemail">
        </div>

        <div class="mb-3">
          <label for="complatemobile" class="form-label">Mobile</label>
          <input placeholder="Enter your mobile number" type="email" class="form-control" id="complatemobile">
        </div>

        <div class="mb-3">
          <label for="complateplace" class="form-label">Place</label>
          <input placeholder="Enter your place" type="email" class="form-control" id="complateplace">
        </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button id="btn_submit" onclick="adduser()" type="button" class="btn btn-primary">Submit</button>

        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        
      </div>


    </div>
  </div>

</div>


<div id="displayData"></div>


</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="./js/custom.js"></script>

<script>

  $(document).ready(function(){
    displayData();
  });
//display function 
  function displayData(){
    var displayData = "true";
    $.ajax({
      url:"display.php",
      type:"POST",
      data:{
        displaySend: displayData
      },
      success: function(data, status){
        $("#displayData").html(data);
      },
      error: function(data, status){

      }
    })
  }

function adduser(){

var nameAdd = $("#complatename").val();
var emailAdd = $("#complateemail").val();
var mobileAdd = $("#complatemobile").val();
var placeAdd = $("#complateplace").val();

console.log(nameAdd + emailAdd + mobileAdd + placeAdd);

$.ajax({
  url: "insert.php",
  type: "POST",
  data: {
    nameSend : nameAdd,
    emailSend: emailAdd,
    mobileSend: mobileAdd,
    placeSend: placeAdd
  },
  success: function(data, status){
    //if function work successfully this status would be display in console 
    console.log(status);
    displayData();
  },

  error: function(){

  }
});




}

//delete function 
function deleteUser(deleteID){
  console.log("dedlete working : " +  deleteID);
$.ajax({
  url:"delete.php",
  type:"POST",
  data: {
    deleteSend: deleteID
  },
  success:function(data, status){
    displayData();
  }




});



}

  


</script>


</body>
</html>