# WordPress implementation

The owner explicitly authorised implementation under D-21. Sources are in `wetin-be-crypto/`; the research and acceptance specifications remain at repository root.

## Architecture

One owned WordPress plugin provides learner journeys and private server-scored practice. WordPress pages/posts hold public educational content. No wallet connection, funds, investment signal or paid component is required.

`tools/extract_content.py` generates the canonical 32 lessons, six articles, six hubs, 24 glossary entries, and 32 private assessment forms from the reviewed Markdown drafts. It requires Python Markdown. Public data excludes facilitator keys and editorial notes. Private activity data uses a PHP wrapper that rejects direct requests and must never be copied into a publicly served JSON file.

Assessment definitions remain `approved:false` until a documented publishing decision approves a particular revision. This is a real runtime hold, not a claim that the draft banks have independent expert approval. Public reading is independent of that hold.

## Deployment boundary

The connected production site is https://wetinbecrypto.online. Read-only observations on 7 October 2026 reported WordPress 7.1.3, PHP 8.4.26, MySQL 8.0.46 and X-T9 1.42.3. The connection exposed content/template operations but no plugin installer; theme file edits were prohibited by `DISALLOW_FILE_EDIT`. On the subsequent capability check the connector returned zero abilities. No production write is claimed.

Install the prepared plugin using the normal administrator Plugins → Add New → Upload Plugin flow, or an authorised hosting deployment. A media upload is not a plugin installation. Do not bypass the file-edit policy. Preserve the MCP/hosting plugins and existing content. Take a database/files backup before activation, run staging checks, then publish the public pages and homepage.

Actual verification results and unfinished work are recorded in [Build Status](BUILD-STATUS.md). The first working package is version 0.1.0; it is not a completed production release. Local tests do not establish production compatibility, transactional-email delivery or independent content approval.

## Package and install

Run `python tools/package.py` from this directory to generate `dist/wetin-be-crypto-0.1.0.zip` and its SHA-256 manifest. The ZIP contains a single standard WordPress plugin folder and excludes tests and private JSON files. Upload it through the normal WordPress plugin installer, activate, and open **Tools → Wetin Be Crypto** for the explicit content import and optional homepage/registration settings. **Tools → Practice publishing** reviews and approves exact activity revisions. Back up first and verify staging before public operation.

Frontend libraries are plain JavaScript/CSS. No npm dependency is shipped to visitors. Locked Playwright dependencies are confined to the test directory. [Test instructions](tests/README.md) explain the disposable Docker environment and the limits of the observed results.

## Current deployment candidate

Use **0.1.1** from `dist/wetin-be-crypto-0.1.1.zip`. The earlier 0.1.0 archive is historical. See [Chrome Deployment Handoff](DEPLOYMENT-HANDOFF.md): the verified administrator browser is on the local Windows host, while this implementation workspace is durable. The new importer checks reserved-route collisions before any content writes. Existing content and assessment holds are preserved.
