<?php
    $title = 'Авторизация';
    include 'includes/header.php';
    
    
?>

<div class="text-center d-flex align-items-center h-100">
    <main class="form-signin w-50 m-auto">
        <form action="auth.php" method="post">
 
            <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
            
            <?php user_auth(); ?>

            <div class="form-floating mb-3">
                <input value="<?php if(isset($_POST["login"])){echo $_POST["login"];} ?>" type="text" name="login" class="form-control " id="floatingInput" placeholder="Логин">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>">
                <label for="floatingPassword">Пароль</label>
            </div>

 
            <button class="w-100 btn btn-lg btn-primary auth__button" type="submit">Войти</button>
 
        </form>
    </main>
</div>

 
</body>
 
</html>
