<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Computer Club Online Registration System</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('grayscale/css/styles.css') !!}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Form-->
        <section class="about-section" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4 text-center">Club Info</h2>
                        <p class="text-white-50">
                            <form method="POST" action="{{ route('register:user') }}">
                            @csrf
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Full name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Identification Number</label>
                                    <input type="number" class="form-control" id="ic" name="ic" placeholder="Enter Identification Number" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                    <input type="checkbox" onclick="showpassword()">Show Password
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" placeholder="Enter Address" rows="3" required></textarea>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone number" required>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Gender</label>
                                    {{-- <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender" required> --}}
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="gender1" name="gender" value="Male" checked>Male
                                        <label class="form-check-label" for="radio1"></label>
                                      </div>
                                    <div class="form-check">
                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="Female">Female
                                    <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Interest</label>
                                    {{-- <input type="text" class="form-control" id="interest" name="interest" placeholder="Enter Interest" required> --}}
                                    <div class="input-group">
                                        <select class="form-control" id="interest" name="interest" placeholder="Enter Interest" required>
                                        <option selected>Choose Interest</option>
                                          <option value="Web Developing">Web Developing</option>
                                          <option value="Game Design">Game Design</option>
                                          <option value="Game Developing">Game Developing</option>
                                          <option value="Video Editing">Video Editing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 text-white">
                                    <label for="name" class="form-label">Class</label>
                                    <div class="input-group">
                                        <select class="form-control" id="class" name="class" placeholder="Click here to choose class" required>
                                            <option selected>Choose Class</option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('grayscale/assets/img/logo2.png') !!}" alt="..." />
            </div>
            <script>
                function showpassword() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
            </script>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Computer Club</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{!! asset('grayscale/js/app.js') !!}"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
