# Chronicle - Personal Blog Management System

Chronicle is a simple yet powerful blogging platform that allows users to create, edit, delete, and view blog posts. Built with PHP and MySQL, it features user authentication, enabling only registered users to manage their posts. This project is designed to demonstrate the integration of client-side and server-side technologies, offering a great learning tool for those interested in web development.

## Features

- User registration and login system.
- CRUD operations for blog posts.
- Session management for user authentication.
- Basic security implementations.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them:

- PHP 7.x or higher.
- MySQL.
- Apache Web Server (LAMP/WAMP/XAMPP/MAMP setup recommended).

### Installing

Follow these steps to get your development environment running:

1. **Clone the repository**:
   Clone the project repository to your local machine using the following command in your terminal or command prompt:
   \```bash
   git clone https://github.com/aavashism/chronicle.git
   \```
   Replace `https://github.com/aavashism/chronicle.git` with the actual URL of your repository.

2. **Navigate to the project directory**:
   Change into the project directory:
   \```bash
   cd chronicle
   \```

3. **Import the database schema**:
   Import the `chronicle_db.sql` file into your MySQL database. This step assumes you have MySQL installed and running on your machine. You can use phpMyAdmin or the MySQL command line tool:
   \```bash
   mysql -u username -p chronicle_db < path/to/chronicle_db.sql
   \```
   Replace `username` with your MySQL username and adjust the path to where your `chronicle_db.sql` file is located.

4. **Update database configuration**:
   Open the `config/database.php` file and update it with your database connection details, including the database name, username, and password.

5. **Start the Apache and MySQL services**:
   Ensure your Apache web server and MySQL services are running. If you're using a solution stack like XAMPP, WAMP, or MAMP, start these services through the control panel.

6. **Access the project**:
   Open a web browser and navigate to `http://localhost/chronicle` to access the project. Adjust the URL based on your local development environment's configuration and the folder name where you placed the project.

## Built With

- [PHP](https://www.php.net/) - The server-side scripting language used.
- [MySQL](https://www.mysql.com/) - The database management system used.
- [Apache](https://httpd.apache.org/) - The web server used.

## Contributing

Please read [CONTRIBUTING.md](#) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

- **Aavash Upadhyaya** - [aavashism](https://github.com/aavashism)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.


