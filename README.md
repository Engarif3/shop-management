# Shop Management (Laravel-MySQL)

## Overview

The **Shop Management** is a web-based application developed using Laravel that allows efficient management of products and sales. This system facilitates product inventory control, sales monitoring, and price adjustments.

## Features

- View all products in the inventory.
- Add new products to the inventory.
- Update product quantities based on sales.
- Adjust product prices.
- Monitor sales with a dashboard showcasing daily, monthly, and historical data.
- Maintain a sales history.

## Technologies Used

- **Laravel**: PHP framework for web application development.
- **MySQL**: Database management system.
- **PHP**: Backend programming language.
- **Blade**: Laravel's templating engine for views.

## Prerequisites

- PHP 8.1 or higher installed.
- MySQL server installed and running.
- Composer installed.

## Getting Started

### Running Locally

1. Clone the repository:

   ```bash
   git clone <Repo URL>
   cd <repository-folder>
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Set up the `.env` file with your local database credentials.

4. Run database migrations:

   ```bash
   php artisan migrate
   ```

5. Start the application:

   ```bash
   php artisan serve
   ```

6. Access the application locally:
   ```
   http://localhost:8000
   ```

## API Endpoints

| HTTP Method | Endpoint               | Description                          |
|-------------|------------------------|--------------------------------------|
| GET         | `/`                    | Displays all products.               |
| GET         | `/add-product`         | Shows the form to add a new product. |
| POST        | `/add-product`         | Adds a new product to the inventory. |
| GET         | `/update-quantity`     | Shows the form to update quantities. |
| PUT         | `/update-quantity/{id}`| Updates the quantity of a product.   |
| GET         | `/change-price`        | Shows the form to change prices.     |
| PUT         | `/change-price/{id}`   | Updates the price of a product.      |
| GET         | `/dashboard`           | Displays the sales dashboard.        |
| GET         | `/sales-history`       | Shows the sales history.             |

## 📞 Contact

For any inquiries or issues, feel free to reach out:

- **Email:** [arif.aust.eng@gmail.com](mailto:arif.aust.eng@gmail.com)
- **LinkedIn:** [Md. Arifur Rahman](https://www.linkedin.com/in/engarif3/)

