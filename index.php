<doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-5 col-12">
                <h1>Log in.</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-danger mt-4" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <p class="mb-5"></p>
                <form action="/auth/index" method="post">
                    <div class="form-group mb-4">
                        <input type="text" name="username" class="form-control form-control-xl" id="username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control form-control-xl" placehole>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                </div>
            
            </div>
        </div>
    </div>
</body>