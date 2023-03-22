<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
  </head>
  <body>
    <div id="loader">
      <div class="loader-inner"></div>
    </div>
    <script>
     window.addEventListener("load", function() {
  setTimeout(removeLoader, 200); // espera 3 segundos

  function removeLoader() {
    const loader = document.getElementById("loader");
    if (loader) {
      loader.classList.add("fade-out");
      setTimeout(function() {
        loader.remove();
      }, 100);
    }
  }
});
    </script>
    <script>

        function login() {
          window.location.href = "https://accounts.google.com/o/oauth2/v2/auth?scope=email%20profile&response_type=code&redirect_uri=https://localhost/redirect.html&client_id=1074200913635-h1qtkt2tgtsndc26afubj3m3cs10rlpa.apps.googleusercontent.com";
        }
      </script>
  
      <script>
  
        function onSignIn(googleUser) {
      // Exibe o botão de logout
      document.querySelector('.g-signout2').style.display = 'block';
      
      // Esconde o botão de login
      document.querySelector('.loginb').style.display = 'none';
      
      // Adicione aqui o código para tratar o login
    }
    
    function onSignOut() {
      // Faz logout do usuário
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        // Esconde o botão de logout
        document.querySelector('.g-signout2').style.display = 'none';
        
        // Exibe o botão de login
        document.querySelector('.loginb').style.display = 'block';
        
        // Adicione aqui o código para tratar o logout
      });
    }
    
    // Verifica se o usuário já está logado
    var auth2 = gapi.auth2.getAuthInstance();
    if (auth2.isSignedIn.get()) {
      // Exibe o botão de logout
      document.querySelector('.g-signout2').style.display = 'block';
      
      // Esconde o botão de login
      document.querySelector('.loginb').style.display = 'none';
    }
    
      </script>

</head>
<body>
    <div class="main">
        <div class="main1">
             <div class="topb">
                <div class="balls">
                    <div class="ball1"></div>
                     <div class="ball2"></div>
                     <div class="ball3"></div>
                </div>
            </div>
             <br>

             <h1 style="display: flex;justify-content: center;font-size: 38px;">How about starting a new adventure?</h1>
            <div class="inputs">
                <p class="textpf" style=" margin-right: 245px;">E-mail</p>
                <input type="email" class="embox" id="email" name="email" required>
                <br>
                <br>
                <p class="textpf" style=" margin-right: 230px;">Password</p>
                <input type="password" class="passbox">
                <br><br><br>
                <button id="btnLogin" type="submit">Login</button>
                <br><br><br>
                <p>Dont have account?</p>
                <button id="btnSignUp">Register</button>
                <br><br>
                <button onclick="login()" class="btn-google">
                    <i class="fab fa-google"></i>
                    Login with google
                  </button>
                  
                  
            </div>

            </div>
</div>

<script src="javascript/script.js"></script>

</body>
</html>