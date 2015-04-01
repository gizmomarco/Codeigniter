<?php

defined('BASEPATH') OR exit('No direct script access allowed.');
$config['useragent'] = 'PHPMailer';
$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = 'c0rre0.presidencia.gob.mx';
$config['smtp_user'] = 'politicatic@presidencia.gob.mx';
$config['smtp_pass'] = 'Mexico12';
$config['smtp_port'] = 25;
$config['smtp_timeout'] = 5;
$config['smtp_crypto'] = '';
$config['smtp_debug'] = 0;
$config['wordwrap'] = true;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = true;
$config['priority'] = 3;
$config['crlf'] = "\n";
$config['newline'] = "\n";
$config['bcc_batch_mode'] = false;
$config['bcc_batch_size'] = 200;
$config['encoding'] = '8bit';