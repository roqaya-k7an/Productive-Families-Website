# 🚀 Putting the Website Online (Free Hosting Guide)

This website uses **PHP + MySQL**, so it needs a host that supports them.
**GitHub Pages cannot run it** — use a free PHP host like
**[InfinityFree](https://infinityfree.com)** (free, no credit card, supports PHP & MySQL).

Follow these steps once and your site will be live at a public link.

---

## Step 1 — Create a free hosting account
1. Go to **https://infinityfree.com** and click **Sign Up** (use your email).
2. After logging in, click **Create Account**.
3. Choose a free subdomain (e.g. `profamily.infinityfreeapp.com`) or use your own domain.
4. Wait a few minutes until the account status becomes **Active**.

## Step 2 — Create the database
1. In the control panel (**Control Panel → MySQL Databases**), create a new database.
2. Write down the four values it shows you:
   - **Database host** (e.g. `sqlXXX.infinityfree.com`)
   - **Database name** (e.g. `if0_12345678_profamily`)
   - **Database user** (e.g. `if0_12345678`)
   - **Database password** (the one you set when signing up)

## Step 3 — Import the data
1. Next to your database, click **Admin (phpMyAdmin)**.
2. Click the **Import** tab.
3. Choose the file **`profamily.sql`** from this project and click **Go**.
   - This creates all the tables (admin, client, profamily, product, cart, …) with the sample data.

## Step 4 — Tell the site about the database
1. Open **`config.php`** and replace the four values at the top with the ones from Step 2:
   ```php
   $DB_HOST = 'sqlXXX.infinityfree.com';
   $DB_USER = 'if0_12345678';
   $DB_PASS = 'your-password';
   $DB_NAME = 'if0_12345678_profamily';
   ```
2. Save the file.

## Step 5 — Upload the website files
1. In the control panel, open **Online File Manager** (or use FTP).
2. Go into the **`htdocs`** folder.
3. Upload **all** the project files and folders **except** `docs/`, `README.md`,
   `DEPLOYMENT.md` and `profamily.sql` (those are not part of the running site).
   - Easiest way: upload the ready-made **`profamily-site.zip`** and use the file
     manager's **Extract** option.

## Step 6 — Open your live site 🎉
Visit your subdomain, for example:
```
https://profamily.infinityfreeapp.com/index.php
```
Log in with the sample admin account from the database:
- **Role:** Admin · **Username:** `admin` · **Password:** `12345678`

---

## 💻 Prefer to run it on your own computer instead?
1. Install **[XAMPP](https://www.apachefriends.org/)** and start **Apache** + **MySQL**.
2. Copy this project into the XAMPP **`htdocs`** folder.
3. Open **http://localhost/phpmyadmin**, create a database named **`profamily`**, and
   **Import** `profamily.sql`.
4. Leave `config.php` with its default local values.
5. Open **http://localhost/Productive-Families-Website/index.php**.

---

> ℹ️ This is a student graduation project. Passwords are stored in plain text for
> demonstration purposes only — not suitable for real production use.
