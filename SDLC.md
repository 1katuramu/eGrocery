# eGrocery SDLC Report – Group 9 BSSE-25

## Project Overview
- **Vision:** Deliver a sustainability-focused grocery marketplace that empowers local vendors and urban households through transparent sourcing, carbon-smart deliveries, and entrepreneurial tooling.
- **Team Footprint:** 4 core engineers (frontend, backend, data, QA/DevOps) + rotating business liaison. Advisors from entrepreneurship faculty and sustainability hub.
- **Lifecycle Model:** Hybrid Agile – discovery and design upfront, followed by three two-week sprints with continuous stakeholder feedback.
- **Solution Architecture:** Layered PHP application split into `frontend/`, `backend/`, and `admin/` modules, backed by MySQL and enriched with analytics-ready data models.

---

## Phase 1 – Problem Discovery & Initiation
- **Objectives:** Understand customer pain points, validate market opportunity, and secure stakeholder alignment.
- **Key Inputs:** Canvas interviews, market research, SDG alignment goals, preliminary business model hypotheses.
- **Core Activities:**
  - Contextual inquiries with 15 households, 5 hostel kitchen managers, and 6 micro-vendors.
  - Competitive benchmarking against Jumia, Glovo, and local WhatsApp commerce groups.
  - Design thinking workshop to map customer journeys and “freshness transparency” value proposition.
- **Roles & Tools:** Business liaison (lead), UX lead, Notion for notes, Miro for journey maps, Google Forms for surveys.
- **Deliverables:** Stakeholder matrix, refined problem statement, opportunity assessment, project charter, initial success KPIs.
- **Exit Criteria:** Stakeholders agree on success measures (e.g., 70% user preference for digital platform with freshness insights) and approve charter.
- **Risks & Mitigation:**
  - *Risk:* Stakeholder misalignment on priorities. *Mitigation:* Weekly sponsor sync, documented decisions.
  - *Risk:* Underestimated vendor digital literacy. *Mitigation:* Plan for assisted onboarding and multilingual content.
- **Metrics:** Interview coverage ≥90% of targeted persona groups; Evidence of at least three validated differentiators vs competitors.

## Phase 2 – Requirements Analysis
- **Objectives:** Translate insights into actionable functional and non-functional requirements and prioritised backlog.
- **Activities & Owners:**
  | Activity | Owner | Output |
  | --- | --- | --- |
  | Draft persona-driven user stories (“As a vendor…”) | UX Lead | Product backlog v1 |
  | Capture NFRs (performance <2s, availability 99%, WCAG AA) | DevOps & QA | NFR register |
  | Define data retention, audit, and security policies | Backend Lead | Security checklist |
  | Prioritise features using MoSCoW | Product Owner | MVP scope |
- **Artefacts:** Product Requirements Document, refined backlog, acceptance criteria, risk register (updated), traceability matrix linking goals → stories.
- **Exit Criteria:** Business sponsor signs off on MVP scope; backlog groomed and estimated; risks ranked with mitigation owners.
- **Risks & Mitigation:** Scope creep (locked via change control); ambiguous requirements (use example-based specs, wireframes).
- **Metrics:** ≥95% of stories with clear acceptance criteria; risk register maintained with probability/impact scores.

## Phase 3 – System Design
- **Objectives:** Establish architecture, data structures, interfaces, and UX flows that satisfy requirements.
- **Design Highlights:**
  - **Architecture:** Three-layer separation across `frontend/` (public UX), `backend/` (services, config, utilities), and `admin/` (operations console); REST-style endpoints planned for future mobile integration.
  - **Data:** ERD covering `users`, `products`, `cart`, `orders`, `order_items`, `messages`, `vendors`, `carbon_rewards`. Includes indexing strategy, soft-delete rules, and audit timestamps.
  - **Integration:** Planned hooks for SMS/WhatsApp notifications and third-party carbon offset APIs (future release).
  - **UI/UX:** High-fidelity Figma prototypes for home, product listing, admin dashboards with accessibility contrast checks.
