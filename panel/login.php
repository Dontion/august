<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #007bff;
        }
        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h4 {
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['email'])) {
        echo '<script>window.location.replace("./index.php");</script>';
    } else {
    ?>
    <center>
        <h1>VCH SCHOOL</h1>
        <form action="cek login.php" method="post">
            <input type="email" name="email" placeholder="Email" alt="email" required="required"/><br/>
            <input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
            <input type="submit" name="submit" value="Submit" alt="submit"/>
        </form><br/>
        <h4>Copyright &copy; <font color="red" alt="inwepo.co">pooo</font> & <font color="red" alt="Faraaz">ale</font></h4>
    </center>
    <?php } ?>
</body>
</html>
