# Wetin Be Crypto — WordPress Core and Hosting Research

Version: 0.1
Date: 7 October 2026
Status: Official-source desk research for P-06; no installation or application testing.

## Method and limits

Seven official pages were inspected through Firecrawl text extraction on 7 October 2026. A rate-limited batch was retried successfully; all seven final responses returned HTTP 200. An inspection date does not establish a plugin release, compatibility, or runtime behaviour. WordPress documentation-site metadata naming an alpha version does not select that version for production.

Read alongside [LMS research](WORDPRESS-COMPONENT-RESEARCH.md), [supporting components](WORDPRESS-SUPPORTING-COMPONENTS.md), and the proposed [build plan](WORDPRESS-BUILD-PLAN.md). Sources support building blocks; complete product behaviour remains unverified. No component purchase, vendor contact, deployment, or coded experiment occurred.

## Inspected sources

| ID | Publisher / exact source | Observation and scope |
| --- | --- | --- |
| S-40 | WordPress, [Custom Post Types](https://developer.wordpress.org/plugins/post-types/). | Custom content types use the normal posts table and can be registered/retrieved. Supports structured authoring; does not provide an outcome or progress engine. Body dates: first published 24 September 2014; updated 14 December 2023. |
| S-41 | WordPress, [Roles and Capabilities](https://developer.wordpress.org/plugins/users/roles-and-capabilities/). | Roles group capabilities; custom roles/capabilities support more specific access decisions. Does not establish revision-bound dual approval or record ownership automatically. |
| S-42 | WordPress, [Nonces](https://developer.wordpress.org/apis/security/nonces/). | Nonces help prevent some misuse but are neither authentication nor authorisation. They are not one-time tokens and do not prevent replay. Guests default to user ID zero and share nonces; the handbook describes a separate guest-session mechanism for critical actions. Body updated 23 July 2026. |
| S-43 | WordPress, [Creating Tables with Plugins](https://developer.wordpress.org/plugins/creating-tables-with-plugins/). | Prefer post metadata when practical; plugins can create/upgrade database tables when required. Supports storage options and lifecycle responsibilities, not a blanket recommendation for custom tables. |
| S-44 | WordPress, [Requirements](https://wordpress.org/about/requirements/). | Recommended baseline: PHP 8.3 or greater; MariaDB 10.11 or greater OR MySQL 8.0 or greater; HTTPS. Older versions may run but are identified as end of life. Does not prove candidate-plugin compatibility. |
| S-45 | Kinsta, [WordPress hosting pricing](https://kinsta.com/pricing/). | Entry table lists USD35 monthly or USD350 annually, excluding taxes, one installation, 10GB storage, standard staging and 14-day backup retention. Traffic/bandwidth limits and overages apply. Modified metadata: 12 June 2026. Host is an illustrative benchmark, unselected. |
| S-46 | WordPress, [REST API Authentication](https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/). | Logged-in cookie authentication requires the REST nonce and appropriate capabilities. Missing nonce sets current user to zero even with a login cookie. Does not authenticate a learning guest or establish own-record permissions. Body updated 4 June 2025. |

## Technical implications — proposed, not established application behaviour

**Content and ownership:** WordPress can represent lessons, glossary entries, articles, activities, hubs and metadata without making business logic depend on a theme. A project-owned plugin is a credible responsibility boundary for learning rules. Custom tables should be justified by relational constraints, immutable history, query requirements and retention; source S-43 favours metadata where sufficient.

**Guest authority:** an editable browser completion/pass flag cannot establish a prerequisite. A guest session needs an opaque identity tied to private server records, server-side grading and expiry checks. A nonce provides a separate request-protection function. Account actions additionally need authentication, capability and own-record checks. Repeated or interrupted writes need idempotency independently of request tokens. These are architecture proposals grounded in the source distinctions; no guest implementation is proven.

**Publishing:** custom roles and capabilities support restricted writing, revision submission and approval. The specific revision, subject review, publishing review and relevant metadata need explicit application rules. Default editorial roles and a pending-revision plugin alone do not prove those rules or prevent every bypass.

**Compatibility:** later delivery should freeze supported stable WordPress, PHP/database, theme and plugin versions after a compatibility review. No versions or host regions are selected by this research. The proposed future verification includes request permissions, private caches, upgrade/migration behaviour and restore boundaries.

## Hosting benchmark and budgeting boundary

Use **USD350 paid annually**, or **USD35 × 12 = USD420** for twelve monthly payments, as a dated entry benchmark. The displayed USD30 monthly annual equivalent is rounded; multiplying it by twelve does not reproduce the annual invoice. Ignore temporary first-month promotional credit in the regular operating model.

The source lists standard staging and entry backup retention. Premium staging, more frequent/external backups, storage and traffic overages are separate considerations. Flattened tables and promotional traffic cards do not establish which quota or plan fits the application; obtain a dated plan confirmation against expected public traffic and private learning writes. Geographic latency, actual resource usage and the integrity of learning records have not been measured.

The benchmark excludes domain, transactional email, additional monitoring/backups, licence additions, tax/FX, developer support, content production and implementation. It is neither a total project budget nor a selected host. The [build-plan cost model](WORDPRESS-BUILD-PLAN.md#cost-model-and-effort) keeps those omissions visible.
