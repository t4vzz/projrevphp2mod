
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão TODO LIST</title>

    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDyHi23Jpt-zkHY7POZTR2-1EGvTIAzHWw",
    authDomain: "tiquatiraec.firebaseapp.com",
    projectId: "tiquatiraec",
    storageBucket: "tiquatiraec.appspot.com",
    messagingSenderId: "538172254258",
    appId: "1:538172254258:web:f72a87e786973d0edc742b",
    measurementId: "G-R34D8TZWYS"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  console.log(app);
</script>

</head>
<body>
    <h1>Todo List deu certo! </h1>
    <?php 
        include_once 'src/main.php'
        ?> 

<label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="btnLogin">Login</button>
    <button id="btnRegUser" onclick="registro" RegistrarUsuario(); >Registrar Usuário</button>
 

</body>
</html>