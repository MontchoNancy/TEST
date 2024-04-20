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
                            <h1 class="text-white animated zoomIn">Service</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">Acceuil</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->




    
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Nos Services</h6>
                    <h2 class="mt-2">Que offrons nous?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"style="color:#1E90FF"></i>
                            </div>
                            <h5 class="mb-3">Politique de sécurité</h5>
                            <p> Nous  gérons les autorisations d’accès au réseau, 
                                la sauvegarde et la récupération des données.
                                 On fournit également des services de consultation afin d'aider 
                                 les entreprises à optimiser leurs réseaux et à se conformer 
                                 aux normes de sécurité.
                                </p>
   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x" style="color:#1E90FF"></i>
                            </div>
                            <h5 class="mb-3">Assistance Technique</h5>
                            <p>Nous effectuons la maintenance, la mise à jour 
                                et la gestion des équipements informatiques tels que: les serveurs,
                                 les routeurs et les commutateurs. 
                                </p>
                                <a class="btn px-3 mt-auto mx-auto" href="{{route('service')}}">Voir Plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"style="color:#1E90FF"></i>
                            </div>
                            <h5 class="mb-3">Gestion des infrastructures réseaux</h5>
                            <p>  Nous nous chargeons de planifier 
                                et de mettre en œuvre des mises à niveau de d’infrastructure, 
                                de fournir un support technique aux utilisateurs,
                                 et de documenter les configurations et les procédures réseaux .</p>
                            
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
        <!-- Service End -->


        

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