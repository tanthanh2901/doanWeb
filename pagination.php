<div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="?<?php echo "page=".max($page_active,1) ?>" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-left"></span>
                                  </span>
                              </a>
                          </li>
                          <?php
                            //result la bang du lieu cac post
                            //page active la trang dang mo hien tai voi cac gia tri [0..MaxPage-1]
                            for ($i = 0; $i < ceil($result->num_rows/8); $i++){
                          ?>
                          <li class="page-item <?php 
                            if ($i == $page_active) echo "active";
                           ?>">
                           <a href="?<?php echo "page=".$i+1 ?>" class="page-link"><?php echo "0".($i+1) ?></a></li>
                          <?php    
                          } 
                          ?> 
                          <li class="page-item">
                              <a href="?<?php echo "page=".min($page_active+2,ceil($result->num_rows/8)) ?>" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-right"></span>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
            </div>            