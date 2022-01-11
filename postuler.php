<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire de formateur</title>
+
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style_.css">
    <script type="text/javascript">
     function validation() { //test sur la saisie de formulaire
                if ( (document.getElementById("female").checked==false) && (document.getElementById("male").checked==false)){alert("veuillez entrez votre sex");}
                if (document.getElementById("formations").options[document.getElementById("formations").selectedIndex].value=="formations"){alert ("Quelle formation voulez-vous choisir?");}
                
                if  (document.getElementById("email").value==""){alert ("veuillez entrez votre email");}
                        else 
                            { var mail =document.getElementById("email").value;
                        var T1 = mail.split("@");
                        if(T1.length!=2)
                            {alert("Il faut qu'il existe un '@' dans votre E-mail "); t=0;}
                        var login=T1[0];
                        var domainTLD=T1[1];

                        if(login.length<=2)
                        {alert("Votre login doit avoir plus que deux caractères"); t=0;}

                        var T2=domainTLD.split(".");
                        if(domainTLD.split(".").length!=2)
                        {alert("Un point manquant '.' "); t=0;}
                        var domain= T2[0];
                        var TLD= T2[1];
                        if(domain.length<1 )
                        {alert("Votre domain doit avoir au moins un caratère"); t=0;}
                        if(TLD.length!=2 && TLD.length!=3)
                        {alert("seulement 2 à 3 caractères seront acceptés pour votr  TLD !");t=0;}}
                        
                if (document.getElementById("Password").value==""){alert ("veuillez saisir votre mot de passe");}
                }if (document.getElementById("Password1").value==""){alert (" resaisissez votre mot de passe");}
                if (document.getElementById("Password1").value != document.getElementById("Password").value) {alert("vous avez saisi deux mot de passes  différents !");}}
                     </script>
</head>
<body>

    <div class="main">

        <div class="container"> 
            <form method="POST" class="appointment-form" id="appointment-form" action="enregistrer2.php">
                <h2>Postulez-vous !<BR> Votre demande sera envoyé à l'administrateur, veuillez attendez la confirmation ! </h2> 
                <div class="form-group-1">
                    <div class="form-group">
                                <label   for="nom"><font color="black">Nom</label>
                                <input type="text" name="nom" id="nom"placeholder="Entrez votre nom"  required/>
                            
                                <label for="prenom">Prénom</label>
                                <input type="text" name="prenom" id="prenom"placeholder="Entrez votre prenom" required/>
                            
                            <label for="adresse">Adresse :</label>
                            <input type="text" name="adresse" id="adresse" placeholder="Entrez votre adresse" required/>
                        
                            <label for="sex" class="radio-label">Sex :</label>
                            <table style=" margin-right: 80px">
                                <tr><td> <label for="male">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHomme</label> </td>
                                   <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sex" id="male" value="Homme" checked> </td></tr>
                               
                                <tr> <td> <label for="female">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemme</label></td>

                                     <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sex" id="female" value="Femme"> </td></tr> </table>
                                
                                

                            <label for="date_de_naissance">Date de naissance :</label>
                            <input type="date" name="date_de_naissance" id="date_de_naissance" placeholder="Entrez votre date de naissance" required/>
                        
                            <label for="numero_de_telephone">Numéro de téléphone :</label>
                            <input type="text" name="numero_de_telephone" id="numero_de_telephone" placeholder="Entrez votre numéro de téléphone" required/>
                            <label for="fonction">fonction :</label>
                            <input type="text" name="fonction" id="fonction" required/>
                        
                            <label for="experience">Experience profesionelle :</label>
                            <input type="text" name="experience" id="experience" required/>
                        
                            <label for="type"> Domaine : </label>
                            
                                 <input type="text" name="domaine" id="domaine" required/>
                                
                           
                            
                               
                            
                    <label for="email">Email :</label>
                            
                       
                    <input type="email" name="email" id="email" placeholder="Entrez votre e-mail" required />
                    <label for="mot_de_passe">Mot_de_passe :</label>
                    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required />
                    <input type="password" name="password" id="password1" placeholder="resaisissez votre mot de passe" required />
            
            
                </div>
           
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="envoyer votre demande" onclick="validation()" />
                </div>
            </form>
        </div>
 </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main_.js"></script>
</body>
</html>

