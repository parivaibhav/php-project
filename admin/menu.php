<?php
// Connect to database
include_once "../includes/db.php";

// Fetch distinct categories
$catSql = "SELECT DISTINCT menu_category FROM menu";
$catResult = $conn->query($catSql);

$categories = [];
if ($catResult->num_rows > 0) {
    while ($cat = $catResult->fetch_assoc()) {
        $categories[] = $cat['menu_category'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Project</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <script src="../assets/js/modetoggle.js" defer></script>
</head>




<body>
    <?php include 'header.php'; ?>

    <body>
        <section id="menu" class="menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Menu</h2>
                <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
            </div><!-- End Section Title -->

            <ul class="nav nav-tabs d-flex align-content-center justify-content-center" id="menuTab" role="tablist">
                <?php foreach ($categories as $index => $cat): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="tab-<?= md5($cat) ?>" data-bs-toggle="tab" data-bs-target="#content-<?= md5($cat) ?>" type="button" role="tab" aria-controls="content-<?= md5($cat) ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                            <?= htmlspecialchars($cat) ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- Tab contents -->
            <div class="tab-content mt-5 d-flex align-items-center justify-content-center" id="menuTabContent">
                <?php foreach ($categories as $index => $cat): ?>
                    <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" id="content-<?= md5($cat) ?>" role="tabpanel" aria-labelledby="tab-<?= md5($cat) ?>">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                            <?php
                            // Fetch items for this category
                            $stmt = $conn->prepare("SELECT * FROM menu WHERE menu_category = ?");
                            $stmt->bind_param("s", $cat);
                            $stmt->execute();
                            $itemsResult = $stmt->get_result();

                            if ($itemsResult->num_rows > 0):
                                while ($item = $itemsResult->fetch_assoc()):
                            ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="..<?= htmlspecialchars($item['menu_image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($item['menu_name']) ?>" style="object-fit: cover; height: 180px;">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title"><?= htmlspecialchars($item['menu_name']) ?></h5>
                                                <p class="card-text flex-grow-1"><?= htmlspecialchars($item['menu_description']) ?></p>
                                                <p class="card-text"><strong>Price: $<?= $item['menu_price'] ?></strong></p>
                                                <button class="btn btn-primary buy-btn mt-auto"
                                                    data-id="<?= $item['menu_id'] ?>"
                                                    data-name="<?= htmlspecialchars($item['menu_name']) ?>"
                                                    data-description="<?= htmlspecialchars($item['menu_description']) ?>"
                                                    data-price="<?= $item['menu_price'] ?>"
                                                    data-image="<?= htmlspecialchars($item['menu_image']) ?>">
                                                    Buy Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            else:
                                ?>
                                <p>No items in this category.</p>
                            <?php endif;
                            $stmt->close();
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="buyModalLabel">Item Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h4 id="modal-name"></h4>
                            <img id="modal-image" src="" alt="" class="img-fluid mb-3" />
                            <p id="modal-description"></p>
                            <p><strong>Price: $<span id="modal-price"></span></strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="confirm-buy" class="btn btn-success">Confirm Purchase</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Menu Section -->

        <?php include 'footer.php'; ?>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Main JS File -->
        <script src="../assets/js/main.js"></script>



    </body>

</html>