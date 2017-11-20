{extends file='../layout.tpl'}
{block name=body}
<div id="userContainer">

    <div id="userSidebar">
        <div class="list-group">

            <a href="#" class="list-group-item">text inside 6</a>
            <a href="#" class="list-group-item">text inside 7</a>
            <a href="#" class="list-group-item">text inside 8</a>
            <a href="#" class="list-group-item">text inside 9</a>
            <a href="#" class="list-group-item">tex inside 10</a>
            <a href="#" class="list-group-item">text inside 11</a>
            <a href="#" class="list-group-item">text inside 12</a>
        </div>
    </div>








    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--       -->
    <!--   Right articles Part    -->
    <!--      If user is unregistered, he    -->
    <!--      can see only short text        -->
    <!--       |||||||||||||||||||||||||||           -->
    <!--   Every registered user can see his articles      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <div id="userArticles" class="articleMain">

    {if !empty($userNews)}

        {foreach $userNews as $soloPost}
            <div class="soloArticle">
            <h2>{$soloPost['title']}</h2>
            <img src="/../../web/img/{$soloPost['image']}" alt="{$soloPost['title']}">
                <p>{$soloPost['text_short']}</p>
            {if isset($smarty.session.user)&& $smarty.session.user['id']==$soloPost['author_id']}
                <button class="testB" class="showArticle">Show all article</button>
                <button class="testB1">Hide this article </button>
                <div class="articleText " id="article{$soloPost['id']}">

                    <p>{$soloPost['text_all']}</p>
                </div>
            {/if}
                <p>Category ==> {$soloPost['category_id']}</p>
                <p>Created: {$soloPost['time_create']}</p>
                <hr>
            </div>

        {/foreach}

        {else}
        <h1>This user has no Articles</h1>
    {/if}
    </div>
</div>
{/block}