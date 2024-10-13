@extends('home.index')
@section('content')
    <!-- Header-->
    <header class="py-5 d-flex align-items-center position-relative" id="beranda"
        style="min-height: 100vh; background-image: url('{{ asset('img/bglanding.jpg') }}'); background-size: cover; background-position: center;">
        <div class="overlay"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px);">
        </div>
        <div class="container px-5 position-relative" style="z-index: 1;">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div>
                        <h1 class="display-5 fw-bolder fs-1 text-white mb-2">WELCOME TO LALS STORE</h1>
                        <p class="lead text-white mb-4">Toko online yang menjual produk digital untuk berbagai
                            layanan digital</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#desk">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#learnmore">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="desk">
        <div class="container px-5 my-5">
            <div class="accordion" id="accordionExample">
                <!-- Netflix -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/netflixlogo.png') }}" alt="Netflix Logo" width="40"
                                    height="40">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">NETFLIX</h2>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Netflix adalah layanan streaming berbasis langganan yang menyediakan berbagai film, acara
                                televisi, dokumenter, dan konten orisinal. Didirikan pada tahun 1997 oleh Reed Hastings
                                dan Marc Randolph, Netflix awalnya beroperasi sebagai layanan penyewaan DVD melalui pos
                                sebelum beralih ke streaming digital pada tahun 2007.</p>
                        </div>
                    </div>
                </div>
                <!-- Viu -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/viulogo.jpg') }}" alt="Viu Logo" width="40" height="40">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">VIU</h2>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Viu adalah platform streaming video yang menawarkan berbagai konten, termasuk drama,
                                film, dan acara televisi, dengan fokus pada konten Asia, terutama dari Korea, Jepang,
                                dan Tiongkok. Didirikan oleh Viu International pada tahun 2015, platform ini menyediakan
                                layanan berbasis langganan yang memungkinkan pengguna menonton konten secara on-demand.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Spotify -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/spotifylogo.png') }}" alt="Spotify Logo" width="40"
                                    height="40">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">SPOTIFY</h2>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Spotify adalah platform streaming musik, podcast, dan konten audio digital yang
                                memungkinkan pengguna mengakses jutaan lagu dan episode dari berbagai genre dan
                                kategori. Diluncurkan pada tahun 2008, Spotify menyediakan layanan berlangganan gratis
                                dengan iklan atau premium tanpa iklan, serta fitur offline dan kualitas suara lebih
                                tinggi.</p>
                        </div>
                    </div>
                </div>
                <!-- Canva -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/canvalogo.png') }}" alt="Canva Logo" width="38" height="38">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">CANVA</h2>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Canva adalah platform desain grafis berbasis web yang memungkinkan pengguna membuat
                                berbagai jenis desain, seperti poster, presentasi, dan konten media sosial, dengan
                                mudah. Dikenal karena antarmukanya yang intuitif dan koleksi template yang beragam,
                                Canva memudahkan pengguna, baik pemula maupun profesional, untuk menghasilkan desain
                                yang menarik tanpa memerlukan keterampilan desain yang mendalam.</p>
                        </div>
                    </div>
                </div>
                <!-- Picsart -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/picsartlogo.png') }}" alt="Picsart Logo" width="37"
                                    height="37">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">PICSART</h2>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>PicsArt adalah aplikasi pengeditan foto dan video yang memungkinkan pengguna untuk
                                menerapkan berbagai efek, filter, dan teks pada gambar. Dikenal dengan fitur kolase dan
                                alat menggambar, PicsArt juga menyediakan platform komunitas untuk berbagi kreasi dan
                                menemukan inspirasi dari pengguna lain di seluruh dunia.</p>
                        </div>
                    </div>
                </div>
                <!-- VSCO -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/vscologo.png') }}" alt="VSCO Logo" width="40"
                                    height="40">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">VSCO</h2>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>VSCO adalah aplikasi pengeditan foto yang menawarkan berbagai filter artistik dan alat
                                pengeditan sederhana. Selain memungkinkan pengguna untuk mengubah dan meningkatkan foto,
                                VSCO juga memiliki platform komunitas di mana pengguna dapat berbagi karya mereka dan
                                mengikuti fotografer lainnya.</p>
                        </div>
                    </div>
                </div>
                <!-- Zoom -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/zoomlogo.png') }}" alt="Zoom Logo" width="49"
                                    height="49">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">ZOOM</h2>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Zoom adalah platform konferensi video berbasis cloud yang memungkinkan pengguna melakukan
                                pertemuan virtual, webinar, dan panggilan video dengan fitur berbagi layar, obrolan,
                                serta perekaman. Zoom populer untuk keperluan bisnis, pendidikan, dan komunikasi jarak
                                jauh, karena kemudahan penggunaannya dan kemampuan untuk mengakomodasi banyak peserta
                                dalam satu sesi.</p>
                        </div>
                    </div>
                </div>
                <!-- ChatGPT -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <div class="feature bg-gradient text-white rounded-3 me-3"
                                style="background-color: #e48dba; width: 55px; height: 55px;">
                                <img src="{{ asset('img/chatgptlogo.png') }}" alt="ChatGPT Logo" width="39"
                                    height="39">
                            </div>
                            <h2 class="h4 fw-bolder mb-0">CHATGPT</h2>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>ChatGPT adalah platform kecerdasan buatan yang dikembangkan oleh OpenAI, memungkinkan
                                pengguna berinteraksi dengan model bahasa untuk menjawab pertanyaan, memberikan saran,
                                atau melakukan percakapan. ChatGPT dapat digunakan untuk berbagai keperluan, seperti
                                pembuatan konten, bantuan teknis, dan diskusi umum, dengan kemampuan untuk memahami dan
                                menghasilkan teks yang alami dan kontekstual.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing section-->
    <section class="bg-light py-5 border-bottom" id="kategori">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Pay as you grow</h2>
                <p class="lead mb-0">With our no hassle pricing plans</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- Pricing card free-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">Free</div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold">$0</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>1 users</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Free linked domain
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-x"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card pro-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold">
                                <i class="bi bi-star-fill text-warning"></i>
                                Pro
                            </div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold">$9</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>5 users</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Free linked domain
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-x"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card enterprise-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                            <div class="mb-3">
                                <span class="display-4 fw-bold">$49</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Unlimited users</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    5GB storage
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited public projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community access
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited private projects
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Dedicated support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Unlimited</strong>
                                    linked domains
                                </li>
                                <li class="text-muted">
                                    <i class="bi bi-check text-primary"></i>
                                    Monthly status reports
                                </li>
                            </ul>
                            <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section-->
    <section class="py-5 border-bottom" id="informasi">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Customer testimonials</h2>
                <p class="lead mb-0">Our customers love working with us</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1">Thank you for putting together such a great product. We loved
                                        working with you and the whole team, and we will be recommending you to others!
                                    </p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1">The whole team was a huge help with putting things together for
                                        our company and brand. We will be hiring them again in the near future for
                                        additional work!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section class="bg-light py-5" id="kontak">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
                </div>
                <h2 class="fw-bolder">Get in touch</h2>
                <p class="lead mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
