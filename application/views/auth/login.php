<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">

            <form class="login100-form validate-form" method="post" action="<?php echo base_url('login/proses_login') ?>">
                <span class="login100-form-title p-b-26">
                    Welcome Friends!
                </span>

                <div style="margin-bottom: 15px;">
                    <?php
                    // menampilkan pesan flashdata
                    if ($this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    }
                    ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" id="password" value="<?= set_value('password'); ?>">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <strong>
                        <a class="txt2" href="<?= base_url('register'); ?>">
                            Sign Up
                        </a>
                    </strong>

                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>