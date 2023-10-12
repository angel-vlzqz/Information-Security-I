<html>
    <head>
        <link rel="stylesheet" href="cite.css">
    </head>
    <body>
        <h1>Post a comment</h1>
        <form action="index.php" method="post">
            <label for="comment_title">Comment Title:</label>
            <input type="text" name="comment_title">
            <br/>
            <label for="comment_text">Comment:</label>
            <textarea name="comment_text" rows="12" cols="70"></textarea>
            </br>
            <input type="submit" value="Post comment">
            </br>
        </form>

        <?php
        if (!$_POST['comment_title'])
        {
            die("Nothing posted");
        }
        ?>

        <h1>Processing the new post</h1>
        <div id="postarea">
            <p>Here is what was posted</p>
            <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
            ?>
        </div>

        <h2>New comments</h2>
            <div id="newcomment">
                <?php
                    // this is the vulnerability, we are not checking
                    // for any threats. we simply accept all text
                    echo <"<h3>".$_POST['commenttitle']."</h3>";
                    echo "<p>".$_POST['comment_text']."</p>";
                ?>
            </div>
    </body>
</html>
