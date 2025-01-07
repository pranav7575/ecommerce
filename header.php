<!-- /components/header.php -->
<?php
// Start session
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
     <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <!-- Header Container -->
        <div class="container-fluid d-flex justify-content-between align-items-center py-5">
            <!-- Hamburger Menu -->
            <div class="ham-menu">
                <a class="fa-solid fa-bars fs-4" style="color:#000; text-decoration: none;" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></a>
            </div>

            <!-- Offcanvas Menu -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Content Sections -->
                    <div>
                        <hr>
                        <p>What's New</p>
                        <hr>
                    </div>
                    <div>
                        <p>Features</p>
                    </div>

                    <!-- Accordion Example -->
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item m-0">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button accordion-butt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- <strong>Details for Item #1.</strong> -->
                                    <!-- Sub-Accordion -->
                                    <div class="accordion" id="sub-accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="sub-headingOne">
                                                <button class="accordion-button px-0" type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseOne" aria-expanded="true" aria-controls="sub-collapseOne">
                                                    Sub-Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="sub-collapseOne" class="accordion-collapse collapse" aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
                                                <div class="accordion-body">
                                                    <strong>Details for Sub-Item #1.</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item ">
                                            <h2 class="accordion-header" id="sub-headingTwo">
                                                <button class="accordion-button collapsed px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo" aria-expanded="false" aria-controls="sub-collapseTwo">
                                                    Sub-Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="sub-collapseTwo" class="accordion-collapse collapse" aria-labelledby="sub-headingTwo" data-bs-parent="#sub-accordionExample">
                                                <div class="accordion-body">
                                                    <strong>Details for Sub-Item #2.</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Sub-Accordion -->
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed accordion-butt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Details for Item #2.</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <hr>
                        <p>What's New</p>
                        <hr>
                    </div>

                    
                    <div class="container">
    <div class="row row-cols-3 text-center">
    <a href="#" class="col p-2 border" aria-label="Instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="#" class="col p-2 border" aria-label="Facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="#" class="col p-2 border" aria-label="Twitter">
        <i class="fa-brands fa-twitter"></i>
    </a>
    <a href="#" class="col p-2 border" aria-label="LinkedIn">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="#" class="col p-2 border" aria-label="Pinterest">
        <i class="fa-brands fa-pinterest"></i>
    </a>
</div>

</div>

<div>
                    
                </div>
            </div>
</div>
            <!-- Header Title -->
            <span class="header-title fs-3 fw-bold">Rubans</span>

            <!-- Header Icons -->
            <div class="header-icon">
                <a href="#" class="me-3"><i class="fa-regular fa-user fs-4" style="color:#000;"></i></a>
                <a href="#" class="me-3"><i class="fa-solid fa-magnifying-glass fs-4" style="color:#000;"></i></a>
                <a href="#" class="me-3"><i class="fa-solid fa-cart-shopping fs-4" style="color:#000;"></i></a>
            </div>
        </div>
        
    </header>
  
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
