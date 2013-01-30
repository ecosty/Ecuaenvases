<?php
?>

  <div id="page-wrapper">
    <div id="page">
  
      <div id="header"><div class="container section header clearfix">
  
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <div id="name-and-slogan">
            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name"><strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong></div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>
          </div> <!-- /#name-and-slogan -->
        <?php endif; ?>
          <?php print render($page['header']); ?>
      </div><!-- /.section .header -->

        <?php if ($main_menu || $secondary_menu): ?>
          <div id="navigation">
            <div class="container navigation section">
              <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')))); ?>
            </div><!-- /.section .navigation -->
          </div> <!-- /#navigation -->
        <?php endif; ?>
      </div> <!-- /#header -->
  
      <div id="banner-wrap" class="slider-content <?php if(!$page['banner']) print 'empty' ?>">
        <?php if ($page['banner']): ?>
             <div id="banner" class="clearfix">
               <div class="container region">
                 <?php print render ($page['banner']); ?>
               </div>
             </div>
        <?php endif; ?>
      </div>
  
  
      <div id="main-wrapper">
        <?php if ($page['preface_one'] || $page['preface_two'] || $page['preface_three']): ?>
          <div id="preface" class="clearfix front-page-sections">
            <div class="container preface clearfix">
               <?php if ($page['preface_one']): ?>
              <div class="section preface-one<?php print' preface-'.  $preface; ?>">
                <div class="gutter">
                  <?php print render($page['preface_one']); ?>
                </div>
              </div>
              <?php endif; ?>
              <?php if ($page['preface_two']): ?>
              <div class="section preface-two<?php print' preface-'.  $preface; ?>">
                <div class="gutter">
                  <?php print render($page['preface_two']); ?>
                </div>
              </div>
              <?php endif; ?>
              <?php if ($page['preface_three']): ?>
              <div class="section preface-three<?php print' preface-'. $preface; ?>">
                <div class="gutter">
                  <?php print render($page['preface_three']); ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div> <!-- /#content -->
    </div><!-- /#page -->
    
    <div id="footer">
      <?php if ($page['bottom_one'] || $page['bottom_two'] || $page['bottom_three'] || $page['bottom_four']): ?>
      <div id="bottom" class="container clearfix">
        <?php if ($page['bottom_one']): ?>
          <div class="region-bottom-one-user-login">
            <div class="region bottom bottom-one<?php print ' bottom-' .  $bottom; ?>">
              <div class="gutter">
                <?php 
                  print render($page['bottom_one']);
                ?>
              </div>
            </div>

            <div class="user-login-block">
              <h2>Menu Usuario</h2>
              <?php 
                if (empty($user->uid)){
                  print render(drupal_get_form('user_login_block'));
                }
                else
                {
                  print l('Log out', 'user/logout');
                }
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($page['bottom_two']): ?>
          <div class="region bottom bottom-two<?php print ' bottom-' .  $bottom; ?>">
            <div class="gutter">
              <?php print render($page['bottom_two']); ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($page['bottom_three']): ?>
          <div class="region bottom bottom-three<?php print ' bottom-' . $bottom; ?>">
            <div class="gutter">
              <?php print render($page['bottom_three']); ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($page['bottom_four']): ?>
          <div class="region bottom bottom-four<?php print ' bottom-'. $bottom; ?>">
            <div class="gutter">
              <?php print render($page['bottom_four']); ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <div class="container section footer">
        <?php print render($page['footer']); ?>
        <div id="levelten">
          Developed by Elías Rivera
          <br>
          e-mail: eliasriv@gmail.com
        </div>
      </div><!-- /.section -->
    </div> <!-- /#footer -->
    
  </div> <!-- /#page-wrapper -->
