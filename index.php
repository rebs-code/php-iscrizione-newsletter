<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    // include functions.php
    include 'functions.php';
    require_once __DIR__ . '/session.php';


    $email = isset($_POST['email-input']) ? $_POST['email-input'] : '';
    $alert_success = "alert-success";
    $alert_danger = "alert-danger";
    var_dump($email);
    var_dump(strpos($email, '@'));
    var_dump(strpos($email, '.'));


    //redirects to a dashboard page if the email inserted is correct
    if (isEmailValid($email)) {
        $_SESSION['validEmail'] = $email;
        header('Location: dashboard.php');
        die;
    }


    ?>
    <header class="container p-3">
        <h1 class="text-center">The New Newsletter with Letters</h1>
    </header>
    <section class="container">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email-input">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!-- call the isEmailValid  function -->
            <?php if (isset($_POST['email-input']) && !isEmailValid($email)) : ?>
                <div class='alert <?php echo $alert_danger ?>' role='alert'>
                    Insert a valid email address
                </div>
            <?php else : ?>
                <div class='alert <?php echo $alert_success ?>' role='alert'>
                    Success! You are subscribed!
                </div>
            <?php endif ?>
            <!-- button to submit form -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>