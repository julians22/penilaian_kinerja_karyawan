<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css'); ?>"
        media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/icon2.ico">

    <title><?= $title; ?></title>
</head>

<body>

    <div class="section">
        <main>
            <img class="responsive-img" style="width: 300px;" src="<?= base_url('assets/'); ?>img/logo.png" />
            <div class="row">
                <div class="col s12">
                    <div class="card indigo">
                        <div class="card-content white-text">
                            <span class="card-title">Selamat Datang, <?= $user['emp_name']; ?></span>
                            <p>Anda saat ini sedang berada di website penilaian karyawan Centratama Group, mohon
                                waktunya untuk mengisi form dibawah ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <form action="#">
                                    <?php 
                                $level = $user['level_org'];
                                $div = $user['divisi'];
                                $dept = $user['departement'];
                                $nik = $user['nik'];
                                ?>
                                    <?php if($level == 'N-1'): ?>
                                    <?php
                                $query = "SELECT * FROM `employe` WHERE `level_org` = '$level' AND `divisi` = $div AND `nik` <> '$nik'";
                                $target = $this->db->query($query)->result_array();
                                ?>
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled selected>Pilih Target Penilaian</option>
                                            <?php foreach($target as $t): ?>
                                            <option value="<?= $t['nik']; ?>"><?= $t['emp_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label>Target Penilaian</label>
                                    </div>
                                    <?php elseif($level == 'N-2'): ?>
                                    <?php 
                                $query ="SELECT * FROM `employe` WHERE `level_org` <> '$level' AND `departement` = $dept AND `nik` <> '$nik'";
                                $target = $this->db->query($query)->result_array();
                                ?>
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled selected>Pilih Target Penilaian</option>
                                            <?php foreach($target as $t): ?>
                                            <option value="<?= $t['nik']; ?>"><?= $t['emp_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label>Target Penilaian</label>
                                    </div>
                                    <?php endif; ?>
                                    <div class="row left">
                                        <div class="col s12">
                                        <ol>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        <li></li>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Sangat Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Baik</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Cukup</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="jwb1" type="radio" />
                                                    <span>Kurang</span>
                                                </label>
                                            </p>
                                        </ol>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <label for="">Pertanyaan 1</label>
                            <a href="<?= base_url('auth/logout'); ?>" class="btn indigo">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('select').formSelect();
    });
    </script>
</body>

</html