﻿<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title></title>
    <style>
    </style>
    <script type="text/javascript">
        function registClick(){
            const mailPattern=/^[A-Za-z0-9]{1}[A-za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
            const passPattern=/^(?=.*[A-Z])(?=.*[.?/-])[a-zA-Z0-9.?/-]{8,24}$/;
    
            let mail =document.getElementById("usermail").value;
            let pass =document.getElementById("pass").value;
            let isSuccess=true;
    
            document.getElementById("errorMsg").innerHTML="";
            if(mailPattern.test(mail)==false){
                let errorMsgTag=document.createElement("p");
                errorMsgTag.textContent="正しいメールアドレスを入力してください。メールアドレスの形式が不正です。";
                document.getElementById("errorMsg").appendChild(errorMsgTag);
                isSuccess =false;
            }
            if(passPattern.test(pass)==false){
                let errorMsgTag=document.createElement("p");
                errorMsgTag.textContent="正しいパスワードを入力してください。パスワードは８文字以上で英字(大文字/小文字)、数字、記号が一つ以上含まれる必要があります";
                document.getElementById("errorMsg").appendChild(errorMsgTag);
                isSuccess =false;
            }
            if(isSuccess==true){
                window.location.href='kaihatuTOP.php';
            }
        }
    
        </script>
    <link href="styleLOGIN.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="kaihatuTOP.php">
              <img src="img/TopSix.png" alt="" width="85" height="70">
            </a>
            <form class="d-flex" action="kaihatuITIRAN.php">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary me-2" type="submit"><i class="bi bi-search"></i>Search</button>
              <a  href="kaihatuCART.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-cart"></i>cart</button></a>
              <a  href="kaihatuOKINIIRI.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-star"></i>favorite</button></a>
              <a  href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-person-circle"></i>login</button></a>
            </form>
          </div>
        </nav>
        </div>
        
    <div id="maindiv" class="container">
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6">
                <h1 class="text-center mb-5">ログイン</h1>
                <p class="fs-3">会員登録がお済みのお客様</p>
                <label for="lastname">メールアドレス</label>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="usermail" placeholder="abc@abc.com">
                            
                        </div>
                    </div>
                </div>
                <label for="lastname">パスワード</label>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="pass" placeholder="abc@abc.com">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-1 mb-1 alert-danger text-center" id="errorMsg">
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary" type="button"
                                onclick="registClick()">ログイン</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="owasure">
            <button class="btn btn-outline-dark  me-2 btn-sm"   type="button">パスワードをお忘れですか？</button>
           </div>
        
          <div class="sinki">
            <a href="kaihatuTOUROKU.php"  class="TOPNIMODORU"><button class="btn btn-outline-dark  me-2 btn-lg"   type="button"> 新規会員登録</button></a>
          </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>