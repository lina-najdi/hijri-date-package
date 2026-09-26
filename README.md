# Laravel Hijri Date

A simple, standalone Laravel package to convert Gregorian dates to Hijri dates using pure PHP (no external C-extensions required).

**🚀 Features:**
* **Standalone Mathematical Conversion:** Relies on pure PHP , ensuring it works seamlessly in any hosting environment without `ext-calendar`.
* **Global Regional Configuration:** Automatically adjust dates for your local moon sighting across your entire application.
* **Easy-to-use Facade & Carbon Macro:** Deep integration allows fluent conversions like `now()->toHijri()`.

## 🛠 Getting Started

Follow these 4 simple steps to install and use the package in your Laravel project.

### Step 1: Install the Package
Download the package into your project using Composer:
```bash
composer require lina/hijri-date


```
### Step 2: Publish the Configuration File

publish the configuration file to your app's main config/ directory:
```bash
php artisan vendor:publish --tag=hijri-config
```
### Step 3: Set the Regional Adjustment

The Islamic calendar relies on physical moon sightings, which vary by country. Open the newly published config/hijri.php file and set your desired adjustment:

```bash
// config/hijri.php

return [
    'adjustment' => 2, // Example: +2 for Saudi Arabia (Umm al-Qura)
];
```

### Step 4: Start Converting Dates

Using the Carbon Macro (Recommended):

```bash
use Illuminate\Support\Carbon;

// Automatically converts today's date
echo now()->toHijri(); 

// Converts a specific date
echo Carbon::parse('2024-01-01')->toHijri();
```

Using the Facade:

```bash
use Lina\HijriDate\Facades\Hijri;

// Converts today's date
echo Hijri::convertToHijri();

// Converts a specific date
echo Hijri::convertToHijri('2024-01-01');
```

