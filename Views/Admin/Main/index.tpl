{extends file='../../layout.tpl'}
{block name=body}

 <!-- Главная страничка админки
  В списке можно перейти к :
  1) Добавлению/редактированию категорий
  2) Добавлению, редактированию новостей


  -->













<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--         Admin Menu                 -->
<!--            Start               -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<div id="userContainer">

    <div id="userSidebar">
        <div class="list-group">

            <a href="/admin/category/index" class="list-group-item">Categories</a>
            <a href="/admin/post/index" class="list-group-item">News</a>
            <a href="/admin/user/index" class="list-group-item">Users</a>
            <a href="/admin/tag/index" class="list-group-item">Tags</a>
            <a href="#" class="list-group-item">tex inside 10</a>
            <a href="#" class="list-group-item">text inside 11</a>
            <a href="#" class="list-group-item">text inside 12</a>
        </div>
    </div>


    <div id="userArticles" class="articleMain">
        {block name=inside}{/block}
    </div>
</div>
{/block}




















