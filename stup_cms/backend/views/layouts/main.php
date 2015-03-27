<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
<?php   $menuarray = ApplicationConfig::getMenu();
		$generic = array(
                    '0' => array(
                            'url' => ApplicationConfig::getURL('','site','login'),
                            'label' => "Login",
                            'visible' => Yii::app()->user->isGuest,
                        ),

                    '1' => array(
                            'url' => ApplicationConfig::getURL('','site','logout'),
                            'label' => "Logout",
                            'visible' => !Yii::app()->user->isGuest,
                        	'itemOptions'=>array('style'=>'float: right;')
                        ),

                );

        if(empty($menuarray)){
        	$menuarray = $generic;
        } else
        {
        	$menuarray = array_merge($menuarray, $generic);
        }
        
       
       // echo "<pre>";print_r($menuarray);exit;
        
?>
		
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => Config::getModel('CONFIG-ID',array('configID'=>1))->site_name,
	'brandUrl' => ApplicationConfig::getURL('','site','login'),
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => $menuarray,
		),
	),
)); ?>
	<!-- mainmenu -->
	<div class="container" style="margin-top:80px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>
		<hr/>
		
		<!-- footer -->
	</div>
</div>
<!-- page -->
</body>
</html>