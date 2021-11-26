<?php
$content = get_field('hero');
$heading = $content['heading'] ?? false;
$subheading = $content['subheading'] ?? false;
$cta = (is_array($content['cta']) && isset($content['cta']['url'])) ? $content['cta'] : false;
?>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <div id="pageintro" class="hoc clear"> 
        <article>
            <?php
            if($heading):
                ?>
                <h3 class="heading"><?php echo $heading;?></h3>
                <?php
            endif;
            if($subheading):?>
                <p><?php echo $subheading;?></p>
                <?php
            endif;
            if($cta):?>
            <footer>
                <a class="btn" href="<?php echo $cta['url'];?>"><?php echo $cta['title'];?></a>
            </footer>
            <?php endif;?>
        </article>
    </div>
</div>
