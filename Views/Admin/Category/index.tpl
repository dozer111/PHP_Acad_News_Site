
{extends file='../Main/index.tpl'}
{block name=inside}
    <h1>Add Category</h1>

    <!--                     ----->.
    <!--                     ----->
    <!--                     ----->
    <!--         Форма для             ----->
    <!--     Добавления категорий       ----->
    <!--                     ----->
    <!--                     ----->
    <!--                     ----->
    <form action="/admin/category/index/" method="post">
        <div class="form-group">
            <input type="text" name="catName" class="form-control"  placeholder="Category name">
            <select name="parentId" class="form-control form-control-lg">
               {foreach $listToSelect as $item}
                <option value="{$item['id']}" >{$item['category_name']}</option>
                {/foreach}
            </select>
            <input type="submit">
        </div>

    </form>













    <h1>Update Categories</h1>
    <table border="3"  width="100%">
        <tr >
            <th>id</th>
            <th>Cat_Name</th>
            <th>Cat_Parent</th>
            <th>Img</th>
            <th>Update</th>
            <th>Delete</th></tr>
        {foreach $allCategoriesData as $category}
            <form action="/admin/category/update/" method="post" enctype="multipart/form-data" >
                <tr >
                    <td ><input type="text"  value="{$category['id']}" name="category_id"></td>
                    <td><input type="text" value="{$category['category_name']}" name="category_name"></td>
                    <td><input type="text" value="{$category['category_parent']}" name="category_parent"></td>
                    <td>
                        <img src="../../../web/img/{$category['img']}"  alt="{$category['category_name']}"
                                                width="100px"height="70px" >
                        <input type="file" name="category_photo" accept="image/*">
                    <td><input type="submit" value="Update"></td>
                    <td>Delete</td>
                </tr>
            </form>

        {/foreach}


    </table>

















{/block}