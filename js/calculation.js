//get value from user and add VAT
function addVAT() {
    //set variables
    var exvat = 0;
    var inclvat = 0;
    var vatamount = 0;
    var totalamount = 0;
    var vatpercentage = 1.14;
    //calculations
    var exvat = document.getElementById('input').value;
    exvat = parseFloat(exvat);
    vatamount = currencyFormat(parseFloat(((exvat * 14) / 100)));
    totalamount = currencyFormat(parseFloat(Math.round((exvat * vatpercentage) * 100) / 100));
    exvat_converted = currencyFormat(parseFloat(exvat));
    document.getElementById('exclude_vat').innerHTML = exvat_converted;
    document.getElementById('vat').innerHTML = vatamount;
    document.getElementById('include_vat').innerHTML = totalamount;
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#DFF0D8";
}

//get value from user and exclude VAT
function exclVAT() {
    //set variables
    var exvat = 0;
    var inclvat = 0;
    var vatamount = 0;
    var totalamount = 0;
    var vatpercentage = 1.14;
    //calculations
    var inclvat = document.getElementById('input').value;
    inclvat = parseFloat(inclvat);
    vatamount = currencyFormat(parseFloat(Math.abs((inclvat / 1.14) - inclvat)));
    totalamount = currencyFormat(parseFloat(Math.round((inclvat / vatpercentage) * 100) / 100));
    inclvat_converted = currencyFormat(parseFloat(inclvat));
    document.getElementById('include_vat').innerHTML = inclvat_converted;
    document.getElementById('vat').innerHTML = vatamount;
    document.getElementById('exclude_vat').innerHTML = totalamount;
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
    var exvat = 0;
    var inclvat = 0;
    var vatamount = 0;
    var totalamount = 0;
    return "R" + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}