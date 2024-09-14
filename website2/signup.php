<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="">
  <link rel="stylesheet" href="signup.css">
  
  <title>Intro component with sign up form</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
</head>
<body>
  <main class="main-container">

    <div class="text-container">
      <h1 class="title">Mikai Lipo-Laser and Aesthetics</h1>
      <p class="description">
        
      </p>
    </div>

    <div class="right-main-container">
      <div class="purple-button"><strong>Sign up! <br> Start your journey with us</strong>
    </div>
      <div class="form-container">
        <form id="form" method="post" action="loginconn.php" class="form">
          <div class="input-wrapper"><input id="firstname" type="text" placeholder="FirstName" title="form-input"><svg id="erroricon1" class="error-icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#FF7979" cx="12" cy="12" r="12"/><rect fill="#FFF" x="11" y="6" width="2" height="9" rx="1"/><rect fill="#FFF" x="11" y="17" width="2" height="2" rx="1"/></g></svg></input></div>
          <p id="nameerror">First Name cannot be empty</p>
          <div class="input-wrapper"><input id="lastname" type="text" placeholder="LastName" title="form-input"><svg id="erroricon2" class="error-icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#FF7979" cx="12" cy="12" r="12"/><rect fill="#FFF" x="11" y="6" width="2" height="9" rx="1"/><rect fill="#FFF" x="11" y="17" width="2" height="2" rx="1"/></g></svg></input></div>
          <p id="lastnameerror">Last Name cannot be empty</p>
          <div class="input-wrapper"><input id="email" type="email" placeholder="Email" title="form-input"><svg id="erroricon3" class="error-icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#FF7979" cx="12" cy="12" r="12"/><rect fill="#FFF" x="11" y="6" width="2" height="9" rx="1"/><rect fill="#FFF" x="11" y="17" width="2" height="2" rx="1"/></g></svg></input></div>
          <p id="emailerror">Looks like this is not an email</p>
          <div class="input-wrapper"><input id="password" type="password" placeholder="Password" title="form-input"></input><svg id="erroricon4" class="error-icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#FF7979" cx="12" cy="12" r="12"/><rect fill="#FFF" x="11" y="6" width="2" height="9" rx="1"/><rect fill="#FFF" x="11" y="17" width="2" height="2" rx="1"/></g></svg></input></div>
          <p id="passerror">Password cannot be empty</p>
          <button id="button" type="submit"><STRONG>CONFIRM DETAILS</STRONG></button>
        </form>
        
      </div>
    </div>
  </main>
<!--  -->
<script src="script.js"></script>
</body>
</html>