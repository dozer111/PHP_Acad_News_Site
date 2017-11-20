{extends file='../Main/index.tpl'}
{block name=inside}
    <h1>Tags control</h1>
  
        <table width="100%" border="3">
            <tr>
                <th style="width: 10%">ID</th>
                <th>Title</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
    {foreach $tags as $oneTag}
        <form action="/admin/tag/check/" method="post">
        <tr>

            <td style="width: 10%"><input type="number" name="tag_id" value="{$oneTag['tag_id']}"></td>
            <td style="width: 60%"><input type="text" name="tag_name" value="{$oneTag['tag_name']}" style="width: 100%"></td>
                <td><input type="submit" name='submit' value="Update"></td>
                <td><input type="submit" name='submit' value="Update"></td>

        </tr>
        </form>
    {/foreach}
        </table>
   
{/block}