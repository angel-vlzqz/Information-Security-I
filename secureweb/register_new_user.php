<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Please register</h1>

        <?php
        include "db_connect.php";
        ?>

        <form class="form-horizontal" action="process_new_user.php">
        <fieldset>

        <!-- Username entry-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Username</label>
            <div class="col-md-5">
                <input id="username" name="username" type="text" placeholder="your name" class="form-control input-md" required="">
                <p class="help-block">Please enter a username</p>
            </div>
        </div>

        <!-- Password entry-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password1">Password</label>
            <div class="col-md-5">
                <input id="password1" name="password1" type="password" placeholder="password" class="form-control input-md" required="">
                <p class="help-block">Please enter a password</p>
            </div>
        </div>

        <!-- Password confirm-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password2">Password</label>
            <div class="col-md-5">
                <input id="password2" name="password2" type="password" placeholder="password" class="form-control input-md" required="">
                <p class="help-block">Please confirm the password</p>
            </div>
        </div>


        <!-- Button entry--> 
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Create new user</button>
            </div>
        </div>

        </fieldset>
        </form>

        <?php
            $mysqli->close();
        ?>
    </body>
</html>
