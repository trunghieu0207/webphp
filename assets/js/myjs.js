function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


function createCart(){
	localStorage.setItem("numCart", 0);
}

var moneyTotal = 0;
function addToCart(name,price){
	var num = localStorage.getItem("numCart");
	localStorage.setItem("numCart", parseInt(num)+1);
	document.getElementById("numCart").innerHTML = parseInt(num)+1;
  var regex = new RegExp(/^((\d+),\d+)VND$/);
  let res = price.match(regex);
  moneyTotal += parseInt(res[2]);
  addItemCart(parseInt(num)+1,name,price);
  $("#cartTotal").text("Total: "+moneyTotal+",000 VND");
}

function addItemCart(num ,name, price){
  var next_row =
  "<tr>" +
    "<th scope='row'>"+num+"</th>"+
    "<td>" + name + "</td>" +
    "<td>" + price + "</td>" +
    "<td>" + 1 + "</td>" +  
  "</tr>";
  $("#cartItems").append(next_row);
}
