# Chrome deployment handoff — Wetin Be Crypto

Date: 8 October 2026. Target: https://wetinbecrypto.online. Current candidate: **0.2.0**. This is a deployable first build, not evidence that every release requirement is complete.

## Host boundary and authority

The owner explicitly authorised getting the site running through the verified Chrome administrator UI. The source chat is **Connect to WordPress site**, thread `01a1162b-aa75-7431-b699-c35577755faf`, host **local**. Its Windows workspace is `C:\Users\DellUser\Documents\ChatGPT\Wetin Be Crypto`. The existing browser is id `3`, WordPress tab `998173975`, last observed on `/wp-admin/plugin-install.php` with **Upload Plugin** available. Reacquire the current tab and inspect it; these IDs are prior observations, not proof that the tab/session remains unchanged.

The implementation chat runs on **durable**, with no exposed Chrome/CUA tool or remote control of that local session. A remote Playwright browser would be a separate browser without the administrator session. Do not copy cookies, use credentials from chat previews, toggle security, change credentials or attempt to defeat Cloudflare. MCP/direct REST face browser challenges; use the authorised local browser UI.

The local chat reported that the owner changed the file-edit setting and the editors became visible. This is not needed for ZIP installation. Use the standard plugin uploader; make no further file-edit or security-setting changes. No purchase or external message is authorised.

## Obtain and validate the exact ZIP

Download [wetin-be-crypto-0.2.0.zip](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto/blob/docs/research-design-plan/implementation/dist/wetin-be-crypto-0.2.0.zip) using the repository's **Download raw file** action. The Windows browser/installer needs a Windows-local file; `/workspace/...` is a remote path and cannot be supplied to its file picker.

Expected SHA-256: **0ffadeb018f15c2106bfcba45d38ed52863bdf5baaa470820146e6f250ed16c3**.

Use PowerShell `Get-FileHash -Algorithm SHA256 -LiteralPath 'ACTUAL-DOWNLOADED-PATH'` and compare. Do not upload the whole repository ZIP. This archive contains one `wetin-be-crypto/` directory, 18 packaged files, no tests, and no public private-activity JSON. Its guarded PHP data file contains server-only keys. Versions 0.1.0 and 0.1.1 remain historical. Version 0.2.0 adds the selected editorial design and locally hosted assets.

