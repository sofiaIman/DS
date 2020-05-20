<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
      <h1 style= "color:pink; align:left" class="navbar-brand"  >Welcome <?php echo $_SESSION['username']; ?>!</h1>
        <a class="navbar-brand" href="index.php">Digital Salon Management System</a>
       
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="user.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            
            
           
            
            
            <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
            
          </ul>
        </div>
      </div>
    </nav>