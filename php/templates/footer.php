<?php
echo <<<HTML
    <!-- ===============
    BEGIN SCAFFOLD_FOOT
    ================ -->

    <div class='clearfix'></div>
    
    <footer id="document-foot">
      <img id="logo" src="$this->LOGO"/>
      <div class=copyright>$this->COPYRIGHT</div>
    </footer>
    
    <!-- Footer JS -->
    <script src="$this->JSURL/main.js"></script>
    <!--
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '$this->GOOGLEANALYTICSCODE', '$this->GOOGLEANALYTICSURL');
      ga('send', 'pageview');

    </script>
    -->
</body>
</html>
HTML;
?>