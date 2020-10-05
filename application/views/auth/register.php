<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="padding-top: 35px !important;">

            <form class="login100-form validate-form" method="post" action="<?php echo base_url('register/proses_register') ?>">
                <span class="login100-form-title">
                    User Register!
                </span>
                <br>

                <?php echo validation_errors('<div class="error" style="color:red !important;">', '</div>'); ?>
                <br>

                <div class="wrap-input100 validate-input" data-validate="Enter your name">
                    <input class="input100" type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                    <span class="focus-input100" data-placeholder="Name"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" id="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>