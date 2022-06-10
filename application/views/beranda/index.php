<div class="container-fluid">

    <body id="home">
        <!-- NAVBAR  -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top " style="background-color: #007175 ;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">[AYo]</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#skills">Skills</a>
                    <a class="nav-link" href="#projects">Projets</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav> -->
        <!-- // NAVBAR // -->
        <!-- JUMBOTRON -->
        <div class="jumbotron text-center">
            <!-- <img src="img/sosmed/Propil.png" class="rounded-circle img-thumbnail" alt="AYo" width="200" height="200"> -->
            <h1 class="display-4 fw-bold">POJOK INFO IBU HAMIL</h1>
            <p class="lead">Info seputar kehamilan. Skrining dan resiko kehamilan.

                Terkini, terpercaya dan teraktual.</p>
            <!-- <hr class="my-4"> -->

            <a class="btn btn-success btn-lg"
                href="https://api.whatsapp.com/send/?phone=%2B6281226827411&text&app_absent=0"
                role="button">Whatsapp</a>



        </div>
        <!-- //JUMBOTRON// -->

        <!-- about -->
        <section id="about">
            <div class="container">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ced4da" fill-opacity="1"
                    d="M0,192L48,213.3C96,235,192,277,288,266.7C384,256,480,192,576,170.7C672,149,768,171,864,170.7C960,171,1056,149,1152,165.3C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg> -->
                <div class="row justify-content-between fs-5 text-center">
                    <h2 class="text-center">PELAYANAN KAMI</h2>
                    <!-- <div class="row"> -->
                    <div class="col-md-3">
                        <i class="bi bi-heart-pulse-fill"></i>
                        <h2 class="text-center">Skrining</h2>
                        <p>Saya merupakan lulusan S1 Informatika Universitas Teknologi Yogyakarta dengan spesialisi pada
                            Web. </p>
                    </div>
                    <div class="col-md-3">
                        <i class="bi bi-person-video2"></i>
                        <h2 class="text-center">In-Put</h2>
                        <p>Saya merupakan lulusan S1 Informatika Universitas Teknologi Yogyakarta dengan spesialisi pada
                            Web. </p>
                    </div>
                    <div class="col-md-3">
                        <i class="bi bi-newspaper"></i>
                        <h2 class="text-center">Berita</h2>
                        <p>Saya merupakan lulusan S1 Informatika Universitas Teknologi Yogyakarta dengan spesialisi pada
                            Web.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="bi bi-chat-right-quote-fill"></i>
                        <h2 class="text-center">Fit-Kom</h2>
                        <p>Saya merupakan lulusan S1 Informatika Universitas Teknologi Yogyakarta dengan spesialisi pada
                            Web.</p>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="col-md-6">
                    <p>Saya merupakan lulusan S1 Informatika Universitas Teknologi Yogyakarta dengan spesialisi pada
                        Web. Memiliki pengalaman selama satu tahun dalam perancangan serta pembangunan web dengan
                        menggunakan Framework Codeigniter. </p>
                </div>
                <div class="col-md-6">
                    <p>Memiliki kemampuan pada pembuatan web dan dapat bersinergi dalam tim untuk mengoptimalkan potensi
                        diri serta tim. Saya memiliki tipikal pembelajar cepat dan juga suka belajar. Alhamdulillah </p>
                </div> -->
                </div>
            </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#cbffff" fill-opacity="1"
                d="M0,64L30,106.7C60,149,120,235,180,234.7C240,235,300,149,360,144C420,139,480,213,540,224C600,235,660,181,720,165.3C780,149,840,171,900,154.7C960,139,1020,85,1080,85.3C1140,85,1200,139,1260,154.7C1320,171,1380,149,1410,138.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg> -->
        </section>


        <!--   =========== POSTINGAN ============ -->
        <!-- ====Test PRIORITY -->

        <!-- <div class="container-fluid col-md-12 ml-2 mt-5 mb-3"> -->
        <div class="container">
            <div class="carousel-inner ">
                <font color="black" size="5" face="comic sans ms">Post</font>
            </div>
            <font color="gray" size="2" face="comic sans ms">Informasi Terupdate Puskesmas</font>
            <section id="prioritas">
                <div class="row">
                    <div class="owl-carousel owl-theme">

                        <?php foreach ($news as $nws) : ?>
                        <div class="item">

                            <form action="<?= base_url() . 'user/news/' . $nws->idpost ?>">
                                <button class="btn" type="submit">
                                    <div class="card">
                                        <img src="<?= base_url() . '/assets/img/post/test.jpg' ?>" class="card-img-top"
                                            alt="...">
                                        <!-- <img src="?= base_url() . '/assets/img/post/' . $nws->gambar_news ?>"
                                    class="card-img-top" alt="...">
                                     -->
                                        <div class="card-body">
                                            <p class="card-text"><b><?= $nws->title ?></b></p>
                                            <div class="col-12" align="left">
                                                <small class="card-text"><?php echo time_ago($nws->date); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>

                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </section>
        </div>
        <!-- </div> -->
        <!-- ====Test PRIORITY -->


        <!-- //about// -->
        <!-- skills -->
        <section id="skills">
            <div class="container">
                <div class="row text-center justify-content-evenly">
                    <div class="col">
                        <h1>My Skills</h1>
                    </div>

                </div>
            </div>
        </section>
        <!-- skills -->
        <!-- projects -->
        <!-- <section id="projects">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col">
                    <h1>My Projects</h1>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/porto/codeigniter.png" class="card-img-top" alt="codeigniter">
                            <div class="card-body">
                                <p class="card-text">Web donasi - Codeigniter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/porto/react.png" class="card-img-top" alt="reactJs">
                            <div class="card-body">
                                <p class="card-text">Landingpage - React.Js</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="img/porto/bootstrap.png" class="card-img-top" alt="reactJs">
                            <div class="card-body">
                                <p class="card-text">Landingpage - Bootstrap5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,288L40,266.7C80,245,160,203,240,176C320,149,400,139,480,149.3C560,160,640,192,720,218.7C800,245,880,267,960,261.3C1040,256,1120,224,1200,208C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section> -->
        <!-- //projects// -->
        <!-- contact -->
        <!-- <section id="contact">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <h1 class="text-center">Contact Me</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>yey!,</strong> pesan anda sudah kami terima
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="ayo-database-user">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama"
                                aria-describedby="nama">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Tulis Pesan" id="pesan" name="pesan"
                                style="height: 100px"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1"
            d="M0,192L40,181.3C80,171,160,149,240,144C320,139,400,149,480,165.3C560,181,640,203,720,181.3C800,160,880,96,960,101.3C1040,107,1120,181,1200,192C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg> -->
        <!-- //contact // -->

        <!-- footer -->
        <!-- <footer class="bg-primary  text-white text-center p-5">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a
                href="https://www.instagram.com/agusyulianto.ayo/" class="fw-bold text-white"> Agus Yulianto</a></p>
    </footer> -->
        <!-- //footer// -->


        <!-- ========= GOOGLE FORM -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

 
        <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbz1AhKYa9U6JDv4JXY4TEYpNf7M2Pms5hLAC7mZPqyaZsZdxvncNb-zxJIrmnLYw0yiQQ/exec'
        const form = document.forms['ayo-database-user'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            //ketika sumbit diklik
            //   tampilkan tombol loading, hilangkan kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    //   tampilkan tombol  kirim, hilangkan loading
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    //tampil alert
                    myAlert.classList.toggle('d-none');
                    //riset form
                    form.reset();
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })
        </script> -->
        <!-- ================== GFORM -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/owl.carousel.js"></script>

        <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });

        // });


        // });
        </script>

    </body>
</div>
<!-- </html> -->