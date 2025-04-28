# PHP-CRUD-with-MySQL

**PHP-CRUD-with-MySQL** is a simple web-based To-Do List application that allows users to add and remove tasks. It utilizes PHP to handle form submissions and MySQL for storing tasks in a database. The project demonstrates basic CRUD (Create, Read, Update, Delete) functionality, along with file handling in PHP.

## Features:
- **Add Tasks:** Users can add tasks to the To-Do list.
- **Remove Tasks:** Users can remove all tasks from the list with a button click.
- **Task Display:** Tasks are displayed from the `todo.txt` file or the database if connected.
- **File Handling:** Tasks are written to and read from a text file (`todo.txt`).
- **Database Connection:** Establishes a connection to a MySQL database to store tasks.

## Requirements:
- **PHP**: The project is built using PHP to handle form submission and manage tasks.
- **MySQL Database**: Tasks can be stored in a MySQL database (`todolistdb`).
- **Text File Storage**: If the database is not connected, tasks are saved in a text file (`todo.txt`).

## How It Works:
1. **Adding Tasks**: 
   - When the user enters a task and clicks "Add to List", the task is added to the `todo.txt` file.
2. **Removing Tasks**: 
   - When the user clicks "Remove Tasks", all tasks in the `todo.txt` file are deleted.
3. **Displaying Tasks**: 
   - Tasks are read from the `todo.txt` file and displayed on the webpage.
4. **Database Storage (Optional)**: 
   - If the MySQL database is connected, tasks can be stored and managed in a `todolist` table in `todolistdb`.

## Example Output:
- **Tasks**: Tasks added to the To-Do list will appear below the form.
- **Database Connection**: If successful, the application will output "You are connected!" to confirm the MySQL connection.

## Project Setup:
1. Create a MySQL database called `todolistdb`.
2. Create a table named `todolist` with a `task` column (VARCHAR).
3. Ensure the PHP script connects to your MySQL database.
4. Run the project on a local server with PHP support.

## Troubleshooting:
- If tasks are not saving to the database, check the MySQL connection settings and ensure the database is set up correctly.
- If the `todo.txt` file is not being written to, ensure the file has proper permissions to allow writing.

---

This README outlines the core functionality of the **PHP-CRUD-with-MySQL** project, with instructions on how the application works and how to set it up locally.
