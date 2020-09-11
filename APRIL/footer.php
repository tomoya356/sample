<div id="footer" class="container">
            <div class="footer-icon">
                <a href=""><i class="fab fa-instagram instagram"></i></a>
                <a href=""><i class="fab fa-facebook-square facebook"></i></a>
            </div>
        </div><!-- /footer -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(function(){
            var setImg = '#ap-photo';
            var fadeSpeed = 1500;
            var switchDelay = 5000;
         
            $(setImg).children('img').css({opacity:'0'});
            $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
         
            setInterval(function(){
                $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
            },switchDelay);
        });

        $(function(){
            var setImg = '#cf-photo';
            var fadeSpeed = 1500;
            var switchDelay = 5000;
         
            $(setImg).children('img').css({opacity:'0'});
            $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
         
            setInterval(function(){
                $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
            },switchDelay);
        });

        $(function(){
            var setImg = '#bg-photo';
            var fadeSpeed = 1500;
            var switchDelay = 5000;
         
            $(setImg).children('img').css({opacity:'0'});
            $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
         
            setInterval(function(){
                $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
            },switchDelay);
        });

        </script>
    </body>
</html>
