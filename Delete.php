<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./stylesheet.css">
    <title>Supermarket</title>
    <div class="header">
        <h1> Supermarket Database </h1>
    </div>
</head>

<body>

    <form action="delete_process.php" method="POST">
        <fieldset>
        <div class="form-content">
            <label for="CustomerID">Insert CustomerID that you want to delete: </label>
            <br>
            <input type="text" name="CustomerID" placeholder="CustomerID" />
            <div class = "form-button">
                <input type = "submit" class="button" name="Delete" value="Delete"></button>
            </div>
        </div>
        </fieldset>
    </form>
    </body>
</html>