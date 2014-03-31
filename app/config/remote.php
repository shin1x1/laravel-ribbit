<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| デフォルトリモート接続名
	|--------------------------------------------------------------------------
	|
	| SSH操作で使用する、デフォルトの接続をここで指定します。
	| この名前は、以下のサーバーリスト中の接続名に対応させてください。
	| 各接続には、手動でアクセス可能です。
	|
	*/

	'default' => 'production',

	/*
	|--------------------------------------------------------------------------
	| リモートサーバー接続
	|--------------------------------------------------------------------------
	|
	| LaravelのSSHタスク実行機能により、SSHでアクセスするサーバーを指定します。
	| この機能により、例えばアプリケーションのデプロイのような、
	| サーバーに対するタスクがとても簡単になります。
	|
	*/

	'connections' => array(

		'production' => array(
			'host'      => '',
			'username'  => '',
			'password'  => '',
			'key'       => '',
			'keyphrase' => '',
			'root'      => '/var/www',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| リモートサーバーグループ
	|--------------------------------------------------------------------------
	|
	| 一つのグループ名に含まれる接続のリストをここで指定します。
	| 例えば、"web"とか"database"とか言うような、覚えやすい簡単な短い名前で、
	| 一度に全部のサーバーへ簡単にアクセスできるようになります。
	|
	*/

	'groups' => array(

		'web' => array('production')

	),

);