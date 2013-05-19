<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.castlite
 *
 * @copyright   Copyright (C) 2013 EL All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Load optional Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = true);

// Logo file or site title param
if ($this->params->get('logoFile'))
{
  $logo = '<img src="'. JURI::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}

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

  <?php
// Template color
  if ($this->params->get('templateColor'))
  {
  ?>
  <style type="text/css">
    body
    {
      background-color: <?php echo $this->params->get('templateBackgroundColor');?>
    }
    a
    {
      color: <?php echo $this->params->get('templateColor');?>;
    }
    .bg-top, .bg-hero, .bg-utility, .bg-footer, .navbar-inner, div.hero-unit
    {
      background-color: <?php echo $this->params->get('templateTopHeroUtilityFooterBackgroundColor');?>
    }
    .bg-showcase 
    {
      background-color: <?php echo $this->params->get('templateShowcaseBackgroundColor');?>
    }
  </style>
  <?php
  }
  ?>
</head>

<body>

</body>

</html>