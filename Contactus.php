<?php include '/header.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ContactUs Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
    color: #333;
}

.container {
    max-width: 100%;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.header {
    text-align: start;
    margin-bottom: 20px;
    padding-left: 20px;
}

.header h1 {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #000;
}

.header p {
    font-size: 1rem;
    color: #666;
}

.form-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.form {
    flex: 2;
    padding: 20px;
}

.form input,
.form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form textarea {
    resize: vertical;
    height: 120px;
}

.form input[type="submit"] {
    background: #03e8f0;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease;
    width: 30%;
    box-shadow: 3px 4px #3293d4;
    font-weight: bold;
}

.form input[type="submit"]:hover {
    background: #5a00c1;
}

.contact-info {
    flex: 1;
    padding: 20px;
    background: #fafafa;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.contact-info h2 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #000;
}

.contact-info p {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #333;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    color: #666;
}

.contact-info ul li i {
    margin-right: 10px;
    color: #6a0dad;
}

@media (max-width: 768px) {
    .form-container {
        flex-direction: column;
    }

    .form, .contact-info {
        flex: 1;
    }
}


.map-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* Aspect ratio 16:9 */
    height: 0;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

   }

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}
.line {
    
    height: 2px;
    background-color: #a79595;
    width: 100%;
}
 </style>
</head>
  <body>
   <a href="#"> <img src="https://drdento.com/cdn/shop/files/Contact_Us_Banner.png?v=1721219743&amp" class="img-fluid" alt="..."></a>

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
<?php include '/footer.php';?>