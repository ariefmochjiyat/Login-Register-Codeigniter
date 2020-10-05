<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">

            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-26">
                    Welcome <?php echo $this->session->userdata('name'); ?>
                </span>

                <div class="text-center p-t-115">

                    <strong>
                        <a class="txt2" href="<?php echo base_url('login/logout') ?>">
                            Logout
                        </a>
                    </strong>

                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>