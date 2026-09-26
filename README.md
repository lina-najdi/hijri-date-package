# Laravel Hijri Date

A simple, standalone Laravel package to convert Gregorian dates to Hijri dates using pure PHP (no external C-extensions required).

**🚀 Features:**
* **Standalone Mathematical Conversion:** The package relies on pure PHP (the Kuwaiti algorithm) and does not require the `ext-calendar` extension to be enabled on your server, ensuring it works seamlessly in any hosting environment.
* **Easy-to-use Facade:** Convert dates instantly anywhere in your application using `Hijri::convertToHijri()`.
* **Carbon Macro Support:** Deep integration with Carbon allows you to fluently call methods like `now()->toHijri()`.
* **Day Adjustment:** Easily add or subtract days from the calculation to match your local Hijri calendar and moon sighting.

## 🛠 Installation

You can install the package via composer:

```bash
composer require lina/hijri-date
