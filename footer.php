    <div class="waves">&nbsp;</div>
    <div id="apsocial">
        <ul id="social_media">
          <li class="facebook"><a class="facebook_logo" href="https://www.facebook.com/pages/Sea-Hawaii-Tours/215369225189474?ref=hl">facebook</a></li>
          <li class="youtube"><a class="youtube_logo" href="http://www.youtube.com/user/SeaHawaiiTours">youtube</a></li>
          <li class="twitter"><a class="twitter_logo" href="https://twitter.com/seahawaiitours">twitter</a></li>
          <li class="pintrist"><a class="pintrist_logo" href="https://pinterest.com/seahawaiitours/">pintrist</a></li>
          <li class="yelp"><a class="yelp_logo" href="http://www.yelp.com/biz/sea-hawaii-tours-honolulu">yelp</a></li>
        </ul>
    </div> 
    </div>

    <div id="footer">  
        <div id="footer_bg">
            <div class="footer_form">
                    <form name="contact_form" id="contact_form" method="POST" id="contact_form" action="sendmail_contact_form">
                         <table id="contact_table">
                           <tr>
                              <td colspan="2"><h2 class="ps1">Contact <span class="ps3">Sea Hawaii Tours</span></h2></td></tr>
                           <tr>
                              <td><input name="name" id="name" type="text" title="Name" class="contact_input"></td>
                           </tr>
                            <tr>
                              <td><input name="email" id="email" type="email" title="Email" class="contact_input"></td>
                           </tr>
                            <tr>
                              <td><input name="subject" id="subject" type="text" title="Subject" class="contact_input"></td>
                           </tr>
                            <tr>
                              <td><textarea name="message" id="message" class="message_textarea" title="Message..." class="contact_input"></textarea></td>
                           </tr>
                            <tr>
                               <td><input type="submit" id="comment_submit_button" value="Submit" name="submit" class="button_link"></td>
                           </tr>
                        </table>
                    </form>
                    <div id="success" ><h1>Thank You!</h1><h3>We will be in contact with you soon!</h3></div>
                </div>
            <ul id="footer_list">
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="tours.php">tours</a></li>
                <li><a href="faq.php">faq's</a></li>
                <li><a href="flights.php">flights</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li style="font-size:70%"> &copy;2012 SeaHawaii Tours </li>
                <li style="font-size:70%">by <a href="http://www.jeremycollyer.com">jeremycollyer</li>
            </ul> 
        </div> 
        
     </div>
<script>

  
          

        //set input global variable 
        var inputTitle = $(':input[title]');
        inputTitle.css({
            fontSize : '110%',
            color : '#555555',
          });

        //form input focus
          $(':input[title]').each(function() {
            var $this = $(this);
            if($this.val() === '') {
              $this.val($this.attr('title'));}
              $this.focus(function() {
                if($this.val() === $this.attr('title')) {
                  $this.val('');}
                });
              $this.blur(function() {
                if($this.val() === '') {$this.val($this.attr('title'));}
              });
       

           });    
 
</script>



</body>
</html>
   