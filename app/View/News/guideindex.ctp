<div class="grid_12">
            <section id="content" class="grid_9 omega">
                <div id="products" class="isotope straightDown" style="position: relative; overflow: hidden; height: 1540px;">
                <?php 
                    for($i=0 ;$i<count($news); $i++){  
                    $top = $i*220; 
                ?>
                    <article class="post-entry isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, <?php echo $top;?>px, 0px); width: 700px; height: 200px;">
                        <div class="post-media">
                            <img src="<?php if($news[$i]['News']['image'] != '')
                                                echo h($news[$i]['News']['image']);
                                            else 
                                                echo 'noimage.jpg'; ?>" alt="" style="width: auto;">
                        </div>
                        <a class="post-content" href="<?php echo 'view/'.$news[$i]['News']['id']?>">
                            <i></i>
                            <p class="post-title"><?php echo h($news[$i]['News']['title']); ?></p>
                            <p class="post-desc">
                                <?php echo h($news[$i]['News']['summary']); ?>
                            </p>
                            <span class="post-author"><?php echo h($news[$i]['users']['name']); ?></span><br>
                            <span class="post-meta"><?php echo h($news[$i]['News']['time']); ?></span>
                        </a>
                    </article>
                <?php } ?>
 
                </div>
                <article class="pagination">
                    <div class="paginate">
                    <?php
                    echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => false, 'disabledTag ' => 'span', 'class' => 'next page-numbers'), null, array('class' => 'prev page-numbers'));
                    echo $this->Paginator->numbers(array('tag' => false, 'class' => 'page-numbers','separator' => '', 'currentTag' => 'span','currentClass' => 'current'));
                    echo $this->Paginator->next(__('Next') . ' >', array('tag' => false, 'disabledTag ' => 'span', 'class' => 'next page-numbers'), null, array('tag' => 'a','class' => 'next page-numbers'));
                    ?>
                   <!--     <a class="prev page-numbers" href="#">&lt; Previous</a>
                        <a class="page-numbers" href="#">1</a>
                        <span class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <span class="page-numbers dots">…</span>
                        <a class="page-numbers" href="#">10</a>
                        <a class="next page-numbers" href="#">Next &gt;</a>   -->
                    </div>
                </article>
                <div class="clearfix"></div>
            </section> <!-- #content -->
        </div>