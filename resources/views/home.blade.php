@extends('layout.app')

@section('title', 'Home')

@section('content')
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Header Start -->
<div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                <h3 class="text-primary mb-3">I'm</h3>
                <h1 class="display-3 mb-3">Sarah Gordon</h1>
                <h2 class="typed-text-output d-inline"></h2>
                <div class="typed-text d-none">
                    @foreach($skills as $skill)
                        {{ $skill->name }}@if(!$loop->last), @endif
                    @endforeach
                </div>
                          
                <div class="d-flex flex-wrap align-items-center gap-3 pt-5">
                    <a href="{{ route('cv.download') }}" class="btn btn-primary py-3 px-4">Download CV</a>
                    <a href="#contact" class="btn btn-outline-primary py-3 px-4">Contact Me</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid w-75 w-md-50" src="{{ asset('img/profile.png') }}" alt="Profile photo">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-5">
                    <div class="years flex-shrink-0 text-center me-4">
                        <h1 class="display-1 mb-0">4</h1>
                        <h5 class="mb-0">Years</h5>
                    </div>
                    <h3 class="lh-base mb-0">of working experience as a web designer & developer</h3>
                </div>
                <p class="mb-4">I am a software developer and designer with a passion for building efficient, user-centric applications for the web and mobile platforms. Let’s create something remarkable together.</p>
                <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
        <!-- #region -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <!-- ✅ Dynamic Projects Section -->
                <div class="row g-3 mb-4">
                    @foreach($projects as $project)
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                            <h5 class="mt-2">{{ $project->title }}</h5>
                        </div>
                    @endforeach
                </div>   

                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">10</h2>
                </div>
                <p class="mb-4">Trusted by many clients as per the past years as a developer, we help companies obtain well Designed and Responsive systems, websites and applications and well maintained computer and company infrastructure. We get positive feedbacks from our customers.</p>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">6</h2>
                </div>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
</div>



<!-- About End -->
<!-- Expertise Start -->
<div class="container-xxl py-6 pb-5" id="skill">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">Skills & Experience</h1>
                <p class="mb-4">I'm a web developer with expertise in front end development and laravel framework, passionate about building functional, user-friendly, and visually appealing applications. Skilled in HTML, CSS, JavaScript, Visual Basic,PHP, and various frameworks like Laravel, I write clean, maintainable, and scalable code.

                    I've worked on multiple projects, designing and implementing responsive solutions that balance user experience and technical efficiency. And i also design and create Flyers, Posters, Logos, and Color Palettes, I focus on delivering seamless solutions.
                    
                    Beyond technical skills, I bring strong problem-solving, attention to detail, and collaboration to every project. Constantly learning and adapting to new technologies, I'm excited to tackle challenges and contribute to innovative projects.
                    
                    </p>
                <h3 class="mb-4">My Skills</h3>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">HTML</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">CSS</h6>
                                <h6 class="font-weight-bold">85%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">TALLY</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">PHP</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Javascript</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">XAMPP</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">ADOBE</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Laravel</h6>
                                <h6 class="font-weight-bold">85%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Education</button>
                    </li>
                    <li class="nav-item w-50">
                        <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Experience</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6">
                                <h5>Certificate in Computer science</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">2023 - 2024</p>
                                <h6 class="mb-0">UDSM</h6>
                            </div>
                            <div class="col-sm-6">
                                <h5>Diploma in Computer Science</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">2024 - 2026</p>
                                <h6 class="mb-0">UDSM</h6>
                            </div>
                            <div class="col-sm-6">
                                <h5>Secondary level</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">2018- 2021</p>
                                <h6 class="mb-0">Kings Secondary School</h6>
                            </div>
                            <div class="col-sm-6">
                                <h5>Positive Perspective</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">2018</p>
                                <h6 class="mb-0">Community Reading Association (CORA)</h6>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6">
                                <h5>IT technician</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">2023- 2024</p>
                                <h6 class="mb-0">Divine Grace Church</h6>
                            </div>
                            <div class="col-sm-6">
                                <h5>Practical Training</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">August - October 2025</p>
                                <h6 class="mb-0">iMart Group LTD</h6>
                            </div>
                            <div class="col-sm-6">
                                <h5>Technical Project Manager</h5>
                                <hr class="text-primary my-2">
                                <p class="text-primary mb-1">October To Currently 2025</p>
                                <h6 class="mb-0">iMart Group LTD</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Expertise End -->

