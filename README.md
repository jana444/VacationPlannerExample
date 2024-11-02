# Vacation Planner

## Overview
Vacation Planner is a web-based application that allows users to plan and organize their vacation activities. It includes features for managing a bucket list of activities, adding new activities, and deleting completed ones. This project demonstrates CRUD operations, form handling, and responsive design.

## Features
- **Add New Activities**: Add activities to the bucket list.
- **Delete Activities**: Remove activities from the list, either individually or duplicates without affecting others.
- **Responsive Design**: Works across different devices and screen sizes.
- **Activity Management**: Stores and retrieves activities from a database using PHP and SQL.

## Technologies Used
- **Front-end**: HTML, CSS, JavaScript, jQuery
- **Back-end**: PHP, MySQL
- **Database**: MySQL
- **Tools**: Git, GitHub, Google Maps API

## Project Structure
```plaintext
vacation-planner/
├── database/
│   ├── config.php          # Database configuration settings
│   ├── database.php        # Database connection and CRUD functions
├── images/                 # Images used in the project
├── templates/
│   ├── functions/          # Folder containing helper functions
│   │   └── template_functions.php    # Display and form-related functions
├── index.html              # Homepage of the application
├── activities.php          # Activities management page (Add/Delete)
├── accommodation.php       # Additional feature page
├── validation.php          # Form validation
├── css/                    # CSS files for styling
├── js/                     # JavaScript files for interactivity
└── README.md               # Project overview and documentation
