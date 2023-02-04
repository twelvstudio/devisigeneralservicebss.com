<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Password Setting | Dashboard</title>
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>"/>
        <script src="https://kit.fontawesome.com/ff94f270b6.js" crossorigin="anonymous"></script>
        <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <?= $this->include('partials/nav'); ?>
        <div id="layoutSidenav">
            <?= $this->include('partials/sidenav'); ?>
            <div id="layoutSidenav_content">
                <main class="bg-light">
                    <div class="container-fluid px-4">
                        <h1 class="h2 mt-4">Password Setting</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('setting') ?>" class="text-decoration-none">Setting</a></li>
                            <li class="breadcrumb-item active">Password</li>
                        </ol>
                        <h2 class="h5">Ganti Password</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-subtitle mb-4">Password baru harus mengandung minimal 8 karakter</div>
                                        <?php if (!empty(session()->getFlashdata('error'))): ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <p class="mb-0"><?= session()->getFlashdata('error') ?></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <p class="mb-0"><?= session()->getFlashdata('success') ?></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif; ?>
                                        <?= form_open(base_url('setting/setpassword')); ?>
                                            <div class="mb-3">
                                                <label for="oldPassword" class="form-label">Password Lama</label>
                                                <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Password lama" required />
                                            </div>
                                            <div class="mb-3">
                                                <label for="newPassword" class="form-label">Password Baru</label>
                                                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password baru" minlength="8" required />
                                            </div>
                                            <div class="mb-3">
                                                <label for="matchPassword" class="form-label">Konfirmasi Password</label>
                                                <input type="password" class="form-control" id="matchPassword" name="matchPassword" placeholder="Masukkan kembali password baru" required />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkbox" aria-describedby="checkFeedback" required />
                                                    <label class="form-check-label" for="checkFeedback">
                                                        Setuju untuk merubah password.
                                                    </label>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Ganti</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </main>
                <?= $this->include('partials/footer'); ?>
            </div>
        </div>
        <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('js/scripts.js') ?>" type="text/javascript"></script>
    </body>
</html>