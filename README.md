# Laravel 11 Authentication Starter Kit with tymon/jwt-auth

This is a back-end basic setup for implementing JWT authentication in a Laravel 11 project using the `tymon/jwt-auth` package. It provides an easy-to-follow guide to get you up and running with token-based authentication for your Laravel API.

## Prerequisites
- PHP 8.1 or higher
- Composer
- Laravel 11
- A MySQL (or compatible) database
- Node.js (for front-end development if needed)

## Installation Steps

### Step 1: Clone Repository 
```bash
git clone https://github.com/whodatboi04/AuthStarterKit11.git
```
#### Step: 1.1 : Clone AuthWithForgotPassword Branch
```bash
git clone -b AuthWithForgotPassword https://github.com/whodatboi04/AuthStarterKit11.git
```
 
### Step 2: Composer Update
```bash
composer update
```

### Step 3: Install jwt secret key
```bash
php artisan jwt:secret
```
- jwt-auth documentation (https://jwt-auth.readthedocs.io/en/develop/)

## For AuthWithForgotPassword Branch
### Step 4: Mail Notification for Forgot Password
 - Setup SMTP in your env file 
 - Check this free SMTP for testing (https://mailtrap.io/)
```bash
php artisan queue:work
```

### Step 5: Php Serve
```bash
php artisan serve
```

### Step 6: Test the Authentication Endpoints
You can use tools like Postman or Insomnia to test your authentication endpoints.

1. **Register a User** by sending a POST request to /api/auth/register with name, email, password, and password_confirmation in the request body.

2. **Login a User** by sending a POST request to /api/auth/login with email and password. If successful, you’ll receive a JWT token.

3. **Logout a User** by sending a GET request to /api/auth/logout with the Authorization header set to Bearer YOUR_JWT_TOKEN.

# Conclusion
You now have a working JWT-based authentication system in your Laravel 11 project using tymon/jwt-auth. This basic setup will allow you to authenticate users and issue JWT tokens for API access.

## Additional Resources 
 - JWT Auth Documentation (https://jwt-auth.readthedocs.io/en/develop/)
 - Laravel 11 Documentation (https://laravel.com/docs/11.x/installation)
