<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/logo2.ico">
    <style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

    body {
        background: #fff;
    }

    .input-field input[type=date]:focus+label,
    .input-field input[type=text]:focus+label,
    .input-field input[type=email]:focus+label,
    .input-field input[type=password]:focus+label {
        color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
        border-bottom: 2px solid #e91e63;
        box-shadow: none;
    }
    </style>
    <title><?= $title; ?></title>
</head>

<body>
<?= $this->session->flashdata('message'); ?>
    <div class="section"></div>
    <main>
        <center>
            <img class="responsive-img" style="width: 300px;" src="<?= base_url('assets/'); ?>img/logo.png" />
            <div class="section"></div>

            <h5 class="indigo-text">Please, Login Here</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row"
                    style="display: inline-block; padding: 0px 50px 0px 50px; border: 2px solid #EEE;">

                    <form class="col s12" method="post">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='nik' id='nik' value="<?= set_value('nik'); ?>" />
                                <?= form_error('nik', '<span class="new badge red">','</span>'); ?>
                                <label for='nik'>Enter your nik</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <?= form_error('password', '<span class="new badge red">','</span>'); ?>
                                <label for='password'>Enter your password</label>
                            </div>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login'
                                    class='col s12 btn btn-large waves-effect indigo'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/materialize.min.js"></script>
</body>

</html>