<!-- Service Start -->
<div class="container-fluid bg-light my-5 py-6" id="service">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">My Services</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <!-- Button triggers Hire Me modal -->
                <a class="btn btn-primary py-3 px-5" data-bs-toggle="modal" data-bs-target="#hireMeModal">Hire Me</a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fa fa-calculator fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4>Computerized Accounting</h4>
                        <span>Providing accurate and efficient financial management using <b>Tally</b> to record, organize, and analyze accounts. Helping businesses maintain clear records, streamline bookkeeping, and make informed financial decisions.</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fa fa-code-branch fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Graphic Design</h4>
                        <span>Designing professional graphics, from logos, flyers, and posters to marketing materials, that effectively communicate your message.</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fa fa-code fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Web Design and Development</h4>
                        <span>Building modern, responsive, and user-friendly websites tailored to your brand and audience.</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <i class="fa fa-laptop-code fa-2x text-dark"></i>
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">UI/UX Design</h4>
                        <span>Designing intuitive user interfaces and seamless experiences that make digital products easy and enjoyable to use.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<!-- Hire Me Modal (Professional Look) -->
<div class="modal fade" id="hireMeModal" tabindex="-1" aria-labelledby="hireMeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content shadow-lg border-0">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="hireMeModalLabel">Hire Me</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-muted mb-4">We’d love to collaborate with you! Please provide your details below and I’ll get back to you promptly.</p>
  
          <!-- Laravel form -->
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
  
          <form action="{{ route('contact.send') }}" method="POST">
              @csrf
              <div class="row g-3">
                  <!-- Name -->
                  <div class="col-md-6">
                      <div class="form-floating">
                          <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                          <label for="name">Full Name</label>
                      </div>
                  </div>
  
                  <!-- Email -->
                  <div class="col-md-6">
                      <div class="form-floating">
                          <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com" required>
                          <label for="email">Email Address</label>
                      </div>
                  </div>
  
                  <!-- Company -->
                  <div class="col-md-6">
                      <div class="form-floating">
                          <input type="text" name="subject" class="form-control" id="subject" placeholder="Company/Organization">
                          <label for="subject">Company / Organization</label>
                      </div>
                  </div>
  
                  <!-- Phone (Optional) -->
                  <div class="col-md-6">
                      <div class="form-floating">
                          <input type="tel" name="phone" class="form-control" id="phone" placeholder="+255655139724">
                          <label for="phone">Phone Number (Optional)</label>
                      </div>
                  </div>
  
                  <!-- Message -->
                  <div class="col-12">
                      <div class="form-floating">
                          <textarea class="form-control" name="message" placeholder="Tell me about your project..." id="message" style="height: 140px" required></textarea>
                          <label for="message">Message / Project Details</label>
                      </div>
                  </div>
  
                  <!-- Submit Button -->
                  <div class="col-12">
                      <button class="btn btn-primary w-100 py-3 fw-bold" type="submit">
                          <i class="fa fa-paper-plane me-2"></i> Send Your Inquiry
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  


