<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <nav>
            <img src="img/logo.png" class="logo"/>
            <h1>CodersCommunity</h1>
        </nav>
        <div class="page-content">
        <form action="" method="post" class="register">
        <!--Personal Details--->
        <fieldset>
        <legend>Rejestracja</legend> 
        <!--Input First Name--->
            <p>
                <input placeholder="Imie" type="text" id="firstName" name="firstName" required class="register-text">
            </p>
        <!--Input Secend Name--->
            <p>
                <input placeholder="Nazwisko" type="text" id="secendName" name="firstName" required class="register-text">
            </p>
        <!--Email--->
            <p>
                <input placeholder="Email" type="email" name="email" id="email" required class="register-text">
            </p>
        <!--DoB--->
            <p>
                <input placeholder="Data Urodzenia" type="date" name="date" id="date" required class="register-text"> 
            </p>
        </fieldset>
            <input type="submit" value="Rejestruj" class="login-btn"/>
           </form>
               
            
            
          
            
            
            
        </fieldset>
           
        </div>
        <footer><p>Korzystając z serwisu akceptujesz politykę cookies, nasz regulamin i warunki użytkowania. <br/>Copyrights &copy; 2018 | Grupa CodersCommunity&reg;</p></footer>
    </body>
</html>