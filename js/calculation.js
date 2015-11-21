//get value from user and calc PAYE
function payeCalc() {
    //set variables
    var monthlyIncome = 0;
    var annualIncome = 0; //formatted annual income
    var annualInc = 0; //raw annual income
    var monthlyTax = 0;
    var annualTax = 0;
    var nettoIncome = 0;
    var annualRebatender65 = 13257;
    var UIF = 0;
    
        //tax bands
    var level1_bottom = 0;
    var level1_top = 181900;
    var level1_tax = 0.18;
    var level2_bottom = 181901;
    var level2_top = 284100;
    var level2_tax = 0.26;
    var level3_bottom = 284101;
    var level3_top = 393200;
    var level3_tax = 0.31;
    var level4_bottom = 393201;
    var level4_top = 550100;
    var level4_tax = 0.36;
    var level5_bottom = 550101;
    var level5_top = 701300;
    var level5_tax = 0.39;
    var level6_bottom = 701301;
    var level6_top = 99999999999;
    var level6_tax = 0.41;
    var UIFcap = 148.72;
    
    //basic salary calculations
    var monthlyIncome = document.getElementById('monthlyIncome').value;
    monthlyIncome = parseFloat(monthlyIncome);
    annualIncome = currencyFormat(parseFloat(Math.round(monthlyIncome * 12)));
    annualInc = parseFloat(Math.round(monthlyIncome * 12));
    
    //calc paye
    if (annualInc > level1_bottom && annualInc < level1_top){
    annualTax = ((annualInc * level1_tax) - annualRebatender65);
}   else if (annualInc > level2_bottom && annualInc < level2_top){
    annualTax = (((level1_top * level1_tax) + ((annualInc-level1_top) * level2_tax)) - annualRebatender65);
}   else if (annualInc > level3_bottom && annualInc < level3_top){
    annualTax = (((level1_top * level1_tax)+((level2_top-level1_top) * level2_tax)+((annualInc-level2_top) * level3_tax)) - annualRebatender65);
}   else if (annualInc > level4_bottom && annualInc < level4_top){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) +((annualInc-level3_top) * level4_tax)) - annualRebatender65);
}   else if (annualInc > level5_bottom && annualInc < level5_top){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) + ((level4_top - level3_top) * level4_tax) + ((annualInc-level4_top) * level5_tax)) - annualRebatender65);
}   else if (annualInc > level6_bottom){
    annualTax = (((level1_top * level1_tax)+((level2_top - level1_top) * level2_tax) + ((level3_top - level2_top) * level3_tax) + ((level4_top - level3_top) * level4_tax) + ((level5_top - level4_top) * level5_tax) + ((annualInc-level5_top) * level6_tax)) - annualRebatender65);
}
    //calc UIF
    UIF = (monthlyIncome * 0.01);
    if (UIF > UIFcap) UIF = UIFcap;

        
    //calc monthly tax
    monthlyTax = (annualTax / 12);
    if (monthlyTax < 0) monthlyTax = 0;
    if (annualTax < 0) annualTax = 0;

    
    //write results
    document.getElementById('annualIncome').innerHTML = annualIncome;
    document.getElementById('monthlyInc').innerHTML = currencyFormat(monthlyIncome);
    document.getElementById('monthlyTax').innerHTML = currencyFormat(monthlyTax);
    document.getElementById('annualTax').innerHTML = currencyFormat(annualTax);
    document.getElementById('nettoIncome').innerHTML = currencyFormat(((annualInc / 12) - monthlyTax) - UIF);
    document.getElementById('UIF').innerHTML = currencyFormat(UIF);
    document.getElementById('addResult').className = "panel panel-success fade in";
    document.getElementById('addResult').style.backgroundColor = "#DFF0D8";
}


// Reset form
function resetCalc() {
    document.getElementById("calcForm").reset();
    document.getElementById('annualIncome').innerHTML = 0;
    document.getElementById('monthlyInc').innerHTML = 0;
    document.getElementById('monthlyTax').innerHTML = 0;
    document.getElementById('annualTax').innerHTML = 0;
    document.getElementById('UIF').innerHTML = 0;


}

//currency formatting
function currencyFormat(num) {
    var monthlyIncome = 0;
    var vatamount = 0;
    var totalamount = 0;
    return "R" + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}