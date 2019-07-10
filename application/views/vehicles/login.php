<div class="container">

    <form class="form-signin" action="login.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label class="item_label">Vehicle Name</label>
        <input type="text" name="vehicle_name" value="" class="form-control" autofocus/>
        <label class="item_label">license</label>
        <input type="text" name="license" value="" class="form-control"/>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="register.php" class="btn btn-default btn-lg btn-block" role="button">Register</a>
    </form>

</div> <!-- /container -->