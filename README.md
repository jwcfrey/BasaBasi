BasaBasi - Realtime Chat Website

BasaBasi is a modern, sleek, and user-friendly real-time chat website designed to keep conversations flowing effortlessly. Perfect for connecting with friends, colleagues, or anyone, anytime, anywhere.

Features
🔥 Key Features
1. Realtime Messaging:
Instant message delivery using PHP and JavaScript, ensuring smooth communication without delays.
2. User Authentication:
Secure login and registration system to keep your data safe.
3. Typing Indicators:
Visual feedback when someone is typing, making chats more engaging and interactive.
4. Search Functionality:
Easily find friends or chats with the integrated search feature.
5. Responsive Design:
Optimized for both desktop and mobile devices for seamless access.
6. Custom Animations:
Enhanced user experience with animations like typing effects and dynamic cursors.

Project Structure
src/
Contains all static assets, such as fonts and images, used to enhance the website's UI/UX.

js/
chat.js: Handles real-time chat functionality and message updates.
circleCursor.js: Adds a modern and interactive circular cursor effect.
login.js: Handles client-side login validations.
pass-show-hide.js: Toggles visibility of passwords for convenience.
signup.js: Ensures a smooth and error-free user registration process.
typingAnimation.js: Adds a typing effect for improved engagement.
users.js: Manages user-related interactions, like displaying users or handling status.
php/
Handles the backend logic to ensure a robust and secure platform.

config.php: Manages database configuration for smooth operations.
data.php: Fetches data dynamically for real-time updates.
get-chat.php: Retrieves chat messages efficiently.
insert-chat.php: Inserts new messages into the database.
login.php & signup.php: Backend logic for user authentication.
logout.php: Ensures a clean user logout experience.
search.php: Enables dynamic searching of users and conversations.
style/
global.css: Core styles applied across the website for consistency.
index.css: Specific styles for the homepage and layout.
Includes custom styles for key pages:
chat.css
login.css
signup.css
users.css

How to Run the Project
Prerequisites
PHP 7.x or above
MySQL Database
Web server like Apache or Nginx
Steps

Clone this repository:
git clone https://github.com/jwcfrey/BasaBasi.git
cd BasaBasi

Set up the database:
Import the SQL file (chat.sql) provided in the repo into your MySQL database.
Update config.php with your database credentials.

Start the server:
If you're using XAMPP, move the project folder to the htdocs directory and start Apache & MySQL.
Access the website via http://localhost/BasaBasi.
