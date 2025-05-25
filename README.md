How to Run the Web App (Simple Steps)

Use XAMPP (includes Apache, PHP and SQL) 

Put your PHP files

For XAMPP: Place files in htdocs folder (e.g., C:\xampp\htdocs\CTFROOM Technical Challenge)


Start the web server

XAMPP: Open Control Panel → Start Apache php and sql

Open your browser

XAMPP: Go to http://localhost/CTFROOM Technical Challenge/

View the Web app running!


DATABASE SCHEMA CREATE DATABASE judge;

USE judge;

CREATE TABLE judges ( judgeId VARCHAR(50) PRIMARY KEY, username VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL );

CREATE TABLE users ( userId VARCHAR(50) PRIMARY KEY, userName VARCHAR(100) NOT NULL, Score INT DEFAULT 0 );


 Design Choices Explained
    1. Database Structure
    The database was designed with simplicity and clarity to support user evaluation functionality. Two primary tables are used:

    a) judges table
    sql
    Copy
    Edit
    CREATE TABLE judges (
    judgeId VARCHAR(20) PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
    );
    judgeId is the unique identifier for each judge.

    Passwords are stored (though ideally should be hashed using password_hash() for security).

    Structure supports login and authorization features in the future.

    b) users table
    sql
    Copy
    Edit
    CREATE TABLE users (
    userId VARCHAR(20) PRIMARY KEY,
    userName VARCHAR(100) NOT NULL,
    Score INT DEFAULT 0
    );
    Stores participants' details and their cumulative scores.

    The Score field supports multiple additions from different judges.

    This simple schema avoids complexity and is easy to maintain, making it suitable for a small to medium-sized judging platform.

    2. PHP Constructs
    ✅ mysqli_real_escape_string()
    Used to sanitize user inputs before inserting into the database to prevent SQL injection.

    ✅ isset($_POST['...'])
    Used to check if a form submission was made before running insert or update logic. This helps ensure that scripts respond only to valid POST requests.

    ✅ header("Location: ...")
    Used for redirection after successful or failed operations, providing feedback through query parameters.

    ✅ HTML & PHP Mixed
    PHP is embedded inside HTML to dynamically display data like users and form values. This makes it simple to render database results directly on the frontend.

    ✅ Modal Popups with JavaScript
    Used a JavaScript modal to collect scores, which makes the experience more interactive and avoids page reloads before submitting.

    3. Design Decisions
    Modularity: Code is separated into functional files like functions/function.php and modal/assignPoints.php to improve maintainability.

    Tailwind CSS: Used for a clean, modern UI without writing a lot of custom CSS.

    Score Validation: Scores are restricted to a range (1–100) using both JavaScript and PHP to ensure data integrity.

🔧 Assumptions Made
    All judges have unique usernames and IDs.

    Scores are integers between 1 and 100.

    There’s no authentication or session tracking for judges in this version.

    A score is cumulative (added to any existing score for the user).



🚀 Features to Add (If Given More Time) ✅ Judge login/logout system with session handling.

✅ Score history and audit trail.

✅ Prevent scoring the same user multiple times.

✅ Export user scores to CSV or PDF.

✅Better UI/UX.

✅ Admin dashboard for managing judges and users.

