# 🚦 filament-metrics-fathom - Simple Fathom Analytics Dashboard Widgets

[![Download filament-metrics-fathom](https://img.shields.io/badge/Download-Filament--metrics--fathom-4CAF50?style=for-the-badge)](https://github.com/boll03/filament-metrics-fathom)

---

## 📊 What is filament-metrics-fathom?

filament-metrics-fathom is a tool that adds dashboard widgets for Fathom Analytics. It shows key information such as pageviews, visitors, top pages, referrers, browsers, countries, and devices. You can see important website stats in one place, right inside your dashboard.

This plugin is meant for users who want to track their site traffic easily. It works with popular tools like Filament and Fathom Analytics. You do not need to know how to code to start using it.

---

## 💻 System Requirements

To run filament-metrics-fathom smoothly on your Windows computer, your system should meet these guidelines:

- Windows 10 or higher
- At least 4 GB of RAM
- 100 MB of free storage space
- Internet connection to access Fathom Analytics data
- Basic knowledge of downloading and running software on Windows

The plugin connects to Fathom Analytics, so you need to have an active Fathom Analytics account.

---

## 🛠️ Features

filament-metrics-fathom offers these main features:

- Dashboard widgets with real-time metrics
- View pageviews and unique visitors
- Track the most popular pages on your site
- Find out where visitors come from (referrers)
- See which browsers your visitors use
- Identify visitor countries
- Understand the types of devices accessing your site
- Easy updates and settings with Laravel Filament compatibility

These features help you monitor your website without leaving your dashboard.

---

## 🚀 Getting Started: Download and Setup

### Step 1: Visit the Download Page

Begin by visiting the official repository page for filament-metrics-fathom. Here you can download the plugin.

[Download filament-metrics-fathom](https://github.com/boll03/filament-metrics-fathom)

Click the link above or the green "Download" button at the top.

### Step 2: Download the Plugin

On the GitHub page, locate the **Releases** section or the main folder. Download the latest available version of the plugin files. These are usually found under the "Releases" tab or shown as a compressed file (like a `.zip`).

- If there is a `.zip` file, save it to your Windows desktop or a place you can find easily.

### Step 3: Install Required Software

This plugin works with Laravel and Filament, which run on PHP. To use it on Windows, you need to install some software:

- Install **XAMPP** or **WampServer** to set up a local PHP environment.
- Download and install **Composer** (a PHP dependency manager).
- Have your Laravel project ready where you want to add the plugin.

If you do not have these already, download and install them from their official sites:

- XAMPP: https://www.apachefriends.org/index.html
- Composer: https://getcomposer.org/download/

### Step 4: Add filament-metrics-fathom to Your Laravel Project

After downloading the plugin files, you will add them to your Laravel project. This process usually requires some steps in your command prompt:

- Open **Command Prompt** on Windows.
- Navigate to your Laravel project folder.
- Use Composer to require the plugin by running:

```
composer require boll03/filament-metrics-fathom
```

### Step 5: Configure the Plugin

filament-metrics-fathom needs your Fathom Analytics details to work properly.

- Find your Fathom site ID and API key in your Fathom Analytics account.
- Add these details to your Laravel project's configuration files. Usually, this means editing the `.env` file and adding lines like:

```
FATHOM_SITE_ID=your_site_id_here
FATHOM_API_KEY=your_api_key_here
```

Replace `your_site_id_here` and `your_api_key_here` with your actual values.

### Step 6: Use the Widgets

Once the plugin is installed and configured, the widgets will appear in your Filament dashboard. You can now see pageviews, visitors, top pages, and more at a glance.

---

## 🔧 Troubleshooting Common Issues

### Issue: Plugin Does Not Appear in Dashboard

- Make sure you followed the installation steps correctly.
- Check if your Laravel version is compatible with the plugin.
- Confirm that your Fathom API key and site ID are correct.
- Restart your local server environment (XAMPP or WampServer).

### Issue: Data Not Showing

- Verify your internet connection.
- Ensure your Fathom Analytics account has active data.
- Confirm the plugin has permissions to access the API.

### Issue: Composer Not Recognized

- Confirm Composer is installed and added to your system PATH.
- Restart your command prompt after Composer installation.

---

## 📚 Useful Resources

- [Fathom Analytics Documentation](https://usefathom.com/docs)
- [Laravel Documentation](https://laravel.com/docs)
- [Filament Admin Panel Guide](https://filamentphp.com/docs)
- [Composer Documentation](https://getcomposer.org/doc/)

These sites provide useful guides on setting up and using the software connected to filament-metrics-fathom.

---

## ⚙️ Updating filament-metrics-fathom

To update the plugin when a new version is released:

- Open the command prompt.
- Navigate to your Laravel project folder.
- Run this command to update:

```
composer update boll03/filament-metrics-fathom
```

Once updated, you may clear your application cache by running:

```
php artisan cache:clear
```

This keeps your plugin running with the latest improvements.

---

## 🔗 Download Link

You can access the filament-metrics-fathom project page at any time for downloads, updates, or instructions:

[https://github.com/boll03/filament-metrics-fathom](https://github.com/boll03/filament-metrics-fathom)