<?php include("header.php");
include("user-logic.php");   
    if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
        <p class="alert-success">Logado com sucesso</p>
    <?php } ?>
    <?php if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
        <p class="alert-success">Deslogado com sucesso!</p>
    <?php } ?>
    <?php if(isset($_GET["login"]) && $_GET["login"]==false) { ?>    
        <p class="alert-danger">Login ou senha inválidos</p>
    <?php }?>
    <?php if(isset($_GET["secFlaw"]) && $_GET["secFlaw"]==true){ ?>
        <p class="alert-danger"> Você não possui acesso a tal funcionalidade!</p>
    <?php }?>
        <h1 class="text-center">Bem Vindo</h1>
    <?php if(isLogged()) {?>
        <p class="text-success">Você está logado como <?=loggedUser();?>. <a href="logout.php">Deslogar</a></p>
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