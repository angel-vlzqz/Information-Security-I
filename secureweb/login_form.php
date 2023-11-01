<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Login for Jokes</h1>
        <?php
            include "db_connect.php";
        ?>

        <form class="form-horizontal" action="process_login_unsecure.php">
        <fieldset>

        <!--Login entry -->
        <legend>Please login</legend>

        <!-- Search input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Username</label>
            <div class="col-md-5">
                <input id="username" name="username" type="text" placeholder="your name" class="form-control input-md" required="">
                <p class="help-block">enter your username</p>
            </div>
        </div>

        <!--Password entry-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-5">
                <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
                <p class="help-block">enter your password</p>
            </div>
        </div>

        <!-- Button --> 
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

        </fieldset>
        </form>

        <?php
            $mysqli->close();
        ?>
    </body>
</html>
