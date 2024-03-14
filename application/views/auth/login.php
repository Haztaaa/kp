
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col">
                                
                                
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/img/'); ?>sosial.png" style="width: 100px;">
                                        <h1 class="h4 text-uppercase font-weight-bold text-dark mb-4">Dinas Sosial Kota Tomohon</h1>

                                    </div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username"
                                                placeholder="Masukan Nama Pengguna">

                                                <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>

                                            </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Kata Sandi">
                                                <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success btn-user btn-block" >
                                            Masuk
                                        </button>
                                        <hr>
                                    
                                </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    