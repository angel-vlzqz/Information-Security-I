<!DOCTYPE html>
<html>
    <head>
        <title>My Jokes Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Welcome to My Jokes Website</h1>

            <form class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Form Name</legend>

                    <!-- Search input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="search for joke in database">Search Input</label>
                        <div class="col-md-5">
                            <input id="search for joke in database" name="search for joke in database" type="search" placeholder="placeholder" class="form-control input-md" required="">
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
                        <label class="col-md-4 control-label" for="addjoke"></label>
                        <div class="col-md-4">
                            <button id="addjoke" name="addjoke" class="btn btn-primary">Add Joke</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>