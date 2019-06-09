<!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-togglable fixed-top">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index') }}">
          <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Landings
              </a>
              <div class="dropdown-menu dropdown-menu-lg p-lg-0" aria-labelledby="navbarLandings">
                <div class="row mx-lg-0">
                  <div class="col-12 col-lg-6 p-lg-7 d-none d-lg-flex flex-column justify-content-center overlay overlay-primary overlay-80 bg-cover rounded-left" style="background-image: url(assets/img/photos/photo-3.jpg);">
                    <div class="position-relative text-center text-white">

                      <!-- Heading -->
                      <h4 class="font-weight-bold mb-0">
                        Want to see an overview?
                      </h4>

                      <!-- Text -->
                      <p class="font-size-sm">
                        See all the pages at once.
                      </p>

                      <!-- Button -->
                      <a href="overview.html" class="btn btn-sm btn-white shadow-dark font-size-sm">
                        View all pages
                      </a>
                  
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 p-lg-7">
                    <div class="row no-gutters">
                      <div class="col-6">

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-primary">
                          Services
                        </h6>

                        <!-- List -->
                        <ul class="list mb-5">
                          <li class="list-item">
                            <a class="list-link" href="coworking.html">
                              Coworking
                            </a>
                          </li>
                          <li class="list-item mb-1">
                            <a class="list-link" href="rental.html">
                              Rental
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="job.html">
                              Job Listing
                            </a>
                          </li>
                        </ul>

                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-primary">
                          Apps
                        </h6>

                        <!-- List -->
                        <ul class="list mb-0">
                          <li class="list-item">
                            <a class="list-link" href="desktop-app.html">
                              Desktop
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="mobile-app.html">
                              Mobile
                            </a>
                          </li>
                        </ul>

                      </div>
                      <div class="col-6">
                    
                        <!-- Heading -->
                        <h6 class="font-weight-bold text-uppercase text-primary">
                          Web 
                        </h6>

                        <!-- List -->
                        <ul class="list mb-0">
                          <li class="list-item">
                            <a class="list-link" href="index-2.html">
                              Basic
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="enterprise.html">
                              Enterprise
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="service.html">
                              Service
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-link" href="cloud.html">
                              Cloud Hosting
                            </a>
                          </li>
                        </ul>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                </div> <!-- / .row -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarPages">
                <div class="row no-gutters">
                  <div class="col-6">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary">
                      Career
                    </h6>

                    <!-- List -->
                    <ul class="list mb-5">
                      <li class="list-item">
                        <a class="list-link" href="careers.html">
                          Listing
                        </a>
                      </li>
                      <li class="list-item">
                        <a class="list-link" href="career-single.html">
                          Opening
                        </a>
                      </li>
                    </ul>

                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary">
                      Company
                    </h6>

                    <!-- List -->
                    <ul class="list mb-0">
                      <li class="list-item">
                        <a class="list-link" href="about.html">
                          About
                        </a>
                      </li>
                      <li class="list-item">
                        <a class="list-link" href="pricing.html">
                          Pricing
                        </a>
                      </li>
                      <li class="list-item">
                        <a class="list-link" href="terms-of-service.html">
                          Terms
                        </a>
                      </li>
                    </ul>               

                  </div>
                  <div class="col-6">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary">
                      Help center
                    </h6>

                    <!-- List -->
                    <ul class="list mb-5">
                      <li class="list-item">
                        <a class="list-link" href="help-center.html">
                          Overview
                        </a>
                      </li>
                      <li class="list-item">
                        <a class="list-link" href="help-center-article.html">
                          Article
                        </a>
                      </li>
                    </ul>

                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary">
                      Contact
                    </h6>

                    <!-- List -->
                    <ul class="list mb-0">
                      <li class="list-item">
                        <a class="list-link" href="contact.html">
                          Basic
                        </a>
                      </li>
                      <li class="list-item">
                        <a class="list-link" href="contact-alt.html">
                          Cover
                        </a>
                      </li>
                    </ul>               

                  </div>
                </div>
              </div> <!-- / .row -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDocumentation" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Documentation
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDocumentation">

                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="docs/index.html">
                
                  <!-- Icon -->
                  <div class="icon icon-sm text-primary">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                        <title>Stockholm-icons / General / Clipboard</title>
                        <desc>Created with Sketch.</desc>
                        <g id="Stockholm-icons-/-General-/-Clipboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#335EEA"></path>
                            <rect id="Rectangle-152" fill="#335EEA" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"></rect>
                            <rect id="Rectangle-152-Copy" fill="#335EEA" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"></rect>
                        </g>
                    </svg>
                  </div>
              
                  <!-- Content -->
                  <div class="ml-4">

                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Documentation
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Customizing and building
                    </p>

                  </div>

                </a> <!-- / .row -->

                <!-- Divider -->
                <hr>
            
                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="docs/alerts.html">
                
                  <!-- Icon -->
                  <div class="icon icon-sm text-primary">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                        <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                        <desc>Created with Sketch.</desc>
                        <g id="Stockholm-icons-/-Layout-/-Layout-4-blocks" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <rect id="Rectangle-7" fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                        </g>
                    </svg>
                  </div>
              
                  <!-- Content -->
                  <div class="ml-4">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Components
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Full list of components
                    </p>

                  </div>

                </a> <!-- / .row -->

                <!-- Divider -->
                <hr>
            
                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="docs/changelog.html">
                
                  <!-- Icon -->
                  <div class="icon icon-sm text-primary">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                        <title>Stockholm-icons / Files / File</title>
                        <desc>Created with Sketch.</desc>
                        <g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                            <rect id="Rectangle" fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"></rect>
                            <rect id="Rectangle-Copy" fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"></rect>
                        </g>
                    </svg>
                  </div>
              
                  <!-- Content -->
                  <div class="ml-4">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Changelog
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Keep track of changes
                    </p>

                  </div>
                
                  <!-- Badge -->
                  <span class="badge badge-pill badge-primary-soft ml-auto">
                    1.0
                  </span>

                </a> <!-- / .row -->

              </div>
            </li>
          </ul>

          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
            Buy now
          </a>

        </div>
  
      </div>
    </nav>