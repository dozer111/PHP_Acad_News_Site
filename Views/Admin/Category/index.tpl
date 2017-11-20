
{extends file='../Main/index.tpl'}
{block name=category}
    <h1>Add Category</h1>
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
    <table id="adminCatTable" border="4px" width="70%">
        <tr >
            <th>id</th>
            <th>Cat_Name</th>
            <th>Cat_Parent</th>
            <th>Img</th>
            <th>Update</th>
            <th>Delete</th></tr>

        {foreach $allCategoriesData as $category}
        <tr >

            <td>{$category['id']}</td>
                <td><input type="text" value="{$category['category_name']}"></td>
                <td><input type="text" value="{$category['id']}"></td>
                <td><img src="../../../web/img/{$category['img']}" alt="{$category['category_name']}" width="100px"height="70px">
                <td>Update</td>
                <td>Delete</td>
        </tr>
        {/foreach}


    </table>

















{/block}