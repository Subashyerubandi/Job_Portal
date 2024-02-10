<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: black;
            height: 100%;
        }
        .c12{
            background-color: rgb(251, 251, 113);
            padding: 20px;
            color: black;
            text-align: center;
            font-size: 25px;
        }
        .c211{
            text-align: center;
            color: yellow;
            padding-top: 10px;
        }
        .c22{
            font-style: inherit;
            font-size: 16px;
            color: yellow;
        }
        .c23{
            color: white;
            width: 98%;
            height: 28px;
            background: transparent;
            padding: 4px;
            margin-top: 18px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid rgb(255, 234, 0);
            font-size: 16px;

        }
        .c24{
            font-size: 17px;
            background-color: yellow;
            transition: 0.5s ease;
            margin-top: 10px;
            height: 40px;
            width: 80px;
            padding: 6px;
            border-radius: 6px;
            cursor: pointer;
        }
        .c24:hover{
            background-color: rgb(246, 246, 173);
        }
        .c13{
            clear: both;
            float: left;
            color: white;
            /*border: 1px solid white;*/
            padding: 30px;
            float: left;
            font-size: 24px;
        }
        form{
            float: right;
            border: 1px solid yellow;
            width: 350px;
            height: 440px;
            padding: 0px 30px 30px 30px;
            margin-top: 60px;
            margin-right: 60px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(246, 246, 206);
        }
        .text{
            color: white;
        }
        @media screen and (max-width:1069px) {
            .c13{
                font-size: 20px;
            }
        }
        @media screen and (max-width:948px) {
            .c13{
                font-size: 18px;
            }
            form{
                clear: both;
                float: none;
                margin: auto;
            }
        }
        @media screen and (max-width:919px) {
            .c13{
                font-size: 18px;
            }
            
        }
        @media screen and (max-width:889px) {
            .c13{
                font-size: 16px;
            }
            .c12{
                font-size: 22px;
            }
        }
        @media screen and (max-width:839px) {
            .c13{
                font-size: 16px;
            }
            .c12{
                font-size: 18px;
            }
        }
        @media screen and (max-width:477px) {
            .c13{
                font-size: 13px;
            }
            form{
                clear: both;
                float: none;
                margin: auto;
            }
        }
    </style>
    <title>Register</title>
</head>
<body>
<div class="c1">
    <div class="c2">
            <div class="c12"><h1>JOB PORTAL</h1></div>
            <div class="c13">
                <h1 class="c11">You can apply Jobs here...<br>And you can Post Jobs here...</h1>
                <p>To get started please signin</p>


            </div>
            <div class="c111">
                <form method="POST" class="c21">
                    <div class="c211"><h2>Register Here</h2></div>
                    <input type="text" class="c23" id="exampleInputname" placeholder="enter your name" name="name"><br>
              
                    <input type="email" class="c23" id="exampleInputEmail1" placeholder="enter your email" aria-describedby="emailHelp" name="email"><br>
              
                    <input type="number" class="c23" id="exampleInputnumber" placeholder="enter your phone number" name="number"><br>
             
                    <input type="password" class="c23" id="exampleInputPassword1" placeholder="enter password" name="password"><br>
              
                    <input type="password" class="c23" id="exampleInputPassword2" placeholder="conform password"><br>
              
                    <input type="submit" class="c24" name="register">
                    <br>
                    <br>
                    <p class="text">Already Registered? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>