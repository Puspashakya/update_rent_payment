<?php
            if(isset($_POST['submit']))
            {
                echo $_POST['fname'];
            } 
            
         ?>



<html>
    <head>

    </head>
    <body>
        
        <form action="delete3.php" method="post">
            First Name : <input type="text" value="<?php echo $_POST['fname'] ?>" name="fname"> </br>
            <input type="submit" name="submit" value="go">
        </form>
    </body>
</html>