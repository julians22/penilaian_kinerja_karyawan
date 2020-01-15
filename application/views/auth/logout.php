<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/materialize.min.css"
        media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/logo2.ico">

</head>

<body>

    <body>
        <div class="section">
            <main>
                <div class="container">
                    <center>
                        <img class="responsive-img" style="width: 300px;"
                            src="<?= base_url('assets/'); ?>img/logo.png" />
                        <div class="row">
                            <div class="col s12 center-align">
                                <div class="card indigo">
                                    <div class="card-content white-text">
                                        <span class="card-title">Terima Kasih, telah ikut berpartisipasi untuk mengisi
                                            form penilaian ini.</span>
                                            <br>
                                            <span id="seconds"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </main>
        </div>
    </body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var url = "https://www.centratamagroup.com"; // url tujuan
            var count = 10; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    $('#seconds').html('Anda akan di redirect ke ' + url + ' dalam ' + waktu + ' detik.');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
        </script>
</body>

</html>