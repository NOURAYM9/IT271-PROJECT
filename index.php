
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triple N</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="loginBody">
    <header class="navbar" style="background-color:black;">
        <div class="container">
            <div class="conn">
                <div class="log">
                    <a href="index.php"><img src="./images/1.png" style="margin-top: -16px;height: 95px;"></a>
                </div>
                <div class="aaa">
                    <a href="products.php" style="text-decoration: none;font-size: 65px;color: white;">Abaya & More</a>
                </div>
                
            </div> 
        </div>
    </header>
    
    
    <div class="container">
        
        <div class="loginForm">
            <form action="products.php" method="POST" id="form">
                <h2>تسجيل الدخول</h2>
                <input  dir="rtl" type="email" name="email" placeholder="ادخل الايميل">
                <input dir="rtl"  type="password" name="pass"  placeholder="ادخل الرمز">
                <input type="submit" name="ok" value="دخول"> 
            </form>
        </div>
        <section class="products">
            <div class="wholeDetails">
                <div class="notDetails">
                    <img style="width: 50px; padding-top: 1em; padding-bottom:0.5em;" src="./images/headphones.png" alt="">
                    <h3>خدمة العملاء</h3>
                    <div class="underContact">
                        <p>متوفرين لخدمتكم على مدار الساعة 24 ساعة</p>
                    </div>
                </div>
                <div class="notDetails">
                    <img style="width: 50px; padding-top: 1em; padding-bottom:0.5em;" src="./images/money.png" alt="">
                    <h3>طرق الدفع</h3>
                    <div class="underContact">
                        <p>متنوعة وتلبي احتياجاتك ( مدى ، فيزا ، تحويل بنكي )</p>
                    </div>
                </div>
                <div class="notDetails">
                    <img style="width: 50px; padding-top: 1em; padding-bottom:0.5em;" src="./images/car.png" alt="">
                    <h3>التوصيل فائق السرعة</h3>
                    <div class="underContact">
                        <p>طرق توصيل متنوعة وسريعة لجميع مناطق المملكة</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="homePay">
            <img src="./images/cc.webp" alt="">
            <img src="./images/applepay.svg" alt="">
        </div>
        
        
    </div>
    
    

    


    <footer dir="rtl">
        <div class="contact">
            <h2>من نحن
            </h2>
            <ul>
                <li>متجر مختص بالعبايات الجاهزة و التفصيل</li>
            </ul>
        </div>
        <div class="contact">
            <h2>روابط مهمة

            </h2>
            <ul>
                <li>تواصل معنا</li>
                <li>التوصيل والشحن</li>
                <li>سياسة الاسترجاع والاستبدال</li>
            </ul>
        </div>
        <div class="contact">
            <h2>تابعنا على الشبكات الاجتماعية

            </h2>
            <ul>
                <li><img style="width: 40px;" src="./images/instagram.png" alt=""></li>
            </ul>
        </div>
    </footer>
</body>
</html>
