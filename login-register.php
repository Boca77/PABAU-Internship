<!DOCTYPE html>
<html lang="en">
<?php include('./components/head.php') ?>

<body>
    <main class="login-register mt-0">
        <div class="container mt-5">
            <div class="row d-flex flex-column align-items-center pt-5">
                <div class="col-6 background-gradient border border-1  rounded">

                    <!-- logo -->
                    <div class="text-center py-5">
                        <img src="./imgs/logo.png" class="w-50" alt="Login Image">
                    </div>

                    <!-- tabs -->
                    <div class="d-flex justify-content-center pb-4">
                        <div class="d-flex justify-content-center border rounded">
                            <p id="login-tab" class="px-3 py-2 m-0 active rounded-start pointer">Login</p>
                            <p id="register-tab" class="px-3 py-2 m-0 rounded-end pointer">Register</p>
                        </div>
                    </div>

                    <!-- login form  -->
                    <div id="login">
                        <form action="" class="pb-5 px-5">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn">Login</button>
                        </form>
                    </div>

                    <!-- register form  -->
                    <div id="register">
                        <form action="" class="pb-5 px-5">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" name="surname" class="form-control" id="surname">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="./js/login-register.js"></script>
</body>

</html>