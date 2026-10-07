# Verification

These tests run only against a disposable WordPress installation. They create temporary test accounts and runtime-only assessment approvals, inject a controlled SQL failure and restore affected options/filters. Never run them against the public site.

The local environment used WordPress 7.1.2, PHP 8.4.26, MySQL 8.0 and system Chromium. `../compose.test.yml` pins the tested container images and binds HTTP to 127.0.0.1 only; test credentials are deliberately fixed and unsuitable for deployment.

1. Start a disposable environment with `docker compose -f compose.test.yml up -d` from the implementation directory. Ensure source directories are readable (755 directories/644 files). Install WordPress through its local setup screen or WP-CLI.
2. Activate Wetin Be Crypto, then run its Tools → Wetin Be Crypto content importer. Set the Welcome page as the homepage. Enable ordinary pretty permalinks. The importer creates 77 owned public entries and preserves unrelated entries.
3. Run each PHP integration script with `wp eval-file PATH --allow-root` inside the test WordPress container, including `integration.php`, `assessment-integration.php`, `import-integration.php`, `approval.php` and any listed reading-position test. WP-CLI must be installed separately in the test container; it is not an application dependency.
4. Run `npm ci --ignore-scripts` here, then `npm test` for mocked server/client interactions and `npm run test:local` for actual local WordPress at http://127.0.0.1:8088. Tests use `/usr/bin/chromium`; install a local browser or adjust the executable path on another machine.
5. Run `php ../wetin-be-crypto/tests/grading.php` for isolated grading checks and `php -l` on all PHP files.

The mocked browser test verifies choice IDs and server response rendering; it does not prove backend grading. The PHP WordPress tests cover actual database/auth/expiry/transaction behaviour. The actual browser test covers a guest reading journey. Production theme compatibility, email delivery, full accessibility and all acceptance criteria require additional evidence.
