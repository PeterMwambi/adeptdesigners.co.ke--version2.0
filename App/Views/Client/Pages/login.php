<div class="container mt-5">
    <div class="row mt-lg-5 justify-content-center">
        <div class="col-lg-5 col-md-7  p-md-1 mt-5 mb-5 rounded">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-center mb-lg-3 mt-lg-3">
                        <div>
                            <img src="<?php echo Directories::getLocation("Tools/Assets/icon.png") ?>" class="img-fluid icon">
                        </div>
                        <div>
                            <img src="<?php echo Directories::getLocation("Tools/Assets/title.png") ?>" class="img-fluid title">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center p-2">
                        <div class="d-block">
                            <h3 class="text-center form-alert-heading">Client Login Form</h3>
                            <p class="text-center form-alert-text mt-1">Enter a valid username and password</p>
                            <div class="d-flex justify-content-center">
                                <?php for ($x = 0; $x <= 4; $x++) { ?>
                                    <span class="spinner-grow text-dark spinner-grow-sm d-none mt-n1 mb-2 mr-3 request"></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <form method="post" class="clientLoginForm" class="w-100">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control">
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control">
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group mt-lg-4">
                                <input type="hidden" name="mandatory-security-field" value="<?php echo Functions::encrypt("CLIENT_LOGIN_FORM") ?>">
                                <input type="submit" name="login" class="btn btn-lg btn-dark w-100" value="Send Me In &raquo;">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-start">
                                        <a href="javascript:void(0)" class="text-nowrap">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-end">
                                        <a class="mr-3 text-muted" href="javascript:void(0)">Help</a>
                                        <a class="mr-3 text-muted" href="javascript:void(0)">Privacy</a>
                                        <a class="text-muted" href="javascript:void(0)">Terms</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-2">
                                <div>
                                    <img src="<?php echo Config::getIcon("register") ?>" class="img-fluid icon-sm mr-1">
                                </div>
                                <div>
                                    <a href="?request=register">Click here to Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>