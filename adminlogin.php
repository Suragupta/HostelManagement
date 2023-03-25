<html>
    <head>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">

    
        <title>Hostel Management</title>
    </head>
    <body>
        <div class="form-group">
            
        <form class="modal-content animate" action="/action_page.php" method="post">
            
                <div class="flex-container">
                <div class="image-container">
                    <img src="assets\images\hostel-img.jpg" alt="hostel">
                    </div>
                  <div class="container">
                   
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
            
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                 
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                
                  <span class="psw">Forgot <a href="#">password?</a></span>
                  </div>
              </form>
             
</div>
        </div>
    </body>
</html>