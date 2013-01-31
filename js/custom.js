


   //external links
  $("#content a[href^='www.']").attr("target","_blank");


	    
   $(function(){


   		//ajax contact form
      	$('#contact_form').submit(function(e){
       		e.preventDefault();
			var form = $(this);
			var post_url = form.attr('action');
			var post_data = form.serialize();
			
			$.ajax({
				type: 'POST',
				url: "sendmail_contact_form.php",
				data: post_data,
				success: function(msg) {
					$('#success').css("display","block");
				}
			});
		});



      		//flights hover 
            $('.flights_table tr td').each(function(){
                $(this).mouseenter(function(){
                    var slider = $(this).find('.airline_hover');
                    slider.stop().css("opacity", "1").animate({marginTop: "-120px"}, 1000);
                    //$('li.item-ii').find( item1 ).css('background-color', 'red');
                    
                    //$(this).find().css("display", "block");
                }).mouseleave(function(){
                    var slider = $(this).find('.airline_hover');
                    slider.stop().css("opacity", "0").animate({marginTop: "0px"}, 500);
                });
            });


            //click to view privacy policy
            $('#clickme').click(function(){
             
              $('#clickinfo').css("display", "block").animate({opacity: '1'}, 1000);
            });
	});
	         









