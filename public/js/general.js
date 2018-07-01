$(document).ready(function () {
    
    // -------------------------- Código da exibição da DashBoard -----------------------------------------------
    
    if($('.ico_nav').length){
        
        var toggleVallue = true;
        var valueID;
        
        loadDashBoard();
        
        $('.ico_nav').on("click", function(){
            if(toggleVallue == true){
              $('.nav_custom').css('width', '70px');
              $('.ico_nav').css('margin-left', '10px');
              $('.custom_section').css('margin-left', '50px');
              $('.nav-item-r').css('display', 'none');
               toggleVallue = false;
            } else {
                $('.nav_custom').css('width', '200px');
                $('.ico_nav').css('margin-left', '140px');
                $('.custom_section').css('margin-left', '200px');
                $('.nav-item-r').css('display', 'block');
                toggleVallue = true;
            }
        });
        
        $('.dashboardClick').on('click', function(){
           valueID = $(this).attr('id');
           loadDashBoard(valueID);
        });
        
        function loadDashBoard(id){
            
        var  idMenu = id; // ----- Qual a sessão que deve ser aberta; 
        var url = $(this).attr("data-link");
         $.ajax({
                method:"Post",
                url: "dashsection",
                beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                data: {idSelect : idMenu},  // --- Passa por POST o ID da sessão que será usada
                sucess: function (returnData) {
                    console.log(returnData)
                },
                error: function(err) {
                    console.log(err);
                }
            }).done( function(returndata) {$('.dashLocation').html(returndata)});
        
        }
    }
             // ------------------------------ Código da exibição de itens na Home -------------------------------------
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
 