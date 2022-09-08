let espresso = document.getElementById("espresso");
let americano = document.getElementById("americano");
let macchiato = document.getElementById("macchiato");
let cappuccino = document.getElementById("cappuccino");
let latte = document.getElementById("latte");
let hotchoc = document.getElementById("hotchoc");
let wcm = document.getElementById("wcm");
let pm = document.getElementById("pm");
let frap = document.getElementById("frap");
let haz = document.getElementById("haz");
let bag = document.getElementById("bag");
let muffin = document.getElementById("muffin");
let scone = document.getElementById("scone");
let cin = document.getElementById("cin");

var items = [];
let submit = document.getElementById("submit");

function add(e) {
    items.push(this.innerHTML);
    this.innerHTML = this.innerHTML += " (Added)";
}



function order(e) {
    xmlhttp = new XMLHttpRequest;
    xmlhttp.open("POST",'order.php');
    xmlhttp.setRequestHeader("Content-Type", "application/json");
    let data = JSON.stringify(items);
    xmlhttp.responseType = "json";
    xmlhttp.send(JSON.stringify(data));
    this.innerHTML = "Ordered!";
}

espresso.addEventListener("click", add);
americano.addEventListener("click", add);
macchiato.addEventListener("click", add);
cappuccino.addEventListener("click", add);
latte.addEventListener("click", add);
hotchoc.addEventListener("click", add);
wcm.addEventListener("click", add);
pm.addEventListener("click", add);
frap.addEventListener("click", add);
haz.addEventListener("click", add);
bag.addEventListener("click", add);
muffin.addEventListener("click", add);
scone.addEventListener("click", add);
cin.addEventListener("click", add);
submit.addEventListener("click", order);