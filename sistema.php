<!DOCTYPE html>
<html lang="pt">
<title>Eventos Brasilia </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="file:///home/djalma/NetBeansProjects/SistemaWeb/public_html/index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="file:///home/djalma/NetBeansProjects/SistemaWeb/public_html/apresentacao.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sobre</a>
    <a href="file:///home/djalma/NetBeansProjects/SistemaWeb/public_html/clientes.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Clientes</a>
    <a href="file:///home/djalma/NetBeansProjects/SistemaWeb/public_html/eventos.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Eventos</a>
    <a href="file:///home/djalma/NetBeansProjects/SistemaWeb/public_html/videos.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Videos</a>
<a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Contato</a>
  </div>
    
<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Contato</h1>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACTO</h2>
    <p class="w3-opacity w3-center"><i>Deixe seus dados para entrarmos em contato</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Brasilia, DF<br>
        <i class="fa fa-phone" style="width:30px"></i> Telefone: 61 98573-8367<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: djalmab.junior@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/cadsistema.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
             <div class="w3-half">
              <input class="w3-input w3-border" type="number" placeholder="Telefone" required name="Telefone">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Mensagem">
          <button class="w3-button w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
      
    </div>
  </div>
</div

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">DeeJay43</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

