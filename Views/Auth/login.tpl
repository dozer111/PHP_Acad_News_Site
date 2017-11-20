{extends file='../layout.tpl'}

{block name=body}

    <form action="/auth/login/" method="post" >
        <div class="form-group" style="padding-top: 52px">
            <label for="exampleInputEmail1">Login</label><br>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
            <br>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label><br>
            <input name="pass1" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div id="textError"></div>
        <input type="submit" >
    </form>
<div id="wrong_pass">
    <h1></h1>
</div>


{/block}
