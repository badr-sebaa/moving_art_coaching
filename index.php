<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/608eb731ef.js"></script>
    <title>Page d'accueil</title>
</head>
<body>
    <?php session_start();
    require 'view/header.php'; ?>
    <div class="div1">
        <div class="div1-1" data-aos="fade-right" data-aos-duration="1500">
            <h1>H3 Headline</h1>
                <p>
                
                    Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet;
                    illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, 
                    ut ne quando amare inciperemus eum, 
                    quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, 
                    ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.
                </p>
        </div>
        
            <img src="view/img/bio1.JPG" alt="photo du coach" data-aos="fade-left" data-aos-duration="1500">


    </div> 
    <div class="div2" data-aos="fade-left" data-aos-duration="1500">
    <img src="view/img/bio2.JPG" alt="photo du coach" data-aos="fade-right" data-aos-duration="1500">
        <div class="div2-2">
            <h1>H3 Headline</h1>
            
                <p>
                    Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet;
                    illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, 
                    ut ne quando amare inciperemus eum, 
                    quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, 
                    ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.
                </p>
        </div>
        

    </div> 
    <div class="div3">
        <div class="div3-3" data-aos="fade-right" data-aos-duration="1500">
            <h1>H3 Headline</h1>
                <p>
                    Quare hoc quidem praeceptum, cuiuscumque est, ad tollendam amicitiam valet;
                    illud potius praecipiendum fuit, ut eam diligentiam adhiberemus in amicitiis comparandis, 
                    ut ne quando amare inciperemus eum, 
                    quem aliquando odisse possemus. Quin etiam si minus felices in diligendo fuissemus, 
                    ferendum id Scipio potius quam inimicitiarum tempus cogitandum putabat.
                </p>
        </div>
        <img src="view/img/bio3.JPG" alt="photo du coach" data-aos="fade-left" data-aos-duration="1500">
    </div>
    <?php require 'view/footer.php'; ?>
    <script>AOS.init();</script>    
</body>
</html>