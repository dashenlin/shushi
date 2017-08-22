<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div class="footer">
      <div class="container">
        <div class="code">
          <img src="<?php echo IMG_PATH;?>shoushi/code.jpg" alt="">
        </div>
        <div class="fot-cont">
          <p>
            <ul class="fot-cont-nav">
              <li><a href="<?php echo siteurl($siteid);?>">网站首页</a></li>
              <li><a href="<?php echo $CATEGORYS['11']['url'];?>"><?php echo $CATEGORYS['11']['catname'];?></a></li>
              <li><a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $CATEGORYS['15']['catname'];?></a></li>
              <li><a href="<?php echo $CATEGORYS['25']['url'];?>"><?php echo $CATEGORYS['25']['catname'];?></a></li>
              <li><a href="<?php echo $CATEGORYS['28']['url'];?>"><?php echo $CATEGORYS['28']['catname'];?></a></li>
              <li><a href="<?php echo $CATEGORYS['36']['url'];?>"><?php echo $CATEGORYS['36']['catname'];?></a></li>
              <li><a href="<?php echo $CATEGORYS['43']['url'];?>"><?php echo $CATEGORYS['43']['catname'];?></a></li>
            </ul>
          </p>
          <p>地址：<?php echo WEB_ADDRESS;?></p>
          <p>Copyright &copy; 2017 FIRST LEAP All Rights Reserved <?php echo WEB_ICP;?></p>
        </div>
      </div>
    </div>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JS_PATH;?>shoushi/bootstrap.min.js"></script>
    <script src="<?php echo JS_PATH;?>shoushi/index.js"></script>
    <script src="<?php echo JS_PATH;?>shoushi/include.js"></script>
  </body>
</html>
