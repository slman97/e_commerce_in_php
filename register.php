<?php include('./file/header.php'); ?>
<?php
if ($_SESSION['login'] != 1) {
?>
    <div class="container">
        <div class="mt-5 mb-5">
            <div class="mt-5 mb-5">
                <form action="./auth/reg.php" method="POST" role="form">
                    <legend>Register</legend>

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
    <?php } else {
    header("Location: index.php");
}
    ?>