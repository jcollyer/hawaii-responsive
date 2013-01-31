<?php
$pageTitle = "Welcome to";
$pageMetaTag = "Educational Hawaii tours for international students";
  include "header.php"; 
?>
<body>
    <div id="home_top">
     <div id="topnav">
        <ul id="mn-top">
            <li>323-209-5501 |</li>
            <li><a href="contact.php">Contact Us </a> |</li>
            <li><a href="photos.php" class="button_link">Photos</a></li>
        </ul>   
    </div>
        <div id="home-top">
            <a href="index.php"><div id="logo">&nbsp;</div></a>
            <div id="home-mn-menu">
                <ul class="mn-principal float_right">
                    <li><a href="about.php">About</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="flights.php">Flights</a></li>
                    <li><a href="forms.php">Forms</a></li>
                </ul>
            </div>
        </div>    
            <div id="home_slides">
                <ul class="rslides">
                    <li><img src="assets/01.jpg" alt="" /></li>
                    <li><img src="assets/02.jpg" alt="" /></li>
                    <li><img src="assets/03.jpg" alt="" /></li>
                    <li><img src="assets/04.jpg" alt="" /></li>
                    <li><img src="assets/05.jpg" alt="" /></li>
               </ul>
                <script>
                    $(function () {
                        //home page slider
                        $(".rslides").responsiveSlides();
                    });
                </script>
            </div>
        </div>
        <a href="book.php"><div class="sun"></div></a>
        <div id="home_body"> 
            <div id="welcome_message">
                <h1 class="center">Welcome to <span class="ps3">Sea Hawaii Tours</span> and thanks for giving us a look!</h1> 
            </div>
            <div id="content">
                    
                <div class="info">    
                    <h3 class="hs1">Who are we?</h3>
                    <p class="ps1">We are a tour company that specializes in American immersion language and educational tours for high school foreign exchange students.</p>
                    <h3 class="hs1">What makes us awesome you ask? </h3>
                    <p class="ps1">Well, just to name a few: our commitment to safety is unparalleled, we have the lowest prices for our tour design style, and our trips are highly educational and fun with an emphasis on language study. </p>
                    <h3 class="hs1">Who are the tour guides?</h3>
                    <p class="ps1">At Sea Hawaii Tours you will find an <a href="about.php">expert staff</a> that will teach you about all of Hawaii's best kept secrets!  Between the guides we have more than 12 years of experience leading international student tours in Hawaii which makes us second to none!  With plenty of time built in for fun experiences, we focus on culture, history, the environment, and outdoor adventures. </p>
                    <div class="fancyline">&nbsp;</div>
                    <br />
                    <p class="ps1"> Sea Hawaii Tours has extensive activities planned for your week long voyage so you can get the most out of your time in Hawaii.  </p>
                    <p class="fancybox">Please check out the site and don't hesitate to <a href="contact.php">contact us</a> with any questions you may have.  Follow us on <a href="https://twitter.com/seahawaiitours">Twitter</a>, like us on <a href="https://www.facebook.com/pages/Sea-Hawaii-Tours/215369225189474?ref=hl">Facebook</a>, and check out our <a href="http://www.youtube.com/user/SeaHawaiiTours">YouTube</a> channel.</p>
                    <h6>We can't wait to meet you on our next tour! </h6>
                    <h6><span class="italic">Aloha</span> - See you in Hawaii!</h6>
                    <div id="clickme"><h3 class="hs3">Privacy Policy <span class="ps4"> (click to view)</span></h3></div>
                     <div class="info" id="clickinfo">    
                        
                        <p class="ps4">We never collect personal information so you never have to worry about your privacy.</p>
                        <p class="ps4">Information obtained from our users will never be used or sold by third party applications.</p>
                        <p class="ps4">We guarantee your privacy and will not use your email address for anything other than communication regarding your tour.</p>
                        <p class="ps4">We don’t collect credit card information, so we can never lose it.</p>
                        <p class="ps4">We use the security of PayPal for all purchases and for the safety of our customers.</p>
                        <p class="ps4"></p>
                     </div>
                    <img id="fern2" src="assets/fern2.png" />     
                    <img id="fern" src="assets/fern.png" />
                <!-- end #border_tri -->
                </div>
            </div>
         <div id="tour_dates" class="clearfix">
                    <h1 class="center">Upcoming Tour Dates <span class="ps3">2013 - Spring</span></h1>         
                    <div class="tour"><h1 class="center">Tour 1</h1><p class="ps3 center" >March 9th - March 16th</p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="paypalform">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="9KBKJCMVLW6AQ">
                          <table class="paypaltable">
                            <tr>
                              <th>
                                <input type="hidden" name="on0" value="Tour Payments">Tour Payments
                              </th>
                            </tr>
                            <tr>
                              <td>
                                <select name="os0" class="paypalselect" >
                                    <option value="Refundable Tour Deposit">Refundable Tour Deposit $100.00USD</option>
                                    <option value="Half Tour Payment">Half Tour Payment $448.00 USD</option>
                                    <option value="Half Tour Balance (minus deposit)">Half Tour Balance (minus deposit) $348.00 USD</option>
                                    <option value="Full Tour Payment">Full Tour Payment $896.00 USD</option>
                                    <option value="Full Tour Balance (minus deposit)">Full Tour Balance (minus deposit) $796.00 USD</option>
                                </select> 
                              </td>
                            </tr>
                          </table>
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="image" class="paypalforminput" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <div class="tour"><h1 class="center">Tour 2 </h1><p class="ps3 center">March 18th - March 25th</p>
                         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="paypalform">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="9KBKJCMVLW6AQ">
                          <table class="paypaltable">
                            <tr>
                              <th>
                                <input type="hidden" name="on0" value="Tour Payments">Tour Payments
                              </th>
                            </tr>
                            <tr>
                              <td>
                                <select name="os0" class="paypalselect" >
                                    <option value="Refundable Tour Deposit">Refundable Tour Deposit $100.00USD</option>
                                    <option value="Half Tour Payment">Half Tour Payment $448.00 USD</option>
                                    <option value="Half Tour Balance (minus deposit)">Half Tour Balance (minus deposit) $348.00 USD</option>
                                    <option value="Full Tour Payment">Full Tour Payment $896.00 USD</option>
                                    <option value="Full Tour Balance (minus deposit)">Full Tour Balance (minus deposit) $796.00 USD</option>
                                </select> 
                              </td>
                            </tr>
                          </table>
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="image" class="paypalforminput" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    <div class="tour"><h1 class="center">Tour 3 </h1><p class="ps3 center">March 26th - April 2nd</p>
                       <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="paypalform">
                          <input type="hidden" name="cmd" value="_s-xclick">
                          <input type="hidden" name="hosted_button_id" value="9KBKJCMVLW6AQ">
                          <table class="paypaltable">
                            <tr>
                              <th>
                                <input type="hidden" name="on0" value="Tour Payments">Tour Payments
                              </th>
                            </tr>
                            <tr>
                              <td>
                                <select name="os0" class="paypalselect" >
                                   <option value="Refundable Tour Deposit">Refundable Tour Deposit $100.00USD</option>
                                    <option value="Half Tour Payment">Half Tour Payment $448.00 USD</option>
                                    <option value="Half Tour Balance (minus deposit)">Half Tour Balance (minus deposit) $348.00 USD</option>
                                    <option value="Full Tour Payment">Full Tour Payment $896.00 USD</option>
                                    <option value="Full Tour Balance (minus deposit)">Full Tour Balance (minus deposit) $796.00 USD</option>
                                </select> 
                              </td>
                            </tr>
                          </table>
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="image" class="paypalforminput" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div> 
           </div>
<?php include "footer.php"; ?>