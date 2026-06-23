<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    header('Location: contact.php');
    exit;

}

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$company = htmlspecialchars(trim($_POST['company'] ?? ''));
$service = htmlspecialchars(trim($_POST['service'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You | Accetechnet</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-950 text-white min-h-screen flex items-center justify-center">

    <div class="max-w-2xl mx-auto px-6 text-center">

        <div class="text-6xl mb-6">
            🚀
        </div>

        <h1 class="text-5xl font-bold mb-6">
            Thank You!
        </h1>

        <p class="text-slate-400 text-lg mb-10">
            Your inquiry has been received successfully.
            I will review your project details and get back to you soon.
        </p>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-left">

            <h2 class="text-2xl font-bold mb-6">
                Submission Summary
            </h2>

            <p class="mb-3">
                <strong>Name:</strong>
                <?php echo $name; ?>
            </p>

            <p class="mb-3">
                <strong>Email:</strong>
                <?php echo $email; ?>
            </p>

            <p class="mb-3">
                <strong>Company:</strong>
                <?php echo $company; ?>
            </p>

            <p class="mb-3">
                <strong>Service:</strong>
                <?php echo $service; ?>
            </p>

            <p class="mb-3">
                <strong>Project Details:</strong>
                <?php echo nl2br($message); ?>
            </p>

        </div>

        <div class="mt-10">

            <a
                href="index.php"
                class="bg-cyan-500 hover:bg-cyan-600 px-8 py-4 rounded-xl inline-block">

                Return to Homepage

            </a>

        </div>

    </div>

</body>

</html>