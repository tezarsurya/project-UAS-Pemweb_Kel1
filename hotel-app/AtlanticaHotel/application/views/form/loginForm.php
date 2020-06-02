<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marck+Script&display=swap');

        h4 {
            font-family: 'Marck Script';
            font-size: 40px;
        }
    </style>
</head>

<body style="background-color: #273c75;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="card mt-5 col-md-4 bg-light">
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">Atlantica Hotel</h4>
                    <?php echo validation_errors(); ?>

                    <?php echo form_open('form/loginForm'); ?>

                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-check mb-3 text-right">
                        <label class="form-check-label mx-4" for="defaultCheck1">
                            Login as Admin
                        </label>
                        <input type="checkbox" name="cekAdmin" class="form-check-input">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="tombol" class="btn col-sm-12 text-white" style="background-color: #192a56;">Login</button>
                    </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>