<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MurphysHost - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-4">
                  <div class="text-center">
                    <img src="img/logo.png" class="mb-4" alt="Brand Logo" />
                    <h1 class="h4 text-gray-900 mb-5">Create an Account!</h1>
                  </div>
                  <form class="user">
                    <h5 class="mb-3">Personal Information</h5>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="firstName">First Name*</label>
                        <input type="text" class="form-control form-control-user" id="firstName" required />
                      </div>
                      <div class="col-sm-6">
                        <label for="lastName">Last Name*</label>
                        <input type="text" class="form-control form-control-user" id="lastName" required />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="emailAddress">Email Address *</label>
                        <input type="email" class="form-control form-control-user" id="emailAddress" required />
                      </div>
                      <div class="col-sm-6">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="number" class="form-control form-control-user" id="phoneNumber"
                          placeholder="412 345 678" required />
                      </div>
                    </div>
                    <h5 class="mb-3 mt-5">Billing Address</h5>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="companyName">Company Name (Optional)</label>
                        <input type="text" class="form-control form-control-user" id="companyName" />
                      </div>
                      <div class="col-sm-6">
                        <label for="taxId">Tax ID (Optional)</label>
                        <input type="number" class="form-control form-control-user" id="taxId" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="streetAddress">Street Address</label>
                        <input type="text" class="form-control form-control-user" id="streetAddress" />
                      </div>
                      <div class="col-sm-6">
                        <label for="streetAddress2">Street Address 2 (Optional)</label>
                        <input type="text" class="form-control form-control-user" id="streetAddress2" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="cityName">City *</label>
                        <input type="text" class="form-control form-control-user" id="cityName" />
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <label for="stateName">State *</label>
                            <input type="text" class="form-control form-control-user" id="stateName" />
                          </div>
                          <div class="col-sm-6">
                            <label for="postCode">Postcode *</label>
                            <input type="text" class="form-control form-control-user" id="postCode" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h5 class="mb-3 mt-5">Additional Information</h5>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="surveyInfo">Where did you hear about us? *</label>
                        <select name="surveyInfo" id="surveyInfo" class="form-control form-control-user">
                          <option value="Prefer Not To Say" selected="">
                            Prefer Not To Say
                          </option>
                          <option value="Google">Google</option>
                          <option value="Bing">Bing</option>
                          <option value="Oz Bargain">Oz Bargain</option>
                          <option value="Whirlpool">Whirlpool</option>
                          <option value="Friend">Friend</option>
                          <option value="LiteSpeed Partner">
                            LiteSpeed Partner
                          </option>
                          <option value="Australian Web Industry">
                            Australian Web Industry
                          </option>
                          <option value="Serchen">Serchen</option>
                          <option value="Facebook">Facebook</option>
                          <option value="Instagram">Instagram</option>
                          <option value="Linked In">Linked In</option>
                          <option value="Low End Talk">Low End Talk</option>
                          <option value="Cheap Cheap Lah">
                            Cheap Cheap Lah
                          </option>
                          <option value="Choice Cheapies">
                            Choice Cheapies
                          </option>
                          <option value="Low End Box">Low End Box</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="currencyName">Choose Currency *</label>
                        <select id="currencyName" name="currency" class="form-control form-control-user">
                          <option value="1">AUD</option>
                          <option value="3">NZD</option>
                          <option value="4">USD</option>
                          <option value="5">SGD</option>
                        </select>
                      </div>
                    </div>
                    <h5 class="mb-3 mt-5">Account Security</h5>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control form-control-user" id="password" />
                      </div>
                      <div class="col-sm-6">
                        <label for="confirmPassword">Confirm Password *</label>
                        <input type="password" class="form-control form-control-user" id="confirmPassword" />
                      </div>
                    </div>
                    <h5 class="mb-3 mt-5">Join our mailing list</h5>
                    <p class="mb-4">
                      We would like to send you occasional news, information
                      and special offers by email. To join our mailing list,
                      simply tick the box below. You can unsubscribe at any
                      time.
                    </p>
                    <div class="switch-email mb-4">
                      <span>Receive Emails:</span>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" />
                        <label class="custom-control-label" for="customSwitch1"></label>
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" />
                        <label class="custom-control-label" for="customCheck">I have read and agree to the
                          <a href="#">Terms of Service *</a></label>
                      </div>
                    </div>

                    <a href="login.php" class="btn btn-primary btn-user btn-block">
                      Register Account
                    </a>
                    <hr />
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="index.php" class="btn btn-google btn-user btn-block">
                          <i class="fab fa-google fa-fw"></i> Register with
                          Google
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                          <i class="fab fa-facebook-f fa-fw"></i> Register
                          with Facebook
                        </a>
                      </div>
                    </div>
                  </form>
                  <hr />
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>