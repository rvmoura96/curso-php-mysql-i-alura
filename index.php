<?php include("header.php");
    if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
        <p class="alert-success">Logado com sucesso</p>
    <?php } ?>
    <?php if(isset($_GET["login"]) && $_GET["login"]==false) { ?>    
        <p class="alert-danger">Login ou senha inválidos</p>
    <?php }?>
        <h1 class="text-center">Bem Vindo</h1>
    <?php if(isset($_COOKIE["logged_user"])) {?>
        <p class="text-success">Você está logado como <?=$_COOKIE["logged_user"]?>.</p>
    <?php } else {?>
            <h2 class="text-center">Login</h2>
            <form method="post" action="login.php">
                <table class="table">
                    <tr>
                        <td>Login:</td>
                        <td><input type="email" name="user" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="password" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td colspan="2 "><button type="submit" class="btn btn-primary">Login</button></td>
                    </tr>
                </table>
            </form>
            <?php }?>
<?php include("footer.php");?>