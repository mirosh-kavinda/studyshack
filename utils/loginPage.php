<h2 class="text-center  mt-5  font-weight-bold wow fadeIn" data-wow-delay="0.2s">Log In To Your Account</h2>
    <div class="row d-flex justify-content-center align-items-center  mt-4">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/draw2.png" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form action="index.php" class="border-dark  " method="Post">

          <!-- Email input -->
          <div class="form-outline mt-2 ">
            <input type="email" id="form3Example3" class="form-control form-control-lg border-dark"
              placeholder="Enter a valid email address" name="username" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg border-dark"
              placeholder="Enter password" name="password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>


          <div class="col-md-6 mb-4">
            <h6 class="mb-0 me-4">Type :
              <select class="select" name="logtype">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="staff">Staff</option>
              </select>
            </h6>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <span><a href="#!" class="text-body"> Forgot password? Reset</a></span>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">

            <input type="submit" class="btn btn-info btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"
              name="login" value="Login" />

            <p class="small fw-bold mt-2 pt-1 mb-0">For Students If you Don't have an account?
              <a href="pages/Register/studReg.php" class="link-danger">Register</a>
            </p>
          </div>

        </form>
      </div>
    </div>