<?php
/*
  Plugin Name: writersbase-wp-login-plugin
  Plugin URI: https://github.com/THE-POWERNEWS/writersbase-wp-login-plugin
  Description: ログイン処理をオーバライド
  Version: 1.0.0
  Author: Tatsuya Koishi
  Author URI: https://github.com/pooza
 */

if (!function_exists('wp_hash_password')) {
  function wp_hash_password($password) {
    return password_hash($password);
  }
}

if (!function_exists('wp_check_password')) {
  function wp_check_password($password, $hash, $uid = '') {
    require_once ABSPATH . '/wp-includes/class-phpass.php';
    $hasher = new PasswordHash( 8, true );

    return apply_filters(
      'check_password',
      password_verify($password, $hash) || $hasher->CheckPassword($password, $hash),
      $password,
      $hash,
      $uid
    );
  }
}
