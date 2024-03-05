function payement() {
    var tva1 = 2;
    var tva2 = 15;
    var total = 8;
    var ttc = 0;
    var x=0
    var ns72 = parseFloat(document.getElementById("f7").value);
    var ns48 = parseFloat(document.getElementById("f8").value);
    var ns24 = parseFloat(document.getElementById("f9").value);
    var nns72 = parseFloat(document.getElementById("f13").value);
    var nns48 = parseFloat(document.getElementById("f14").value);
    var nns24 = parseFloat(document.getElementById("f15").value);
    

        if (document.getElementById("f4").checked) {
            total = total + (1.070 * ns72);
            ttc = ttc + (tva1 * ns72);
        } if (document.getElementById("f5").checked) {
            total = total + (0.735 * ns48);
            ttc = ttc + (tva1 * ns48);
        } if (document.getElementById("f6").checked) {
            total = total + (0.335 * ns24);
            ttc = ttc + (tva1 * ns24);
        } if (document.getElementById("f10").checked) {
            total = total + (4.975 * ns72);
            ttc = ttc + (tva2 * nns72);
        } if (document.getElementById("f11").checked) {
            total = total + (3.400 * ns48);
            ttc = ttc + (tva2 * nns48);
        } if (document.getElementById("f12").checked) {
            total = total + (1.900 * ns24);
            ttc = ttc + (tva2 * nns24);
        } if (150 > ttc > 100) {
            total = total - 8
            document.getElementById("t11").innerHTML = "oui";
            document.getElementById("t12").innerHTML = "non";
        } if (ttc > 150) {
            total = (total * 100) / 10
            total = total - 8
            document.getElementById("t12").innerHTML = "oui";
            document.getElementById("t11").innerHTML = "oui";

        } if (ttc < 100) {
            document.getElementById("t11").innerHTML = "non";
            document.getElementById("t12").innerHTML = "non";
        }



        document.getElementById("f16").value = total.toFixed(3);
    
}



function facture() {

    var prnom = document.getElementById("f1").value;
    var mb = document.getElementById("f2").value;
    var ad = document.getElementById("f3").value;
    var ns72 = document.getElementById("f7").value;
    var ns48 = document.getElementById("f8").value;
    var ns24 = document.getElementById("f9").value;
    var nns72 = document.getElementById("f13").value;
    var nns48 = document.getElementById("f14").value;
    var nns24 = document.getElementById("f15").value;
    var total = document.getElementById("f16").value;
        document.getElementById("f").style.display = "none";
        document.getElementById("t").style.display = "block";
        document.getElementById("b").style.display = "block";
        document.getElementById("t1").innerHTML = prnom
        document.getElementById("t2").innerHTML = mb;
        document.getElementById("t3").innerHTML = ad;
        document.getElementById("t4").innerHTML = ns72;
        document.getElementById("t5").innerHTML = ns48;
        document.getElementById("t6").innerHTML = ns24;
        document.getElementById("t7").innerHTML = nns72;
        document.getElementById("t8").innerHTML = nns48;
        document.getElementById("t9").innerHTML = nns24;
        document.getElementById("t10").innerHTML = total;

    
}