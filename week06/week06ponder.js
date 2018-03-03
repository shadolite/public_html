// Age
function validateAge(age, errorID) {
    if (age >= 0 && age <= 118 && age != "") {
        hideError(errorID);
    }
    else {
        showError(errorID);
    }
}

// SSN
function validateSSN(ssn, errorID) {
    if (ssn.search(/^\s?\d{3}-\d{2}-\d{4}\s?$/) == 0) {
        hideError(errorID);
        return;
    }
    showError(errorID)
}

// Credit Card Number
function validateCCNum(ccNum, errorID) {
    if (ccNum.search(/^\s?\d{16}\s?|\s?(?:\d{4}\s){3}\d{4}\s?$/) == 0) {
        hideError(errorID);
        return;
    }
    showError(errorID);
}

// Date
function validateDate(date, errorID) {
    if (date.search(/^\s?(?:\d{1,2}\/){2}\d{4}\s?$/) == 0) {
        var pDate = date.split('/');

        if (1 <= pDate[0] && pDate[0] <= 12 &&
            1 <= pDate[1] && pDate[1] <= 31 &&
            1753 <= pDate[2] && pDate[2] <= 2100) {
            hideError(errorID);
            return;
        }
    }
    showError(errorID);
}


// State Abbreviation
function validateState(state, errorID) {
    if (state.search(/^\s?(?:AK|AL|AR|AZ|CA|CO|CT|DC|DE|FL|GA|HI|IA|ID|IL|IN|KS|KY|LA|MA|MD|ME|MI|MN|MO|MS|MT|NB|NC|ND|NH|NJ|NM|NV|NY|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VA|VT|WA|WI|WV|WY)\s?$/) == 0) {
        hideError(errorID);
        return;
    }
    showError(errorID);
}


// Dollar Amount
function validateAmount(amount, errorID) {
    if (amount.search(/^\s*\$?(?:(?:\d{1,3},(?=\d{3}))*\d{0,3}|\d{0,7})(?:\.\d{2})?\s*$/) == 0) {
        hideError(errorID);
        return;
    }
    showError(errorID);
}

// Hide error message
function hideError(errorID) {
    document.getElementById(errorID).style.visibility = 'hidden';
}

// Show error message
function showError(errorID) {
    document.getElementById(errorID).style.visibility = 'visible';
}
