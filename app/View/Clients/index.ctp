<?php 
    function printCategory($categorys,$id,$url)
        {       
            foreach($categorys as $category)
            {
                if($category['Categoryproduct']['idParent'] == $id)
                {
                    echo "<li>";
                    echo '<a href="'.$url.'clients/index/'.$category['Categoryproduct']['id'].'">'.$category['Categoryproduct']['nameCategoryProduct'].'</a>';
                    echo '<ul>';
                    printCategory($categorys,$category['Categoryproduct']['id'],$url);
                    echo '</ul>';
                    echo "</li>";
                }
            }
    }
?>
<div class="grid_12">
            <aside class="left-panel grid_3 alpha">
                <ul class="flat-menu">
                    <?php
                        $categorys = $this->requestAction('Categoryproducts/loadAllCategory');
                        printCategory($categorys,0,$this->webroot); 
                    ?>
                </ul>
            </aside>
            
            <section id="content" class="grid_9 omega">
                <article id="options-filter" class="post-filter overlay box-outline">
                    <label>Show Only</label> 
                    <div class="selector" style="width: 190px;"><span style="width: 165px; -webkit-user-select: none;">Choose an option…</span><select data-option-key="filter">
                        <option value="">Choose an option…</option>
                        <option value=".post-entry:not(.plastic)">Plastic</option>
                        <option value=".post-entry:not(.side)">Side</option>
                        <option value=".post-entry:not(.chair)">Chair</option>
                    </select></div>
                    <label>Sort by</label>
                    <div class="selector" style="width: 190px;"><span style="width: 165px; -webkit-user-select: none;">Choose an option…</span><select data-option-key="sortBy">
                        <option value="">Choose an option…</option>
                        <option value="price">Price</option>
                        <option value="alphabetical">Alphabetical</option>
                    </select></div>
                    <div class="options" data-option-key="layoutMode">
                        <a href="#" class="filter-button icon-th-large" data-option-value="fitRows">&nbsp;</a>
                        <a href="#" class="filter-button icon-align-justify" data-option-value="straightDown">&nbsp;</a>
                    </div>
                </article>
                <div class="clearfix"></div>
                
                <article class="cat-title">
                    <span>Living Room</span>
                </article>
                <div class="clearfix"></div>
                
                <div id="products" class="isotope straightDown" style="position: relative; overflow: hidden; height: 1540px;">
                    <?php 
                    for($i=0 ;$i<count($Products); $i++){  
                    $top = $i*220; 
                ?>
                    <article class="post-entry isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, <?php echo $top;?>px, 0px); width: 700px; height: 200px;">
                        <div class="post-media">
                            <img src="<?php if($Products[$i]['Product']['nameProduct'] != '')
                                                echo h($Products[$i]['Product']['nameProduct']);
                                            else 
                                                echo 'noimage.jpg'; ?>" alt="" style="width: auto;">
                        </div>
                        <a class="post-content" href="<?php echo $this->webroot.'clients/viewproduct/'.$Products[$i]['Product']['idSite']; ?>">
                            <i></i>
                            <p class="post-title"><?php echo h($Products[$i]['Product']['nameProduct']); ?></p>
                            <p class="post-desc">
                                
                            </p>
                            <span class="post-meta"><span class="price" data-value="1785"><?php echo number_format($Products[$i]['Product']['wholesale'], 0, ',', '.'); ?> VNĐ</span></span>
                            <div class="add-basket"><a href="checkout.html" class="bt-basket">&nbsp;</a></div>
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
                    </div>
                </article>
                <div class="clearfix"></div>
            </section> <!-- #content -->
        </div>