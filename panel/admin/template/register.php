<?php include "header.php" ; ?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Register Form</h4>
                    <p class="card-description">  Register Form </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Repeat Agaian Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword5" placeholder="Password2">
                      </div>'
                      <div class="form-group">
                        <label for="exampleSelectGender">Pilih Hak Akses</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Operator</option>
                          <option>Admin</option>
                        </select>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include "footer.php" ; ?>              