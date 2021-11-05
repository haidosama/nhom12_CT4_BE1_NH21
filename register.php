<!-- HEADER -->
<?php include "header.php" ?>
<!-- /HEADER -->

<!-- REGISTER -->
<form action="checkregister.php" method="post">
    <div>
        <input class="input" type="text" name="username" placeholder="Username">
    </div>
    <div>
        <input class="input" type="password" name="password" placeholder="Password">
    </div>
    <div>
        <input class="input" type="password" name="re_password" placeholder="Nhập lại Password">
    </div>
    <button type="submit" name="btn_submit"><a>Register</a></button>
</form>

<!-- /REGISTER -->

<!-- FOOTER -->
<?php include "footer.php" ?>
<!-- /FOOTER -->