<!-- Projects Start -->
<div class="container-xxl py-6 pt-5" id="project">
    <div class="container">
        <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">My Projects</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                    <li class="mx-3 active" data-filter="*">All Projects</li>
                    <li class="mx-3" data-filter=".first">UI/UX Design</li>
                    <li class="mx-3" data-filter=".second">Graphic Design</li>
                </ul>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">

            <!-- Project 1 -->
            <div class="col-lg-3 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-1.jpg" alt="Project 1" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-3 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-0.jpg" alt="Project 2" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-0.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-3 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-2.jpg" alt="Project 3" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-3 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-3.jpg" alt="Project 4" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col-lg-3 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-4.jpg" alt="Project 5" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="col-lg-3 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-5.jpg" alt="Project 6" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 7 -->
            <div class="col-lg-3 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-6.jpg" alt="Project 7" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project 8 (UI/UX Design) -->
            <div class="col-lg-3 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/project-7.jpg" alt="Project 8" style="object-fit: cover;">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-7.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
<!-- Project 9 (Graphic Design) -->
<div class="col-lg-3 col-md-6 portfolio-item second" style="margin-bottom: 2rem;">
    <div class="portfolio-img rounded overflow-hidden" style="height: 250px;">
        <img class="img-fluid w-100 h-100" src="img/project-8.jpg" alt="Project 9" style="object-fit: cover;">
        <div class="portfolio-btn">
            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-8.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#"><i class="fa fa-link"></i></a>
        </div>
    </div>
</div>



        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Contact Start -->
<div class="container-xxl pb-5" id="contact">
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0">Let's Work Together</h1>
            </div>
           <!-- Say Hello Button -->
<!-- Hidden Form for Say Hello -->
<form id="sayHelloForm" action="{{ route('contact.send') }}" method="POST" style="display:none;">
    @csrf
    <input type="hidden" name="name" value="Visitor">
    <input type="hidden" name="email" value="visitor@example.com">
    <input type="hidden" name="subject" value="Hello">
    <input type="hidden" name="message" value="Hello!">
</form>

<!-- Say Hello Button -->
<div class="text-center mb-4">
    <button id="sayHelloBtn" class="btn btn-primary py-3 px-5 fw-semibold shadow-sm">
        Say Hello
    </button>
</div>

<!-- Notification -->
<div id="sayHelloNotification" style="display:none;" class="alert alert-success text-center mt-3" role="alert">
    Message sent successfully!
</div>

<script>
document.getElementById('sayHelloBtn').addEventListener('click', function() {
    const form = document.getElementById('sayHelloForm');
    
    // Submit the hidden form
    form.submit();

    // Show notification (optional: hide after 3 sec)
    const notification = document.getElementById('sayHelloNotification');
    notification.style.display = 'block';
    setTimeout(() => {
        notification.style.display = 'none';
    }, 3000);
});
</script>

<style>
/* Original Bootstrap primary color button */
.btn-primary {
    transition: transform 0.2s, box-shadow 0.2s;
}
.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}
.btn-primary:active {
    transform: translateY(1px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
</style>

        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-2">My office:</p>
                <h3 class="fw-bold">Available online</h3>
                <hr class="w-100">
                <p class="mb-2">Call me:</p>
                <h3 class="fw-bold">+255655139724</h3>
                <hr class="w-100">
                <p class="mb-2">Mail me:</p>
                <h3 class="fw-bold">gordonsarah2404@gmail.com</h3>
                <hr class="w-100">
                <p class="mb-2">Follow me:</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/technova.soln?igsh=MXZqZm80eXkwbjgyZQ%3D%3D&utm_source=qr"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/sarah-gordon-0502b335b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/share/1DD2SMKQrV/?mibextid=wwXIfr"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>                     
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-xxl pt-5 px-0">
      <div class="bg-dark">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1234567890123!2d39.1250000!3d-6.6900000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b6dxxxxxxx%3A0xyourplacemarker!2sMbezi%20Beach%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2stz!4v1696156800000!5m2!1sen!2stz"
          frameborder="0"
          style="width: 100%; height: 450px; border:0;"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"></iframe>
      </div>
    </div>
  </div>
  <!-- Map End -->
  

<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white py-4">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<!-- Replace all <img src="img/..."> with {{ asset('img/...') }} -->
@endsection
