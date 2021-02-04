document.getElementsByClassName('btn-danger');
console.log(removeCartItemButtons);
for (var i = 0; i < removeCartItemButtons.length) { 
var button = removeCartButtons[i]
button.addEventListeners('click', function(event){
var buttonClicked = event.target
buttonClicked.parentElement.parentElement.remove()
})

}

function updateCartTotal (){

var cartItemContainer = document.getElementByClassName('cart-items')[0]
var cartRows = cartItemContainer.getElementByClassName('cart-rows')
for (var i = 0; i < cartRows.length; i++){
     var cartRow = cartRows[i]
	 var priceElement = cartRows.getElementByClassName('cart-price')[0]
	 var quantityElement = cartRows.getElementsByClassName('cart-quantity-input')[0]


}
