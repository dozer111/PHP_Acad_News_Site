{extends file='../layout.tpl'}
{block name=body}
{block name="leftMenu"}
    <div class="btn-group" id="btn-group1">
        {foreach $allCategories as $category}
            <a href="/category/show/{$category['id']}"><button>{$category['category_name']}</button></a>
        {/foreach}
    </div>
    {/block}
    <div id="right">
        <div id="inside">
        {*{debug($newsArray)}*}


            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--               SLIDER                     -->
            <!--                Start                      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <div class="container" id="test1">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../../web/img/1200500.jpg" alt="First slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../../web/img/1200500.jpg" alt="Second slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../../web/img/1200500.jpg" alt="Third slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                             href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        </div>
                        <div class="main-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h1>
                                </h1>
                                <h3>

                                </h3>
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="push">
                </div>
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--               SLIDER                     -->
                <!--                Finish                     -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->







                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--              Start categories show       -->
                <!--                               -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->


                <div id="showCats">
                    {foreach $allCategories as $category}
                    <div class="showCat">
                        <h1 align="center"><a href="/category/show/{$category['id']}">{$category['category_name']}</a> </h1>
                        <img src="../../web/img/{$category['img']}" alt="{$category['category_name']}" title="{$category['category_name']}">'

                        <ul>

                            {foreach $newsArray[$category['id']] as $post}
                            <li class="left_20"><a href="/news/show/{$post['id']}">{$post['title']}</a></li>
                                {/foreach}
                            </li>
                        </ul>

                    </div>

                    {/foreach}

                </div>

                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--      Finish categories show      -->
                <!--                                  -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->





            </div>
    </div>
{/block}