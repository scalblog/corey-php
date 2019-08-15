function darkenColor(color, percent) {

    var R = parseInt(color.substring(1,3),16);
    var G = parseInt(color.substring(3,5),16);
    var B = parseInt(color.substring(5,7),16);

    R = parseInt(R * (100 + percent) / 100);
    G = parseInt(G * (100 + percent) / 100);
    B = parseInt(B * (100 + percent) / 100);

    R = (R<255)?R:255;  
    G = (G<255)?G:255;  
    B = (B<255)?B:255;  

    var RR = ((R.toString(16).length==1)?"0"+R.toString(16):R.toString(16));
    var GG = ((G.toString(16).length==1)?"0"+G.toString(16):G.toString(16));
    var BB = ((B.toString(16).length==1)?"0"+B.toString(16):B.toString(16));

    return "#"+RR+GG+BB;
}

function is_hexadecimal(str)
{
 regexp = /^#[0-9a-f]{6}$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

function spreadTheColor(color){
    $('.preview .sample').css("color", color);
    var colorLabel = $('#main-color-label');
    colorLabel.val(color);
    colorLabel.css("color", color);
    colorLabel.css("borderBottomColor", color);
    $('h1#title').css("color", color);
    $(".result button").css("color", color);
    $(".result button").css("borderColor", color);
    $(".random button").css("color", color);
    $("#cloud-color").val(color);
};

function setColorInHiddenInput(color) {
    var inputInForm = $('#cloud-color');
    inputInForm.val(color);
};

function rgb2hex(rgb) {
    if (/^#[0-9A-F]{6}$/i.test(rgb)) return rgb;

    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

$(document).ready(function(){

    //show the color value
    var theMainColorIs = $('.preview .sample').css("color");
    theMainColorIs = rgb2hex(theMainColorIs);
    var theNewColorTarget = $('#main-color');
    theNewColorTarget.val(theMainColorIs);

    // when you pick a color in the Input Color
    theNewColorTarget.on("change", function(){
        var newColor =  $('#main-color').val();
        // display the new color over the page
        spreadTheColor(newColor);        
        setColorInHiddenInput(newColor);
    });
    
    //click on the reset button
    $('#reset-to-default-color').on("click", function(){
        var originalColor =  "#146ef4";
        theNewColorTarget.val(originalColor);
        spreadTheColor(originalColor);        
        setColorInHiddenInput(originalColor);
        alert("Please confirm the reset to the original color by clicking the button 'Send this color to the Cloud'. Thanks :)");
    });

    //click on the button of Random color
    $('#random-result').on("click", function(){
        var randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);
        theNewColorTarget.val(randomColor);
        spreadTheColor(randomColor);
        setColorInHiddenInput(randomColor);   
    });

    //if you write the hexadecimal color in the input
    $('#main-color-label').on('change', function(){
        // check if value is an Hexadecimal value 
        var strToCheck = $('#main-color-label').val();
        if(is_hexadecimal(strToCheck)) {
            theNewColorTarget.val(strToCheck);
            spreadTheColor(strToCheck);
        } else {
            alert('Set an Hexadecimal color between #00000 and #FFFFFF (and please use 6 characters between 0 - 9 or between A - F). Start with an #');
        }
    });
})