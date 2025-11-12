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
   git clone https://github.com/<your-org>/egrocery.git
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

## Git & Collaboration Workflow
- All Group 9 members must create individual GitHub accounts and be added as collaborators.
- Use **feature branches** named `feature/<short-description>` for development.
- Raise pull requests with concise descriptions, screenshots, and testing notes.
- Require **at least one peer review** before merging into `main`.
- Maintain a shared **CHANGELOG.md** (to be created) tracking sprint achievements.

### GitHub Step-by-Step Plan for a Four-Person Team
1. **Member A – Repository Owner**
   - Create the GitHub repository (`egrocery`) under the agreed organisation or personal account.
   - Push the initial codebase and add Members B, C, and D as collaborators.
2. **Member B – Frontend Lead**
   - Pull the repo, create `feature/frontend-polish`, and handle UI tweaks (e.g., landing sections, responsive fixes).
   - Push the branch and open a pull request (PR) tagged for review by Member D.
3. **Member C – Backend & Database Lead**
   - After pulling the latest `main`, branch off as `feature/backend-hardening` to refine `backend/` scripts and update `shop_db.sql` migrations.
   - Push updates, request review from Member A, and merge after approval.
4. **Member D – Admin & QA Lead**
   - Branch from `main` as `feature/admin-console`, enhance admin pages or analytics, and add test evidence (screenshots/logs) in the PR description.
   - Review PRs from Members B and C before merging; ensure `main` is stable.
5. **Sprint Rhythm**
   - Run daily stand-ups (15 min) to sync progress.
   - Rotate reviewers each sprint to balance workload and knowledge sharing.
   - Before each merge, run database migrations and manual smoke tests locally.

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

## Assessment Deliverables
- Working eGrocery web application hosted locally during demo week.
- GitHub repository with active contributions from all group members.
- Detailed SDLC documentation (`SDLC.md`) and presentation deck (to be added).
- Reflection journal capturing entrepreneurship learnings (optional but recommended).

## Contact & Coordination
- **Team Lead:** To be nominated in Week 2 of the project plan.
- **Communication Channels:** WhatsApp group, GitHub issues, and weekly stand-ups.
- **Faculty Advisor:** Please insert advisor details once assigned.

Let’s continue building a high-impact, innovation-driven solution that blends ICT entrepreneurship with real community value.
