<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Font-Awesome-link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Employee</title>
  </head>
  <body>
    <section id="form">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4"></div>
            <div class="col-4" style="margin-top: 50px;">
                  <form  method="POST" action="/addemployee_post" id="add_employeeform">
                    @csrf  
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                       </div>
                        <input
                          type="text"
                          name="firstname"
                          class="form-control required"
                          placeholder="first name"
                        />
                      </div>
                   <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                       </div>
                          <input
                            type="text"
                            name="lastname"
                            class="form-control required"
                            placeholder="last name"
                          />
                      </div>
                      <div class="form-group input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                       </div>
                        <input
                          name="email"
                          class="form-control required"
                          placeholder="Email address"
                          type="email"
                        />
                      </div>

                      <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                       </div>
                          <input name="phone" class="form-control" placeholder="Phone no" type="text">
                      </div> <!-- form-group// -->

                        <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                       </div>
                        <select id="inputGender" class="form-control" name="gender">
                          <option disabled selected>Gender</option>
                          <option value="Male">Male</option>
                          <option value="Femal">Femal</option>
                        </select>
                       </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block"> Submit </button>
                      </div>                                                          
                  </form>
            </div>
           <div class="col-4"></div>
        </div>
      </div>
     
    </section>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
   <script>
    jQuery(document).ready(function () {
      jQuery('#add_employeeform').validate();
    });
  </script>
  </body>
</html>