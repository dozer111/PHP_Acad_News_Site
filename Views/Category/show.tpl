{extends file='../layout.tpl'}
{block name=body}
 {*{debug($page)}
    {debug($maxPages)}
   *}

    <div class="wrapper">
   {foreach $pagePosts as $post}
    <div class="container1">
       <h1><a href="/news/show/{$post['id']}">{$post['title']}</a></h1>
        <img src="/../../web/img/{$post['image']}" alt="{$post['title']}">
        <p>{$post['text_short']}</p>
        <p>{$post['author_id']}</p>
        <p>Created at {$post['time_create']}</p>
        
   </div>
       <hr style="height: 20px" color="black">
   {/foreach}
    </div>






    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!--              Start NAVIGATION                   -->
    <!--                                                 -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {if $page==1 || $page==2 }
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$maxPages}"> >> </a></li>
            {elseif $page>2 &&$page<$maxPages}
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page=1"><<< </a></li>
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page={$page-1}"><<</a></li>
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page={$page-1}">{$page-1}</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$page}">{$page}</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$page+1}">{$page+1}</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$page+1}"> >> </a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$maxPages}"> >>> </a></li>
                {else}
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page=1"><<< </a></li>
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page={$page-1}"><<</a></li>
                <li class="page-item "><a class="page-link" href="/category/show/{$url}/?page={$page-1}">{$page-1}</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$page}">{$page}</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/{$url}/?page={$page+1}">{$page+1}</a></li>
            {/if}


        </ul>
    </nav>
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!--             End NAVIGATION                   -->
    <!--                                                 -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->














{/block}