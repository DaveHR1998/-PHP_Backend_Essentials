# Simple User Session Management System in PHP

This repository contains a basic PHP-based user authentication and session management system. The code allows users to log in, update their profile, and log out while managing their session data across different pages.

### Purpose

The primary goal of this project is to:
- Implement user login functionality with email and password.
- Maintain user data in session variables for easy access on multiple pages.
- Display user information on a home/profile page.
- Allow users to update their profile information.
- Provide functionality for logging out and clearing session data.

### Components and Workflow

The system is composed of the following PHP files, each serving a distinct role in the user authentication process:

#### 1. `index.php`
   - **Purpose**: Displays the login form for users to input their email and password.
   - **How it works**: When the user submits the form, the data is sent to `login.php` for authentication.

#### 2. `login.php`
   - **Purpose**: Handles user authentication.
   - **How it works**: 
     - It checks if the submitted email and password match predefined values.
     - If valid, a session is started, and the user’s email and password are stored in session variables.
     - The user is redirected to `home.php` on successful login.
     - If the credentials are incorrect, an error message is displayed.

#### 3. `home.php`
   - **Purpose**: Displays the user's profile information after logging in.
   - **How it works**:
     - Retrieves user data from session variables and displays it.
     - Provides links to update the profile (`user.php`) and log out (`logout.php`).

#### 4. `user.php`
   - **Purpose**: Provides a form for the user to update their profile.
   - **How it works**:
     - Users can update their username and description.
     - Upon form submission, the updated data is stored in session variables and the user is redirected back to `home.php`.

#### 5. `logout.php`
   - **Purpose**: Logs the user out by clearing the session.
   - **How it works**:
     - Ends the session and clears all session data.
     - Redirects the user back to `index.php` where they can log in again.

### Running the Code Locally

If you have PHP installed locally, you can run this system on your local server easily by following these steps:

1. Navigate to the directory where the PHP files are located in your terminal or command prompt.
2. Start a local PHP server by running the following command:

   ```bash
   php -S localhost:4567
   ```

   You can replace `4567` with any port number that is available on your system.

3. Open your browser and go to `http://localhost:4567` to access the login page (`index.php`).

### Summary

This system allows you to:
- **Log in** with predefined credentials.
- **Store user data** in session variables across different pages.
- **Update user profile** data within the session.
- **Log out** and clear session data, returning the user to the login screen.

### Usage

1. Clone or download the repository.
2. Ensure you have a PHP server (e.g., XAMPP, MAMP) running locally or on your server.
3. Place the PHP files in the root directory of your web server.
4. Access the site in your browser and use the login page (`index.php`).

### Future Improvements

- **Database Integration**: Store user data in a database for persistent authentication and profile management.
- **Security Enhancements**: Implement password hashing, input validation, and CSRF protection.
- **User Registration**: Add a registration feature for new users to create an account.

### License

This project is open-source and available under the MIT License. Feel free to use and modify it according to your needs!