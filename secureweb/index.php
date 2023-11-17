<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
  <h1>Jokes Page</h1>
  <a href="logout.php">Click here to log out</a>
  <a href="login_form.php">Click here to log in</a>
  <a href="register_new_user.php">Click here to register</a>


  <?php
  include "db_connect.php";
  // include "search_all_jokes.php";
  ?>

  <form class="form-horizontal" action="search_keyword.php">
    <fieldset>

      <!-- Form Name -->
      <legend>Search for a joke</legend>

      <!-- Search input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="keyword">Search Input</label>
        <div class="col-md-5">
          <input id="keyword" name="keyword" type="search" placeholder="e.g. chicken" class="form-control input-md"
            required="">
          <p class="help-block">enter a word to search for in the joke database</p>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-primary">Search</button>
        </div>
      </div>

    </fieldset>
  </form>

  <hr>


  <form class="form-horizontal" action="add_joke.php">
    <fieldset>

      <!-- Form Name -->
      <legend>Add a joke</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="newjoke">Text Input</label>
        <div class="col-md-8">
          <input id="newjoke" name="newjoke" type="text" placeholder="" class="form-control input-md">
          <span class="help-block">Enter the first half of your joke</span>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="newanswer">The answer for your joke</label>
        <div class="col-md-5">
          <input id="newanswer" name="newanswer" type="text" placeholder="" class="form-control input-md">
          <span class="help-block">Enter the punchline to your joke</span>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-primary">Add a new joke</button>
        </div>
      </div>

    </fieldset>
  </form>



  <?php
  // include "search_keyword.php";
  
  $mysqli->close();
  ?>
</body>

</html>