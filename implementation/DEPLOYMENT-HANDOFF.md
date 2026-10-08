# WordPress update — exact remaining action

The public homepage is already corrected: WordPress now uses **Wetin Be Crypto (page 133)** instead of the old **Home (32)**. The former Home is a draft and its content is retained. The live site reports plugin **0.2.0 active**. Fresh public checks confirmed the illustrated homepage and seven core routes. A live browser verified that its three images load and guest progress persists across reload; test progress was cleared.

The completed upgrade is **wetin-be-crypto-0.3.0.zip**. It adds the new article/topic images, learning navigation, clearer progress controls, CMS-aware reading, branded login/404 and the bookmark Save/Unsave fix. Its code is tested locally but is not yet installed on production.

## Download and install

1. Open [the exact plugin ZIP on GitHub](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto/blob/docs/research-design-plan/implementation/dist/wetin-be-crypto-0.3.0.zip), then click **Download raw file**. Download this file, not the whole repository.
2. Open [WordPress administrator](https://wetinbecrypto.online/wp-admin/). Go to **Plugins → Add Plugin → Upload Plugin**.
3. Click **Choose File**, select `wetin-be-crypto-0.3.0.zip`, then **Install Now**.
4. On the replacement screen choose **Replace current with uploaded**. Activate only if the plugin is inactive. Confirm **Plugins → Installed Plugins → Wetin Be Crypto** shows **0.3.0**.
5. Open the public homepage in a logged-out window. Verify its images, `/articles/`, `/topics/`, `/learn/` and `/saved/`. Refresh the existing host/CDN page cache if it still shows the prior styles.

**Do not rerun the education-content importer for this upgrade.** Existing pages, accounts and progress are retained; re-importing can overwrite editorial changes. The correct homepage is already selected. Leave the WordPress **Posts page** setting unset: `/articles/` is an ordinary application page and supplies its own article index.

SHA-256: `dfd50e09cc9ec17954d6f57517c99bbafa17814ed5c8353ec27ec1d359b3aa7a`. The archive contains one standard plugin folder, 22 files, local assets/font/licence and guarded private activity data. Tests and the mail observer are excluded.

## Why the ZIP upload remains

MCP successfully read plugin/homepage information and changed Reading settings in this turn. Its discovered abilities do not provide custom plugin ZIP installation. The verified logged-in administrator Chrome session is on the user's Windows host; this durable workspace cannot control that session. The standard uploader is the remaining supported installation method. Do not copy cookies, change credentials/security, edit theme files to install code or use media uploads as an installer.

## Remaining release evidence

Local checks passed: 99 WordPress assertions, five grading checks and four browser suites. Account tests generated setup/recovery emails with every outbound message suppressed; they do not establish production inbox delivery. Practice remains on its actual exact-revision review gate. Complete human content review and production account/email checks before claiming every launch requirement is accepted.

Rollback: reinstall the historical 0.2.0 ZIP if the upgrade fails; retain the corrected homepage setting. The old Home remains recoverable as a draft. Do not delete learner data or unrelated content. The review branch and draft PR are not automatically merged by this update.
