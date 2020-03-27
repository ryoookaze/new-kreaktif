<head>
    <link rel="import" href="head/head.php">
    <?php include 'head/head.php' ?>
    <title>Contact Us</title>
</head>
<body>
    <section class="contact-us">
        <?php include 'components/navbar-solid.php' ?>
        <div class="container container-sm container-fluid">
            <h1 class="title">Let's Talk</h1>
            <div class="content-form">
                <h1>Contact Us</h1>
                <p>Contact us via Whatsapp +62 857-3062-2350 (Whatsapp only), email at kreaktifid@gmail.com, or just simply use the form below.</p>
                <form class="card">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tell Us About Your Project</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">How did you hear about us ?</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'components/footer.php' ?>
        <?php include 'components/script.php' ?>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery/script.js" type="text/javascript"></script>
</body>