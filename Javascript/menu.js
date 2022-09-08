'use strict';

let classic = document.getElementById("classic");
let classicmenu = '<div class="card card-body"><span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span><h6 class="text-truncate">Espresso</h6><p class="small">A classic espresso roast with caramel added.</p></div><div class="card card-body"> <span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span> <h6 class="text-truncate">Americano</h6> <p class="small">Classic espresso slightly diluted with water, but crafted to maintain richness.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$3 sm, $4 lg</span> <h6 class="text-truncate">Macchiato</h6> <p class="small">The perfect combination of coffee, milk, vanilla, and caramel.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$3 sm, $4 lg</span> <h6 class="text-truncate">Cappuccino</h6> <p class="small">Darker espresso under a smooth layer of milky foam.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$3.49 sm, $4.49 lg</span> <h6 class="text-truncate">Latte</h6> <p class="small">Espresso with flavoring but combine it with steamed milk.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$2.49 sm, $3.49 lg</span> <h6 class="text-truncate">Hot Chocolate</h6> <p class="small">Straight warm milk chocolate-y goodness.</p> </div>';
let specialty = document.getElementById("specialty");
let specialtymenu = '<div class="card card-body"> <span class="float-right font-weight-bold">$3.50 sm, $4.50 lg</span> <h6 class="text-truncate">White Chocolate Mocha</h6> <p class="small">Classic espresso combined with sweet white chocoalte sauce topped with cream.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$3.50 sm, $4.50 lg</span> <h6 class="text-truncate">Peppermint Mocha</h6> <p class="small">Peppermint flavored syrup mixed into an espresso roast topped with candy cane pieces.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$4 sm, $5 lg</span> <h6 class="text-truncate">Blended Caramel Frappe</h6> <p class="small">Thickened caramel espresso goodness topped with cream.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$4 sm, $5 lg</span> <h6 class="text-truncate">Toasted Hazelnut Hot Chocolate</h6> <p class="small">Sweet hazelnut flavor meets already sweet milk chocolate.</p> </div> <figure class="float-left"> <img class="frap rounded" src="../images/img4.jpg" alt="Caramel Frappe"> <figcaption class="text-center">Blended Caramel Frappe</figcaption> </figure>';
let bakery = document.getElementById("bakery");
let bakerymenu = '<div class="card card-body"> <span class="float-right font-weight-bold">$3</span> <h6 class="text-underline">Toasted Bagel</h6> <p class="small">Plain, blueberry, or onion. Served with cream cheese.</p> <span class="font-weight-bold small"></span> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$4</span> <h6>Muffin</h6> <p class="small">Blueberry, chocolate, or pumpkin. Topped with sugar crystals.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$4</span> <h6>Scone</h6> <p class="small">Perfect dryness to compliment a drink. Blueberry, chocolate, and apple.</p> </div> <div class="card card-body"> <span class="float-right font-weight-bold">$5</span> <h6>Cinnamon Roll</h6> <p class="small">Warm, gooey cinnamon goodness. Bigger than you think.</p> </div> <figure class="float-left"> <img class="frap rounded" src="../images/img5.jpg" alt="Chocolate Scone"> <figcaption class="text-center">Chocolate Scone</figcaption> </figure>';

function menu1(event) {
    event.preventDefault();
    if (document.getElementById("classic1").innerHTML == "") {
        document.getElementById("classic1").innerHTML = classicmenu;
    } 
    else if (document.getElementById("classic1").innerHTML == classicmenu) {
        document.getElementById("classic1").innerHTML = "";
    }
}

function menu2(event) {
    event.preventDefault();
    if (document.getElementById("specialty1").innerHTML == "") {
        document.getElementById("specialty1").innerHTML = specialtymenu;
    } 
    else if (document.getElementById("specialty1").innerHTML == specialtymenu) {
        document.getElementById("specialty1").innerHTML = "";
    }
}

function menu3(event) {
    event.preventDefault();
    if (document.getElementById("bakery1").innerHTML == "") {
        document.getElementById("bakery1").innerHTML = bakerymenu;
    } 
    else if (document.getElementById("bakery1").innerHTML == bakerymenu) {
        document.getElementById("bakery1").innerHTML = "";
    }
}


classic.addEventListener("click", menu1);
specialty.addEventListener("click", menu2);
bakery.addEventListener("click", menu3);
