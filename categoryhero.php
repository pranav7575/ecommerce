<?php
include 'db/db_connection.php';
$result = $conn->query("SELECT * FROM categories");
?>


   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

    <style>
.container {
    max-width: 100%;
    padding: 0 40px;
    position: relative;
}

.scroll-container {
    display: flex;
    overflow-x: auto;
    gap: 30px;
    scroll-behavior: smooth;
    padding: 10px 0;
}

.scroll-container::-webkit-scrollbar {
    display: none;
}

.scroll-container {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.card-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 150px;
}

.card {
    border-radius: 50%;
    height: 150px;
    width: 150px;
    overflow: hidden;
    border: 1px solid #000;
    /* border: none; */
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-body {
    text-align: center;
    padding: 10px 0;
    width: 100%;
    
}

.card-title {
    margin: 0;
    font-size: 1rem;
}

.scroll-button {
    position: absolute;
    background-color: grey;
    color: white;
    border: none;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer;
    top: 40%;
    transform: translateY(-40%);
    z-index: 2;
}

.scroll-button-left {
    left: 0;
}

.scroll-button-right {
    right: 0;
}

@media (max-width: 768px) {
    .container {
        padding: 0 30px;
    }
    
    .card {
        height: 120px;
        width: 120px;
    }
    
    .scroll-button {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .container {
        padding: 0 25px;
    }
    
    .card {
        height: 100px;
        width: 100px;
    }
    
    .scroll-container {
        gap: 20px;
    }
    
    .card-title {
        font-size: 0.9rem;
    }
}

@media (max-width: 375px) {
    .container {
        padding: 0 20px;
    }
    
    .card {
        height: 80px;
        width: 80px;
    }
    
    .scroll-container {
        gap: 15px;
    }
}
</style>

    <div class="container position-relative mt-5">
        <button class="scroll-button scroll-button-left" id="scrollLeft">&#8249;</button>
        <div class="scroll-container" id="scrollContainer">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card-container">
                <div class="card">
                    <img src="admin_area/cat_images/<?php echo $row['cat_image']; ?>" class="card-img-top" alt="<?php echo $row['cat_title']; ?>" style="object-fit: cover;height: 100%;width: 100%;">
                </div>
                <div class="card-body">
                        <h5 class="card-title"><?php echo $row['cat_title']; ?></h5>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="scroll-button scroll-button-right" id="scrollRight">&#8250;</button>
    </div>

    <script>
        const scrollContainer = document.getElementById('scrollContainer');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');

        scrollLeft.addEventListener('click', () => {
            scrollContainer.scrollBy({ left: -200, behavior: 'smooth' });
        });

        scrollRight.addEventListener('click', () => {
            scrollContainer.scrollBy({ left: 200, behavior: 'smooth' });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

