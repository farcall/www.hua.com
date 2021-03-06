<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'sms_send' => 
    array (
      0 => 'alisms',
      1 => 'clsms',
      2 => 'smsbao',
    ),
    'sms_notice' => 
    array (
      0 => 'alisms',
      1 => 'clsms',
      2 => 'smsbao',
    ),
    'sms_check' => 
    array (
      0 => 'alisms',
      1 => 'clsms',
      2 => 'smsbao',
    ),
    'app_init' => 
    array (
      0 => 'epay',
    ),
    'leesignhook' => 
    array (
      0 => 'leesign',
    ),
    'admin_login_init' => 
    array (
      0 => 'loginbg',
    ),
    'addons_pay_paid' => 
    array (
      0 => 'pay',
    ),
    'addons_pay_notify' => 
    array (
      0 => 'pay',
    ),
  ),
  'route' => 
  array (
    '/example$' => 'example/index/index',
    '/example/d/[:name]' => 'example/demo/index',
    '/example/d1/[:name]' => 'example/demo/demo1',
    '/example/d2/[:name]' => 'example/demo/demo2',
    '/leesign$' => 'leesign/index/index',
    '/qrcode$' => 'qrcode/index/index',
    '/qrcode/build$' => 'qrcode/index/build',
    '/third$' => 'third/index/index',
    '/third/connect/[:platform]' => 'third/index/connect',
    '/third/callback/[:platform]' => 'third/index/callback',
  ),
);