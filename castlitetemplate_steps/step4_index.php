<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.castlite
 *
 * @copyright   Copyright (C) 2013 Evgeni Leshtanski All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Load optional Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = true);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <jdoc:include type="head" />
  <!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
      <![endif]-->
      <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="templates/castlitetemplate/css/custom.css" type="text/css">
</head>

<body>

  <!-- >> Header / Navigation -->
  <header class="container-fluid bg-top">
      
    <!-- >> Toolbar-L / Toolbar-R -->
    <div class="row-fluid" role="complementary">
      <div class="span6">
        <jdoc:include type="modules" name="toolbar-l" style="html5" /> 
      </div>
      <div class="span6">
        <jdoc:include type="modules" name="toolbar-r" style="html5" /> 
      </div>
    <!-- << Toolbar-L / Toolbar-R -->

    <!-- >> Headerbar -->
    <div class="row-fluid">
    
      <nav class="span12 navbar" role="navigation">
        <div class="navbar-inner">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="/castlite/"><span class="brandone">Cast</span><span class="brandtwo">Lite.</span></a>

          <div class="nav-collapse collapse">
            <jdoc:include type="modules" name="headerbar" style="html5" />
          </div>
        </div>
      </nav>

    </div>
    <!-- << Headerbar -->

  </header>
  <!-- << Header / Navigation -->

  <!-- >> Showcase / Carousel -->
  <div class="container-fluid bg-showcase" role="complementary">

    <div class="row-fluid">
      <div class="span12">
        <jdoc:include type="modules" name="showcase" style="html5" />
        <!-- Carousel indicators -->
        <!-- Carousel items -->
        <!-- Carousel nav -->
      </div>
    </div>

  </div>
  <!-- << Showcase / Carousel -->

  <!-- >> Feature / Search -->
  <div class="container-fluid bg-feature">

    <div class="row-fluid">
      <div class="span12">
        <jdoc:include type="modules" name="feature" style="html5" />
        <!-- Search .navbar-search -->
      </div>
    </div>

  </div>
  <!-- << Feature / Search -->

  <!-- >> Hero-Unit  -->
  <div class="container-fluid bg-hero" role="complementary">

    <div class="row-fluid">
      <div class="span12">
        <jdoc:include type="modules" name="hero-unit" style="html5" />
        <!-- Hero Unit  -->
      </div>
    </div>

  </div>
  <!-- << Hero Unit  -->  

  <!-- >> Utility  -->
  <div class="container-fluid bg-utility" role="complementary">

        <div class="row-fluid">
          <div class="span3"><jdoc:include type="modules" name="utility-a" style="html5" /></div>

          <div class="span3"><jdoc:include type="modules" name="utility-b" style="html5" /></div>

          <div class="span3"><jdoc:include type="modules" name="utility-c" style="html5" /></div>

          <div class="span3"><jdoc:include type="modules" name="utility-d" style="html5" /></div>
        </div>

  </div>
  <!-- << Utility  -->

  <!-- >> Main  -->
  <div class="container-fluid bg-main" role="main">

    <!-- >> Breadcrumbs  -->
    <div class="row-fluid">
      <div class="span12"><jdoc:include type="modules" name="breadcrumbs" style="html5" /></div>
    </div>
    <!-- << Breadcrumbs  -->

    <!-- >> Maintop  -->
    <div class="row-fluid">
      <div class="span6">
      <jdoc:include type="modules" name="maintop-a" style="html5" />
      </div>
      
      <div class="span6">
        <jdoc:include type="modules" name="maintop-b" style="html5" />
      </div>
    </div>
    <!-- << Maintop  -->

    <!-- >> Main Content and Sidebar  -->
    <div class="row-fluid">
          <div class="span8">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
          <div class="span4">
            <jdoc:include type="modules" name="sidebar" style="html5" />
          </div>
    </div>
    <!-- << Main Content and Sidebar  -->

    <!-- >> Mainbottom  -->
    <div class="row-fluid mymainbottom">
          <div class="span6"><jdoc:include type="modules" name="mainbottom-a" style="html5" /></div>
          <div class="span6"><jdoc:include type="modules" name="mainbottom-b" style="html5" /></div>
    </div>
    <!-- << Mainbottom  -->

    <!-- >> Bottom  -->
    <div class="row-fluid bottom">

          <div class="span6">
            <jdoc:include type="modules" name="bottom-a" style="html5" />
          </div>

          <div class="span6">
            <jdoc:include type="modules" name="bottom-b" style="html5" />
          </div>
    </div>
    <!-- << Bottom  --> 

  </div>
  <!-- << Main  -->

  <!-- >> Footer  -->
  <div class="container-fluid bg-footer" role="complementary">

    <div class="row-fluid">
      <footer class="span12 myfooter">

        <!-- >> Footer a-e  -->
        <div class="row-fluid">
          <div class="span3"><jdoc:include type="modules" name="footer-a" style="html5" /></div>
          <div class="span2"><jdoc:include type="modules" name="footer-b" style="html5" /></div>
          <div class="span2"><jdoc:include type="modules" name="footer-c" style="html5" /></div>
          <div class="span2"><jdoc:include type="modules" name="footer-d" style="html5" /></div>
          <div class="span3"><jdoc:include type="modules" name="footer-e" style="html5" /></div>
        </div>
        <!-- << Footer a-e  -->

        <!-- >> Copyright  -->
        <div class="row-fluid">
          <div class="span9"><jdoc:include type="modules" name="copyright-a" style="html5" /></div>
          <div class="span3"><jdoc:include type="modules" name="copyright-b" style="html5" /></div>
        </div>
        <!-- << Copyright  -->
      </footer>

    </div>

  </div>
  <!-- << End Footer -->
  
  <!-- >> Debug -->
  <jdoc:include type="modules" name="debug" style="html5" />
  <!-- << Debug -->
  
</body>

</html>