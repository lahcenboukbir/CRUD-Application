# CRUD Application with PHP and PDO

This is a simple CRUD (Create, Read, Update, Delete) application built with PHP and PDO. It allows users to manage records in a MySQL database.

## Features

- **Create**: Add new users to the database.
- **Read**: View existing users from the database.
- **Update**: Modify existing user information.
- **Delete**: Remove users from the database.

## Files

1. **conn.php**: Contains the database connection settings.
2. **create.php**: Provides a form to create new users and handles form submissions to insert new records into the database.
3. **read.php**: Displays a list of all users from the database.
4. **update.php**: Allows updating user information based on a provided ID.
5. **delete.php**: Provides a form to delete users from the database based on their ID.

## Prerequisites

- PHP (7.x or higher)
- MySQL (5.x or higher)
- A web server like Apache or Nginx
- PDO extension for PHP

## Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/lahcenboukbir/CRUD-Application.git
   cd crud-application
   ```

2. **Configure the Database**

- Create a MySQL database named crud_example.
- Create a users table with the following SQL:

    ```bash
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        age INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```
3. **Update Database Credentials**

- Edit the conn.php file and set your database connection details:

    ```bash
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    ```

4. **Run the Application**

- Place the files on your web server's root directory.
- Access the application through your web browser:

  - create.php to add new users.
  - read.php to view all users.
  - update.php to update user information.
  - delete.php to delete users.

## Screenshots
- Create:
<img width="209" alt="create" src="https://github.com/user-attachments/assets/f93feed6-0254-433e-a8e1-eb8b578b3f8b">
<img width="314" alt="create_db" src="https://github.com/user-attachments/assets/49cabfe3-f01e-46eb-816f-b5b39eaddf31">

- Read:<br>
<img width="217" alt="read" src="https://github.com/user-attachments/assets/8d7ce1dd-22a5-411e-81dc-36bf15281c5e"><br><br>

- Update:
<img width="201" alt="update" src="https://github.com/user-attachments/assets/1e1583f8-774b-43aa-afbf-e65bb3bca0c2">
<img width="302" alt="update_db" src="https://github.com/user-attachments/assets/aad779a1-d2ab-497e-b564-c3d4a9183e41"><br><br>

- Delete:
<img width="194" alt="delete" src="https://github.com/user-attachments/assets/8c090191-419c-4702-9598-44c06b751f5f">
<img width="296" alt="delete_db" src="https://github.com/user-attachments/assets/38dcb6d0-bc00-4eae-90b5-b7d1611c618c"><br><br>



## Contributing
- Feel free to fork the repository and submit pull requests. If you find any issues or have suggestions for improvements, please open an issue on GitHub.

## Contact
For any questions or inquiries, please contact me.
