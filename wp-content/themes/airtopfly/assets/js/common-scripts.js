
;(function($){
	$(function(){
        
      
        

      $('#phone-nav').click(function(){
          $('.nav-wrap').slideToggle();
      })
        
        
             $(window).scroll(function(){

			if($(window).width() > 767 ){
				if( $(window).scrollTop() > 1 ){
					$('header').addClass('fixedTop')
				}
				else {
					$('header').removeClass('fixedTop')
				}

			}

		});
        
        $('.main-nav ul li').find('> ul.sub-menu').parents('li').addClass('HasNav');
        
        $('select.select').selectric();
      

        
        
        
        $('.tab-content-section').each(function(){
            $('.tabed > li').eq(0).addClass("active")
            $('.tab-content-wrap div.tab-content').hide()
            $('.tab-content-wrap div.tab-content').eq(0).show()

            $('.tabed > li').each(function(i){
                $(this).click(function(){

                    if( $(this).hasClass("active") ) return false

                    else{
                        $(".tabed > li.active").removeClass("active")
                        $(this).addClass('active')
                         $('.tab-content-wrap div.tab-content').hide()
                        $('.tab-content-wrap div.tab-content').eq(i).show()
                    }
                })
            });
        });
        
        
            $('#package-tab > li').eq(0).addClass("active")
            $('.package-tab-content div.package-tab-item').hide()
            $('.package-tab-content div.package-tab-item').eq(0).show()

            $('#package-tab > li').each(function(i){
                $(this).click(function(){

                    if( $(this).hasClass("active") ) return false

                    else{
                        $("#package-tab > li.active").removeClass("active")
                        $(this).addClass('active')
                         $('.package-tab-content div.package-tab-item').hide()
                        $('.package-tab-content div.package-tab-item').eq(i).show()
                    }
                })
            });
      
        
        
        $('.tab-content').each(function(){
            if($(this).children('.tab-item').length > 5){
                $(this).addClass('GetMore')
            }
        });

        
        
        if($('.nor-home').length){
            $('header').addClass('header-bg')
        }

        
         
     if($('.slides-item p').length){  
        
       $('.slides-item p').html(function(){	
            // separate the text by spaces
            var text= $(this).text().split(' ');
            // drop the last word and store it in a variable
            var last = text.pop();
            // join the text back and if it has more than 1 word add the span tag
            // to the last word
            return text.join(" ") + (text.length > 0 ? ' <dfn class="lastWord">'+last+'</dfn>' : last);   
        }); 

            $('.slides-item p').each(function() {
                var word = $(this).html();
                var index = word.indexOf(' ');
                if(index == -1) {
                    index = word.length;
                }
                $(this).html('<em class="firstWord">' + word.substring(0, index) + '</em>' + word.substring(index, word.length));
            });

     }
    
        
        if($('.datepicker').length){
            
            var dateFormat = "mm/dd/yy",
              from = $( "#From-date" )
                .datepicker({
                  defaultDate: "+1w",
                  changeMonth: true,
                    minDate: 0,
                  numberOfMonths: 1
                })
                .on( "change", function() {
                  to.datepicker( "option", "minDate", getDate( this ) );
                }),
              to = $( "#To-date" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                  minDate: 0,
                numberOfMonths: 1
              })
              .on( "change", function() {
                from.datepicker( "option", "maxDate", getDate( this ) );
              });
                
            function getDate( element ) {
              var date;
              try {
                date = $.datepicker.parseDate( dateFormat, element.value );
              } catch( error ) {
                date = null;
              }

              return date;
            }
            
        }
        
        
        if($(window).width() < 992){
        
        $(".main-nav ul li.HasNav > a").bind('click', 'touchend', function(e){
                e.preventDefault();
                   $(".main-nav ul li.HasNav >").find("> ul.info-item:visible").slideUp()
                   $(".main-nav ul li.HasNav > a").removeClass("active")
                if($(this).parent().find("> ul.sub-menu:visible").length){
                    $(this).removeClass("active")
                    $(this).parent().find("> ul.sub-menu").slideUp()
                } 
                else{
                    $(this).addClass("active")
                    $(this).parent().find("> ul.sub-menu").slideDown()
                }
            })
     
        
        }
        
        
        
        
        var options = {

              url: "assets/file/airports.json",

              getValue: "name",

              list: {
                match: {
                  enabled: true
                },
               
              },

             template: {
                   type: "description",
                 /* method: function(value, item) {
                          return "<span class='flag flag-" + (item.code).toLowerCase() + "' ></span>" + value;
                        },
                       */
                    fields: {
                        description: "country",
                        
                    },
                 
                },

              theme: "round"
            };

            $("#from").easyAutocomplete(options);
        
        
            var optioned = {

                  url: "assets/file/airports.json",

                  getValue: "name",

                  list: {
                    match: {
                      enabled: true
                    },

                  },

                 template: {
                       type: "description",
                     /* method: function(value, item) {
                              return "<span class='flag flag-" + (item.code).toLowerCase() + "' ></span>" + value;
                            },
                           */
                        fields: {
                            description: "country",

                        },

                    },

                  theme: "round"
                };

                $("#To-0").easyAutocomplete(optioned);

		
	})// End ready function.
   
    $(window).on('load', function(){
        
        if($('#HeroSlide').length){  
           $('#HeroSlide').slick({
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  autoplay:true,
                  fade: true,
                  speed: 500,
                  draggable:false,
                   pauseOnHover: true,
                  autoplaySpeed: 4000,

                });
               
      }
        if($('#WelCome').length){  
           $('#WelCome').slick({
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: true,
                  autoplay:true,
                  fade: true,
                  speed: 500,
                  draggable:false,
                  autoplaySpeed: 4000,

                });
               
      }

       if($('#TestiMonial').length){  
            $('#TestiMonial').slick({
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: true,
                      arrows:false,
                      dots:true,
                speed:800,
                      autoplaySpeed: 5000,
                }).on('wheel', (function(e) {
                      e.preventDefault();

                      if (e.originalEvent.deltaY < 0) {
                        $(this).slick('slickNext');
                      } else {
                        $(this).slick('slickPrev');
                      }
                }));
          }; 
        
        if($('#ClientSlide').length){  
            $('#ClientSlide').slick({
                      vertical: true,
                      arrows:false,
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: true,
                onmousewheel:true,
                speed:800,
                      autoplaySpeed: 5000,
                      dots:true
                }).on('wheel', (function(e) {
                      e.preventDefault();

                      if (e.originalEvent.deltaY < 0) {
                        $(this).slick('slickNext');
                      } else {
                        $(this).slick('slickPrev');
                      }
                }));
          } 
        
    });
    

	
})(jQuery);

