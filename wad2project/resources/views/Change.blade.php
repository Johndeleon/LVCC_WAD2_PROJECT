<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="wad2project.css">
    <title>ChangeCredentials</title>
</head>
<body>

<div class="body">
        <header class="header">
            Mineclopedia
        </header>

        <div>
             @if(Session::has('flash_message'))
                    <div class="session">{{Session::get('flash_message')}}</div>
              @endif
        </div>

        <div class="register" style="background-color:#98fb98;">
        <table class="session">
        <form method="post" action="ChangeNow">
        {{csrf_field()}}
            <tr >
                <td>
                               <div >
                Name:</td><td><input type="text" name="name" value="{{$change->name}}" required>
            </div> 
                </td>
            </tr>
            <tr>
                <td>
                                <div>
            Email:</td><td><input type="text" name="email" value="{{$change->email}}" required>
            </div>
                </td>
            </tr>
            <tr>
                <td>
                                <div>
            Current Password</td><td><input type="password" name="currentpass" required> 
            </div>
                </td>
            </tr>
            <tr>
                <td>
                              <div>
            New Password</td><td><input type="password" name="newpassword" required>
            </div>  
                </td>
            </tr>
            <tr>
                <td>
                                <div>
            Confirm Password</td><td><input type="password" name="verpassword" required>
            </div>
                </td>
            </tr>
        </table>





            <button class="button4" style="margin-left:3vw;">Change Credentials</button>
            </forms>
        </div>
</div>
</body>
</html>