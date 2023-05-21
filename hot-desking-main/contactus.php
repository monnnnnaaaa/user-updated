
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/contactus.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <title>Contact Us</title>
  </head>
  <body>
    <div class="nav">
      <img
        id="lg"
        src="images/325945138_665462758703524_520291871664463704_n.jpg"
        alt="logo"
      />
      <span><a href="bookings.php">Booking</a></span>
      <span id="faq"><a href="viewpage.php">Available Desks</a></span>
      <div id="profile-container">
        <span><a href="home.php">Home</a></span>
        <span>
          <img src="icons\icons8-user-48.png" alt="profile-picture" class="click"
        /></span>
        <div class="list">
          <a href="profile.php"><button class="links">Profile</button></a>
          <a href="logout.php"><button class="links">Logout</button></a>
        </div>
      </div>
    </div>

    <div class="cont-1">
        <div class="cont-1-1">
            <div class="content">
                <h1><span class="text-primary">Contact Us</span></h1>
                <p class="header">Please fill up the form below to contact us</p>
            </div>
        </div>
    </div>
    
    <section id="contact-form">
        <div class="container">

            <form action="process.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="text" name="message" id="message"></textarea>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>

    <section id="contact-info" class="bg-dark">
        <div class="footer-container">
            <div class="box">
                <i class="fas fa-hotel fa-3x"></i>
                <h3>Location</h3>
                <p>Apalit Pampanga</p>
            </div>
            <div class="box">
                <i class="fas fa-phone  fa-3x"></i>
                <h3>Phone Number</h3>
                <p>(555) 555-5555</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope  fa-3x"></i>
                <h3>Email Address</h3>
                <p>customersupport@lavaroom.com</p>
            </div>
        </div>
    </section>
    <div class="footer">
        <footer id="footer">
            <p class="footer-copyright">LavaRoom &copy; All Rights Reserved</p>
        </footer>
    </div>
  </body>
</html>
