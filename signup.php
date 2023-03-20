<?php include("header.php"); ?>

    <div class="text-center p-3">
      <h1>Sign Up</h1>
    </div>



    <section class="container my-2 bg-dark text-light w-50" style="border-radius: 20px;">
        <form class="row g-3 p-3">
              <div class="col-md-4">
                <label for="fname" class="form-label">First name</label>
                <input type="text" class="form-control" id="fname" placeholder="Ujjwal" required>
              </div>
              <div class="col-md-4">
                <label for="mname" class="form-label">Middle Name (Optional)</label>
                <input type="text" class="form-control" id="mname" >
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lname" placeholder="Dhoundiyal" required>
              </div>
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="email"><i class="fa-solid fa-at"></i></span>
                <input type="email" class="form-control" id="email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Mobile Number</label>
              <div class="input-group">
                <span class="input-group-text" id="number"><i class="fa-solid fa-phone"></i></span>
                <input type="tel" class="form-control" id="number" placeholder="1800 3258 21" pattern="[0-9]{10,15}" minlength="10"  maxlength="15" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="stu_id" class="form-label">Student ID</label>
              <div class="input-group">
                <span class="input-group-text" id="stu_id"><i class="fa-solid fa-graduation-cap"></i></span>
                <input type="tel" class="form-control" id="stu_id" placeholder="20151032" pattern="[0-9]{7,9}" minlength="7" maxlength="9" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="pass" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text" id="pass"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" id="pass" minlength="8" maxlength="32" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="pass2" class="form-label">Confirm Password</label>
              <div class="input-group">
                <span class="input-group-text" id="pass2"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" id="pass2" minlength="8" maxlength="32" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="course" class="form-label">Course</label>
              <div class="input-group">
                <select name="course" id="course" class="form-select" required>
                  <option value="" selected disabled>Choose...</option>
                  <option value="course-dd">BCA</option>
                  <option value="course-dd">BSC.IT</option>
                  <option value="course-dd">BSC.CS</option>
                  <option value="course-dd">MCA</option>
                  <option value="course-dd">MCA.IT</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
                <label for="state" class="form-label">Semester</label>
                <div class="input-group">
                  <select name="course" id="course" class="form-select" required>
                    <option value="" selected disabled>Choose...</option>
                    <option value="sem-dd">1 Semester</option>
                    <option value="sem-dd">2 Semester</option>
                    <option value="sem-dd">3 Semester</option>
                    <option value="sem-dd">4 Semester</option>
                    <option value="sem-dd">5 Semester</option>
                    <option value="sem-dd">6 Semester</option>
                  </select>
                </div>
              </div>
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tick">
                <label class="form-check-label" for="tick">By Clicking this you are accepting the <a href="">Terms</a> and <a href="">Condition</a></label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tick2" required>
                <label class="form-check-label" for="tick2">Can we send you updates by mail</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" style="width: 100%;   border-radius: 20px;">Sign Up</button>
            </div>
          </form>
       </section>

<?php include("footer.php"); ?>