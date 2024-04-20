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
       @include('partial.hero')
       
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
                                <h6 class="mb-3"><i class="fa fa-check fa-bounce text-danger me-2"></i>Efficacité opérationnelle</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i> Tarvail Professionel </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-danger me-2"></i>Disponible 24h/24h</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i>Meilleurs Prix</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href=""> Lire plus</a>
                            <a class="btn btn-outline-danger btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-danger btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-danger btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-danger btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/202004242033007840.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



<br>
        <section class="saving_section ">
            <div class="box">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="img-box">
                      <img src="img/big.png" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="detail-box">
                      <div class="heading_container">
                        <h2>
                         Meilleurs Formations <br>
                         avec Weird-Tech
                        </h2>
                      </div>
                      <p>
                        Nous vous offrons des formations qui vous permettrons d'acquérir des connaissances 
                        et des compétences dans le domaine des technologies informatique. 
                       nous avons plusieurs types de formations selon la spécialité.

                      </p>
                      
                        <a href="#" class="btn btn-light  rounded-pill">
                          S'inscrire maintenant
                        </a>
                        <a href="#" class="btn btn-light  rounded-pill">
                         Voir plus
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <br>


    

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



        


     


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


       
        
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Contactez nous</h6>
                            <h2 class="mt-2">Contacter pour toutes questions</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder=" Nom">
                                            <label for="name"> Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder=" Email">
                                            <label for="email"> Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                            <label for="subject">Sujet</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Laisser votre message ici" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-danger w-100 py-3" type="submit">Envoyer </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

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