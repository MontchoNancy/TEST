@include('partial.header')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('partial.navbar')

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">A propos </h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">Acceuil</a></li>
                                    
                                    <li class="breadcrumb-item text-white active" aria-current="page">A propos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


      

       
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">A propos de Nous </h6>
                            <h2 class="mt-2">Weird-Tech : Plus de 10 ans d'experience</h2>
                        </div>
                        <p class="mb-4">Nous sommes specialisé dans le numérique 
                        et nous proposons des prestations en matière de : 
                        Réseau informatique d’entreprises, la mise en place du système de télétravail, de contrôle d’accès, de vidéo surveillance, 
                        et de la téléphonie IP.Nous disposons d’une équipe compétente et chevronnée disponible pour subvenir à vos besoins.
                       

                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check fa-bounce text-danger me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i> Tarvail Professionel </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-danger me-2"></i>Disponible 24h/24h</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i>Meilleurs Prix</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href=""> Lire plus</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/202004242033007840.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


      


        

        <!-- Footer Start -->
      @include('partial.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
   @include('include.script')
</body>

</html>