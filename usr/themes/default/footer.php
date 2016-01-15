<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
    <footer id="footer" role="contentinfo">
    <section >Built by 王九貓 <a href="http://www.winecat.me/index.php/feed/" target="_blank" title="Facebook"><i class="fa fa-rss"></i><span class="hidden">Facebook</span></a>&nbsp;<i class="fa fa-share"></i><a href="mailto:winecat@qq.com"> winecat</a></section>
    <?php _e('<a href="http://www.typecho.org">Typecho</a>'); ?> for 
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> ✔. all rights reserved.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
