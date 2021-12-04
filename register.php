<?php include('./file/header.php'); ?>
<div class="container">
    <div class="mt-5 mb-5">
        <div class="mt-5 mb-5">
            <form action="reg.php" method="POST" role="form">
                <legend>Login</legend>

                <div class="form-group">
                    <label for="">E-mail</label>
                    <input name="email" type="text" class="form-control" id="" placeholder="E-mail">
                    <label for="">password</label>
                    <input name="password" type="password" class="form-control" id="" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>
    <?php include('file/footer.php'); ?>