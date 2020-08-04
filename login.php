
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Camille STAEBELL | Login</title>
</head>
<body>
    <div class="container">
        <div class="containerTop">
            <div class="logo">
                <h1>STAEBELL</h1>
            </div>
            

        <ul>
           
                <li><a href="index.html">Home</a></li>
                <li><a href="#home">About</a></li>
                <li><a href="#home">Gallery</a></li>
                <li><a href="#home">Shop</a></li>
                <li><a href="#home">Contact</a></li>
                <li><a href="login.php" class="active">Login</a></li>
                
            
        </ul>
    </div>
    <div class="containerForm">
        <center><h1>Connectez-vous !</h1></center>
        <form action="connexion.php" method="POST">
            <input type="text" placeholder="Email...">
            <input type="text" placeholder="Mot de passe...">
            <input type="submit" value="Connexion">
            
            
        </form>
         <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Inscription</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <div class="animate">
  <div class="containerFormRegister">
  
    <center><h1>Inscrivez-vous !</h1></center>
    <form action="register.php" class="animate"  method="POST">

    <input type="text" placeholder="Nom..." name="firstname">
    

    <input type="text" placeholder="Prénom..." name="name">


        <input type="email" placeholder="Email..." name="mail">


        <input type="text" placeholder="Numéro de téléphone..." name="phone">


        <input type="password" placeholder="Mot de passe..." name="password">


        <input type="password" placeholder="Confirmation du mot de passe..." name="passwordConfirm">


        <input type="text" placeholder="Adresse..." name="adress">


        <input type="text" placeholder="Ville" name="city">


        <input type="text" placeholder="Code postale.." name="cityNumber">


        <input type="submit" value="Valider l'inscription !">   
    </form>
</div>   
</div>
</div> 
        
      


    

    

<footer>
    <div class="container">
        <div class="social">
        <div class="insta"></div>
        <div class="mail"></div>
        <div class="link"></div>
    </div>
    </div>

</footer>
<script>
  // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script> 
</body>
</html>