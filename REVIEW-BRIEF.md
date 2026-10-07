# Wetin Be Crypto — Reviewer Brief

Version: 0.9
Date: 8 October 2026
Status: Product baseline adopted; first WordPress implementation tested locally. Production deployment and complete release acceptance remain outstanding.

## What we are building

Wetin Be Crypto teaches people to understand crypto and use that understanding safely in everyday life. It serves a wider African audience with a West African focus. Clear English carries the teaching; occasional varied Nigerian Pidgin adds familiarity without making essential information depend on slang. Humour fits the situation and avoids repetitive catchphrases.

The product combines a guided foundation, fictional practical missions, a saved learning journey and a public articles area. It follows the useful educational pattern of structured learning and approachable examples, with original crypto content rather than copying BabyPips. Understanding risks, checking evidence and choosing not to proceed are valid learning outcomes.

## Approved first release

- Eight modules and 32 lessons: basics, scams, custody, receiving compatibility, stablecoins/conversion, transaction review, receipts and permissions.
- Sixteen knowledge-check forms and sixteen mission forms, including primary/retry situations. All required action-and-reason pairs must be correct; an essential error cannot be offset by another answer.
- Core reading free without an account. An optional account saves the journey across devices; reading completion and demonstrated understanding are separate.
- Recommended study order; prerequisite evidence required for selected missions. Experienced learners can demonstrate the named outcomes through the same full checks.
- Opt-in browser memory lasting 30 days after accepted learning activity; otherwise a two-hour idle visit. Articles, bookmarks, searches and background requests do not extend remembered progress. Account import is explicit and confirms individual records before removing their guest copies.
- Public original explainers/stories and source-linked editorial news summaries. Initial content: six articles, six topic/coin hubs and 24 glossary definitions. Account-only Save/Unsave and a private saved-articles list.
- English first, with stable content identities that allow French later. Nigeria/Ghana examples are classroom anchors, not claims of current provider availability or legal permission.

Examples use fictional routes and invalid destinations. The site requires no funds, wallet connection or signing secrets. It does not promise returns or recommend investments. The proposed publishing pilot is one original evergreen item weekly and at most one sourced summary fortnightly, subject to actual editorial capacity.

## How it is built

WordPress owns public pages/posts and accounts. One owned plugin supplies learner authority, private versioned assessments, progress, guest expiry/imports and bookmarks. Paid LMS licences are unnecessary for this baseline. The existing production theme and hosting plugins are preserved pending compatibility checks.

Spec-driven development connects product outcomes to documented feature behaviour, written states/flows, engineering contracts and meaningful verification. The repository retains the complete research, curriculum, sources, decisions, twelve feature groups and 69 acceptance criteria. A separate visual-design planning phase was removed under D-15; implementation still includes usable responsive styling and accessibility checks.

D-21 records the owner's explicit instruction to implement the website, superseding D-13's earlier planning-only boundary. The [implementation directory](implementation/README.md) contains the code and packaging; [Build Status](implementation/BUILD-STATUS.md) distinguishes tested behaviour from missing release evidence.

## What a reviewer should assess

Review the product scope, learner journeys, exact content/outcome mappings and assessment revisions. The internal review verifies inventory and key correspondence; it does not invent independent expert, fluent-Pidgin, learner or psychometric approval. The application binds activity approval to the exact definition and keeps draft assessment keys private.

Local activation, content import, database/auth/expiry/grading tests and browser journeys have run. The entire 69-criterion suite, production-theme integration, email delivery, privacy/operational readiness and complete CMS editorial workflow have not been accepted as finished.

The connected site is https://wetinbecrypto.online. Its MCP catalogue can activate installed plugins but does not expose a plugin installer, and it prohibits theme-file edits. Content operations also fail intermittently. A normal administrator plugin upload or authorised hosting deployment is needed; no production launch is claimed.

For detail, read [Product Brief](PRODUCT-BRIEF.md), [Feature Specification](FEATURE-SPECIFICATION.md), [Implementation Contract](IMPLEMENTATION-CONTRACT.md), [Content Release Review](CONTENT-RELEASE-REVIEW.md) and [Decision Log](DECISION-LOG.md). Changes are published in [PR #1](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto/pull/1).
