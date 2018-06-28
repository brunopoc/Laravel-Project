$(document).ready(function () {
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
});
