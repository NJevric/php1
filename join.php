 <?php
    session_start(); 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Photos for everyone / Register</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <header>  
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 profilna my-auto">
                    <h2 class="text-center">Creation starts here</h2>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <h1 class="text-center mb-4 text-uppercase">Join our team</h1>
                            <p class="text-center mb-5">Already have an account? <a href="login.php">Login</a></p>
                            <form action="phpFunctionality/register.php" method="POST" onSubmit="return provera();" id="kontaktForma">
                                <div class="form-group row">
                                    <div class="col-lg-6 col-sm-12 mb-3 mb-md-0">
                                        <input type="text" class="form-control" id="ime"  name="ime" placeholder="Name">
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3 mb-md-0">
                                        <input type="text" class="form-control" name="prezime" id="prezime" placeholder="Last Name"/>
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3 mb-md-0">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email"/>
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3 mb-md-0">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3 mb-md-0">
                                        <input type="password" class="form-control" name="lozinka" id="lozinka" placeholder="Password"/>
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3 mb-md-0">
                                        <input type="password" class="form-control" name="lozinkaPotvrdi" id="lozinkaPotvrdi" placeholder="Confirm Password"/>
                                        <p class="greskaKontakt"></p>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3 mb-md-0">
                                        <input type="submit" class="btn-primary form-control" name="btnRegistruj" value="Register"/>
                                    </div>
                                    <?php 
                                        if(isset($_SESSION['greske'])){
                                            foreach($_SESSION['greske'] as $greska){
                                                echo "<p class='mt-4'>$greska</p>"; 
                                            }
                                            unset($_SESSION['greske']);
                                        }
                                    ?>
                                </div>
                            </form>              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <script type="text/javascript"  src="js/main.js"></script>
    </body>
</html>
