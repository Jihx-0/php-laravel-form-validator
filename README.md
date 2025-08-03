# 🧾 PHP Form Validation Demo

## General

This project demonstrates a basic, server-side form handling system built with PHP. It presents a standards-compliant HTML5 form and performs server-side validation for the following user inputs:

- **Email** – must be a valid email address  
- **Username** – 6–10 characters, alphanumeric only  
- **Password** – must contain at least one lowercase letter, one uppercase letter, and one number  
- **Gender** – selectable from predefined options: *male, female, non-binary, other*

### Key Features

- 🛡️ **Robust server-side validation** using PHP and Laravel validation tools  
- 🔁 **Form repopulation on validation failure**, except for the password field which remains blank for security  
- 📄 **Successful submissions are logged** using Monolog  
- 🧰 **Composer-managed dependencies** for clean project organization  
- 🔧 **Object-based data source** in place of a database  
- 🎨 **Bootstrap styling** for a modern UI

---

## 🛠️ Setup Instructions

This project was built using **Laravel v10.3.3** and **PHP v8.2.0**.

> ⚠️ While the application does not use a database for storing user data, Laravel requires a valid database connection to perform POST requests.

### To run the project:

1. Ensure PHP, Composer, and Laravel are installed.  
2. Create a local `.env` file and set up a dummy database named `dev` (no tables needed).  
3. Run database migration if necessary:  
   ```bash
   php artisan migrate
4. Launch the application
   ```bash
   php artisan serve

## 🧩 Design Considerations

The focus of this project was to demonstrate clean, structured development in a PHP environment. Rather than using client-side validation, all validation is handled on the server to reinforce best practices for secure data handling.

Styling is kept lightweight with Bootstrap for a responsive and user-friendly interface. Logging is handled through Monolog, integrated via Composer, to persist successful submissions in a clean, readable format.

## 🧪 Challenges

One challenge encountered was with Laravel's Validator::make() behavior—it was not displaying validation errors on the form as expected. Due to time constraints, a workaround was implemented that logs all submissions (regardless of success or failure). While not ideal, this ensured the logging system remained functional and testable.
