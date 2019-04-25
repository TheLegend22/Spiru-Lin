// Top CountDowm Timer

var sec         = 2400, // Number of Sec
    
    countDiv    = document.getElementById("countdown2"),
    
    secPass,
    
    countDown   = setInterval(function () {
        
        "use strict";
        
        secPass();
        
    }, 1000);

function secPass() {
    
    "use strict";
    
    var min = Math.floor(sec / 60),
        
        remSec = sec % 60;
    
    countDiv.innerHTML = min + ":" + remSec;

    
    
    if (sec > 0) {
        
        sec = sec - 1;
    }
}

// Bottom CountDowm Timer

var sec         = 2400, // Number of Sec
    
    countDiv    = document.getElementById("countdown"),
    
    secPass,
    
    countDown   = setInterval(function () {
        
        "use strict";
        
        secPass();
        
    }, 1000);

function secPass() {
    
    "use strict";
    
    var min = Math.floor(sec / 60),
        
        remSec = sec % 60;
    
    countDiv.innerHTML = min + ":" + remSec;
    
    
    
    if (sec > 0) {
        
        sec = sec - 1;
    }
}

// Smooth Scroll

var scroll = new SmoothScroll('a[href="#order"]');
