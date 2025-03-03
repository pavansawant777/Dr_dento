 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      /* 1st part*/
      *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        color: white;
      }
      footer{
        background-color:black;
        padding-top: 50px;
      }
      .container{
        width: 1140px;
        margin: auto;
        display: flex;
        justify-content: center;
      }
       .footer-content{
        width: 33.3%;
       }
       .footer-content-3{
        width: 33.3%;
       }
       .h3{
        font-size: 28px;
        margin-bottom: 15px;
        text-align: center;
       }
       .h2{
        font-size: 28px;
        margin-bottom: 15px;
        text-align: center;
       }
        
  
       .footer-content p{
        width: 300px;
        margin:auto;
        font-size: 14px;
        font-weight: lighter;
        font-stretch: semi-expanded;
        padding: 8px;
        font-family:Arial, Helvetica, sans-serif;

       }
       .footer-content ul{
        text-align:center;
       }
       .list{
        padding: 0; 
       }
       .list li{
        width: auto;
        text-align: left;
        list-style-type: none;
        padding: 7px;
        position: relative;
       }
       .list li::before{
        content: '';
        position: absolute;
        transform: translate(-50%,-50%);
        left:10%;
        top: 100%;
        width: 0;
        height: 3px;
        background:#fff;
        transition-duration: .5s;
       }
       .list li:hover::before{
            width: 70px;
       }
       .footer-content-right{
        text-align: left;
       }
       .bottom-bar{
        background: rgb(115, 244, 235);
        text-align: center;
        padding: 20px 0;
        margin-top: 60px;
       }
       .bottom-bar p{
        color: black;
        margin: 0;
        font-size: 16px;
        padding: 7px;
       }


        /* socail iocon*/
         
/* From Uiverse.io by david-mohseni */ 
.wrapper {
  display: inline-flex;
  text-align: center;
  list-style: none;
  height: 100%;
  width: 100%;
  padding-top: 20px;
  font-family: "Poppins", sans-serif;
  justify-content: center;
}

.wrapper .icon {
  position: relative;
  padding: 0;
  background:black;
  text-align: center;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position:absolute;
  top: 0;
  font-size: 14px;
  background: #fff;
  color: #fff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #fff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877f2;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1da1f2;
  color: #fff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #e4405f;
  color: #fff;
}

/* From Uiverse.io by alexruix */ 
.input-group {
  display: flex;
  align-items: center;
}

.input {
  min-height: 50px;
  max-width: 150px;
  padding: 0 1rem;
  color: #fff;
  font-size: 15px;
  border: 1px solid rgb(115, 244, 235);
  border-radius: 6px 0 0 6px;
  background-color: transparent;
}

.button--submit {
  min-height: 50px;
  padding: .5em 1em;
  border: none;
  border-radius: 0 6px 6px 0;
  background-color: rgb(115, 244, 235);
  color: #fff;
  font-size: 15px;
  cursor: pointer;
  transition: background-color .3s ease-in-out;
}

.button--submit:hover {
  background-color:grey;
}

.input:focus, .input:focus-visible {
  border-color: #3898EC;
  outline: none;
}

    </style>
 
    <footer>
        <div class="container">
          <div class="footer-content-3"> 
            <div class="footer-content">
              <div class="imgset"> 
                 <img src="img/Dr.dento_logo_200x-footer.avif" style="display: flex;">
                </div>
                <p>We care for your oral hygiene as much as we care for you to
                   smile confidently all day long. Our products are backed by 
                   extensive innovative research and are ergonomically designed 
                   to give you a smooth yet effective oral care experiemce.</p>
                   <br>
                   <span><i class="fa-thin fa-location-pin">
                    
                   </i></span>
                     <div class="address">
                      <p>4A, 4th floor, Trade World C,<br>
                        next to BSE, Kamala Mills Compound,<br>
                        Senapati Bapat Marg, Lower Parel, Mumbai</p>
                     </div>
                    
                    <!--call-->
                    <div class="callto"> 
                      <span><i fa fa-phone></i></span>
                      <div class="call">
                 <p>Call us: +917045519999</p>
                 </div>
                 </div>
                   <!--email-->
                  <div class="emailto"> 
                 <span>
                  <i class="fa fa-envelope"></i>
                 </span>  
                 <div class="email"> 
                 <p>Email: <a href="mailto:smile@drdento.com">smile@drdento.com</a></p>
                </div>
              </div>
                  <br>
                  <h2>FOLLOW US</h2>
                  <!-- From Uiverse.io by david-mohseni --> 
                  <ul class="wrapper">
                    <li class="icon facebook">
                     <span class="tooltip">Facebook</span>
                      <svg
                        viewBox="0 0 320 512"
                        height="1.2em"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                        ></path>
                      </svg>
                    </li>
                    <li class="icon twitter">
                      <span class="tooltip">Twitter</span>
                      <svg
                        height="1.8em"
                        fill="currentColor"
                        viewBox="0 0 48 48"
                        xmlns="http://www.w3.org/2000/svg"
                        class="twitter"
                      >
                        <path
                          d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
                        ></path>
                      </svg>
                    </li>
                    <li class="icon instagram">
                      <span class="tooltip">Instagram</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="1.2em"
                        fill="currentColor"
                        class="bi bi-instagram"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                        ></path>
                      </svg>
                    </li>
                  </ul>
                  
</div>
            </div>
            <div class="footer-content">
        
                 <ul class="list">
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Our Story</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Affilate Program</a></li>
                    <li><a href="">Terms And Conditions</a></li>
                    <li><a href="">Return Policy</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Warranty Claim</a></li>
                    <li><a href="">Shipping And Delivery</a></li>
                 </ul>
            </div>
            <div class="footer-content-right">
                <h3>NEWSLETTER SIGN UP</h3>
                <br>
                <div class="paragraph">
                  <p>Receive our latest updates about products and promotions.</p>
                </div>
                 <br>
                <div class="input-group">
                <input type="email" class="input" id="Email" name="Email" placeholder="uiverse@verse.io" autocomplete="off">
    <input class="button--submit" value="Subscribe" type="submit"></div>
            </div>
        </div>
      </div>
        <!--bottom bar-->
        <div class="bottom-bar">
          <p>&copy; 2024 White Tusk Healthcare Private Limited. All Right Reserverd.</p>
        </div>
    </footer>
    
</body>
</html>