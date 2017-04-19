<!DOCTYPE html>
<!--
Author Saketh
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("button").on("click",function(){
                    $.ajax({
                        type:"POST",
                        data:{username:$("#uname").val(),password:$("#passwd").val()},
                        url:"valid.php",
                        success:function(response){
                                $("#msg").html(response)
                        },
                        error:function(status){
                            console.log(status)
                        }
                    });
                });
            });
        </script>
        <style>
            div{
                text-align: center;
                font-size: 24px;
                border: 1px solid darkgrey;
                width: 25%;
            }
            label{
                width: 110px;
                display: inline-block;
                text-align: left;
            }
            button{
                font-size: 14px;
            }
            #login{
                font-size: 24px;
            }
            #msg{
                font-size: 12px;
            }
        </style>
        <php>
            <?php
                error_reporting(0);
                
                
                if(isset($_COOKIE['user']))
                {
                    header("Location: chat.html");
                }
            ?>
        </php>
    </head>
    <body>
        <center>
            <p id="login">Login</p>
            <p id="msg">Enter Your Login Id and Password</p>
           <div>
                <label>Username</label>
                <input type="text" id="uname"/><br>
                <label>Password</label>
                <input type="text" id="passwd"/><br>
                <button>Login!</button>
                <p></p>
            </div>
        </center>
    </body>
</html>
