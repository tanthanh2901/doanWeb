<!-- parameters: $post -->
<?php
    $categoryIDsOfPost = PostToCategories::getPostToCategories($post->id, $conn);
    $categoryIDs = array();
    foreach($categoryIDsOfPost as $cat) {
        $categoryIDs[]= $cat->categoryID;
    }
    $categoriesOfPost = Category::getCategoriesByIDs($categoryIDs, $conn);

?>
<div class="single-amenities">
    <div class="amenities-thumb">
        <img
            class="img-fluid w-100"
            src=<?=$post->postImg?>
            alt=""
        />
    </div>
    <div class="amenities-details">
        <h5>
            <a href="blog-single.php?p=<?=$post->id?>">
                <?= $post->postTitle?>
            </a>
        </h5>
        <div class="amenities-meta mb-10">
            <a href="blog-single.php?p=<?=$post->id?>" class=""
                ><span class="ti-calendar"></span><?=$post->date?></a
            >
        </div>
        <!-- <p>
        Creepeth green light appear let rule only you're divide
        and lights moving and isn't given creeping deep.
        </p> -->

        <div class="d-flex justify-content-between mt-20">
            <div>
                <a href="blog-single.php?p=<?=$post->id?>" class="blog-post-btn">
                Read More <span class="ti-arrow-right"></span>
                </a>
            </div>
            <div class="category">
                <a href="blog-single.php?p=<?=$post->id?>">
                    <span class="ti-folder mr-1"></span> <?php
                        foreach($categoriesOfPost as $category){
                            echo $category->category;
                        }
                    ?>
                </a>
            </div>
        </div>
    </div>
</div>