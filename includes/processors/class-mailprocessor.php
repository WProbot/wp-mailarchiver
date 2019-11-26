<?php declare(strict_types=1);
/**
 * Mail records processing
 *
 * Adds mail specific records with respect to privacy settings.
 *
 * @package Processors
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */

namespace Mailarchiver\Processor;

use Monolog\Processor\ProcessorInterface;
use Mailarchiver\System\Blog;
use Mailarchiver\System\Hash;
use Mailarchiver\System\User;

/**
 * Define the Mail processor functionality.
 *
 * Adds mail specific records with respect to privacy settings.
 *
 * @package Processors
 * @author  Pierre Lannoy <https://pierre.lannoy.fr/>.
 * @since   1.0.0
 */
class MailProcessor implements ProcessorInterface {

	/**
	 * Mailanonymization switch.
	 *
	 * @since  1.0.0
	 * @var    boolean    $mailanonymization    Is mailanonymization activated?
	 */
	private $mailanonymization = false;

	/**
	 * Encryption key.
	 *
	 * @since  1.0.0
	 * @var    string    $encryption    Encryption key
	 */
	private $encryption = '';

	/**
	 * Initializes the class and set its properties.
	 *
	 * @since   1.0.0
	 * @param   boolean $mailanonymize Optional. Is mailanonymization activated?
	 * @param   string  $encrypte      Optional. Encryption key.
	 */
	public function __construct( $mailanonymize = true, $encrypte = '' ) {
		$this->mailanonymization = $mailanonymize;
		$this->encryption        = $encrypte;
	}

	/**
	 * Invocation of the processor.
	 *
	 * @since   1.0.0
	 * @param   array $record  Array or added records.
	 * @@return array   The modified records.
	 */
	public function __invoke( array $record ): array {
		/*$record['extra']['siteid']   = Blog::get_current_blog_id( 0 );
		$record['extra']['sitename'] = Blog::get_current_blog_name();
		$record['extra']['userid']   = User::get_current_user_id( 0 );
		$record['extra']['username'] = User::get_current_user_name();
		$ip                          = filter_input( INPUT_SERVER, 'REMOTE_ADDR' );
		if ( array_key_exists( 'HTTP_X_REAL_IP', $_SERVER ) ) {
			$ip = filter_input( INPUT_SERVER, 'HTTP_X_REAL_IP' );
		}
		if ( array_key_exists( 'X-FORWARDED_FOR', $_SERVER ) ) {
			$ip = filter_input( INPUT_SERVER, 'FORWARDED_FOR' );
		}
		if ( ! empty( $ip ) ) {
			$record['extra']['ip'] = $ip;
		} else {
			$record['extra']['ip'] = '127.0.0.1';
		}
		if ( $this->obfuscation ) {
			if ( array_key_exists( 'ip', $record['extra'] ) ) {
				$record['extra']['ip'] = Hash::simple_hash( $record['extra']['ip'] );
			}
		}
		if ( $this->pseudonymize ) {
			if ( array_key_exists( 'userid', $record['extra'] ) ) {
				if ( $record['extra']['userid'] > 0 ) {
					$record['extra']['userid'] = Hash::simple_hash( (string) $record['extra']['userid'] );
					if ( array_key_exists( 'username', $record['extra'] ) ) {
						$record['extra']['username'] = Hash::simple_hash( $record['extra']['username'] );
					}
				}
			}
		}*/
		return $record;
	}
}