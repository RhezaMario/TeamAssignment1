<!DOCTYPE html>
<html>
<head>
    <title>Insert form</title>
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Supermarket</title>
    <div class="header">
        <h1> Supermarket database </h1>
    </div>
</head>

<body>

    <form action="update_process.php" method="POST">

        <fieldset>

        <div class = "form-content">
            <label for="CustomerID">Insert CustomerID: </label>
            <br>
            <input type="text" name="CustomerID" placeholder="CustomerID" />

        </div>
        <div class = "form-content">
            <label for="CustomerName">Insert New CustomerName: </label>
            <br>
            <input type="text" name="CustomerName" placeholder="CustomerName" />
        </div>
        <div class = "form-content">
            <label for="CustomerPhone">Insert New CustomerPhone: </label>
            <br>
            <input type="text" name="CustomerPhone" placeholder="CustomerPhone" />
        </div>
    
        <div class = "form-content">
            <label for="CustomerAddress">Insert New CustomerAddress: </label>
            <br>
            <input type="text" name="CustomerAddress" placeholder="CustomerAddress" />
        </div>
        <div class = "form-button">
            <input type= "submit" class = "button"  value="Update" name="Update"> </button>
        </div>

        </fieldset>

    </form>

    </body>
</html>