# How to Run Volunteer Registration App

## Prerequisites
You need a local server environment like **XAMPP** (recommended) or WAMP to run PHP and MySQL.

## Step 1: Move Project to Server Folder
1. Copy the entire `volunteer_registration` folder.
2. Paste it inside your XAMPP installation's `htdocs` folder.
   - Usually located at `C:\xampp\htdocs\`
   - You should end up with: `C:\xampp\htdocs\volunteer_registration\`

## Step 2: Database Setup
1. Open XAMPP Control Panel and start **Apache** and **MySQL**.
2. Open your browser and go to `http://localhost/phpmyadmin`.
3. Click on the **"SQL"** tab at the top.
4. Open the `database.sql` file from this project folder, copy all the code, and paste it into the SQL box.
5. Click **"Go"** to execute. This creates the database `volunteer_db` and the table `volunteers`.

## Step 3: Run the Application
1. **Registration Form**: 
   - Open your browser and go to: `http://localhost/volunteer_registration/index.php`
2. **View Volunteers**: 
   - After submitting, you will be redirected, or you can go to: `http://localhost/volunteer_registration/display.php`

## Troubleshooting
- **Database Error?** 
  - Open `php/dbconnect.php` and check the `$username` (default: root) and `$password` (default: empty). Update them if you changed your XAMPP defaults.
- **Images not showing?**
  - Make sure the `uploads` folder exists in your project directory (the code creates it automatically, but permissions might vary).
