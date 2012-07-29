<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2012, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code, pre {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	code.inline {
		font-family: monospace;
		margin: 0;
		padding: 4px;
		display: inline;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter with Doctrine!</h1>

	<div id="body">
		<p>This installation of CodeIgniter with Doctrine 2 has been created and configured by Joseph Wynn from <a href="http://wildlyinaccurate.com/">Wildly Inaccurate</a>.</p>

		<p>You can access the Doctrine Entity Manager in your controllers through the Doctrine library:</p>
		<code>$this->load->library('doctrine');<br />
		$em = $this->doctrine->em;</code>

		<p>Or through the shortcut property in MY_Controller:</p>
		<code>$this->em;</code>

		<p>Two sample models has been created for you in:</p>
		<pre>application/models/Entity/User.php
		application/models/Entity/Group.php</pre>

		<p>The following code was used in the Welcome controller to create new User and Group entities.</p>
		<pre>$group = new Entity\Group;
$group->setName('Users');

$user = new Entity\User;
$user->setUsername('wildlyinaccurate');
$user->setPassword('Passw0rd');
$user->setEmail('wildlyinaccurate@gmail.com');
$user->setGroup($group);</pre>

		<p>Below is the output of <code class="inline">print_r($user)</code>:</p>
		<pre><?php print_r($user); ?></pre>

		<p>And <code class="inline">print_r($group)</code>:</p>
		<pre><?php print_r($group); ?></pre>

		<p>The Doctrine console is ready for you to use. Just run <code class="inline">./application/doctrine</code> on Linux & Mac, or <code class="inline">php.exe ./application/doctrine.php</code> on Windows.</p>

		<p>For more information about integrating Doctrine with CodeIgniter, read <em><a href="http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2/">Integrating Doctrine 2 with CodeIgniter 2</a></em>.</p>

		<h2>Version Information</h2>
		<pre>CodeIgniter <?php echo CI_VERSION; ?>

Doctrine <?php echo \Doctrine\Common\Version::VERSION; ?></pre>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT == 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
