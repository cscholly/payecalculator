//get value from user and calc PAYE
function payeCalc() {
    //set variables
    var monthlyIncome = 0;
    var annualInc = 0;
    var monthlyTax = 0;
    var annualTax = 0;
    //calculations
    var monthlyIncome = document.getElementById('monthlyIncome').value;
    monthlyIncome = parseFloat(monthlyIncome);
    annualInc = currencyFormat(parseFloat(Math.round(monthlyIncome * 12)));
    monthlyIncome = currencyFormat(monthlyIncome);
    document.getElementById('annualIncome').innerHTML = annualInc;
    document.getElementById('monthlyInc').innerHTML = monthlyIncome;
    document.getElementById('monthlyTax').innerHTML = monthlyTax;
    document.getElementById('annualTax').innerHTML = annualTax;
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#DFF0D8";
}


// Reset form
function resetCalc() {
    document.getElementById("calcForm").reset();
    document.getElementById('exclude_vat').innerHTML = exvat_converted;
    document.getElementById('vat').innerHTML = vatamount;
    document.getElementById('include_vat').innerHTML = totalamount;
    document.getElementById('include_vat').innerHTML = inclvat_converted;

}

//currency formatting
function currencyFormat(num) {
    var monthlyIncome = 0;
    var vatamount = 0;
    var totalamount = 0;
    return "R" + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}