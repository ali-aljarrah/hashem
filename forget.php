<?php include './include/header.php'; ?>
<title>Hashems - Forget password</title>  
  </head>
  <body>
  <?php include './include/menu.php'; ?>

  <section class="py-5 mt-0 mt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 h-100">
                <div class="mt-0 pt-0 mt-lg-5 pt-lg-5">
                    <h1 class="fs-40 merriweather-regular black-color mb-3">Forgot password</h1>
                    <p class="fs-16 black-color">
                    Don't worry, it happens to the best of us.
                    </p>
                    <form class="auth-form" action="#">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="green-btn">Reset password</button>
                        </div>
                        <div class="mt-3 fs-16 black-color">
                        Remember password? <a class="text-decoration-none green-color" href="/login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="text-center">
                    <img class="img-fluid shadow-xxl rounded-4" loading="lazy" width="587" height="444" src="/assets/imgs/forget.webp" alt="Hashems - Forget password">
                </div>
                <div class="text-center mt-4">
                    <div class="fs-24 black-color merriweather-regular mb-2">Fun fact</div>
                    <p class="fs-16 black-color w-75 mx-auto">
                    Deep inside our wonderful world of Arabian store and Middle Eastern market, freshness runs free, bland gets banished, and smart produce secures the future of food.
                    </p>
                    <a href="/" class="green-btn mx-auto mt-4">Explore product</a>
                </div>
            </div>
        </div>
    </div>
  </section>

  <?php include './include/footer.php'; ?>

<script src="/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="/assets/js/script.js" defer></script>
</body>
</html>