<?php include 'head.php'; ?>

<div class="">
    <div class="container d-flex align-items-center justify-content-center">
        
            <form action="" method="post">
                <h2>Registrar</h2>
                <div class="mb-3">
                    <label for="">
                        Nome:
                        <input type="text" name="name" class="form-control" >
                    </label>
                </div>
                <div class="mb-3">
                    <label for="">
                        E-mail:
                        <input type="email" class="form-control" value="" />
                    </label>
                </div>
                <div class="mb-3">
                    <label for="">
                        Senha:
                        <input type="password" class="form-control" />
                    </label>
                </div>
                <div class="mb-3">
                    <label for="">
                        Confirmar Senha:
                        <input type="password_confirm" class="form-control" />
                    </label>
                </div>
    
                <input type="submit" name="sendButton" class="btn btn-primary" />
            </form>        
    </div>
</div>

<?php include 'footer.php'; ?>