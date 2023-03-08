<h2 class="text-center mb-5  font-weight-bold wow fadeIn" data-wow-delay="0.2s">Log In To Your Account</h2>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/draw2.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <form action="utils/login.php" method="Post">


            <div class="divider d-flex align-items-center my-4">

            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="username" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>


            <div class="col-md-6 mb-4">
              <h6 class="mb-0 me-4">Grade :
                <select class="select" name="logtype">
                  <option value="1">Student</option>
                  <option value="2">Teacher</option>
                  <option value="3">Other</option>
                </select>
              </h6>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">

              <input type="submit" class="btn btn-info btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login" value="Login" />

              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                <a href="pages/Register/registerSection.php" class="link-danger">Register</a>
              </p>
            </div>

          </form>
        </div>
      </div>