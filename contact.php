<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
 

  <title>NACTAR NSDA Website</title>

 <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    a:hover {
  background-color: white;
}
  </style>

</head>


<body id="top-header">
<!-- Navigation Menu -->
   <?php include 'include/header.php'; ?>

   <section class="banner-main py-7" id="banner">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-5" style="float:left">
                <h3 style="text-align:center; color:orange">Contact Information</h3>

<table>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td>গোহাইল রোড, Gohail Rd, Bogura.</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>director@nactar.gov.bd</td>
  </tr>
  <tr>
    <td>Phone number</td>
    <td>:</td>
    <td>02 548465</td>
  </tr>
</table>
                </div>

                <div class="col-md-7" style="float:right">
                <div class="container mt-3">
                <form >
                    <div style="width:180%;">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label><br>
    <input type="email" id="email"name="email">
  </div>
  <div class="form-group">
    <label for="sub">Subject:</label><br>
    <input type="text" id="sub"name="sub">
  </div>
  <div class="form-group">
    <label for="message">message:</label><br>
    <textarea name="message" id="message" cols="70" rows="3"></textarea>
  </div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   Submit
  </button>
</form>

  
  
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal NSDA Confirmation</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure to submit this form?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



                </div>
    </div>

    </div> 
    </div> 
</section>


<?php include 'include/footer.php'; ?>
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl-carousel.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="js/theme.js"></script>

    <script>

function alertDis(){
    if (confirm("Thank You")) {
  txt = "You pressed OK!";
} else {
  txt = "You pressed Cancel!";
}
}
    </script>
  </body>
  </html>
   