- **Deliverables:** Architecture decision records (ADR-001 to ADR-004), sequence diagrams, interface contracts, wireframes, design system tokens (typography, spacing, color scales).
- **Exit Criteria:** Architecture review board approval, data model peer-reviewed, and design handoff accepted by frontend lead.
- **Risks & Mitigation:**
  - Performance bottlenecks (introduce caching strategy in ADR-003).
  - Security gaps (threat modelling session; implement prepared statements, CSRF tokens).
- **Metrics:** 100% of modules mapped to design artefacts; unresolved design issues < 3 at sprint kickoff.

## Phase 4 – Implementation (Development Sprints)
- **Objectives:** Build, integrate, and iterate on MVP features through timeboxed sprints.
- **Sprint Cadence:**
  - *Sprint 0:* Environment setup, scaffolding folder structure, CI pipeline draft.
  - *Sprint 1:* Authentication, vendor onboarding, foundational catalog.
  - *Sprint 2:* Cart, checkout, order lifecycle, messaging.
  - *Sprint 3:* Admin analytics shell, sustainability rewards prototype, polish & hardening.
- **Engineering Practices:**
  - Definition of Done includes peer review, coding standards (PSR-12), updated tests, and documentation check.
  - Pair programming for complex modules (checkout workflow, admin dashboards).
  - Git strategy: `main` → release ready; feature branches → PRs; optional `develop` for integration if velocity increases.
  - Automated formatting (PHP-CS-Fixer), linting, and pre-commit hooks.
- **Tools:** VS Code, PhpStorm, GitHub Actions (planned), Trello/Jira board, XAMPP/ Docker (future) for parity.
- **Exit Criteria:** Sprint demos accepted; cumulative velocity supports MVP timeline; technical debt log maintained.
- **Risks & Mitigation:** Resource contention (use WIP limits); dependency delays (slack buffer in sprint plan).
- **Metrics:** Sprint goal achievement ≥80%; unit test coverage trend upward; PR review turnaround <24h.

## Phase 5 – Testing & Quality Assurance
- **Objectives:** Validate correctness, performance, accessibility, and user acceptance before release.
- **Testing Matrix:**
  | Layer | Scope | Tooling | Owner |
  | --- | --- | --- | --- |
  | Unit | Utility helpers, DB access wrappers | PHPUnit | Backend lead |
  | Integration | Checkout, order placement, vendor CRUD | Postman suites, Selenium (stretch) | QA lead |
  | UI/UX | Responsiveness, keyboard nav, color contrast | Chrome DevTools, AXE | Frontend lead |
  | Performance | Page load, DB query response | ApacheBench, MySQL EXPLAIN | DevOps |
  | Security | SQL injection, XSS smoke checks | OWASP ZAP (manual run) | QA + Backend |
  | UAT | Scenario-based tests with pilot group | Checklists, feedback forms | Business liaison |
- **Defect Workflow:** Log in GitHub issues, classify severity (critical/high/medium/low), assign owners, track resolution SLA.
- **Exit Criteria:** Critical/High defects = 0; UAT sign-off from faculty advisor and vendor pilot; accessibility compliance documented.
- **Metrics:** Defect escape rate <5%; load time ≤2s on 10 Mbps; UAT satisfaction ≥4/5 average rating.

## Phase 6 – Deployment & Release Management
- **Objectives:** Package, deploy, and verify the application in staging and production (demo) environments with minimal risk.
- **Environment Strategy:**
  - *Dev:* Local XAMPP instances per developer.
  - *Staging:* Shared institutional VM (LAMP) mirroring production configuration.
  - *Production/Demo:* Hardened instance for reading-week assessment with monitored access.
- **Deployment Pipeline:**
  1. Merge approved PRs into `main`, trigger automated build/lint workflow.
  2. Generate release tag (e.g., `v0.9.0-rc1`), export database migrations, package assets.
  3. Deploy to staging via scripted FTP/SSH; run smoke tests and rollback checklist.
  4. On sign-off, promote to production; snapshot DB and assets pre/post deploy.
