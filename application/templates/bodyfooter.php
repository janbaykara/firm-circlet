<?php ob_start(); ?>
    <!-- ===============
    BEGIN SCAFFOLD_FOOT
    ================ -->

    <div id="document-close"></div>
    
    <footer id="document-foot">
      <div class='inner'>
        <img id="logo" src="<?=$this->URL['LOGO']?>"/>
        <div class=copyright><?=$this->STR['COPYRIGHT']?></div>
      </div>
    </footer>
    
    <!-- Footer JS -->
    <script src="<?=$this->URL['JS']?>/main.js"></script>
    <!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?=$this->GOOGLEANALYTICSCODE?>', '<?=$this->GOOGLEANALYTICSURL?>');
      ga('send', 'pageview');

    </script>
    -->
</body>
</html>
<? echo ob_get_clean(); ?>