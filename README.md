# Emergency Aid Hub

> **Note**: This `README.md` was generated with the help of AI and will be updated later once the application is fully developed.

The **Emergency Aid Hub** is a web-based disaster response and relief coordination platform.  
It provides real-time updates on weather conditions, flood zones, emergency shelters, and other critical information during emergencies.  

The platform also acts as a **central hub for coordinating donations and community-driven efforts**, making it easier for organizations and individuals to contribute aid.

---

## 🚀 Features

- 🌦 **Live Data Integration**  
  Real-time weather forecasts, flood alerts, and other official data feeds.

- 🗺 **Interactive Map**  
  Displays shelters, distribution centers, and disaster-affected zones (floods, fires, etc.).

- 🏠 **Emergency Shelter Locator**  
  Find nearest shelters and relief centers instantly.

- 👥 **Community-Driven Reporting**  
  Users can post ground-level updates, disaster incidents, and relevant information.

- 📢 **Social Media-Style Layout**  
  Familiar feed-style design for easy navigation and community interaction.

- 🎁 **Donation Coordination**  
  Helps connect donors and organizations to streamline aid distribution.

---

## 🛠 Tech Stack

- **Framework**: Laravel (PHP) 
- **Frontend**: Blade Templates, TailwindCSS / Bootstrap, JavaScript  
- **Database**: MySQL  
- **Mapping & Data APIs**: OpenStreetMap, Leaflet.js, Google Maps API, Weather & Disaster APIs  
- **Authentication & Security**: Laravel Breeze / Laravel Jetstream  

---

## 🧰 Requirements

- PHP >= 8.1 (or check your `composer.json` for the version)  
- Composer  
- Laravel ^10.x (check your `composer.json`)
- MySQL / SQLite (or whatever database you’re using)  
- Node.js & npm (for frontend build tools like Vite)  

### ⚙️ Installation

Follow these steps to clone the repository, install dependencies, and run the Laravel app locally.

```bash
# Clone the repository
git clone https://github.com/anthonyA1214/emergency-aid-hub.git
cd emergency-aid-hub

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy the example environment file
cp .env.example .env

# Configure your .env file (e.g., database, app URL)

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Start the development environment (PHP server, Vite, etc.)
composer run dev
```