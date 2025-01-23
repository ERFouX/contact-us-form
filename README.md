# Contact Us Form

This project is a simple contact form that allows users to get in touch with you. The form includes fields for name, email, mobile number, and message.

## Directory Structure

```
erfoux-contact-us-form/
├── README.md
├── closed.php
├── database.php
├── index.php
├── styles.css
└── submited.php
```

## Prerequisites

To run this project, you will need the following:

- A web server (such as Apache or Nginx)
- PHP 7.0 or higher
- MySQL for the database

## Setting Up the Project

To set up this project on your system, follow these steps:

1. **Download the Project**: First, download the project from GitHub or another source.

   ```bash
   git clone https://github.com/ERFouX/contact-us-form.git
   ```

3. **Create the Database**:
   - Connect to MySQL and create a new database named `contact_us`.
   - If necessary, create the required tables.

4. **Database Configuration**:
   - Open the `database.php` file and change the database connection information (username and password) according to your local settings.

   ```php
   $servername = "localhost"; // or your database server address
   $username = "root"; // database username
   $password = ""; // database password
   $db_name = "contact_us"; // database name
   ```

5. **Upload Files to the Server**:
   - Place all project files in the root directory of your web server (such as `htdocs` in XAMPP or `html` in NGINX).

6. **Run in Browser**:
   - Open your browser and go to `localhost/contact-us-form` to view the contact form.

## How to Contribute

If you would like to contribute to this project, please follow these steps:

1. **Fork the Project**: Fork the project and create a copy of it in your GitHub account.

2. **Create a New Branch**: Create a new branch for your feature or fixes.

   ```bash
   git checkout -b feature-name
   ```

3. **Make Changes**: Make your changes to the code.

4. **Commit Your Changes**: Commit your changes.

   ```bash
   git commit -m "Add some feature"
   ```

5. **Push to Your Repository**: Push your changes to your repository.

   ```bash
   git push origin feature-name
   ```

6. **Create a Pull Request**: Go back to the main repository and create a Pull Request to review your changes.

## Contact Us

For any questions or issues, you can reach out to us via the following email:

[ERFouX@gmail.com](mailto:ERFouX@gmail.com)

---

Thank you for your interest in this project!
