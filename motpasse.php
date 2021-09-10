<!DOCTYPE html> 
<html> 
<head> 
    <script type="text/javascript"> 
        function validate() { 
            var msg; 
            var str = document.getElementById("mdp").value; 
            if (str.match( /[0-9]/g) && 
                    str.match( /[A-Z]/g) && 
                    str.match(/[a-z]/g) && 
                    str.match( /[^a-zA-Z\d]/g) &&
                    str.length >= 8) 
               { //msg = "<p style='color:green'>Mot de passe fort.</p>"; 
                document.getElementById('theForm').submit();}
            else {
                msg = "<p style='color:red'>Le mot de passe doit au moins 8. Nous vous recommandons d'utiliser les caractères spéciaux, ex : ! @ # $ % ^ & * = + , . ; :.</p>"; 
            document.getElementById("msg").innerHTML= msg;} 
        } 
    </script> 
</head> 
<body> 
<form method="post" action="resultmotpasse.php" role="form" id="theForm" >
Entrez l'adresse E-mail: <input id="email" name='email' /> 
<br>Entrez le mot de passe: <input id="mdp" name='passe' /> 

</form>

    <button type="submit" onclick="validate()">Valider</button><br>
    <span id="msg"></span>  
</body> 
</html>