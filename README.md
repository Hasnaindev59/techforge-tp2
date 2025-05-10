# Year-2-Team-Project

E-commerce application for Team 32.

## Overview

This project is a full-stack e-commerce platform designed to provide users with a seamless experience for building and purchasing custom PCs. The platform includes features such as product browsing, compatibility checks, user authentication, and an admin dashboard for managing products and orders.

## Features

- **Custom PC Builder**: Users can select components and check compatibility in real-time.
- **Product Reviews**: Customers can leave feedback and ratings for products.
- **Admin Dashboard**: Manage products, orders, and customer data.
- **Reactive Design**: Optimized for desktop with low latency.
- **Secure Checkout**: Includes payment processing and order tracking.

## Technologies Used

- **Frontend**: React, Mantine UI, Tailwind CSS
- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **Other Tools**: Vite, Artillery for performance testing, Scrapy for data scraping, Selenium for end to end tests



![login + login with google](https://github.com/user-attachments/assets/81cb0ccb-0bf8-4367-94ac-cea110779ecd)
![main product view ](https://github.com/user-attachments/assets/a7951b07-1964-46dc-b509-e0741e5d15e6)
![shopping cart view](https://github.com/user-attachments/assets/d57faaf2-e5fa-40a3-8ad9-f97a0a031e06)
![compatbility feature in action](https://github.com/user-attachments/assets/3b37eaa9-8f55-4766-8ff5-c1f57ba75127)
![feedback review](https://github.com/user-attachments/assets/d2ebf1b3-c3b5-42a4-8121-46a7244e8a6b)
![get in touch](https://github.com/user-attachments/assets/eb65483a-3768-46bd-a5bc-2189d24382e2)
![admin page](https://github.com/user-attachments/assets/39610dc0-b5df-4801-b151-c734a74bb687)
![edit product details](https://github.com/user-attachments/assets/3642567e-d95d-4201-9692-6e64d4fe4367)














## Setup Instructions

### Prerequisites

- Node.js (v16 or higher)
- PHP (v8.1 or higher)
- Composer
- MySQL
- Laravel CLI

### Installation

1. Clone the repository:
   ```bash
   

   ```

2. Install dependencies:
   ```bash
   npm install
   composer install
   ```

3. Configure the environment:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other environment variables in `.env`.

4. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

5. Start the development server:
   ```bash
   npm run dev
   php artisan serve
   ```

6. Access the application:
   

## Testing

- Run end-to-end tests:
  ```bash
  cd tests/selenium-tests
  source venv/bin/activate  # For Linux/Mac
  venv\Scripts\activate     # For Windows
  pytest
  ```

- Run performance tests:
  ```bash
  cd tests/artillery
  artillery run test.yaml
  ```

## Contributors

- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Anonymous** (Anonymous)
- **Hasnain** (Anonymous)
- **Anonymous** (Anonymous)



