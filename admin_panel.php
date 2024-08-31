<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;  
        }
        body {
            background-color: #292c2c;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            height: 100vh;
            width: 100vw;
            padding: 20px;
        }
        h2{
            margin-bottom: 10px;
            opacity: .7;
        }
        center h1{
            margin-bottom: 20px;
            opacity: .9;
        }
        .panel{
    
            height: calc(100vh - 127px);
            width: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        a{
            text-decoration: none;
            background-color: aliceblue;
            padding: 10px 20px;
            border-radius: 100px;
            color: #000;
            
        }
        @media (max-width: 500px) {
            .panel{
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <h2>Welcome to the Admin Panel</h2>
    <center> <h1> Admin Panel </h1> </center>
    <center>
    <div class="panel">
        <a href="admin_display_cookies.php">Cookies</a><a href="admin_display_passward.php">Passward </a>
    </div></center>
    <center> <h6>created with ❤️</h6> </center>
    
</body>
</html>