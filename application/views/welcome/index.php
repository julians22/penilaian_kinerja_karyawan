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
                        <?= $this->session->flashdata('message'); ?>
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
                                <?php 
                                $nik = $user['nik'];
                                $query = "SELECT `employe`.*, `hasil_nilai`.`id` as `id_nilai`
                                FROM `employe` JOIN `hasil_nilai`
                                ON `employe`.`nik` = `hasil_nilai`.`nik_target`
                                WHERE `hasil_nilai`.`nik_self` = '$nik' AND `hasil_nilai`.`jwb_1` = 0";
                                $target = $this->db->query($query)->result_array();
                                ?>
                                <?php if($target): ?>
                                <form action="<?= base_url('welcome/submitNilai'); ?>" id="myForm" method="post">
                                    <div class="input-field">
                                        <select name="nik_target">
                                            <option value="" disabled selected>Pilih Target Penilaian</option>
                                            <?php foreach($target as $t): ?>
                                            <option value="<?= $t['id_nilai']; ?>"><?= $t['emp_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label>Target Penilaian</label>
                                    </div>
                                    <input type="hidden" name="nik_self" value="<?= $user['nik'] ?>">

                                    <div class="row">
                                        <div class="col s12 m6">
                                            <ol>
                                                <h6><b class="indigo-text">Customer First (Cross Internal Dept)</b></h6>
                                                <h6>
                                                    <li>Memberikan support kepada departemen terkait:</li>
                                                </h6>
                                                <p class="left-align">
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb1" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb1" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb1" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb1" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Mengidentifikasi dan menangani masalah / keluhan</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb2" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb2" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb2" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb2" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Mengantipasi dan melakukan perbaikan dalam menangani masalah /
                                                        keluhan</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb3" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb3" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb3" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb3" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <br>
                                                <h6><b class="indigo-text">Enabling the Excellence</b></h6>
                                                <h6>
                                                    <li>Memiliki inisiatif untuk melakukan perbaikan dalam prosedur
                                                        kerja</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb4" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb4" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb4" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb4" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Menerapkan inisiatif atau ide-ide kedalam proses pekerjaan</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb5" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb5" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb5" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb5" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Memberikan hasil kerja yang terbaik dengan mempertimbangkan
                                                        seluruh aspek berdasarkan pada target perusahaan</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb6" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb6" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb6" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb6" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6><b class="indigo-text">Noble Thought</b></h6>
                                                <h6>
                                                    <li>Memiliki norma dan prinsip etika dalam bekerja</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb7" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb7" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb7" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb7" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Berperilaku yang dapat dijadikan contoh / panutan dalam bekerja
                                                    </li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb8" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb8" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb8" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb8" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Berkomitmen untuk selalu melakukan perbaikan secara berkala dan
                                                        berkelanjutan</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb9" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb9" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb9" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb9" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6><b class="indigo-text">Team Work</b></h6>
                                                <h6>
                                                    <li>Memahami apa yang menjadi kebutuhan dari pihak terkait</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb10" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb10" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb10" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb10" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Menjalin kerja sama yang baik dalam penyelesaian proses kerja
                                                    </li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb11" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb11" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb11" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb11" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                                <h6>
                                                    <li>Melakukan komunikasi dan koordinasi secara effektif untuk
                                                        memastikan hasil kerja yang maksimal</li>
                                                </h6>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" value="1" name="jwb12" type="radio" />
                                                        <span>Sangat Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="2" name="jwb12" type="radio" />
                                                        <span>Kurang</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="3" name="jwb12" type="radio" />
                                                        <span>Baik</span>
                                                    </label>
                                                    <label>
                                                        <input class="with-gap" value="4" name="jwb12" type="radio" />
                                                        <span>Sangat Baik</span>
                                                    </label>
                                                </p>
                                            </ol>
                                            <br>
                                            <button class="btn waves-effect waves-light right" type="submit">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <?php elseif(!$target): ?>
                                <h5>Terimakasih atas partisipasi anda telah mengisi form penilaian ini</h5>
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('auth/logout'); ?>" class="btn indigo">Logout</a>
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