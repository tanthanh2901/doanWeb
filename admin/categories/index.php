<?php
    require '../../inc/init.php';
    $conn = require '../../inc/db.php';
    $categories = Category::getAllCategories($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/nice-select.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.css" />
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../css/themify-icons.css" />
    <link rel="stylesheet" href="../../css/main.css" />
    <link rel="stylesheet" href="../../css/userDashboard.css"/>
</head>
<body>
    <div class="container d-flex flex-column jumbotron my-4">
        <div class="d-flex justify-content-center mb-2">
            <p class="h2">Categories</p>
        </div>
        <div>
            <ul class="list-group category-group">
                <?php foreach($categories as $category):?>
                    <li class="list-group-item">
                        <span class="btn btn-info"><?=ucfirst($category->category)?></span>
                        <button type="button" class="btn btn-danger btn-delete ml-auto" data=<?=$category->id?>>X</button>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="mt-2 ml-2">
                <span class="btn btn-secondary" id="add-category-btn">
                    <span class="ti-plus"></span> Add more category
                </span>
            </div>
        </div>
        <div class="back-home">
            <a class="blog-post-btn" href="../index.php">
                <span class="ti-arrow-left"></span> Back 
            </a>
        </div>

        <div class="modal category-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add new category</h5>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Category</span>
                            </div>
                            <input type="text" class="form-control category-input" placeholder="Your one new category..." 
                                aria-label="New category" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary save-btn">Save changes</button>
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <confirm-modal>
    </div>
</body>
<script src="../../js/categories.js"></script>
<script src="../../js/confirmModal.js"></script>
</html>
