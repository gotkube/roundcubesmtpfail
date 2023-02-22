<?php

$config['log_date_format'] = 'd-M-Y H:i:s';

$config['db_dsnw'] = 'pgsql://webmail:supersecretpassword@localhost/webmail';

$config['imap_host'] = 'mailserv1.mydomain.vpn';
$config['default_port'] = 143;
$config['imap_conn_options'] = array(
    'ssl' => array(
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
        'verify_depth' => 3,
        'peer_name' => 'mailserv1.mydomain.vpn',
        'capath' => '/usr/local/etc/ssl/current/',
        'local_cert' => '/usr/local/etc/ssl/current/mailserv1.mydomain.vpn.crt',
   ),
);


$config['smtp_host'] = 'tls://mailserv1.mydomain.vpn:587';
//$config['smtp_port'] = 587;
$config['smtp_conn_options'] = array(
    'ssl' => array(
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
        'verify_depth' => 3,
        'peer_name' => 'mailserv1.mydomain.vpn',
        'capath' => '/usr/local/etc/ssl/current/',
        'local_cert' => '/usr/local/etc/ssl/current/mailserv1.mydomain.vpn.crt',
   ),
);


$config['support_url'] = '';
$config['ip_check'] = true;

$config['des_key'] = 'superecretdeskey';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = [
         'acl', 
         'additional_message_headers', 
         'attachment_reminder', 
         'emoticons', 
         'enigma', 
         'filesystem_attachments', 
         'jqueryui', 
         'managesieve', 
         'markasjunk', 
         'newmail_notifier', 
         'show_additional_headers', 
         'vcard_attachments'];



$config['language'] = 'en_CA';

$config['mime_param_folding'] = 0;

$config['managesieve_debug'] = true;

$config['debug_level'] = 4;

$config['imap_debug'] = true;

$config['smtp_debug'] = true;

$config['enable_spellcheck'] = true;
