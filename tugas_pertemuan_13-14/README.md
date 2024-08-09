# STUDI KASUS / CAPSTONE PERTEMUAN 13-14  ||  Hejo Forest Tour Package Management Application
This web-based application is developed for a small and medium-sized enterprise (UMKM) in the tourism sector. The application is designed to manage tour packages and bookings for Hejo Forest, a destination offering camping, campervan, and glamping experiences with hot springs.

## FEATURES
1. Home Page
    - Displays the main page with navigation menus.
    - Shows a list of available tour packages, including images and descriptions, the facilities and contact.
    - Provides a link to promotional YouTube videos.
2. Tour Package Booking
    - Includes a form where users can book a tour package.
3. Modify Tour Package Booking
    - Allows users to edit or delete their bookings.

## TECHNOLOGIES USED
-   HTML
-   CSS
-   JavaScript
-   PHP 8.2.4
-   MySQL
-   Bootstrap

## GETTING STARTED
1.  Clone the repository:
    ```bash
    git clone https://github.com/alfhz/VSGA-JWD.git
    ```
    * This project is on the tugas_pertemuan_13-14 folder.
2.  Import the database:
     - Open MySQL and create a new database.
     - Import the provided SQL file into the newly created database.
3.  Configure the database connection:
     - Open the koneksi.php file in the controllers directory.
     - Set the database name, username, and password according to your local setup.
4.  Run the application:
     - Place the project files in your web server’s root directory.
     - Open your web browser and navigate to the application.


## STRUCTURE OVERVIEW
1. controllers/
    This folder contains PHP scripts responsible for handling the server-side logic of the application.
    - koneksi.php: Manages the connection to the MySQL database.
    - data_order_proses.php: Manages CRUD operations related to the orders.
    - order_proses.php: Manages CRUD operations related to the tour package data.   
2. js/
    This folder contains JavaScript files that provide client-side interactivity and functionality.
    - package.js: Handles the dynamic display of tour packages on the homepage.
    - data_order.js: Managing the order list table, including actions editing and deleting orders on the frontend.
    - order_proses.js: Handles event on form order include client-side validation for the tour package booking form.
    - navbar.js: Manages the navigation behavior.
    - carousel.js: Handles the dynamic gallery image of tour packages.
3. media/
    This folder contains all the media files used in the application, including images and videos.
4. style/
    This folder contains CSS files that define the styling and layout of the application.
    - dashboard.css: The main stylesheet for the application.
    - data_order.css: Contains styles for the tour package display on order list table
    - form.css: Styles the booking form.
5. view/
    This folder contains the PHP files that make up the visual interface of the application.
    - index.php: The homepage of the application, include navbar, embed content, footer.
    - dashboard.php: The main content of the application.
    - form_packages.php: The booking form page.
    - edit_order.php: Display form edit order.
    - data_order.php: Displays the list of all orders, allowing users to view, edit, or delete their bookings.

