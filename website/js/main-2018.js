$(document).ready(function () {
    
    /*** get json with gigs from Corey Craig's Gigatools */
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        data: {},
        url: "https://gigs.gigatools.com/user/CoreyCraig.json",
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("error");
            console.log(jqXHR);
            $("#gigs").append('<p class="json-error">Check Corey Craig\'s Gigs</p><p>on <a href="http://gigs.gigatools.com/user/CoreyCraig" target="_blank">Gigatools</a></p>');
            
        },
        success: function (msg) {
            var firstconcert = 0;
            for (i= 0; i < msg[1].length ; i++) {
                
                var eventdate = msg[1][i].event.eventdate;
                var date_components = eventdate.split("-");
                
                var current_year = date_components[0];
                var current_month= parseInt(date_components[1]);
                if (i < msg[1].length-1) {
                    var next_month_string = msg[1][i+1].event.eventdate.split("-")[1];
                    var next_month = parseInt(next_month_string);
                    var year_for_next_gig = msg[1][i+1].event.eventdate.split("-")[0];
                }
                var gig_day = date_components[2];

                // polyfill for String.prototype.startsWith() 
                if (!String.prototype.startsWith) {
                    Object.defineProperty(String.prototype, 'startsWith', {
                      value: function(search, pos) {
                        return this.substr(!pos || pos < 0 ? 0 : +pos, search.length) === search;
                      }
                    });
                }

                // to display the day of the gigs without the first 0
                if (gig_day.startsWith('0')) {
                    gig_day = gig_day.substring(1);
                }

                // to display '19 instead of 2019
                var short_year = "'"+ current_year.slice('2');
                var short_year_for_next_gig = "'"+ year_for_next_gig.slice('2');
                
                function monthAsString(monthIndex) {
                    return ["","January","February","March","April","May","June","July","August","September","October","November","December"][monthIndex];
                }
                
                function dayOfWeekAsString(dayIndex) {
                    return ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"][dayIndex];
                }
                
                var d = new Date(msg[1][i].event.eventdate);
                var gigday = d.getUTCDay(); // not to interfere with local time in browsers of foreign countries
                var gigdayoftheweek = dayOfWeekAsString(gigday);
                if (firstconcert ==0)
                {
                    //console.log("first");
                    var month = '<p class="gig-month">'+ monthAsString(current_month)+' '+ short_year +'</p>';   
                    $("#month").append(month);                 
                }
                firstconcert++;
                if (current_month != next_month){
                    
                    //add a new section in the calendar
                    month = '<p class="gig-month">'+ monthAsString(current_month)+' '+ short_year +'</p>';
                    var gig = '<div class="coreygig monthseparator">';
                }
                else {
                    var gig = '<div class="coreygig">';
                }
                gig += '<div class="gig-date"><div class="gig-day">'+ gigdayoftheweek +'</div><div class="gig-number">'+ gig_day +'</div></div><div class="gig-location"><div class="gig-name">'+ msg[1][i].event.name +'</div>';
                gig += '<div class="records">At <span class="place">'+ msg[1][i].event.venue +'</span>, ';
                gig += '<span class="city">' + msg[1][i].event.city +', </span>';
                if(!!msg[1][i].event.state) {
                    gig += '<span class="state">' + msg[1][i].event.state +', </span>';
                }
                gig += '<span class="country">' + msg[1][i].event.country +'</span>';
                gig += '</div>';
                gig += '<div class="showtime">';
                if(!!msg[1][i].event.showtime) {
                    var hour = new Date(msg[1][i].event.showtime);
                    var hourpm = 0;
                    if(hour.getUTCHours() == 24) {
                        hourpm = hour.getUTCHours() -12;
                        if(hour.getUTCMinutes() == 0)
                        {
                            gig += 'Showtime: '+ hourpm + ':00 am';
                        }
                        else {
                            gig += 'Showtime: '+ hourpm + ':' + hour.getUTCMinutes() + ' am';
                        }
                    }
                    else if(hour.getUTCHours() >= 12 && hour.getUTCHours() < 24) {
                        hourpm = hour.getUTCHours() -12;
                        if(hour.getUTCMinutes() == 0)
                        {
                            gig += 'Showtime: '+ hourpm + ':00 pm';
                        }
                        else {
                            gig += 'Showtime: '+ hourpm + ':' + hour.getUTCMinutes() + ' pm';
                        }
                    }
                    else {
                        if(hour.getUTCMinutes() == 0) {
                            gig += 'Showtime: '+ hour.getUTCHours() + ':00';
                        }
                        else {
                            gig += 'Showtime: '+ hour.getUTCHours() + ':' + hour.getUTCMinutes();
                        }   
                    }
                }
                if(!!msg[1][i].event.url) {
                    
                    if(msg[1][i].event.url.startsWith("https://www.facebook.com/events/")){
                    gig += '<span class="gig-url"><a href="' + msg[1][i].event.url +'" target="_blank"><small>Check this Event on Facebook</small></a></span>';
                }
                else {
                    gig += '<span class="gig-url"><a href="' + msg[1][i].event.url +'" target="_blank"><small>Infos about the Event</small></a></span>';
                }
            }
            if(!!msg[1][i].event.url_tix) {
                if(msg[1][i].event.url_tix.startsWith("https://www.eventbrite")) {
                gig += '<span class="gig-tix"><a href="' + msg[1][i].event.url_tix +'" target="_blank"><small>Check infos on EventBrite</small></a></span>';             
            }
            else {
                gig += '<span class="gig-tix"><a href="' + msg[1][i].event.url_tix +'" target="_blank"><small>Tickets</small></a></span>';
            }
        }
        gig += '</div></div></div>';
        
        if (current_month != next_month)
        {
            gig += '<p class="gig-month">' +monthAsString(next_month) + ' '+  short_year_for_next_gig + '</p>';
        }
        
        $("#gigs").append(gig);
        
    }
}
});

