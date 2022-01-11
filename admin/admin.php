<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css"> 
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        
        <title>Log_in</title>
    </head>

    <body>
        
        <div> 
            <form method="POST" class="forms"  action="admin_login.php" >
                <div>
                    <h1>Admin</h1>
                </div>
                
                <div>
                    <input type="text" placeholder="Admin name" id="username" name="username" class="in" required><br>
                    <input type="password" name="pass" placeholder="Password" id="password" name="password" class="in" required><br>
                </div>
                
                <div>
                 <input type="submit" value="log in" name="log" id="subButn" class="in" >
                </div>
                
                <div>
                    <p id="rme"><b>Remember me</b><input type="checkbox" value="">  </p>
                </div>
                
               
                
                
            </form>
        </div>
    </body>
</html>