Current sources are on `docs/research-design-plan` in [PR #1](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto/pull/1). See [Build Status](BUILD-STATUS.md) for actual local tests and remaining requirements. Do not merge the PR as part of deployment without an instruction to merge.

## Updating an existing installation

In WordPress: **Plugins → Add Plugin → Upload Plugin → Choose File → wetin-be-crypto-0.2.0.zip → Install Now → Replace current with uploaded**. Activate only if inactive. Open `/welcome/` and `/learn/` in a logged-out window. The new design applies to imported owned content automatically. Do not rerun the importer merely to update styling; it can overwrite subsequent edits to owned content. Clear the existing host/plugin page cache if old styling persists; do not change security settings. Preserve backups and existing homepage settings until preview succeeds.

## Deploy through the observed administrator interface

1. Inspect Installed Plugins and confirm whether Wetin Be Crypto is absent or which version already exists. Record current homepage/posts-page settings and public navigation. Preserve the X-T9 theme, hosting/MCP plugins, existing content, user records and configuration. Use an existing hosting backup facility if available; if no rollback backup is available, install/activate for inspection but do not change the public homepage or publish content until a restore path is established.
2. In Plugins → Add Plugin → Upload Plugin, choose the verified Windows-local ZIP. Inspect the installer result. If an existing plugin is found, compare the reported version and use only the normal replacement flow for this owned plugin; do not replace an unrelated plugin. Activate and verify that the plugin list reports **0.2.0** without a fatal error.
3. Open **Tools → Wetin Be Crypto** (`/wp-admin/tools.php?page=wbc-setup`). Inspect existing reserved pages `/learn/`, `/practice/`, `/journey/`, `/articles/`, `/saved/`, `/topics/`, `/glossary/`, `/welcome/`. The importer now refuses a collision with any non-owned page before making content changes. A prior MCP attempt to create “Learn crypto — guided foundation” returned a non-JSON error; its outcome is unknown. Reconcile it by inspecting the Pages UI. Do not delete or rewrite unrelated content. If an unambiguously identified empty draft from our earlier attempt blocks the route, reconcile that owned draft and record the action.
4. Review the importer disclosure. It publishes supplied teaching drafts; independent expert/learner approval is unrecorded and the news article is dated 7 October 2026. Refresh its source/status before describing it as current news. Initially leave **Set the new Welcome page as the homepage** unchecked. Leave registration unchecked until account/privacy/email readiness has been checked. Publish the education content using the authorised owner instruction and verify the result. Expected owned inventory: **77 entries** (32 lessons, six articles, six hubs, 24 glossary pages, nine site pages). Repeated imports update owned canonical IDs; they do not overwrite unrelated content.
5. Inspect the new Welcome page at `/welcome/` and the actual public routes below, first as administrator and then in a separate logged-out browser context. If those checks pass and a rollback path exists, use the standard Reading settings/UI to select the new Wetin Be Crypto page as the homepage, preserving the old Home page. Adjust Site Editor navigation to link the published learning routes without deleting existing useful links or branding. Do not blindly republish the importer after editors change content; it can refresh owned content from its source manifest.
6. **Tools → Practice publishing** (`/wp-admin/tools.php?page=wbc-review`) exposes exact definitions, keys and review reasons to administrators only. All 32 definitions remain unapproved. Do not bulk approve or fabricate independent review. Approve only the specific revisions actually reviewed under the owner's review process. Otherwise the public practice area must accurately show its hold and the launch report must say practice is not available yet.

## Live verification and recording

Record actual URL, logged-in/logged-out state, result and failure details. Do not count local tests as production verification.

- `/`, `/welcome/`, `/learn/`, `/learn/?lesson=L-01.1`, `/articles/`, `/topics/`, `/glossary/`, `/journey/`, `/saved/`, `/practice/`: correct page, useful navigation, no fatal errors or raw shortcodes; check 375px layout and keyboard operation with X-T9.
- Public reading/search must work as a guest. Catalogue must contain 32 lessons, six articles, six hubs and 24 terms after import. Article page omits learning-memory prompts.
- As a guest, explicitly save a reading position, mark a lesson as read, opt into memory, reload, and verify separate position/reading records. Do not create real wallet data or move funds. Check clear-device behaviour in that test browser only. Server authority and expiry must not rely on browser-local grading.
- Registration/sign-in/reset screens and subscriber configuration can be inspected without sending messages. Under the current no-external-messages instruction, do **not** trigger registration/reset email tests. Actual email delivery remains unverified unless separately authorised. Use an existing authorised test account if available; never change owner credentials.
- Account bookmarks must be private; sign-out must not expose saved articles/progress. Import must explicitly select records and bind the target account, never run on sign-in alone. Do not use real learner records for destructive or fault-injection tests.
- If specific practice definitions were actually approved, verify paired server scoring, wrong-essential failure, required gates and resumed attempts. Otherwise verify the server/UI hold and keep the unavailable-feature status explicit.
- Through normal browser navigation inspect `/wp-content/plugins/wetin-be-crypto/data/private-activities.php`: expected **404 with no keys/body**. Inspect permitted rendered pages/network responses only with the browser tool's supported APIs; keys must not appear in public catalogue/start/resume/HTML. Do not defeat the challenge or use hidden browser/session access.
- Check cache isolation: guest pages cannot display account names/progress/bookmarks; account-specific REST responses should be private/no-store. Exclude app routes from page caching using the site's existing cache configuration where authorised; no security toggle. Verify actual behaviour rather than assuming `DONOTCACHEPAGE` is honoured by every host/CDN.

If installation fails, stop and record the exact error. If activation causes a fatal error, use the administrator recovery/deactivation flow for this plugin. If public routing fails after switching home, restore the recorded old homepage. Do not delete existing site content. A complete data rollback requires the recorded backup, not merely plugin deactivation.

## Honest release boundary

This handoff makes browser deployment concrete; it does not complete the full CMS editorial review workflow, privacy exporter/eraser integration, operational ownership or all 69 acceptance criteria. Retain assessment review gates. Report the public reading launch separately from unavailable practice/account features, state which checks actually ran, and update the repository with deployment evidence when possible. Never report a fully functioning site from an upload-success screen alone.
