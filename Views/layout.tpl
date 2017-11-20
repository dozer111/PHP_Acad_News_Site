<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{*    <link rel="stylesheet" href="/../web/css/reset.css">*}

    <!--  --------------------------      -->
    <!--Bootstrap Include -->
    <!--  --------------------------      -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/../../web/js/main.js"></script>
    <!--  --------------------------      -->
    <!--  --------------------------      -->



    <link rel="stylesheet" type="text/css" href="/../web/css/style.css" >
    <script src="/../web/js/main.js"></script>
</head>
<body>
<div id="wrapper">

<div id="nav">
{block name='nav'}

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/category/">Category</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--     Login && Register            -->
            <!--               OR                 -->
            <!--        UserName + Logout         -->
            <!--  --------------------------      -->
            {if !isset($smarty.session.user)}
            <ul class="nav navbar-nav navbar-right">

                <li><a href="/auth/login/">Login</a></li>
                <li><a href="/auth/register/">Register</a></li>
            </ul>
                {else}

                <ul class="nav navbar-nav navbar-right">
                    {if $smarty.session.user['role']==1}
                        <li><a href="/admin/main/index">Admin Page</a></li>
                    {/if}
                    <li><a href="/user//{$smarty.session.user['id']}">{$smarty.session.user['login']}</a></li>
                    <li><a href="/auth/logout/">Logout</a></li>
                </ul>
            {/if}
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
        </div>
    </nav>
{/block}
</div>
<div id="content">
{block name=body}{/block}
</div>
{block name=footer}{/block}

</div>


</body>
</html>