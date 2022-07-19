'use strict';

function showandhide(i) {
        var x = document.getElementById("imgtext"+i);
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
    }

document.addEventListener('DOMContentLoaded', (event) => { 


    $(".my-rating").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        hoverColor: 'green',
        activeColor: 'green',
        ratedColors : 'green',
        initialRating: 4,
        strokeWidth: 0,
        useGradient: false,
        minRating: 1,
        callback: function(currentRating, $el){
            document.getElementById('star-rate').value = currentRating ;
        }
    });

    $(".rated1").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        activeColor: 'green',
        initialRating: 1,
        readOnly: true
    });

    $(".rated2").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        activeColor: 'green',
        initialRating: 2,
        readOnly: true
    });

    $(".rated3").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        activeColor: 'green',
        initialRating: 3,
        readOnly: true
    });

    $(".rated4").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        activeColor: 'green',
        initialRating: 4,
        readOnly: true
    });

    $(".rated5").starRating({
        totalStars: 5,
        emptyColor: 'lightgray',
        activeColor: 'green',
        initialRating: 5,
        readOnly: true
    });

    

})