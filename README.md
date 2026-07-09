# Checkout Input Validator for WooCommerce

A lightweight WooCommerce plugin that prevents checkout submission when required billing fields contain only emojis, spaces, half-spaces, invisible characters, or invalid empty-looking content.

## Description

Checkout Input Validator for WooCommerce adds extra validation to required WooCommerce checkout fields.

It checks selected billing fields after checkout validation and prevents customers from submitting values that look filled but do not contain meaningful visible content.

The plugin is useful for reducing invalid customer data caused by emoji-only input, invisible Unicode characters, zero-width spaces, half-spaces, and similar problematic characters.

## Features

- Validates required WooCommerce checkout fields
- Detects emoji-only values
- Detects invisible Unicode characters
- Detects zero-width characters and half-spaces
- Detects empty-looking content
- Shows checkout error messages
- No custom database tables
- No external API calls
- No frontend JavaScript required
- Lightweight single-file plugin

## Requirements

- PHP 7.4+
- WordPress 6.0+
- WooCommerce 7.0+

## Installation

1. Create a folder named `checkout-input-validator-for-woocommerce`.
2. Place `main.php` inside it.
3. Upload the folder to:

```text
wp-content/plugins/
```

4. Activate the plugin from WordPress admin.

## Usage / How it Works

After activation, the plugin automatically validates selected required checkout fields.

Validated fields:

- `billing_first_name`
- `billing_last_name`
- `billing_phone`
- `billing_email`

If a field contains only emojis, spaces, half-spaces, invisible characters, or control characters, checkout is blocked and an error message is shown.

## Data Storage

The plugin does not store any data.

It only validates checkout input during the WooCommerce checkout process.

## Development

Built with:

- WordPress Coding Standards
- Native WordPress APIs
- WooCommerce checkout validation hook
- Server-side validation
- Unicode-aware regular expressions
- Sanitized input handling
- Lightweight single-file architecture

## Hooks

- `woocommerce_after_checkout_validation`

## Filters

This version does not provide custom filters.

## Future Improvements

- Filterable validated field list
- Customizable error messages
- Optional validation for shipping fields

## License

GPL-2.0-or-later

## Author

Amirreza Shayesteh Far

GitHub: https://github.com/amirrezashf

---

# اعتبارسنجی ورودی checkout ووکامرس

یک افزونه سبک برای ووکامرس که از ثبت سفارش با فیلدهای ضروری شامل ایموجی، فاصله، نیم‌فاصله، کاراکترهای نامرئی یا محتوای ظاهراً خالی جلوگیری می‌کند.

## توضیحات

افزونه Checkout Input Validator for WooCommerce اعتبارسنجی اضافی برای فیلدهای ضروری checkout ووکامرس اضافه می‌کند.

این افزونه بعد از اعتبارسنجی checkout، برخی فیلدهای صورتحساب را بررسی می‌کند و اگر مقدار واردشده محتوای قابل مشاهده و معنادار نداشته باشد، ثبت سفارش را متوقف می‌کند.

این افزونه برای جلوگیری از ثبت اطلاعات نامعتبر مشتری، ورودی‌های فقط شامل ایموجی، کاراکترهای نامرئی، zero-width space، نیم‌فاصله و کاراکترهای مشابه کاربرد دارد.

## ویژگی‌ها

- اعتبارسنجی فیلدهای ضروری checkout ووکامرس
- تشخیص مقدار فقط شامل ایموجی
- تشخیص کاراکترهای Unicode نامرئی
- تشخیص zero-width character و نیم‌فاصله
- تشخیص محتوای ظاهراً خالی
- نمایش خطای checkout
- بدون جدول اختصاصی دیتابیس
- بدون درخواست API خارجی
- بدون نیاز به JavaScript فرانت‌اند
- معماری سبک و تک‌فایلی

## نیازمندی‌ها

- PHP 7.4+
- WordPress 6.0+
- WooCommerce 7.0+

## نصب

1. یک پوشه با نام `checkout-input-validator-for-woocommerce` بسازید.
2. فایل `main.php` را داخل آن قرار دهید.
3. پوشه را در مسیر زیر آپلود کنید:

```text
wp-content/plugins/
```

4. افزونه را از پنل مدیریت وردپرس فعال کنید.

## نحوه استفاده / عملکرد افزونه

بعد از فعال‌سازی، افزونه به‌صورت خودکار فیلدهای مشخصی از checkout را بررسی می‌کند.

فیلدهای بررسی‌شده:

- `billing_first_name`
- `billing_last_name`
- `billing_phone`
- `billing_email`

اگر مقدار فیلد فقط شامل ایموجی، فاصله، نیم‌فاصله، کاراکترهای نامرئی یا control character باشد، ثبت سفارش متوقف می‌شود و پیام خطا نمایش داده می‌شود.

## ذخیره‌سازی داده

این افزونه هیچ داده‌ای ذخیره نمی‌کند.

فقط هنگام فرایند checkout، ورودی‌ها را اعتبارسنجی می‌کند.

## توسعه

توسعه داده‌شده بر اساس:

- WordPress Coding Standards
- Native WordPress APIs
- hook اعتبارسنجی checkout ووکامرس
- اعتبارسنجی سمت سرور
- regular expressionهای سازگار با Unicode
- مدیریت sanitize شده ورودی‌ها
- معماری سبک تک‌فایلی

## هوک‌ها

- `woocommerce_after_checkout_validation`

## فیلترها

این نسخه filter اختصاصی ندارد.

## بهبودهای آینده

- قابل تنظیم شدن فیلدهای بررسی‌شده
- قابل تنظیم شدن پیام خطا
- اعتبارسنجی اختیاری فیلدهای shipping

## مجوز

GPL-2.0-or-later

## نویسنده

Amirreza Shayesteh Far

GitHub: https://github.com/amirrezashf
