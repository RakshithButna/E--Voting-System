# E-Voting System

This is an **Online Voting System** built with PHP and MySQL. The system allows users to **register, log in, vote, and track voting results** securely.

---

## 🚀 Features
✅ User Registration & Login  
✅ Vote Casting  
✅ Voting Status Tracking  
✅ Secure Authentication  
✅ Admin Panel (if implemented)  

---

## 🛠 Requirements
- **XAMPP (or any local server with PHP & MySQL)**
- **Web Browser** (Chrome, Edge, Firefox, etc.)
- **Git (for cloning the repository)**

---

## 📌 Installation Process
### **Step 1: Install XAMPP**
1. Download XAMPP from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).
2. Run the installer and select these components:
   - Apache (Web Server)
   - MySQL (Database Server)
   - PHP
   - phpMyAdmin (Database Management Tool)
3. Install it in `C:\xampp` (recommended) or `D:\Software\xampp`.
4. Open **XAMPP Control Panel** and start:
   - **Apache** (Runs PHP files)
   - **MySQL** (Handles the database)

### **Step 2: Install Git**
1. Download Git from [https://git-scm.com/downloads](https://git-scm.com/downloads).
2. Install it and select **Git Bash** as a terminal.
3. Open **Git Bash** and verify installation with:
   ```bash
   git --version
   ```

### **Step 3: Clone the Repository**
1. Open **Command Prompt (cmd) or Git Bash**.
2. Run the following command:
   ```bash
   git clone https://github.com/yourusername/e-voting-system.git
   ```
3. Navigate into the project folder:
   ```bash
   cd e-voting-system
   ```

### **Step 4: Move Project to XAMPP**
1. Copy the entire **e-voting-system** folder.
2. Paste it inside XAMPP’s `htdocs` folder:
   ```bash
   C:\xampp\htdocs\e-voting
   ```

### **Step 5: Start XAMPP Services**
1. Open **XAMPP Control Panel**.
2. Start **Apache** and **MySQL**.

### **Step 6: Setup the Database**
1. Open your browser and go to:
   ```
   http://localhost/phpmyadmin/
   ```
2. Click **New** on the left sidebar.
3. Create a new database named **evoting**.
4. Click **Import**, upload the `vote.sql` file, and click **Go**.

### **Step 7: Configure Database Connection**
1. Open the **server.php** file in `C:\xampp\htdocs\e-voting\`.
2. Update database credentials:
   ```php
   $db = mysqli_connect('localhost', 'root', '', 'evoting');
   ```
3. Save the file.

### **Step 8: Run the Project**
1. Open a browser and go to:
   ```
   http://localhost/e-voting/
   ```
2. Register a new account and **start voting!** 🎉

---

## 🌍 Deploying the E-Voting System Online (000WebHost)
You can deploy this system online for free using **000WebHost**.

### **Step 1: Create a Free 000WebHost Account**
1. Visit **[https://www.000webhost.com/](https://www.000webhost.com/)**.
2. Sign up and create a **new website**.

### **Step 2: Upload Project Files**
1. Go to **File Manager** inside 000WebHost.
2. Delete all existing files inside the `public_html` folder.
3. Upload all **E-Voting System files** into `public_html`.

### **Step 3: Set Up the Database**
1. Open **Database Manager** in 000WebHost.
2. Create a new database.
3. Copy the **database name, username, and password**.
4. Open **phpMyAdmin** in 000WebHost.
5. Import `vote.sql` into the database.

### **Step 4: Update Database Connection**
1. Open **`server.php`** and update the database credentials:
   ```php
   $db = mysqli_connect('your-database-host', 'your-database-username', 'your-database-password', 'your-database-name');
   ```
2. Save the file and re-upload it.

### **Step 5: Access the Online System**
- Visit your **000WebHost website URL** and start voting online! 🎯

---

## 📌 License
This project is **open-source** and free to use.
