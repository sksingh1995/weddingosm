<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div style="margin-top:0%;width:100%;">
        <a href="http://weddingosm.com">
                <img src="http://weddingosm.com/img/logo.png"
                     style="float: left !important;height: 40px;margin-top: 5px;margin:0;padding:0;" alt="Singtel" title="Singtel" />
            </a>
    </div>
    <div style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;margin-top:3%;border-top:3px solid #ee0000;">

        <div style="background:#fff;height:50px;float: left;">

            

        </div>        
    </div>

    <div style="margin-right: -15px;margin-left: -15px;">
        <div style="width:100%;">
            <p>
                Hi {{$user->name}},<br/>

                An account has been created for you.
            </p>
            <p>
            	Please verfiy your account.
            	<a target="_blank" href="{{$url}}"> Verify</a>
            </p>
        </div>
    </div>

</body>
</html>