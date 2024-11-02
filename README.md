# VacationPlannerExample

* Easy Vacation Planner * 

Easy Vacation Planner is a web-based application designed to help users organize their travel plans and track their bucket list activities. 
Users can add vacation accommodations, track points of interest on a map, and maintain a list of activities they'd like to do on their trips.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Structure](#database-structure)
- [Technologies Used](#technologies-used)
- [License](#license)
- [Contact](#contact)

## Features
- **Activity Management:** Add, view, and delete activities on your bucket list. Each activity can be managed individually, even if there are duplicates.
- **Map Integration:** Search and view points of interest on an integrated map.
- **Accommodation Tracking:** Add and manage information related to your travel accommodations.
- **Validation:** All forms are validated for correct input to ensure data consistency.

## Installation

### Prerequisites
- PHP 7.4+ (Recommended: PHP 8.x)
- MySQL or MariaDB (Database server)
- A web server like Apache or Nginx

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/jana444/VacationPlannerExample.git
    cd VacationPlannerExample
    ```

2. **Database Setup:**
   - Import the provided SQL file into your database:
  
      ```bash
     mysql -u username -p database_name < path/to/activities.sql
     ```
     - Replace username with your MySQL username if you're using a different one.
     - Replace database_name with your desired database name.
     - path/to/activities.sql should be replaced with the path to where the SQL file is located.
   
   - Update the `database/config.php` file with your database connection details:
   
     ```php
     define('DBHOST', 'localhost');
     define('DBNAME', 'your_database_name');
     define('DBUSER', 'your_username');
     define('DBPASS', 'your_password');
     ```

3. **Run the project locally:**
   - If you’re using PHP's built-in server, navigate to the root folder and run:

     ```bash
     php -S localhost:8000
     ```

4. **Access the application:**
   Open your browser and navigate to `http://localhost:8000` or the equivalent URL depending on your web server setup.

## Usage

### Activity Management
- Go to the **Bucket List** section to add new activities.
- Enter the activity you want to track and add it to the list.
- Each activity is displayed with a delete icon, allowing users to delete individual activities.

### Map Integration
- Use the **Search Box** above the map to search for points of interest related to your vacation plans.
- View and interact with the map to explore various locations.

### Accommodation Tracking
- Navigate to the Accommodation section to add information about places you plan to stay.
- Input details about each accommodation to keep track of your travel arrangements.

### Nurse Substitution
- Manage nurse substitution periods when the regular nurse is unavailable.

## Database Structure

The project uses the following key tables:

- `activities`: Stores details about each activity on the user's bucket list.
- `accommodations`: Stores information related to the accommodations for the user's vacation.
- `map_searches`: Logs points of interest and locations viewed on the map.

## Technologies Used
- **Backend:** PHP 8.x, PDO for database interactions.
- **Frontend:** HTML5, CSS3, JavaScript (GSAP for animations).
- **Database:** MySQL/MariaDB.
- **WebServer:** Apache

## License

This project is licensed under the Creative Commons Attribution-NoDerivatives 4.0 International (CC BY-ND 4.0).

You are free to:

Share — copy and redistribute the material in any medium or format.
Under the following terms:

Attribution — You must give appropriate credit, provide a link to the license, and indicate if changes were made.
No derivatives — If you remix, transform, or build upon the material, you may not distribute the modified material.

## Contact

For any questions or issues, feel free to reach out:
- **Project Owner:** Jana Krizanova
- **Email:** info@janawebs.com
