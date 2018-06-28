$(document).ready(function () {
    
    if($('.ico_nav').length){
        
        var toggleVallue = true;
        
        $('.ico_nav').on("click", function(){
            if(toggleVallue == true){
              $('.nav-item-r').css('display', 'none');
              $('.nav_custom').css('width', '70px');
              $('.ico_nav').css('margin-left', '10px');
              $('.custom_section').css('margin-left', '50px');
               toggleVallue = false;
            } else {
                $('.nav-item-r').css('display', 'block');
                $('.nav_custom').css('width', '300px');
                $('.ico_nav').css('margin-left', '240px');
                $('.custom_section').css('margin-left', '300px');
                toggleVallue = true;
            }
        });  
    }
    
    
    if($('.wrapper').length){
        
        var $wrap = $("#numWrap"), 
            $strip = $("#strip"),
            $leftArrow = $(".wrapper > .arrows").first(),
            wrapWidth = $wrap.width() + $leftArrow.width(),
            margin = 10;
            fillWithProducts(10); 
            select($(".numberItem").first());

        $strip.on("click", ".numberItem", function() { select($(this)); });

        function select($elem) {
            focus($elem[0]);
        }

        function focus(elem) {
            var stripPos = $strip.position(),
                numPos = $(elem).offset(),
                elemWidth = $(elem).width() + margin,
                numRight = numPos.left + elemWidth;

            if (numRight > wrapWidth) {
                $strip.css({"left": stripPos.left - elemWidth});
            }
            if (numPos.left < (margin + $leftArrow.width()))  {
                $strip.css({"left": stripPos.left + elemWidth});
            }
        }



        $("#left-arrow").click(function () {
            var leftPos = $('#numWrap').scrollLeft();
            $("#numWrap").animate({scrollLeft: leftPos - 280}, 600);
        });

        $("#right-arrow").click(function () {
            var leftPos = $('#numWrap').scrollLeft();
            $("#numWrap").animate({scrollLeft: leftPos + 280}, 600);
        });


        function fillWithProducts(num){
            for (var i = 1; i <= num; i++) {
                var $d = $("<a href='#' class='numberItem'><div id='titleProduct'>Produto "+ i +"</div><div id='descProduct'>Produto descrição</div></a>");
                $strip.append($d);
            }
        }
    }
});
 