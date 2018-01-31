<?php include("header.php");
include("user-logic.php");   
    if(isset($_SESSION["success"])) { ?>
        <p class="alert-success"><?=$_SESSION["success"];?></p>
    <?php 
        unset($_SESSION["success"]);
    } ?>
    <?php if(isset($_SESSION["danger"])){ ?>
        <p class="alert-danger"><?=$_SESSION["danger"];?></p>
    <?php 
    unset($_SESSION["danger"]);
    }?>
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