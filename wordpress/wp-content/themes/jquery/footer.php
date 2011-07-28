
<!-- footer -->
<footer class="clearfix">
	  
  <div class="constrain">
  	
  	<?php // get_sidebar( 'footer' ); ?>
  	
    <div class="col7-3 col">
      <h3><span>Quick Access</span></h3>
      <div class="cdn">
        <strong>CDN</strong>
        <span>//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js</span>
      </div>
      <div class="download">
        <strong>Download jQuery 1.5.1:</strong>
        <span><a href="#">Minified <em>(29KB)</em></a>
        <a href="#">Unminified <em>(212KB)</em></a></span>
      </div>
      <ul class="footer-icon-links">
        <li class="footer-icon icon-github"><a href="http://github.com/jquery/jquery">Github <small>jQuery <br>Source</small></a></li>
        <li class="footer-icon icon-forum"><a href="http://forum.jquery.com">Forum <small>Community <br>Support</small></a></li>
        <li class="footer-icon icon-bugs"><a href="http://bugs.jquery.com">Bugs <small>Issue <br>Tracker</small></a></li>
      </ul>
    </div>
    
    <div class="col7-2 col">
      <h3><span>Presentations</span></h3>
      <ul class="presentations">
        <li>
          <a href="#">
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/content/presentations/building-spas-jquerys-best-friends.jpg" width="142" height="92" /></span>
            <strong>Building Single Page Applications With jQuery's Best Friends</strong><br />
            <cite>Addy Osmoni</cite>
          </a>
        </li>
        <li>
          <a href="#">
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/content/presentations/addyosmani-2.jpg" width="142" height="92" /></span>
            <strong>jQuery Performance<br />Tips &amp; Tricks</strong><br />
            <cite>Addy Osmoni</cite>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="col7-2 col">
      <h3><span>Books</span></h3>
      <ul class="books">
        <li>
          <a href="#">
            <span class="bottom"><img src="<?php bloginfo( 'template_directory' ); ?>/content/books/learning-jquery-1.3.jpg" width="92" height="114" /></span>
            <strong>Learning jQuery 1.3</strong><br />
            <cite>Karl Swedberg and Jonathan Chaffer</cite>
          </a>
        </li>
        <li>
          <a href="#">
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/content/books/jquery-in-action.jpg" width="92" height="114" /></span>
            <strong>jQuery in Action</strong><br />
            <cite>Bear Bibeault and Yehuda Katz</cite>
          </a>
        </li>
        <li>
          <a href="#">
            <span><img src="<?php bloginfo( 'template_directory' ); ?>/content/books/jquery-enlightenment.jpg" width="92" height="114" /></span>
            <strong>jQuery Enlightenment</strong><br />
            <cite>Cody Lindley</cite>
          </a>
        </li>
      </ul>
    </div>
    <div id="legal">
      <ul class="footer-site-links">
        <li class="icon-learning-center icon"><a href="#">Learning Center</a></li>
        <li class="icon-forum icon"><a href="#">Forum</a></li>
        <li class="icon-api icon"><a href="#">API</a></li>
        <li class="icon-twitter icon"><a href="#">Twitter</a></li>
        <li class="icon-irc icon"><a href="#">IRC</a></li>
      </ul>
        <p class="copyright">Copyright &copy; 2011 by <a href="#">The jQuery Project</a>.<br /><span class="sponsor-line">Sponsored by <a href="http://mediatemple.net" class="mt-link">Media Temple</a> and <a href="#">others</a>.</span></p>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- scripts // Must use either 1.5.0 or 1.5.2, but 1.5.1 will break our menus -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo( 'template_directory' ); ?>/resources/js/jquery-1.5.min.js"%3E%3C/script%3E'))</script>

<script id="tooltip-template" type="text/html"> 
  <div class="tooltip">
    <a href="${url}" title="${title}" class="jq-tooltip-branding"><img src="${preview}" /></a>
    <ul>{{each(i,link) links}}<li><a href="${link[1]}">${link[0]}</a></li>{{/each}}</ul>
  </div>
</script> 

<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/plugins/jquery.ba-outside-events.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/plugins/syntaxhighlighter.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/plugins/jquery.infieldlabel.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/plugins/app.base.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/plugins.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/resources/js/scripts.js"></script>

<!-- /scripts -->

<?php wp_footer(); ?>

</body>
</html>