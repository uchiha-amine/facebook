<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="facture.css">
    <script src="facture.js"></script>
    <title>librairiet</title>
</head>

<body><div id="head">
    <h1>librairie farhat hached <span>facture de paiement</span></h1>
    <ul>
        <li><a href="menu.php" >accueil</a></li>
        <li><a href="reservation.php" >reservation</a></li>
        <li><a href="facture.php" >librairie</a></li>
        <li><a href="moyen.php" >moyen</a></li>
        
    </ul>
</div>
    
    <form action="run.php" method="post" id="f">
        <center><fieldset id="fi1">
            
            <legend>information personnelles:</legend>
            <div id="ff">
            <input type="text" placeholder="Nom et Prénom" name="np" id="f1" maxlength="20" required><br><br>
            <input type="tel"  id="f2" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="Mobile" name="tel"><br><br>
            <input type="text" id="f3" maxlength="30" placeholder="Adress" required name="adr"><br><br>
        </div>
        </fieldset>
        <fieldset id="fi2">
            <legend>cahiers subventionnés</legend>
            <div id="ff1">
            <input type="checkbox" value="cahier n72(1.070dt)" id="f4" name="1" checked>cahier n72(1.070dt): <input
                type="number" id="f7" min="1" name="v1" value="1"><br>
            <input type="checkbox" value="cahier n48(0.735dt)" id="f5" name="2">cahier n48(0.735dt): quantite: <input type="number"
                id="f8" min="1" value="1" name="v2"><br>
            <input type="checkbox" value="cahier n24(0.335dt)" id="f6" name="3">cahier n24(0.335dt): quantite: <input type="number"
                id="f9" min="1" value="1" name="v3"><br>
            </div>
            </fieldset>
        <fieldset id="fi3">
            <legend>cahiers non subventionnés</legend>
            <div id="ff2">
            <input type="checkbox" value="cahier n72(4.975dt)" id="f10" name="4" checked>cahier n72(4.975dt): quantite: <input
                type="number" name="v4" id="f13" min="1" value="1"><br>
            <input type="checkbox" value="cahier n48(3.400dt)" id="f11" name="5">cahier n48(3.400dt): quantite: <input type="number"
                id="f14" min="1" name="v5" value="1"><br>
            <input type="checkbox" value="cahier n24(1.900dt)" id="f12" name="6">cahier n24(1.900dt): quantite: <input type="number"
                id="f15" min="1" name="v6" value="1"><br>
            </div>
             <input type="text"placeholder="Montant à payer" readonly name="mo" id="f16">DT<br><br>
        </fieldset>
        <div id="bsr">
        <input type="button" value="payement" onclick="payement()" id="f17">
        <input type="button" value="facture" onclick="facture()" id="f18">
        <input type="submit" value="envoyer" id="f19">
        <input type="reset" value="actualiser" id="f20"></div>
    </form></center>
    
    <div style="display: flex; justify-content: center; align-items: center;">
        <table border  id="t" hidden onload="facture()">
            <tr>
                <th colspan="2">information d'achat</th>
            </tr>
            <tr>
                <td>Nom et Prénom:</td>
                <td id="t1"></td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td id="t2"></td>
            </tr>
            <tr>
                <td>Adress:</td>
                <td id="t3"></td>
            </tr>
            <tr>
                <td>cahier n72(1.070dt): quantite:</td>
                <td id="t4"></td>
            </tr>
            <tr>
                <td>cahier n48(0.735dt): quantite:</td>
                <td id="t5"></td>
            </tr>
            <tr>
                <td>cahier n24(0.335dt): quantite: </td>
                <td id="t6"></td>
            </tr>
            <tr>
                <td>cahier n72(4.975dt): quantite: </td>
                <td id="t7"></td>
            </tr>
            <tr>
                <td>cahier n48(3.400dt): quantite: </td>
                <td id="t8"></td>
            </tr>
            <tr>
                <td>cahier n24(1.900dt): quantite: </td>
                <td id="t9"></td>
            </tr>
            <tr>
                <td>Montant à payer: </td>
                <td id="t10"></td>
            </tr>
            <tr>
                <td>livréson gratuite: </td>
                <td id="t11"></td>
            </tr>
            <tr>
                <td>remise de 10%: </td>
                <td id="t12"></td>
            </tr>

        </table>
    </div>
    <input type="button" id="b" value="împrimée" onclick="window.print()" hidden>
</body>

</html>