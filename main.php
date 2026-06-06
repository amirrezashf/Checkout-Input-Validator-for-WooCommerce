<?php
/**
 * Plugin Name: WooCommerce Smart Checkout Validator
 * Description: Prevents customers from submitting required WooCommerce checkout fields containing only emojis, invisible characters, half-spaces, or invalid content.
 * Version: 1.0.0
 * Author: امیررضا شایسته‌فر
 * Text Domain: wc-checkout-input-validator
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WC_Smart_Checkout_Validator {

    public function __construct() {
        add_action( 'woocommerce_after_checkout_validation', [ $this, 'validate_checkout_fields' ], 10, 2 );
    }

    private function has_visible_non_emoji( $value ) {
        if ( $value === null ) {
            return false;
        }

        $value = wp_unslash( $value );
        $value = wp_strip_all_tags( $value );

        // حذف نیم‌فاصله، کاراکترهای نامرئی و کنترل‌کاراکترها
        $value = preg_replace(
            '/[\x{200B}\x{200C}\x{200D}\x{FEFF}\x{00A0}\x{202F}\x{2060}\p{Cf}\p{Cc}]/u',
            '',
            $value
        );

        $value = preg_replace( '/^\s+|\s+$/u', '', $value );

        // حذف ایموجی‌ها و سمبل‌های رایج یونیکد
        $emoji_regex = '/['
            . '\x{1F300}-\x{1F5FF}'
            . '\x{1F600}-\x{1F64F}'
            . '\x{1F680}-\x{1F6FF}'
            . '\x{1F700}-\x{1F77F}'
            . '\x{1F780}-\x{1F7FF}'
            . '\x{1F800}-\x{1F8FF}'
            . '\x{1F900}-\x{1F9FF}'
            . '\x{1FA00}-\x{1FA6F}'
            . '\x{1FA70}-\x{1FAFF}'
            . '\x{2600}-\x{26FF}'
            . '\x{2700}-\x{27BF}'
            . '\x{2300}-\x{23FF}'
            . '\x{1F1E6}-\x{1F1FF}'
            . '\x{FE0F}'
            . ']/u';

        $value = preg_replace( $emoji_regex, '', $value );

        // بررسی وجود کاراکتر قابل مشاهده غیرایموجی
        return (bool) preg_match( '/[\p{L}\p{N}\p{P}\p{S}]+/u', $value );
    }

    public function validate_checkout_fields( $data, $errors ) {
        $required_fields = [
            'billing_first_name' => 'نام',
            'billing_last_name'  => 'نام خانوادگی',
            'billing_phone'      => 'شماره موبایل',
            'billing_email'      => 'ایمیل',
        ];

        foreach ( $required_fields as $field_key => $label ) {
            $value = isset( $data[ $field_key ] ) ? $data[ $field_key ] : null;

            if ( ! $this->has_visible_non_emoji( $value ) ) {
                $errors->add(
                    'wc_smart_checkout_validator_' . $field_key,
                    sprintf(
                        'فیلد «%s» نمی‌تواند خالی یا فقط شامل ایموجی، فاصله، نیم‌فاصله یا کاراکترهای نامرئی باشد؛ لطفا مجدد بررسی کنید.',
                        esc_html( $label )
                    )
                );
            }
        }
    }
}

new WC_Smart_Checkout_Validator();
