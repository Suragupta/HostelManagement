<html>
    <head>
    <link href="css/index.css" rel="stylesheet">
    
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
                 
                  <button type="submit" > <a href="admin.php">Go to admin Panel</a></button>
          
                  <button type="submit"><a href="student.php">Student Sign Up</a></button>
                 
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                
                  <span class="psw"> <a href="#">Forgot password?</a></span>
                  </div>
              </form>
             
</div>
        </div>
    </body>
</html>