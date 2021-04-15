<?php

class Xserver_Migrator_Server
{
	/**
	 * OS取得
	 *
	 * @return string
	 */
	public static function os()
	{
		return PHP_OS;
	}

	/**
	 * PHPのバージョン取得
	 *
	 * @return string
	 */
	public static function php_version()
	{
		return phpversion();
	}

	/**
	 * WordPressのバージョン取得
	 *
	 * @return string
	 */
	public static function wordpress_version()
	{
		global $wp_version;
		return $wp_version;
	}

	/**
	 * WordPressで利用しているDBのバージョン取得
	 *
	 * @return string
	 */
	public static function wordpress_db_version()
	{
		global $wp_db_version;
		return $wp_db_version;
	}

	public static function wordpress_table_prefix()
	{
		global $table_prefix;
		return $table_prefix;
	}

	/**
	 * ドキュメントルート取得
	 *
	 * @return string
	 */
	public static function document_root()
	{
		return $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;
	}

	/**
	 * メモリ上限取得
	 *
	 * @return string
	 */
	public static function memory_limit()
	{
		return ini_get( 'memory_limit' );
	}

	/**
	 * メモリ使用量取得
	 *
	 * @return float|int
	 */
	public static function memory_usage()
	{
		return memory_get_usage( true ) / 1024 / 1024;
	}

	/**
	 * 最大メモリ使用量取得
	 *
	 * @return float|int
	 */
	public static function max_memory_usage()
	{
		return memory_get_peak_usage( true ) / 1024 / 1024;
	}

	/**
	 * exec()が使えるか
	 *
	 * @return bool
	 */
	public static function is_available_exec()
	{
		exec( 'pwd', $output, $return_var );
		return $return_var === 0;
	}

	/**
	 * zipコマンドが使えるか
	 *
	 * @return string|bool
	 */
	public static function is_available_zip_command()
	{
		exec( 'which zip', $output, $return_var );
		return $return_var === 0 ? $output[0] : false;
	}

	/**
	 * zipinfoコマンドが使えるか
	 *
	 * @return bool
	 */
	public static function is_available_zipinfo_command()
	{
		exec( 'which zipinfo', $output, $return_var );
		return $return_var === 0 ? $output[0] : false;
	}

	/**
	 * tarコマンドが使えるか
	 *
	 * @return string|bool
	 */
	public static function is_available_tar_command()
	{
		exec( 'which tar', $output, $return_var );
		return $return_var === 0 ? $output[0] : false;
	}

	/**
	 * mysqldumpコマンドが使えるか
	 *
	 * @return string|bool
	 */
	public static function is_available_mysqldump()
	{
		exec( 'which mysqldump', $output, $return_var );
		return $return_var === 0 ? $output[0] : false;
	}

	/**
	 * zipモジュールが読み込まれているか
	 *
	 * @return bool
	 */
	public static function is_loaded_zip_extension()
	{
		return extension_loaded( 'zip' );
	}

	/**
	 * ファイル数をカウントできるコマンドが使えるか
	 *
	 * @return array|bool
	 */
	public static function is_available_file_count_command()
	{
		exec( 'which find && which wc', $output, $return_var );
		return $return_var === 0 ? array( 'find' => $output[0], 'wc' => $output[1] ) : false;
	}

	/**
	 * WPで使用しているDBのサイズ
	 *
	 * @return int
	 */
	public static function wpdb_size()
	{
		global $wpdb;
		$sql = 'select sum(data_length+index_length) as byte
				from information_schema.tables
				where table_schema = ' . DB_NAME . '
				group by table_schema';
		$result = $wpdb->get_row( $sql, ARRAY_N );
		// サイズ取得できなかった場合はエラー回避として0を返すようにする
		return $result === null ? 0 : $result[0];
	}
}