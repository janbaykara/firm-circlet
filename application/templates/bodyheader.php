<?php ob_start(); ?>
<body>
    <header id="document-head">
      <?
      $headers = ['head-constant','head-dynamic'];
      foreach($headers as $head) {
      ?>
      <div class="header row" id="<?=$head ?>">
        <div class="inner">
          <a class="col2 logo" id="header-logo" href="<?=$this->URL['ROOT']?>">
            <img src="<?=$this->URL['LOGO']?>"/>
          </a>
          <div id="header-search" class="col8">
            <div class="inner search">
              <input type='search' class='search' placeholder="Find an opening..." />
            </div>
          </div>
          <div class='col2 ontheright' id="header-nav">
            <a href="<?=$this->URL['ROOT']?>/about">about</a>
            <a href="<?=$this->URL['ROOT']?>/login">login</a>
          </div>
        </div>
      </div>
      <? } ?>
    </header>
    <!-- ===============
    END SCAFFOLD_HEAD
    ================ -->
<? echo ob_get_clean(); ?>