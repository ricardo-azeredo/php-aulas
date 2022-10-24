<?php
    require 'head.php';
?>

<div class="container">
    <h1>Login</h1>

    <form action="verifica_login.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">
                Email: <br/>
                <input type="email" name="email" class="form-control">
            </label>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">
                Senha: <br/>
                <input type="password" name="password" class="form-control">
            </label>
        </div>
    </form>
    <h5><a type="button" class="btn btn-link" href="inscrever.php">Inscrever</a></h5>

</div>


    
<?php include 'footer.php'; ?>