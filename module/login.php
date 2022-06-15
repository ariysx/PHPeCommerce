<form action="core/form/login.php" method="post">
    <div class="m-auto p-5">
        <div class="col-3 m-auto p-5 rounded-3" style="border: 1px solid lightgray">
            <div class="mb-3">
                <h1>Sign in</h1>
                <br>
                <?php
                if (isset($_SESSION['alertMessage']))
                    echo '<p style="color: indianred">'.$_SESSION['alertMessage'].'</p>';
                ?>
                <p style="color: gray">Please insert account details below to sign in</p>

            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username or Email address</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="las la-sign-out-alt"></i> Login</button>
            </div>
        </div>
        <div class="col-3 m-auto p-5">
            <div class="img-fluid">

            </div>
        </div>
    </div>

</form>