<?php
$conn = new mysqli("localhost", "root", "", "jansevasangh");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jan Seva Sangh Trust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark"
        style="background-color: #1b5e20; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-white" href="#">
                <img src="Ngo-logo.png" alt="Logo"
                    style="height: 50px; width: auto; margin-right: 10px; object-fit: contain;">
                <span style="font-weight: bold; font-size: 20px;">JanSeva Sangh Trust</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="what_we_do.html">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="impact.html">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="saport.html">Support Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contect.php">Contact</a>
                    </li>
                </ul>
            </div>

            <a href="saport.html" class="btn btn-warning btn-sm ms-3">Donate Now</a>
        </div>
    </nav>



    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content container" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="display-5 fw-bold">Every Animal Deserves a Second Chance.</h1>
            <p class="lead mt-3" data-aos="fade-up" data-aos-delay="200">
                Providing care to injured, sick, and abandoned animals in Jamshedpur,<br>Jharkhand since 2019
            </p>

            <!-- Transparent button box -->
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                <button class="btn btn-donate">Donate Now</button>
                <button class="btn btn-report">Report Emergency Case</button>
            </div>

    </section>



    <!-- Impact Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <div class="col-md-3 mb-4">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/heart-with-pulse.png" alt="Rescued"
                            class="mb-2" />
                        <h4>1500+</h4>
                        <p class="text-muted">Animals Rescued</p>
                    </div>
                </div>
                <!-- <div class="col-md-3 mb-4">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/marker.png" alt="Sqft" class="mb-2" />
                        <h4>12,000 ft²</h4>
                        <p class="text-muted">Sqft Rehab Center</p>
                    </div>
                </div> -->
                <div class="col-md-3 mb-4">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/group-foreground-selected.png" alt="Volunteers"
                            class="mb-2" />
                        <h4>50+</h4>
                        <p class="text-muted">Volunteers</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div>
                        <img src="https://img.icons8.com/ios-filled/50/calendar.png" alt="Years" class="mb-2" />
                        <h4>6</h4>
                        <p class="text-muted">Years Serving</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <!-- WELCOME SECTION -->
    <!-- Hero Section with AOS Animations -->
    <section style="background-color: #f1f8f2; padding: 4rem 0;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Text Content -->
                <div class="col-md-7" data-aos="fade-right">
                    <h4 style="font-family: 'Pacifico', cursive; color: #247a33;">Welcome To</h4>
                    <h2
                        style="color: #ff6600; font-weight: bold; font-family: 'Baloo Bhai 2', cursive; display: inline;">
                        JAN SEVA SANGH TRUST</h2>
                    <h3 style="font-family: 'Poppins', sans-serif; color: #222;">Rescue, Conserve, Coexist</h3>

                    <div class="my-3" style="font-size: 1.5rem; color: #247a33;">
                        🐾 —
                    </div>

                    <p class="text-muted">
                        Established on October 2, 2016, and officially registered in 2021 (Registration Number:
                        2021/JSR/24/BK4/1), Jan Seva Sangh Trust is a non-profit organization dedicated to the rescue,
                        treatment, and care of cows and dogs. Our mission is to give a new life and a dignified
                        existence to helpless and injured animals.
                    </p>

                    <!-- Buttons -->
                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="about.html" class="btn btn-success px-4">ABOUT US</a>
                        <a href="#volunteer" class="btn btn-warning text-white fw-bold px-4">VOLUNTEER <br> (STARTING
                            2021)</a>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-5 mt-4 mt-md-0" data-aos="fade-left">
                    <img src="team.jpg" class="img-fluid rounded shadow" alt="Jan Seva Rescue in action">
                </div>

            </div>
        </div>
    </section>




    <!-- What We Do Section -->
    <section style="padding: 4rem 0;" id="services">
        <div class="container text-center">
            <h4 style="color: #e91e63; font-family: 'Pacifico', cursive;">Our Services</h4>
            <h2 style="font-family: 'Poppins', sans-serif;">What We Do ?</h2>
            <div style="font-size: 2rem; color: #247a33;">🐾🐾</div>

            <div class="row mt-5">

                <!-- Card 1: Rescue -->
                <div class="col-md-3 mb-4" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 8px;">
                        <img src="rescue.jpg" alt="Rescue image" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body text-center d-flex flex-column">
                            <div
                                style="width: 60px; height: 60px; background: #2e7d32; border-radius: 50%; margin: -40px auto 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: white;">
                                🐾</div>
                            <h5>Rescue</h5>
                            <p style="font-size: 0.9rem; color: #666;">We work for active reduction of human-wildlife
                                conflicts, by conducting scientific, skilled and ethical rescues of urban wildlife by
                                following all legal protocols.</p>
                            <a href="rescue.html" class="btn btn-danger mt-auto w-100">READ MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Treatment -->
                <div class="col-md-3 mb-4" data-aos="fade-left">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 8px;">
                        <img src="cowtri.webp" alt="Treatment image"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body text-center d-flex flex-column">
                            <div
                                style="width: 60px; height: 60px; background: #2e7d32; border-radius: 50%; margin: -40px auto 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: white;">
                                🐾</div>
                            <h5>Treatment</h5>
                            <p style="font-size: 0.9rem; color: #666;">The injured wildlife rescued by our team is
                                medically examined, treated, and observed by veterinarians and animal hospitals before
                                release.</p>
                            <a href="treatment.html" class="btn btn-danger mt-auto w-100">READ MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Foster -->
                <div class="col-md-3 mb-4" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 8px;">
                        <img src="image/donation-camp.webp" alt="Foster image" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body text-center d-flex flex-column">
                            <div
                                style="width: 60px; height: 60px; background: #2e7d32; border-radius: 50%; margin: -40px auto 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: white;">
                                🐾</div>
                            <h5>Blood Donation Camp</h5>
                            <p style="font-size: 0.9rem; color: #666;">Voluntary blood donors save lives through timely support, ensuring critical care reaches those in urgent need.</p>
                            <a href="blood_donation.html" class="btn btn-danger mt-auto w-100">READ MORE</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Awareness -->
                <div class="col-md-3 mb-4" data-aos="fade-left">
                    <div class="card h-100 border-0 shadow-sm" style="border-radius: 8px;">
                        <img src="OIP.webp" alt="Awareness image"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body text-center d-flex flex-column">
                            <div
                                style="width: 60px; height: 60px; background: #2e7d32; border-radius: 50%; margin: -40px auto 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: white;">
                                🐾</div>
                            <h5>Awareness</h5>
                            <p style="font-size: 0.9rem; color: #666;">We raise awareness on urban wildlife conservation
                                and human-wildlife conflict in schools, colleges, and corporates.</p>
                            <a href="#" class="btn btn-danger mt-auto w-100">READ MORE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


