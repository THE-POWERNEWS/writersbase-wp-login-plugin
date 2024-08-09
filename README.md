## writersbase-wp-login-plugin

WordPressのパスワードハッシュの手順を置き換えるプラグインです。

### 利用手順
- WordPressの管理画面から、writersbase-wp-login-pluginプラグインを有効にしてください。

### 置き換えられるWordPressメソッド

#### wp_hash_password
- [password_hash()](https://www.php.net/manual/ja/function.password-hash.php) を実行します。

#### wp_check_password
- [password_verify()](https://www.php.net/manual/ja/function.password-verify.php) を実行し、失敗した場合はWordPress標準の PasswordHash を実行します。
