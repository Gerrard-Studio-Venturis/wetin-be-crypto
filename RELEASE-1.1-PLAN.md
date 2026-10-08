# Wetin Be Crypto 1.1 — completion plan

Date: 8 October 2026. Status: proposed release plan in response to the owner's screenshot and request to plan first. No production changes in this planning checkpoint.

## Problem and outcome

The screenshot shows the old theme starter homepage, lorem ipsum and an automatic menu exposing individual teaching pages. It does not establish whether plugin 0.2.0 is installed. Source inspection confirms the editorial template and assets currently apply only to canonical imported pages. Leaving the old Home page selected will continue to show its theme template even when the new plugin is active.

Release 1.1 must make the illustrated editorial homepage the public root, remove starter content from the public experience, use curated navigation and make every advertised learner action usable. Archive the former homepage from public navigation/search while preserving a recovery copy; do not delete unrelated content or redirect every teaching page to Home.

## Delivery order

1. **Establish live state and deployment access.** Verify installed plugin/version, actual homepage/posts-page settings, published canonical page map, image URLs, permalinks and page cache. Confirm administrator browser or supported connector installation/settings capability. Obtain a backup/recovery path. This durable host cannot control the previously verified Windows Chrome session; available settings discovery currently returns no abilities. Do not mistake that for verified deployment access.
2. **Fix homepage adoption without re-importing content.** Provide a dedicated administrator release/setup screen that previews the canonical homepage and explicitly sets it as the front page independently of the teaching importer. On production select it through Settings → Reading → Your homepage displays → A static page → Homepage. Keep existing editorial changes. Validate root and `/welcome/` in logged-out sessions and clear applicable cache. The old starter template must disappear from the public root and main navigation.
3. **Complete the editorial design.** Retain selected option 3: warm paper, serif headings, cobalt controls and mustard emphasis. Refine hierarchy, readable line length, spacing, mobile layouts, touch targets, loading/error/empty/success states and keyboard focus. Curate Learn, Articles, Topics, Glossary and My journey; account actions stay distinct. Add coherent front-end account entry and recovery guidance using WordPress authentication.
4. **Complete visual content.** Verify and serve the existing locally packaged book/story/portrait assets first. Generate additional original topic and article illustrations only where they improve comprehension. Use optimised WebP, responsive sizes, intrinsic dimensions, appropriate alt text, eager loading for the hero and lazy loading below it. Essential teaching remains text. No fabricated prices, payment proof or news photography. Avoid repeating one image on every article.
5. **Verify complete user journeys.** Guest: homepage → module → lesson → saved reading position → reload. Account: registration/password setup/login → progress → explicit guest import → bookmark/save list → logout. Editorial: article list → story/explainer → topic/coin-related reading → related lesson. Practice: only genuinely approved revisions are playable; pending review is clearly explained and is not presented as an available mission. No artificial activity approvals to make the release appear complete.
6. **Test and publish a single 1.1 candidate.** Align runtime/cache versions and ZIP with 1.1.0; retain current schema compatibility. Run relevant existing regressions and new homepage adoption/asset/navigation tests. Compare actual desktop/mobile screens, test keyboard paths, broken links, console errors, media failures, logged-in/out behaviour and production theme/caching. Push sources, documentation, evidence and the exact release ZIP to GitHub. Install/activate through verified access, set the homepage, clear cache and verify the public site after deployment.

## Definition of finished

- Public `/` serves the intended editorial homepage; no starter hero, lorem ipsum, edit-site CTA or automatic all-pages menu appears to visitors.
- Images, fonts, styles and scripts return successfully; primary content and links remain usable when media fails.
- Primary navigation, lesson deep links, articles, topics, glossary, journey and saved articles resolve correctly on production.
- Guest progress, account progress/import and bookmarks behave as documented; registration/recovery delivery is verified before claiming account readiness.
- Mobile at 375px and wider layouts have no horizontal overflow; menus, visible focus and forms work by keyboard. Readable contrast and headings are checked.
- No advertised action silently fails. Unavailable practice remains accurately labelled pending actual review.
- Exact installed version, public route checks and desktop/mobile screenshots are recorded. A locally passing package alone is not a live release.

## Review limits and rollback

The working code and local test evidence are a useful baseline, not proof of production readiness. Independent teaching/assessment review remains a real release condition. A fully functioning public practice release cannot be claimed while its required approvals are absent. Restore prior plugin and Reading settings if deployment fails; preserve learner data and existing content.

The next execution should finish all work within available access and review authority in one sustained pass. If live installation/settings or required human approvals remain unavailable, identify the precise outstanding action and supply the tested candidate rather than claim the site is live.
