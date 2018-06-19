<footer>
    <p><small>&copy; 2018 by <a href="about.php" target="_blank">Huy Anh Tran</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank"> Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank"> Valid CSS </a> ~ <a href="disclaimer.php" target="_blank"> Disclaimer</a></small></p>
    </footer>
    </div>
    <script>
        $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
        $('#cssmenu #menu-button').on('click', function(){
          var menu = $(this).next('ul');
          if (menu.hasClass('open')) {
            menu.removeClass('open');
          } else {
            menu.addClass('open');
          }
        });
    </script>
    
    
    
</body>
</html>