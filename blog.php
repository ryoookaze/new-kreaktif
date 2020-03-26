<head>
    <?php include 'head/head.php' ?>
    <title>Blog</title>
</head>
<body>
    <section class="blog">
        <?php include 'components/navbar-solid.php' ?>
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="blog-container">
                    <h1 class="title">Blog</h1>
                    <div class="col-md-3 px-0">
                        <div class="card">
                            <img src="assets/image-content.jpg" alt="Card image cap" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">UI/UX</h5>
                                <p class="card-text">Deskripsi singkat layanan</p>
                                <div class="card-date">
                                    <p class="date">12 Jan 2020</p>
                                    <a href="blogcontents.php" class="further-content">
                                        Further Content
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php' ?>
    </section>
</body>
</html>