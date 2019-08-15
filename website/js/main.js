function animate(elem, style, unit, from, to, time, prop) {
    if (!elem) {
        return;
    }
    var start = new Date().getTime(),
        timer = setInterval(function () {
            var step = Math.min(1, (new Date().getTime() - start) / time);
            if (prop) {
                elem[style] = (from + step * (to - from))+unit;
            } else {
                elem.style[style] = (from + step * (to - from))+unit;
            }
            if (step === 1) {
                clearInterval(timer);
            }
        }, 25);
    if (prop) {
          elem[style] = from+unit;
    } else {
          elem.style[style] = from+unit;
    }
}

window.onload = function () {
   // var target = document.querySelector(".merch");
   // animate(document.scrollingElement || document.documentElement, "scrollTop", "", 0, target.offsetTop, 2000, true);
    
    //source: https://blog.garstasio.com/you-dont-need-jquery/ajax/

    //without jquery for Json :
    
    var xhr = new XMLHttpRequest();
    xhr.open('PUT', 'https://gigs.gigatools.com/user/CoreyCraig.json');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var userInfo = JSON.parse(xhr.responseText);
            console.log(userInfo);
            console.log("userInfo");
        }
        else {
            console.log(xhr.status);
            console.log("failed");
        }
    };
};    