/********* manage the click on tabs for the the top menu */

var navItems = document.querySelectorAll("header .nav-item");
var navigationOffset = $(".top-panel-to-fix").offset().top;
var stickyContainer = document.querySelector(".top-panel-to-fix");
var $stickyContainer = $(".top-panel-to-fix");
$stickyContainer = $("header");
var header = document.querySelector("header");
var $header = $("header");

function handleNavItemClickEvent() {
    for (var i = 0; i < navItems.length; i++) {
        navItems[i].addEventListener('click', function () {
            
            // manage scroll
            var targetElement = this.getAttribute("data-target");
            $('body,html').animate({
                scrollTop: calculateOffset(targetElement) + 'px'
            });
        });
    };
}

function calculateOffset(targetElement) {
    // first we make the nav sticky 
    stickyContainer.classList.add("sticky");
    header.nextElementSibling.classList.add("more-margin-top");
    document.querySelector("header").style.position="static";
    // then we check the media queries
    var marginBottom = 70;
    var clientWidth;
    if (document.body) {
        clientWidth = (document.body.clientWidth);
    }
    else
    {
    clientWidth = (window.innerWidth);
    }
    if (clientWidth > 1030 ) {
        marginBottom = 25;
    }
    return $(targetElement).offset().top - $stickyContainer.height() - marginBottom;

}

function handleScroll() {
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > navigationOffset) {
            stickyContainer.classList.add("sticky");
            header.nextElementSibling.classList.add("more-margin-top");
            document.querySelector("header").style.position="static";
        } else {
            stickyContainer.classList.remove("sticky");
            header.nextElementSibling.classList.remove("more-margin-top");
            document.querySelector("header").style.removeProperty("position");
        }
    });
}

function calculateStickyPosition() {
    var offset = $("header").offset().top;
}

// manage when you click in the menu
handleNavItemClickEvent();

// manage scroll
handleScroll();

// manage the sticky at the top of the page
calculateStickyPosition();
});