# Implementation and release status

Date: 8 October 2026. Version: 0.1.0. Status: first working implementation; production release blocked and full acceptance suite incomplete.

## What exists

- Owned WordPress plugin with responsive public content reader/search and canonical lesson links.
- Eight-module content manifest: 32 lessons, six articles, six hubs and 24 terms; private primary/retry banks: 32 forms, 234 paired decisions/keys.
- Server-owned reading progress, opaque guest authority, opt-in 30-day browser memory, two-hour visit expiry, account progress, criterion-based paired grading and prerequisite checks.
- Private attempts with version-bound snapshots, checkpoints, resume, retries, correction holds and separate reading/check/practice evidence.
- Optional subscriber registration through core WordPress email password setup; account-only article bookmarks, export and administrator account-deletion cleanup.
- Explicit account-bound guest import with durable receipts, confirmation-based source cleanup and recoverable retries.
- Administrator activity review, exact-definition digest approval and audit reasons. Definitions remain unapproved by default. Changing a key or gate invalidates approval.
- Administrator public-content importer that preserves unrelated content, publishes the reading library and optionally changes the homepage. Repeated imports reconcile owned canonical IDs.

## Observed verification

A disposable local installation uses WordPress **7.1.2**, PHP **8.4.26**, MySQL **8.0** and a stock block theme. It is not the production X-T9 theme. Plugin activation and import of 77 public entries succeeded. The production target previously reported WordPress 7.1.3, PHP 8.4.26, MySQL 8.0.46 and X-T9 1.42.3; that precise combination remains untested.

PHP syntax, pure grading, WordPress integration and browser results are recorded in the final test checkpoint below. Runtime tests use isolated synthetic approvals; production-source definitions remain on hold. Direct HTTP access to private activity data returned **404**, and public catalogue/start/resume responses excluded facilitator keys.

The browser run checks actual WordPress guest reading, deep links, remembered progress across reload, search and a 375-pixel viewport. A separate mocked-API browser run checks paired choice IDs, server-result rendering and explicitly selected, account-bound import. These checks are limited evidence, not a complete accessibility audit or all 69 acceptance criteria.

## Production deployment blocker

The authorised WordPress MCP connection can activate **already installed** plugins but its discovered catalogue exposes no plugin installer. The site's `DISALLOW_FILE_EDIT` setting prohibits theme-file edits. Database template/content access cannot install the owned PHP application. No policy bypass or executable media upload was attempted.

The connector intermittently returned no abilities and non-JSON failures for page listings/searches and one attempt to create a draft Learn page. That draft request's outcome is **unconfirmed**; reconcile by title before retrying. No production publication or homepage change has been verified. A normal administrator plugin ZIP upload or authorised hosting deployment is required for installation; existing authority to implement is sufficient, and this is a capability gap rather than a request for repeated permission.

## Remaining release work

Install on staging/production using an authorised deployment route; back up database/files; verify X-T9 and active-plugin compatibility, cache isolation, email registration/reset delivery and real-site route availability. Review and approve the exact assessment definitions through Tools → Practice publishing before enabling learner checks. Refresh the dated news source before publishing it as current news.

The complete multi-role CMS editorial workflow, publication envelopes/dependency reviews, correction distribution, translated editions, privacy exporter/eraser integrations and operational ownership still require further implementation or configuration. Existing account-deletion cleanup and JSON export do not establish every privacy acceptance criterion. All 69 criteria and seven critical integration scenarios have **not** passed as a complete suite. No independent expert, fluent-Pidgin, learner or psychometric approval is claimed.

## Test checkpoint

Final local regression passed on 8 October 2026:

| Check | Actual result |
| --- | --- |
| PHP 8.4 syntax, all plugin PHP files | Passed |
| Pure server grading | 5 assertions passed |
| Core WordPress auth/progress/bookmarks/import | 23 assertions passed |
| Versioned assessment/gates/SQL failure recovery | 24 assertions passed |
| Selected-record import/dependencies/partial failure | 21 assertions passed |
| Request types/reading positions/withdrawal privacy | 16 assertions passed |
| Exact-definition approval invalidation | 4 assertions passed |
| Mocked-API browser | Passed: paired choices, server feedback, explicit selected account-bound import, mobile layout |
| Actual local WordPress browser | Passed: deep link, reading position, completion, memory/reload, search, 375px layout, zero page errors |
| Plugin activation and repeat content import | Passed; 77 owned public entries |
| Direct private-file HTTP request | 404, no body |

The PHP suites total **88 WordPress assertions**, separately from five pure grading assertions and the browser checks. Commands are documented in [Test README](tests/README.md). No production check is included in these totals.
