# eGrocery – Group 9 BSSE-25 Coursework Project

## Project Overview
- **Institution:** BSSE-25, Group 9  
- **Coursework Theme:** ICT Innovation & Entrepreneurship  
- **Application Name:** eGrocery  
- **Problem Addressed:** Urban households, student communities, and SME canteens struggle to source fresh groceries at consistent prices and schedules while balancing sustainability goals. Traditional markets offer limited visibility into stock, pricing, and environmental impact. 
- **Our Solution:** eGrocery digitises local grocery commerce with an end-to-end web platform that connects neighbourhood suppliers, delivery partners, and conscious consumers. The platform emphasises freshness scoring, waste-reduction insights, and entrepreneurship toolkits for small vendors.

## Why eGrocery
- **Freshness Transparency:** Vendors publish harvest batches and quality indicators so buyers can make informed choices.
- **Entrepreneur Support:** Built-in vendor dashboards surface inventory turnover, sales velocity, and micro-loan suggestions powered by simple analytics.
- **Sustainability Nudges:** Customers earn rewards for grouping deliveries, reducing single-use packaging, and choosing low-carbon transport slots.
- **Inclusive Commerce:** Multi-role authentication enables administrators, vendors, and shoppers to collaborate seamlessly.

## Key Capabilities
- Curated home page with seasonal campaigns and sustainability callouts.
- Responsive marketplace with dynamic pricing, cart management, and order history.
- Secure authentication for shoppers, vendors, and platform admins.
- Full admin console to manage vendors, orders, payments, and outreach.
- Embedded analytics widgets (pending future sprint) for sales and waste reduction insights.

## Tech Stack
- **Frontend:** PHP 8, HTML5, modernised Inter typography, responsive CSS.
- **Styling:** Custom glassmorphism theme layered on CSS variables.
- **Backend:** PHP with MySQL database (`shop_db.sql`).
- **Assets:** Local `images/`, `css/`, and `js/` folders (unzipped for immediate use).
- **Tooling:** Git & GitHub for collaboration, XAMPP/LAMP stack for local deployment.

## Setup & Deployment
1. Clone the repository (after creating your shared GitHub repo):
   ```bash
   git clone https://github.com/1katuramu/eGrocery.git
   ```
2. Move the project into your Apache web root (e.g., `htdocs`).
3. Import `shop_db.sql` into MySQL (phpMyAdmin or CLI) and configure credentials in `backend/config.php`.
4. Ensure the `css/`, `js/`, and `images/` directories remain unzipped in the project root.
5. Navigate to `http://localhost/eGrocery/frontend/login.php` to start testing.

## Project Structure
```
eGrocery/
├── admin/
│   ├── admin_contacts.php
│   ├── admin_orders.php
│   ├── admin_page.php
│   ├── admin_products.php
│   ├── admin_users.php
│   └── includes/header.php
├── backend/
│   ├── add_to_cart.php
│   ├── config.php
│   └── logout.php
├── frontend/
│   ├── about.php
│   ├── cart.php
│   ├── checkout.php
│   ├── contact.php
│   ├── home.php
│   ├── login.php
│   ├── orders.php
│   ├── register.php
│   ├── search_page.php
│   ├── shop.php
│   └── includes/
│       ├── footer.php
│       └── header.php
├── css/
│   └── css/
│       ├── admin_style.css
│       └── style.css
├── images/
├── js/
├── uploaded_img/
└── shop_db.sql
```

## SDLC Summary
| Phase | Key Activities | Artefacts |
| --- | --- | --- |
| **1. Problem Discovery** | Stakeholder interviews, market analysis, persona mapping | Research brief, stakeholder matrix |
| **2. Requirements Analysis** | Functional & non-functional specs, MVP backlog, risk register | Product requirements document, prioritised backlog |
| **3. System Design** | Architecture diagram, database schema, UI wireframes, security model | ER diagram, UI mockups, API/sequence diagrams |
| **4. Implementation** | Agile sprints, coding standards, pairing sessions, unit/system testing | Source code, test cases, CI pipeline report |
| **5. Testing & Validation** | Functional testing, UAT with student focus group, performance baselines | Test report, UAT sign-off, defect log |
| **6. Deployment** | Prepare release candidate, environment configuration, data migration | Release notes, deployment checklist |
| **7. Maintenance & Growth** | Monitor KPIs, gather feedback, plan feature roadmap, sustainability metrics | KPI dashboard, support logs, roadmap v1.1 |

> A comprehensive SDLC narrative is maintained in [`SDLC.md`](SDLC.md) with detailed activities, tools, timelines, and responsibilities for each phase.


Let’s continue building a high-impact, innovation-driven solution that blends ICT entrepreneurship with real community value.
