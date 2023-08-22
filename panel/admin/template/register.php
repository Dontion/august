<?php include "header.php" ; ?>

<?php


include 'connection.php';
if (isset($_POST['regis'])) {
  $name = strtolower(stripcslashes$_POST['name']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
  $email = htmlspecialchars($_POST['email']);
  $akses = htmlspecialchars($_POST[akses]);

  // cek username
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username");
}
?>
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Register Form</h4>
                    <p class="card-description">  Register Form </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="username" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Ulangi Passowrd</label>
                        <input type="password" class="form-control" id="exampleInputPassword5" name="password2" placeholder="Password2">
                      </div>'
                      <div class="form-group">
                        <label for="exampleSelectGender">Pilih Hak Akses</label>
                        <select class="form-control" name="akses" id="exampleSelectGender">
                          <option>Operator</option>
                          <option>Admin</option>
                        </select>
                      
                      <button type="submit" name="regis" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include "footer.php" ; ?>              