<!-- Gallery Section -->
<section class="py-5 bg-light" id="gallery">
    <div class="container">
        <div class="text-center mb-5">
            <h4 style="color: #e91e63; font-family: 'Pacifico', cursive;">Gallery</h4>
            <h2 style="font-family: 'Poppins', sans-serif;">Moments from Our Journey</h2>
            <div style="font-size: 2rem; color: #247a33;">📸🐾</div>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-3">
            <?php
            $result = $conn->query("SELECT * FROM gallery ORDER BY id DESC LIMIT 8");
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-sm-6 col-md-3">
                    <img src="admin/uploads/' . htmlspecialchars($row['photo']) . '" alt="Gallery Image"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                </div>';
            }
            ?>
        </div>

        <!-- More Photos Button -->
        <div class="text-center mt-4">
            <a href="galary.php" class="btn btn-success px-4">More Photos</a>
        </div>
    </div>
</section>


    <!-- Lightbox Modal -->
    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <img src="" class="img-fluid rounded shadow" id="lightboxImage" alt="Enlarged Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Add this inside the <script> tag or your existing script file -->
    <script>
        document.querySelectorAll('.gallery-img').forEach(img => {
            img.addEventListener('click', function () {
                const modal = new bootstrap.Modal(document.getElementById('lightboxModal'));
                document.getElementById('lightboxImage').src = this.src;
                modal.show();
            });
        });
    </script>

    <!-- WhatsApp Floating Icon -->
    <a href="https://wa.me/917707007005" target="_blank" class="whatsapp-float">
        <i class="bi bi-whatsapp"></i>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            padding: 12px;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            text-decoration: none;
            color: white;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 32px;
            }

            .whatsapp-float {
                padding: 10px;
                font-size: 20px;
            }
        }
    </style>

    <!-- Footer -->
    <footer class="bg-success text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center mb-2">
                        <img src="Ngo-logo.png" class="me-2" style="height: 40px; width: 40px; border-radius: 50%;">
                        <div>
                            <h5 class="fw-bold mb-0">Jan Seva Sangh Trust</h5>
                            <small>Charitable Trust</small>
                        </div>
                    </div>
                    <p class="small mt-3">
                        Jan Seva Sangh Trust is a non-governmental organization (NGO) based in Jamshedpur, Jharkhand
                        working towards human-wildlife conflict mitigation and promoting urban wildlife conservation.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">What We Do</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Impact</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Support Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Connect -->
                <div class="col-md-4 mb-4">
                    <h6 class="fw-bold mb-3">Connect</h6>
                    <p>Whatsapp Rescue Helpline:<br><strong>+91 7707007005, +91 8877610000</strong></p>
                    <p>Email: info@jansevasanghtrust.com</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://www.instagram.com/jan_seva_sangh_trust/profilecard/?igsh=MTg0cXUyOGNjemhyNA=="
                            class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/share/16yqudBVDM/" class="text-white fs-5"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://youtube.com/@jansevasanghtrust2016?si=Y6lRnUQ8mUqjUhbT"
                            class="text-white fs-5"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="border-top border-white mt-4">

            <!-- Bottom Footer -->
            <div class="d-md-flex justify-content-between align-items-center text-center text-md-start">
                <p class="mb-0 small">© 2016–2025 Jan Seva Sangh Trust. All rights reserved.</p>
                <p class="mb-0 small">
                    Designed by
                    <a href="https://techcoderservice.in/" target="_blank"
                        class="text-white text-decoration-underline fw-semibold">
                        Techcoder Software Pvt. Ltd.
                    </a>
                </p>
            </div>
        </div>
    </footer>




    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>