- **Supporting Artefacts:** Deployment checklist, environment diagram, release notes, backup/restore SOP, incident response playbook.
- **Exit Criteria:** Successful staging validation, rollback tested, stakeholders notified of go-live. Production monitoring configured.
- **Risks & Mitigation:** Config drift (infrastructure-as-code plan), failed migrations (dry-run on staging, restore point).
- **Metrics:** Deployment success rate ≥95%; mean time to recover <30 minutes for demo environment.

## Phase 7 – Maintenance, Monitoring & Continuous Improvement
- **Objectives:** Sustain system health, respond to feedback, and grow functionality.
- **Post-Go-Live Activities:**
  - Monitor KPIs via dashboards (orders/hour, vendor churn, carbon credit redemption).
  - Weekly triage of support tickets; categorize into bugs vs enhancements.
  - Security hygiene: dependency updates, log review, quarterly vulnerability scan.
  - Gather sustainability impact data (reduced single-use packaging, grouped delivery adoption).
- **Enhancement Roadmap:** PWA support, vendor analytics, loyalty rewards, AI-based demand forecasting, multilingual support.
- **Exit Criteria (Per Iteration):** SLA adherence, stakeholder satisfaction review, roadmap reprioritised with data insights.
- **Metrics:** Platform availability ≥99%; vendor NPS ≥40; carbon reward redemption growth ≥10% per quarter.
- **Risks:** Team turnover (cross-training plan), feature bloat (guardrails via product council), data privacy breaches (policy adherence, audits).

## Entrepreneurship & Innovation Framework
- **Business Model Canvas:**
  - *Value Proposition:* Fresh, traceable groceries; entrepreneurship uplift; eco-rewards.
  - *Customer Segments:* Students, urban families, SME canteens, micro-vendors.
  - *Channels:* Web app, campus pop-ups, social media campaigns, sustainability clubs.
  - *Revenue Streams:* Commission, vendor subscription tiers, carbon credit partnerships, sponsored sustainability campaigns.
  - *Cost Structure:* Hosting, logistics coordination, marketing, community outreach.
- **Innovation Flywheel:** Continuous data collection → insights for vendors → improved offerings → customer loyalty → more data.
- **Impact Metrics:** Alignment to SDGs 2, 8, 11, 12; track waste reduction, vendor income uplift, carbon footprint savings.

## Governance, Roles & Communication
- **RACI Snapshot:**
  | Activity | Responsible | Accountable | Consulted | Informed |
  | --- | --- | --- | --- | --- |
  | Product vision & scope | Business liaison | Faculty advisor | Entire team | Stakeholders |
  | Architecture decisions | Backend & DevOps leads | Lead developer | Frontend, QA | Team |
  | Sprint planning | Product owner | Scrum master (rotating) | Team | Sponsors |
  | QA sign-off | QA lead | Lead developer | Stakeholders | Team |
- **Cadence:** Daily stand-ups, weekly sprint reviews/demos, fortnightly stakeholder sync, monthly retro with entrepreneurship mentor.
- **Documentation Hub:**
  - GitHub Wiki for ADRs and decision logs.
  - Notion/Confluence for meeting minutes, OKRs.
  - Shared Drive for legal, financial, and marketing artefacts.

## Integrated Timeline
| Week | Milestone | Primary Deliverables |
| --- | --- | --- |
| 1 | Discovery kickoff | Interviews, stakeholder matrix, charter |
| 2 | Requirements sign-off | PRD, backlog, risk register |
| 3 | System design | ERD, wireframes, ADR approvals |
| 4 | Sprint 1 | Auth module, vendor onboarding, base catalog |
| 5 | Sprint 2 | Cart, checkout, order management, messaging |
| 6 | Sprint 3 | Admin analytics shell, sustainability rewards MVP |
| 7 | QA & UAT | Test reports, accessibility audit, UAT sign-off |
| 8 | Deployment & Pitch | Release `v1.0`, demo deck, entrepreneurship reflection |

---

This enhanced SDLC guide should be used alongside sprint boards, GitHub issues, and business artefacts to evidence a rigorous, innovation-driven engineering process for eGrocery. It documents clear objectives, ownership, and success criteria so the team can execute confidently through reading week and beyond.
