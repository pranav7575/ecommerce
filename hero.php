<?php
include 'db/db_connection.php'; // Include the database connection

// Fetch slider data from the database
$result = $conn->query("SELECT * FROM slider");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
.carousel {
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
}

.carousel-inner {
    max-height: 700px;
}

.carousel-item img {
    width: 100%;
    height: 700px;
    object-fit: cover;
}

@media (max-width: 768px) {
    .carousel-inner {
        max-height: 300px;
    }
    
    .carousel-item img {
        height: 300px;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
    }
}

@media (max-width: 576px) {
    .carousel-inner {
        max-height: 200px;
    }
    
    .carousel-item img {
        height: 200px;
    }
}



   
</style>
<div style="margin-top: 20px;">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $isFirstSlide = true; // To track the first slide for setting "active" class
            while ($row = $result->fetch_assoc()) {
                $slide_name = $row['slider_name'];
                $slide_image = $row['slider_image']; // Assuming this contains the image file name or path
            ?>
                <div class="carousel-item <?php echo $isFirstSlide ? 'active' : ''; ?>" data-bs-interval="5000">
                    <img src="admin_area/slider_images/<?php echo $slide_image; ?>" class="d-block w-100" alt="<?php echo $slide_name; ?>">
                </div>
            <?php
                $isFirstSlide = false; // After the first slide, set this to false
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
