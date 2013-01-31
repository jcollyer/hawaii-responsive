<?php
$pageTitle = "Photos";
$pageMetaTag = "Photos of Educational Hawaii tours for international students";
  include "header.php"; 
?>
<script type="text/javascript" src="../lib/jquery.ad-gallery.js"></script>
  <script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t7.jpg", "images/7.jpg");
    }, 1000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t8.jpg", "images/8.jpg");
    }, 2000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t9.jpg", "images/9.jpg");
    }, 3000);
    setTimeout(function() {
      galleries[0].removeImage(1);
    }, 4000);
    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>
<body>
     <div id="topnav">
        <ul id="mn-top">
            <li>323-209-5501 |</li>
            <li><a href="contact.php">Contact Us </a> |</li>
            <li><a href="faq.php">FAQ's</a></li>
        </ul>   
    </div>
    <div id="container">
        <div id="top">
            <a href="index.php"><div id="logo">&nbsp;</div></a>
            <div id="mn-menu">
                <ul class="mn-principal float_right">
                    <li><a href="about.php">About</a></li>
                    <li><a href="tours.php">Tours</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="flights.php">Flights</a></li>
                    <li><a href="forms.php">Forms</a></li>
                </ul>
            </div>
            <h1 class="page_title">Photos <span class="ps3">Sea Hawaii Tours</span></h1> 
            <a href="book.php"><div class="sun"></div></a>
        </div>    

        <div id="content">
            <div class="info">    




 <div id="gallery" class="ad-gallery">
      <div class="ad-image-wrapper">
      </div>
      <div class="ad-controls">
      </div>
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="images/1.jpg">
                <img src="images/thumbs/t1.jpg">
              </a>
            </li>
            <li>
              <a href="images/2.jpg">
                <img src="images/thumbs/t2.jpg">
              </a>
            </li>
            <li>
              <a href="images/3.jpg">
                <img src="images/thumbs/t3.jpg">
              </a>
            </li>
                 <li>
              <a href="images/4.jpg">
                <img src="images/thumbs/t4.jpg">
              </a>
            </li>
            <li>
              <a href="images/5.jpg">
                <img src="images/thumbs/t5.jpg">
              </a>
            </li>
            <li>
              <a href="images/6.jpg">
                <img src="images/thumbs/t6.jpg">
              </a>
            </li>
                 <li>
              <a href="images/7.jpg">
                <img src="images/thumbs/t7.jpg">
              </a>
            </li>
            <li>
              <a href="images/8.jpg">
                <img src="images/thumbs/t8.jpg">
              </a>
            </li>
            <li>
              <a href="images/9.jpg">
                <img src="images/thumbs/t9.jpg">
              </a>
            </li>
                 <li>
              <a href="images/10.jpg">
                <img src="images/thumbs/t10.jpg">
              </a>
            </li>
            <li>
              <a href="images/11.jpg">
                <img src="images/thumbs/t11.jpg">
              </a>
            </li>
            <li>
              <a href="images/12.jpg">
                <img src="images/thumbs/t12.jpg">
              </a>
            </li>
             <li>
              <a href="images/13.jpg">
                <img src="images/thumbs/t13.jpg">
              </a>
            </li>
                 <li>
              <a href="images/14.jpg">
                <img src="images/thumbs/t14.jpg">
              </a>
            </li>
            <li>
              <a href="images/15.jpg">
                <img src="images/thumbs/t15.jpg">
              </a>
            </li>
            <li>
              <a href="images/16.jpg">
                <img src="images/thumbs/t16.jpg">
              </a>
            </li>
            <li>
              <a href="images/17.jpg">
                <img src="images/thumbs/t17.jpg">
              </a>
            </li>
            <li>
              <a href="images/18.jpg">
                <img src="images/thumbs/t18.jpg">
              </a>
            </li>
             <li>
              <a href="images/19.jpg">
                <img src="images/thumbs/t19.jpg">
              </a>
            </li>
            <li>
              <a href="images/20.jpg">
                <img src="images/thumbs/t20.jpg">
              </a>
            </li>
            <li>
              <a href="images/21.jpg">
                <img src="images/thumbs/t21.jpg">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>



            </div>
        </div>  
<?php include "footer.php"; ?>