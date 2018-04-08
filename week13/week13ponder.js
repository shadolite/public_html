// Reset the data in the cart
function clearCart() {
    updateTax(0);
    updateShipping(0);
    updateTotal(0);
}

// Product Quantity
function validateQuantity(input, id) {
    if (input > -1 & input < 6) {
        hideError(id);

        if (input != '') {
            enableButton('updateCartButton');
        }
        return;
    }
    showError(id);
    disableButton('updateCartButton');
}

function enableButton(id) {
    document.getElementById(id).disabled = false;
}

function disableButton(id) {
    document.getElementById(id).disabled = true;
}

// Update cart totals
function updateCart() {
    var numProducts = Number(document.getElementsByClassName('productQty').length);
    var subtotal = getSubtotal(numProducts);

    updateTax(subtotal);
    updateShipping(numProducts);
    updateTotal(subtotal);
    updateProductSummary();
}

function getSubtotal(numProducts) {
    var total = 0;
    var quantities = document.getElementsByClassName('productQty');
    var prices = document.getElementsByClassName('productPrice')[0].textContent;

    for (var product = 0; product < numProducts; product++) {
        var quantity = Number(quantities[product].value);
        var price = document.getElementsByClassName('productPrice')[product].textContent.match(/\$(\d+)/)[1];

        if (quantity != '') {
            total += (quantity * Number(price));
        }
    }

    return total;
}

function updateTax(subtotal)
{
    tax = (subtotal * .07).toFixed(2);
    var newTax = document.createTextNode("$" + tax);
    var currentTax = getCurrentTax();
    currentTax.replaceChild(newTax, currentTax.childNodes[0]);
    document.getElementById("taxAmt").value = tax;
}

function updateShipping(numProducts) {
    var totalQty = 0;
    var quantities = document.getElementsByClassName('productQty');

    for (var qtyCount = 0; qtyCount < numProducts; qtyCount++) {
        totalQty += Number(quantities[qtyCount].value);
    }

    var shipping = (totalQty * 25).toFixed(2);
    var newShipping = document.createTextNode("$" + shipping);
    var currentShipping = getCurrentShipping();
    currentShipping.replaceChild(newShipping, currentShipping.childNodes[0]);
    document.getElementById("shipAmt").value = shipping;
}

function updateTotal(subtotal) {
    var tax = Number(getCurrentTax().textContent.match(/\$(\d+\.\d{2})/)[1]);
    var shipping = Number(getCurrentShipping().textContent.match(/\$(\d+\.\d{2})/)[1]);
    var total = "$" + (subtotal + tax + shipping).toFixed(2);

    var newTotal = document.createTextNode(total);
    var currentTotal = document.getElementById('total').getElementsByClassName('amount')[0];
    currentTotal.replaceChild(newTotal, currentTotal.childNodes[0]);
    document.getElementById("totalAmt").value = total;
}

function updateProductSummary() {
    document.getElementById("toolQty").value = document.getElementsByClassName('productQty')[0].value;
    document.getElementById("dieQty").value = document.getElementsByClassName('productQty')[1].value;
    document.getElementById("weaponQty").value = document.getElementsByClassName('productQty')[2].value;
    document.getElementById("engravingQty").value = document.getElementsByClassName('productQty')[3].value;
    document.getElementById("signQty").value = document.getElementsByClassName('productQty')[4].value;
}

function getCurrentTax() {
    return document.getElementById('tax').getElementsByClassName('amount')[0];
}

function getCurrentShipping() {
    return document.getElementById('shipping').getElementsByClassName('amount')[0];
}

function validateName(input, id) {
    if (input.search(/\w+\s+\w+$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

function validatePhone(input, id) {
    if (input.search(/\(?\d{3}\)?-?\s?\d{3}-?\d{4}$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

function validateEmail(input, id) {
    if (input.search(/.+@\w+\.\w+$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

function validateStreet(input, id) {
    if (input.search(/\d+\s?\w+\s?/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

function validateCity(input, id) {
    if (input.search(/\w+\s?/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

// State Abbreviation
function validateState(input, id) {
    if (input.search(/^\s?(?:AK|AL|AR|AZ|CA|CO|CT|DC|DE|FL|GA|HI|IA|ID|IL|IN|KS|KY|LA|MA|MD|ME|MI|MN|MO|MS|MT|NB|NC|ND|NH|NJ|NM|NV|NY|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VA|VT|WA|WI|WV|WY)\s?$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

function validateZip(input, id) {
    if (input.search(/\d{5}$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

// Credit Card Number
function validateCCNum(input, id) {
    if (input.search(/^\s?\d{16}\s?|\s?(?:\d{4}\s){3}\d{4}\s?$/) == 0) {
        hideErrorBorder(id);
        return;
    }
    showErrorBorder(id);
}

// Date
function validateExp(input, id) {
    if (input.search(/^\s?\d{2}\/\d{2}\s?$/) == 0) {
        var pDate = input.split('/');

        if (1 <= pDate[0] && pDate[0] <= 12 &&
            18 <= pDate[1] && pDate[1] <= 25) {
            hideErrorBorder(id);
            return;
        }
    }
    showErrorBorder(id);
}

// Check for any missing info
function validateCustomerData(ccNum, errorID) {
    if (ccNum.search(/^\s?\d{16}\s?|\s?(?:\d{4}\s){3}\d{4}\s?$/) == 0) {
        hideError(errorID);
        return;
    }
    showError(errorID);
}

// Hide error border
function hideErrorBorder(id) {
    document.getElementById(id).style.border = '';
}

// Show error border
function showErrorBorder(id) {
    document.getElementById(id).style.border = '2px inset red';
}

// Hide error message
function hideError(id) {
    document.getElementById(id).style.visibility = 'hidden';
}

// Show error message
function showError(id) {
    document.getElementById(id).style.visibility = 'visible';
}

function processOrder() {
    alert("Thank you, your order has been submitted.");
}

function checkForErrors() {
    var inputElements = document.getElementById('customerInfo').getElementsByTagName('input');

    for (var element = 0; element < inputElements.length -9; element++) {
        var style = inputElements[element].style.border.toString();
        var value = inputElements[element].value;
        if (value == '') {
            hideError('formError');
            disableButton('submitCustomerInfo')
            return;
        }

        if (style == '2px inset red') {
            showError('formError')
            disableButton('submitCustomerInfo')
            return;
        }
    }
    hideError('formError');
    enableButton('submitCustomerInfo');
    return false;
}