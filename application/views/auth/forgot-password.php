<div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="<?= base_url('assets/'); ?>img/login.jpg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div id="activation_failed" class="flash-data" data-flashdata="<?= $this->session->flashdata('activation_failed'); ?>"></div>
                                <div id="activation_success" class="flash-data" data-flashdata="<?= $this->session->flashdata('activation_success'); ?>"></div>

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Forgot your password?</h1>
                                </div>
                                <div id="activation_success" class="flash-data" data-flashdata="<?= $this->session->flashdata('activation_success'); ?>"></div>
                                <div id="x_email" class="flash-data" data-flashdata="<?= $this->session->flashdata('x_email'); ?>"></div>
                                <div id="x_active" class="flash-data" data-flashdata="<?= $this->session->flashdata('x_active'); ?>"></div>
                                <div id="x_password" class="flash-data" data-flashdata="<?= $this->session->flashdata('x_password'); ?>"></div>
                                <div class="flash-data" id="logout" data-flashdata="<?= $this->session->flashdata('logout'); ?>"></div>
                                <div id="activation_failed" class="flash-data" data-flashdata="<?= $this->session->flashdata('activation_failed'); ?>"></div>
                                <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>auth">Back to login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>