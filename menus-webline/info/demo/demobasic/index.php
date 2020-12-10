<html>

<head>
    <meta charset="utf-8">
    <!--wp-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prueba WhatsApp</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--wp-->

    <title>Carta</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilosOtros.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
    <link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
    <link rel="shortcut icon" href="images/weblineico.png">

</head>

<body>
    <!--wp-->
    <a href="https://wa.me/5211234567890?text=Aquí%20se%20agregará%20un%20texto%20personalizado" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <!--wp-->
    <div class="image-main">
        <h5>Por favor active la rotación de pantalla</h5>
        <img src="images/rotary.gif" alt="">
    </div>
    <div class="book_wrapper">
        <a id="next_page_button"></a>
        <a id="prev_page_button"></a>

        <div id="mybook" style="display:none;">
            <div class="b-load">
                <div>
                    <img src="images/menu1.jpeg" alt="" />
                </div>
                <div>
                    <img src="images/menu2.jpeg" alt="" />
                </div>
                <div>
                    <img src="images/menu3.jpeg" alt="" />
                </div>
                <div>
                    <img src="images/menu4.jpeg" alt="" />
                </div>
                <div>
                    <img src="images/menu4.jpeg" alt="" />
                </div>
                <div>
                    <img src="images/menu4.jpeg" alt="" />
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function() {
                var $mybook = $('#mybook');
                var $bttn_next = $('#next_page_button');
                var $bttn_prev = $('#prev_page_button');
                var $loading = $('#loading');
                var $mybook_images = $mybook.find('img');
                var cnt_images = $mybook_images.length;
                var loaded = 0;

                $mybook_images.each(function() {
                    var $img = $(this);
                    var source = $img.attr('src');
                    $('<img/>').load(function() {
                        ++loaded;
                        if (loaded == cnt_images) {
                            $loading.hide();
                            $bttn_next.show();
                            $bttn_prev.show();
                            $mybook.show().booklet({
                                name: null, //  
                                width: 800, //  
                                height: 500, //   
                                speed: 600, //  
                                direction: 'LTR', //  
                                //  
                                next: $bttn_next, //  
                                prev: $bttn_prev, //  

                            });
                            Cufon.refresh();
                        }
                    }).attr('src', source);
                });

            });
        </script>

</body>

</html>