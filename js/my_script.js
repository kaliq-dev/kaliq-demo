function map_done(){
    $("#map_box").hide();
    $("#myModalLabel").show();
    $("#address_block").show();
}

//for mobile devices
function android_select(){
    $("#android").css({
        'border':'3px inset #2eaaf0',
        'borderRadius':'20px'
    });
    $("#iphone").css('border','');
}

function ios_select(){
   $("#iphone").css({
    'border':'3px inset #2eaaf0',
    'borderRadius':'20px'
});
   $("#android").css('border','');
}

//for signin / login click
function join(){
    $("#login_register_block").hide();
    $("#name_block").show();
}

function name_next(){
    $("#name_block").hide();
    $("#avatar_block").show();
}

function avatar_next(){
    $("#avatar_block").hide();
    $("#address_block").show();
}

function address_next(){
    $("#address_block").hide();
    $("#mobile_block").show();
}

function mobile_next(){
    $("#mobile_block").hide();
    $("#myModalLabel").hide();
    $("#thank_block").show();
}

function start_modal(){
  $("#mobile_block").hide();
  $("#thank_block").hide();
  $("#address_block").hide();
  $("#name_block").hide();
  $("#avatar_block").hide();

  $("#myModalLabel").show();
  $("#login_register_block").show();
}

//male check unckeck
function male_check(){
    $("#male_box").attr("src","img/avatar/male_after.png");
    $("#female_box").attr("src","img/avatar/female_before.png");
}
//female check uncheck
function female_check(){
    $("#female_box").attr("src","img/avatar/female_after.png");
    $("#male_box").attr("src","img/avatar/male_before.png");
}


// functions for showing top banner
function showBanner(id) {
    $(id + "_pill").css({
        'backgroundColor': '#e8e8e8',
        'borderRight': 'none'
    });
    $(id + "_thumb").toggle();
}

function hideBanner(id) {
    $(id + "_thumb").slideUp("fast", function() {
        $(id + "_pill").css({
            'backgroundColor': '',
            'borderRight': '1px inset #23a7f1'
        });
    });

}

$(document).ready(function() {
    //change emergency btns when mouse hover
    $("#call_img").hover(function(){
        $("#call_img").attr('src','img/help_phone_after.png');
    },function(){
        $("#call_img").attr('src','img/help_phone_before.png');
    });

    $("#message_icon_img").hover(function(){
        $("#message_icon_img").attr('src','img/message_icon_after.png');
    },function(){
        $("#message_icon_img").attr('src','img/message_icon_before.png');
    });

    $("#message_circle_img").hover(function(){
        $("#message_circle_img").attr('src','img/message_circle_after.png');
    },function(){
        $("#message_circle_img").attr('src','img/message_circle_before.png');
    });

     //change help icon of btn on mouse over
     $("#help_btn").hover(function(){
        $("#help_img").attr('src','img/help_btn_after.png');
    }, function(){
        $("#help_img").attr('src','img/help_btn_before.png');
    });

    //show map pinning option
    $("#map_marker").click(function(){
        $("#myModalLabel").hide();
        $("#address_block").hide();
        $("#map_box").show();
    });


    //hotline - hover
    $("#hotline_li").hover(function() {
        showBanner("#hotline");
    }, function() {
        hideBanner("#hotline");
    });

    //delivary - hover
    $("#delivery_li").hover(function() {
        $("#hotline_pill").css({
            'borderRight': 'none'
        });
        showBanner("#delivery");
    }, function() {
        hideBanner("#delivery");
        $("#hotline_pill").css({
            'borderRight': '1px inset #23a7f1',
        });
    });

    //return - hover
    $("#return_li").hover(function() {
        $("#delivery_pill").css({
            'borderRight': 'none'
        });
        showBanner("#return");
    }, function() {
        hideBanner("#return");
        $("#delivery_pill").css({
            'borderRight': '1px inset #23a7f1',
        });
    });

    //cash - hover
    $("#cash_li").hover(function() {
        $("#return_pill").css({
            'borderRight': 'none'
        });
        showBanner("#cash");
    }, function() {
        hideBanner("#cash");
        $("#return_pill").css({
            'borderRight': '1px inset #23a7f1',
        });
    });

    //track - hover
    $("#track_li").hover(function() {
        $("#cash_pill").css({
            'borderRight': 'none'
        });
        showBanner("#track");
    }, function() {
        hideBanner("#track");
        $("#cash_pill").css({
            'borderRight': '1px inset #23a7f1',
        });
    });
    //help - hover
    $("#support_li").hover(function() {
        $("#track_pill").css({
            'borderRight': 'none'
        });
        showBanner("#support");
    }, function() {
        hideBanner("#support");
        $("#track_pill").css({
            'borderRight': '1px inset #23a7f1',
        });
    });

    $(".nav_pill").hover(function() {
        var id = $(this).attr('id');
        $("#" + id + "_menu").show();
    }, function() {
        var id = $(this).attr('id');
        $("#" + id + "_menu").hide();
    });
    // for search bar
    $("#search_bar").keypress(function(){        

        if(status == 0){
            $("#main_section").append("<div id='search_modal' class='modal-backdrop fade in'></div>");
            $("body").addClass("modal-open");
            $("#search_box").css({"z-index" : "99"});
            $("#search_bar").css({"backgroundColor" : "#ffffff","color":"black","border" : "2px solid #2196F3"});
            $("#search_result").css({"z-index" : "99"});
            $("#main_section").css({"z-index" : "2"});
        }
        status++;

        var text = $("#search_bar").val();
        $("#search_result").show();
        $(".search_text").text(text);

        if($("#search_bar").val().length === 0){
            $("#search_result").css({"display" : "none"});
            $("body").removeClass("modal-open");
            $("#search_modal").remove();
            $("#search_bar").css({"backgroundColor" : "black","color":"#ffffff","border" : "2px solid #2196F3"});
            status=0;
        }

    });

    $(document).mouseup(function(e){
        var container = $("#search_bar");
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $("#search_result").css({"display" : "none"});
            $("body").removeClass("modal-open");
            $("#search_modal").remove();
            $("#search_bar").css({"backgroundColor" : "black","color":"#ffffff","border" : "2px solid #2196F3"});
            status=0;
        }

    });



});
