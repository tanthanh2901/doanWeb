<!-- parameters: totalPages -->

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="ti-arrow-left"></span>
                </span>
            </a>
        </li>
        <?php for($i=1; $i<= $totalPages; $i++):?>
            <li class="page-item <?php if($page+1==$i) echo "active";?>">
                <a href="<?php 
                    $url = $_SERVER['REQUEST_URI'];
                    $parsed_url = parse_url($url);
                    $params = array();
                    if (isset($parsed_url['query'])) {
                        parse_str($parsed_url['query'], $params);
                    }
                    $params['page'] = $i-1;
                    $url = $parsed_url['path'] . '?' . http_build_query($params);
                    echo $url;
                ?>" class="page-link"><?=$i?></a>
            </li>
        <?php endfor;?>

        <!-- <li class="page-item active"><a href="#" class="page-link">02</a></li>
        <li class="page-item"><a href="#" class="page-link">03</a></li>
        <li class="page-item"><a href="#" class="page-link">04</a></li>
        <li class="page-item"><a href="#" class="page-link">09</a></li> -->
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <span aria-hidden="true">
                    <span class="ti-arrow-right"></span>
                </span>
            </a>
        </li>
    </ul>
</nav>