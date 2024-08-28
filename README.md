# Project Setup and Development Summary

## Overview

This project involves creating a web application with user registration, login functionalities, and a dashboard. The project uses Smarty as the templating engine, and AJAX for real-time form validation.

## Development Process

### Initial Setup

- Created the project folder and initialized the environment.
- Installed Smarty & Dotenv using Composer in the terminal.

### File Creation

- Developed core files for registration, login, and dashboard functionalities.
- Implemented Smarty templates for the user interface.

### Business Logic

- Implemented user registration and login features.
- Integrated form validation and error handling.

### Styling

- Added CSS styling to enhance the visual appeal of the application.

## Challenges Faced

### Smarty Version Issues

- Encountered problems with the latest version of Smarty, which lacked an autoloader. This issue caused delays until a stable version of Smarty was identified and used.

### Validation and Styling

- Faced an issue where validation errors caused the page to lose its styling. To resolve this, AJAX was implemented for form validation. This approach allowed for real-time validation without reloading the page, preserving the page's styling and improving user experience.

## Outcome

The project was successfully completed and tested. The application now handles user registration and login smoothly, with AJAX providing a seamless validation experience without disrupting the page styling.

## project structure
MyWebApp
├── composer.json
├── config.php
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── README.md
├── templates
│   ├── header.tpl
│   ├── footer.tpl
│   ├── index.tpl
│   ├── dashboard.tpl
│   ├── login.tpl
│   └── register.tpl
├── styles
│   └── styles.css
├── js
│   ├── login.js
│   └── register.js
└── classes
    └── User.php


## Getting Started

1. **Clone the Repository**
   ```bash
   git clone https://github.com/samody2006/Yip-task
2. **Navigate to the Project Folder** 
   cd <project-folder>
3. **Install Dependencies**
      composer install
4. **Setup Environment**
    Ensure the database configuration is set up in config.php.
    and !Env file is updated with your database details
5. **Run the Application**
    Start the server and access the application through http://localhost/<project-folder>/.

    License

This project is licensed under the MIT License - see the LICENSE file for details.

Acknowledgments

    Smarty for the templating engine.
    AJAX for real-time form validation.
    CSS 

Feel free to adjust the sections based on additional details or specific instructions related to your project.
