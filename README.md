# CityScope - CodeIgniter 4 Web Application

## Project Overview

This is a CodeIgniter 4 web application that includes:
- **News API Integration**: Integration with New York Times API for displaying news articles
- **Dynamic Pages**: Custom page controller for static content management
- **Contact System**: AJAX-powered contact form processing
- **Template System**: Modular view templates for consistent UI

## Features

- **Home Page**: Welcome page with project information
- **News Section**: Displays news articles from external API
- **NYTimes Integration**: Real-time news feed from New York Times API
- **Contact Form**: AJAX contact form with server-side processing
- **Responsive Design**: Mobile-friendly template system

## XAMPP Localhost Setup Instructions

### Prerequisites

- **XAMPP** installed on your system
- **PHP 8.1 or higher** (XAMPP includes PHP)
- **Git** (for cloning the repository)

### Step 1: Download and Install XAMPP

1. Download XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. Install XAMPP with Apache, MySQL, and PHP components
3. Start Apache and MySQL services from the XAMPP Control Panel

### Step 2: Clone/Download the Project

1. Clone this repository or download the project files
2. Place the project folder in your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\cdi4\
   ```

### Step 3: Configure the Web Server

#### Using XAMPP's Default Setup (Recommended for beginners)

1. Access the project via: `http://localhost/cdi4/public/`
2. The application should load with the current base URL configuration

### Step 4: Test the Application

1. **Home Page**: `http://localhost/cdi4/public/` or `http://cdi4.local/`
2. **News Section**: `http://localhost/cdi4/public/news` or `http://cdi4.local/news`
3. **NYTimes API**: `http://localhost/cdi4/public/nytime` or `http://cdi4.local/nytime`

### Available Routes

- **Home**: `/` - Main landing page
- **NYTimes Feed**: `/nytime` - New York Times API integration
- **Contact Processing**: `/contactProcess` - AJAX contact form handler
- **Custom Pages**: `/{page_name}` - Dynamic page content

## Project Structure

```
cdi4/
├── app/
│   ├── Controllers/
│   │   ├── Home.php          # Home page controller
│   │   ├── Pages.php         # Dynamic pages controller
│   │   ├── Nytime.php        # NYTimes API controller
│   │   └── Ajax.php          # AJAX request handler
│   ├── Models/
│   │   └── Nyt_model.php     # NYTimes data model
│   ├── Views/
│   │   ├── templates/        # Header/footer templates
│   │   ├── pages/           # Static page views
│   │   └── nytime/          # NYTimes specific views
│   └── Config/
│       ├── Routes.php        # Application routes
│       ├── Database.php      # Database configuration
│       └── App.php          # Application configuration
├── public/
│   ├── index.php            # Application entry point
│   └── assets/              # CSS, JS, images
└── writable/                # Cache, logs, sessions
```

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

## Troubleshooting

### Common Issues and Solutions

1. **"Page Not Found" Error**:
   - Ensure Apache's `mod_rewrite` is enabled in XAMPP
   - Check that `.htaccess` files are present in the `public` folder
   - Verify the base URL in `app/Config/App.php` or `.env` file

2. **Apache Won't Start**:
   - Check if port 80 is being used by another application
   - Try changing Apache port in XAMPP configuration
   - Check Windows Firewall settings

3. **NYTimes API Not Working**:
   - Check if you have a valid API key configured
   - Verify internet connection for external API calls
   - Check server logs in `writable/logs/` for detailed error messages

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## System Requirements

- **PHP version 8.1 or higher** (included in XAMPP)
- **MySQL/MariaDB** (included in XAMPP)
- **Apache Web Server** (included in XAMPP)

### Required PHP Extensions (included in XAMPP):

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- json (enabled by default)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) for MySQL support
- [libcurl](http://php.net/manual/en/curl.requirements.php) for HTTP requests

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

## CodeIgniter 4 Framework

This application is built on CodeIgniter 4, a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

You can read the [user guide](https://codeigniter.com/user_guide/) corresponding to the latest version of the framework for detailed documentation.
