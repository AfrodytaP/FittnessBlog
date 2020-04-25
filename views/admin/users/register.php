<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
        <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" action="index.php?controller=users&action=register" method="POST">
                <div class="form-label-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" id="inputUsername" class="form-control" name="username" required autofocus>
                </div>
                <div class="form-label-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" >
                </div>
                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control"  name="password" required>
                </div>
                <div class="form-label-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" id="inputConfirmPassword" class="form-control" name="password2" required>
                </div>
                
               <?php $passwordsnotequal = false; if ($passwordsnotequal==true)
               {
                   print "You made a typo. Please enter again";
               }
               ?>
                <label> </label>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Sign up</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-center" href="#">Or Sign In</a>
        </div>
    </div>
</div>
