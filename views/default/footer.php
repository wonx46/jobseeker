
<footer id="footer" class="row">
    <div class="text-box box col-sm-3">
        <h4>About Jobs Alert</h4>
        <p>Person usually begins a job by becoming an employee, volunteering, or starting a business. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremque laudantium, totam rem aperiam eaque ipsa quae.</p>
    </div>
    <div class="box col-sm-3">
        <h4>Keywords by Location</h4>
        <ul>
            <li><a href="#">Administrator</a></li>
            <li><a href="#">Accounts Officer</a></li>
            <li><a href="#">PHP Developer</a></li>
            <li><a href="#">UI/UX Designer</a></li>
            <li><a href="#">Project Manager</a></li>
            <li><a href="#">Public Relation Officer</a></li>
        </ul>
    </div>
    <div class="box col-sm-3">
        <h4>Keywords by Market</h4>
        <ul>
            <li><a href="#">Administrator</a></li>
            <li><a href="#">Accounts Officer</a></li>
            <li><a href="#">PHP Developer</a></li>
            <li><a href="#">UI/UX Designer</a></li>
            <li><a href="#">Project Manager</a></li>
            <li><a href="#">Public Relation Officer</a></li>
        </ul>
    </div>
    <form action="#" class=" col-sm-3">
        <h4>Subscribe for Latest Jobs Alerts</h4>
        <input type="text" placeholder="Name" required>
        <input type="text" placeholder="Email" required>
        <input type="submit" value="Subscribe Alerts">
    </form>
    </div>
    <div class="container">
        <div class="bottom-row"> <strong class="copyrights"><p class="text-muted credit">&copy; <?php _e(APP_NAME); ?></p></strong>
            <div class="footer-social">
            <ul>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
 
        <!-- <div class="row" id="footer">
            <hr />
            <div class="col-md-12">
                
                <p class="text-muted credit">&copy; <?php _e(APP_NAME); ?></p>
             </div>
        </div> -->
    
    </div> 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php _e(THEME_ASSETS); ?>js/bootstrap.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/holder.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/owl.carousel.min.js"></script> 
    <script src="<?php _e(THEME_ASSETS); ?>js/jquery.mCustomScrollbar.concat.min.js"></script> 
    <script src="<?php _e(THEME_ASSETS); ?>js/custom.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if (isset($filestyle)): ?>
        <script src="<?php _e(THEME_ASSETS); ?>js/bootstrap-filestyle.min.js"></script>
    <?php endif; ?>
    <?php if (isset($markdown)): ?>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/markdown.js"></script>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/to-markdown.js"></script>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <?php endif; ?>
    
    <?php if (GA_TRACKING != ''): ?>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php _e(GA_TRACKING); ?>']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <?php endif; ?>
  </body>
</html>