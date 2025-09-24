# Admin Panel Setup Instructions

## Overview
This admin panel allows you to manage app settings dynamically including:
- App download link
- WhatsApp number
- Telegram number

## Setup Instructions

### 1. Database Configuration
1. Update your database credentials in `application/config/database.php`:
   ```php
   $db['default'] = array(
       'hostname' => 'localhost',
       'username' => 'your_username',
       'password' => 'your_password',
       'database' => 'your_database_name',
       'dbdriver' => 'mysqli',
       // ... other settings
   );
   ```

### 2. Create Database Tables
Run the SQL commands from `admin_setup.sql` in your database:

```sql
-- Create admin_users table
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create admin_settings table
CREATE TABLE IF NOT EXISTS `admin_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insert default admin user
INSERT INTO `admin_users` (`username`, `password`, `email`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@maalaxmi.com');

-- Insert default settings
INSERT INTO `admin_settings` (`setting_key`, `setting_value`) VALUES
('app_link', 'https://play.google.com/store/apps/details?id=com.maalaxmi.app'),
('whatsapp_number', '+91-9876543210'),
('telegram_number', '+91-9876543210');
```

### 3. Access Admin Panel
1. Navigate to: `http://your-domain.com/admin`
2. Login with default credentials:
   - **Username:** admin
   - **Password:** admin123

### 4. Change Default Password
After first login, it's recommended to change the default password by updating the database:

```sql
UPDATE admin_users 
SET password = '$2y$10$your_new_hashed_password' 
WHERE username = 'admin';
```

## Features

### Admin Dashboard
- **Login System:** Secure authentication with session management
- **Settings Management:** Update app link, WhatsApp, and Telegram numbers
- **Real-time Updates:** Changes reflect immediately on the website
- **Responsive Design:** Works on desktop and mobile devices

### Dynamic Website Integration
- App download buttons link to the configured app store URL
- WhatsApp buttons open chat with the configured number
- Telegram buttons open the configured Telegram channel
- All settings are loaded from the database in real-time

## File Structure
```
application/
├── controllers/
│   ├── Admin.php          # Admin controller
│   └── Welcome.php        # Updated to load settings
├── views/
│   ├── admin/
│   │   ├── login.php      # Admin login page
│   │   └── dashboard.php  # Admin dashboard
│   └── welcome_message.php # Updated with dynamic content
└── config/
    └── routes.php         # Updated with admin routes
```

## Security Features
- Password hashing using PHP's `password_hash()` function
- Session-based authentication
- Form validation and sanitization
- SQL injection protection through CodeIgniter's query builder

## API Endpoint
The system includes an API endpoint to fetch settings:
- **URL:** `http://your-domain.com/api/settings`
- **Method:** GET
- **Response:** JSON with current settings

## Troubleshooting

### Common Issues
1. **Database Connection Error:** Check database credentials in `config/database.php`
2. **404 Error on Admin Routes:** Ensure mod_rewrite is enabled and `.htaccess` is configured
3. **Settings Not Updating:** Check if database tables exist and have correct structure

### Support
If you encounter any issues, check:
1. PHP error logs
2. CodeIgniter logs in `application/logs/`
3. Database connection status
4. File permissions

## Customization
You can easily extend the admin panel by:
1. Adding new fields to the `admin_settings` table
2. Updating the admin form in `dashboard.php`
3. Modifying the controller to handle new fields
4. Updating the frontend to use new settings
