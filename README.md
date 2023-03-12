This is a simple e-commerce website built entirely in PHP, with no external libraries or frameworks. The site allows users to browse and purchase products, view their order history, and manage their account information.
## Database
The website uses a MySQL database to store product information, customer data, and order history. PDO (PHP Data Objects) statements are used throughout the site to interact with the database, ensuring that queries are safe from SQL injection attacks and other security vulnerabilities.

Usage of PDO Statements:
PDO statements are used for all database interactions in this site, including retrieving product information, adding new products to the database, processing customer orders, and updating customer account information. Prepared statements and bound parameters are used to prevent SQL injection attacks, ensuring that all database queries are executed securely.