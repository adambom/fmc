<?php
/* SVN FILE: $Id$ */

/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('FMC Technologies: Advanced Energy Solutions'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css(array('fmc.generic', 'navigation'));

		echo $scripts_for_layout;
		
		echo $javascript->link('navigation');
	?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search_type").change(function() {				
				$("#q").attr("name", "data[" + $("#search_type option:selected").attr("id") + "][q]");
				$("#SearchForm").attr("action", "/fmc/"+$(this).val()+"/search");
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link(__('FMC Technologies', true), '/'); ?></h1>
			<div id="search">
				<form id="SearchForm" method="post" action="/fmc/companies/search">
					<table>
						<tr>
							<td><input type="text" name="data[Company][q]" id="q"></td>
							<td><input type="submit" name="submit" class="search_btn" value="Search"></td>
							<td>
								<select name="search_type" id="search_type">
									<option id="Company" value="companies">Companies</option>
									<option id="Employee" value="employees">Contacts</option>
									<option id="Job" value="jobs">Jobs</option>
									<option id="Opportunity" value="opportunities">Opportunities</option>
									<option id="Part" value="parts">Parts</option>
								</select>
							</td>
						</tr>
					</table>				
				</form>
			</div>
		</div>
		<div id="navigation">
			<ul>
				<li><?php echo $html->link(__('Home', true), '/'); ?></li>
				<li><?php echo $html->link('Companies', array('controller'=>'companies', 'action'=>'index')); ?></li>
				<li><?php echo $html->link('Contacts', array('controller'=>'employees', 'action'=>'index')); ?></li>
				<li><?php echo $html->link('Jobs', array('controller'=>'jobs', 'action'=>'index')); ?></li>
				<li><?php echo $html->link('Opportunities', array('controller'=>'opportunities', 'action'=>'index')); ?></li>
				<li><?php echo $html->link('Parts', array('controller'=>'parts', 'action'=>'index')); ?></li>
				<li><?php echo $html->link('Product Returns', array('controller'=>'productreturns', 'action'=>'index')); ?></li>
			</ul>
			<!--Companies drop down menu -->                                                   
			<!--div id="dropmenu1" class="dropmenudiv_a">
				<?php
					/*echo $html->link('All Companies', array('controller'=>'companies'));
					echo $html->link('Customers', array('controller'=>'customers'));
					echo $html->link('Vendors', array('controller'=>'vendors'));
					echo $html->link('Manufacturers', array('controller'=>'manufacturers'));*/
				?>
			</div-->

			<script type="text/javascript">
				//tabdropdown.init("navigation", 3)
			</script>
		</div>
		<div id="content">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>