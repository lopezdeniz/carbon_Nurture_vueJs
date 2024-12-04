
# **Carbon Nurture**

Carbon Nurture is an innovative biodegradable plastics company focusing on sustainable solutions for the agriculture and packaging industries. Our mission is to reduce environmental impact through eco-friendly practices and cutting-edge product design.

---

## **Project Overview**
### **Key Features**
- Biodegradable plastic product showcase.
- Interactive form for customer inquiries.
- Seamless integration of Vue.js frontend and PHP backend.
- Email notifications powered by PHPMailer.

### **Project Architecture**
The project follows a modular architecture for maintainability and scalability:

```
carbon_nurture_vueJs/
├── public/                  # Publicly accessible files
│   ├── index.html           # Main entry point for the Vue app
│   ├── form-handler.php     # PHP backend for form processing
│   └── ... other public assets
├── src/                     # Vue.js source files
│   ├── assets/              # Static assets (images, styles)
│   ├── components/          # Vue components
│   │   ├── Form.vue         # Interactive form component
│   │   ├── Header.vue       # Header component
│   │   └── Footer.vue       # Footer component
│   ├── App.vue              # Root Vue component
│   └── main.js              # Entry point for Vue.js
├── vendor/                  # PHP dependencies managed by Composer
│   ├── autoload.php         # Composer autoload file
│   └── phpmailer/           # PHPMailer library
├── .gitignore               # Files and directories to ignore in Git
├── composer.json            # PHP dependencies and configurations
├── package.json             # JavaScript dependencies and scripts
└── README.md                # Project documentation
```

---

## **Setup Instructions**

### **Frontend Setup**

#### **1. Clone the Repository**
Clone the repository to your local machine:
```bash
git clone https://github.com/lopezdeniz/carbon_Nurture_vueJs.git
```

#### **2. Install Dependencies**
Navigate to the project directory and install all Node.js dependencies:
```bash
npm install
```

#### **3. Start the Development Server**
To start the Vue.js development server with hot reload:
```bash
npm run serve
```

---

### **Backend Setup**

#### **1. PHP Server**
Start a PHP development server:
```bash
php -S localhost:8081 -t public
```

#### **2. Install Composer Dependencies**
Ensure PHPMailer and other dependencies are installed:
```bash
composer install
```

#### **3. Configure Email**
Edit `form-handler.php` to add your email credentials:
```php
$mail->Username = 'your-email@gmail.com'; // Your email
$mail->Password = 'your-app-password';   // Your app password
```

---

## **Build Instructions**

### **Compile and Minify for Production**
Build the project for production:
```bash
npm run build
```

### **Run Linter**
Check and fix code linting issues:
```bash
npm run lint
```

---

## **Technologies Used**
- **Frontend:** Vue.js
- **Backend:** PHP (with PHPMailer)
- **Styling:** Bootstrap 5
- **Email Notifications:** PHPMailer

---

## **Contributing**
We welcome contributions to improve Carbon Nurture! To contribute:
1. Fork the repository.
2. Create a new branch (`feature/your-feature-name`).
3. Commit your changes.
4. Open a pull request.

---

## **License**
This project is licensed under the MIT License. See the `LICENSE` file for more details.

---

## **Contact**
For inquiries or feedback, please contact us at:
**support@carbonnurture.com**
