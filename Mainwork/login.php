<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
  .back{
    background-repeat: no-repeat;
    background-size: cover;
  }

  .input-box{
    margin-top: 60px;
    border: 2px solid black;
    border-radius: 10px;
  }
  
</style>
<body>
<section class="vh-100 bg-image back"
  style="background-image: url('https://c4.wallpaperflare.com/wallpaper/824/766/324/nebula-4k-teal-turquoise-wallpaper-preview.jpg'); backgro">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login Account</h2>

              <form action="loginPHP.php" method="POST">

                <div class="form-outline mb-4 input-box">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="conemail" placeholder="Enter Your Email" required/>
                </div>

                <div class="form-outline mb-4 input-box">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="conpass" placeholder="Enter Your Password"  required/>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="consubmit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't Have an account? <a href="signup.php"
                    class="fw-bold text-body"><u>Sign-up here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>