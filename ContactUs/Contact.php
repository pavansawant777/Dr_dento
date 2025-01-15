<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ContactUs Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
  <body>
   <a href="#"> <img src="../ContactUs/photos/contact1.jpg" class="img-fluid" alt="..."></a>

    <div class="container">
        <div class="header">
            <h1>Contact Us</h1>
            <br>
            <h3><b>We would love to hear from you!</b> </h3>
            <h6>Have a Question Or Comment?</6>
            <p>Use the form below to send us a message or reach us by mail at:</p>
        </div>
        <div class="form-container">
          
            <div class="form">
                <form>
                    <label for="name">NAME</label>               
                    <input type="text" name="name"  required>

                    <label for="phone">PHONE NUMBER</label>
                    <input type="text" name="phone"  required>

                    <label for="email">E-MAIL <b style="color: red;">*</b></label>
                    <input type="email" name="email"  required>

                    <label for="message">COMMENTS <b style="color: red;">*</b></label>
                    <textarea name="message"  required></textarea>

                    <input type="submit" value="SUBMIT CONTACT">
                </form>
            </div>
          
            <div class="contact-info">
                <h2>Get In Touch!</h2>
                <p>We'd love to hear from you - Please use the form to send us your message or ideas.Or simply pop in for a cup of fresh tea and a cookie.</p>
                <br>
                <ul>
                    <li style="color: black;"><i class="fa fa-phone"></i> CALL: +91 70455 19999</li>
                    <li><i class="fa fa-envelope"></i> Email: smile@drdento.com</li>
                    <br>
                    <li><i class="fa fa-map-marker"></i> Address: Unit No.111, Veena Industrial Estate, L.B.S Marg, Vikhroli (West), Mumbai, 400083</li>
                    <div class="line"></div>
                    <br>
                    <li><i class="fa fa-clock"></i> Opening Hours: </li>
                    <h6>MON to SAT: 10:00 AM - 7:00 PM</h6>
                </ul>
            </div>
        </div>
   
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d120715.9814074279!2d72.828012!3d19.003216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf8d99ea5cf5%3A0x19fe7eed509abbd2!2sDr.Dento!5e0!3m2!1sen!2sin!4v1736928752718!5m2!1sen!2sin"  
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>