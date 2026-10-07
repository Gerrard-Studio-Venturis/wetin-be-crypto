# Wetin Be Crypto — Proposed WordPress Build Plan

Version: 0.2
Date: 7 October 2026
Status: P-06 recommendation for owner and technical review; components, budget and mechanisms unapproved.

## Recommendation and boundary

Recommend **WordPress core publishing plus a project-owned education plugin** as the preferred route to quote for the first foundation. The plugin would own authoritative learning records, assessment versions, guest sessions, prerequisite decisions, imports and article bookmarks. Evaluate Relevanssi Free for retrieval and PublishPress Revisions Pro for pending editorial revisions, with explicit integrations for the remaining requirements. An accessible, lightweight WordPress theme supplies later presentation; this engagement does not select its appearance.

This is an architectural inference from inspected documentation, not a proven installation or a claim that custom development is cheaper. Obtain an itemised quote for this route and a LearnDash-based alternative before settling PD-06. Both need custom work. The first release should have one authoritative learning record, with any LMS dashboard treated as a projection of that record rather than an independent conflicting source of truth.

The owner has approved WordPress, free public reading, guest practice, optional accounts, 30-day opt-in memory and account bookmarks. Those policies remain constraints. Detailed mechanisms below are proposals under PD-06/07/08. No software has been selected, installed, configured, purchased or tested. The planning assistant produces documentation and handoff; approval does not trigger coding. Visual design remains excluded by D-15. Later delivery owns implementation, styling and working UI/accessibility validation.

Evidence: [LMS comparison S-25–32](WORDPRESS-COMPONENT-RESEARCH.md), [supporting components S-33–39](WORDPRESS-SUPPORTING-COMPONENTS.md), [core/hosting S-40–46](WORDPRESS-CORE-RESEARCH.md). Requirements: [12 features / 69 criteria](FEATURE-SPECIFICATION.md), [18 page families](INFORMATION-ARCHITECTURE.md), [10 flows](FUNCTIONAL-FLOWS.md). Verification: [future scenario plan](IMPLEMENTATION-VERIFICATION-PLAN.md).

## Routes compared

| Route | Documented contribution | Proposed engineering and tradeoff |
| --- | --- | --- |
| A — Core publishing and project-owned education plugin; preferred for quotation | Core content types, capabilities and storage mechanisms; search and pending-revision components contribute separate tools. | Build authoring support, assessment delivery/grading, histories and guest/account logic. Direct ownership of required semantics; substantial implementation, accessibility and long-term maintenance responsibility. Not an off-the-shelf LMS. |
| B — LearnDash Open courses plus education-record integration | Open public reading; quizzes, percentage scoring and anonymous retake settings. Stock completion/progress requires login in inspected enrolment guidance. | Guest completion, essential gates, versions, imports and applicability need integration. Quote documented hooks/lifecycles and full exports; confirm current enrolment guidance, licence/staging and renewal. May reduce standard course-authoring work, but adapter burden is unmeasured. |
| C — LifterLMS or Tutor with the same responsibility boundary | Lifter free basic assessments and paid advanced/manual types; Tutor grading/retakes and Pro content export. | Full guest access/evidence and version semantics remain unestablished. Lifter resume timing differs from approved memory; Tutor progress-resetting retakes require reconciliation. Neither is ruled out; require a complete mapping and quote before preference changes. |

Do not choose a commerce bundle merely because a vendor lists it. Payments, live trading, connected wallets, real transfers, exchange referrals and monetisation are outside the proposed foundation. French publication is later; stable translation relationships are prepared now. No additional external database or headless framework is required by the current proposal.

## Full requirement-to-responsibility map

“Core” and “vendor” identify documented building blocks. All complete workflows require later delivery verification; a row does not mark a criterion passed.

| Feature / criteria | Proposed responsible layer | Critical dependency |
| --- | --- | --- |
| FS-01; AC-01.1–AC-01.4 | Core public lesson/path content + education plugin | Outcomes and challenge mappings; open reading independent of study order and challenge results. |
| FS-02; AC-02.1–AC-02.5 | Core lesson/glossary + education plugin | Explicit, deduplicated completion; text equivalence; glossary return/current-visit continuity. |
| FS-03; AC-03.1–AC-03.5 | Education plugin + approved banks | Immutable activity/rubric versions, essential-decision rule, private grading and preserved prior passes. |
| FS-04; AC-04.1–AC-04.5 | Education plugin + mission content | Outcome-specific guest/account prerequisites, expiry checks and fictional practice. |
| FS-05; AC-05.1–AC-05.6 | Education plugin + core accounts | Separate reading/check/practice/review records, confirmed saves, applicability and own-record access. |
| FS-06; AC-06.1–AC-06.9 | Education plugin + core accounts | Guest authority, opt-in retention, clear/expiry, explicit import, deduplication and recoverable errors. |
| FS-07; AC-07.1–AC-07.6 | Core posts/meta/taxonomies + editorial integration | Format/country/topic relationships and distinct publication/verification/correction dates; no learning credit. |
| FS-08; AC-08.1–AC-08.5 | Core authored hubs + canonical identity integration | Disambiguated subjects/representations/aliases; one article linked to multiple appropriate surfaces. |
| FS-09; AC-09.1–AC-09.5 | Relevanssi candidate + canonical resolver + theme delivery | Published public scope, content labels/filters, phrase aliases, useful gated-result route and keyboard access. |
| FS-10; AC-10.1–AC-10.6 | Education plugin + account/auth return | Private unique bookmarks, withdrawn status, actual save confirmation and retry; no implicit progress import. |
| FS-11; AC-11.1–AC-11.7 | PublishPress candidate + revision/capability integration | Specific-revision approvals, source/dependency tracking, approved public versions and learning/translation corrections. |
| FS-12; AC-12.1–AC-12.6 | Content review + theme + every extension | Text/media independence, keyboard/assistive technology, state clarity, varied voice and measured lightweight use. |

## Conceptual content and private records

Use stable IDs independently of slugs, translated titles and vendor-generated IDs. WordPress content types and metadata are proposed for paths/modules, lessons/outcomes, glossary, activities, article formats and hubs. Taxonomies/relations distinguish subject, country applicability, asset identity, network and token representation. A ticker is an alias with ambiguity, never a unique identity or evidence of receiving compatibility.

| Record | Authority / relationship | Lifecycle and portability |
| --- | --- | --- |
| Public authored content | Core post/content record with canonical ID, type, locale, approved revision and dependencies | Draft/review/public/withdrawn; preserve publication and meaningful verification history. |
| Activity version | Approved immutable question/rubric/essential-outcome snapshot | Attempt references exact version; retire flawed versions from current eligibility while retaining authorised history. Learner delivery excludes answer keys/reviewer notes. |
| Attempt | Private server record: principal, version, submission, outcome decisions and status | Distinct retries remain history; neither a later weaker attempt nor a vendor reset deletes an earlier pass. |
| Completion / achievement | Separate explicit completion, pass and demonstrated-practice records | Current applicability is computed/explained separately from historical achievement. Reading an article earns none. |
| Guest session | Opaque browser capability linked to server session/records | Current-visit or opt-in memory; server authority checks expiry and clearing before any use. |
| Import operation | Explicit account/source/intent plus stable operation and record identities | Reconcile once per eligible source record; show confirmed/failed/pending and recover incomplete work. |
| Bookmark | Private account + article canonical ID, unique pair | Save/Unsave; retain identifiable unavailable state for withdrawn content without exposing private body. |
| Editorial approval/dependency | Revision, reviewer role, approved claim/fields, source and affected records | Material changes invalidate relevant approval; corrections identify current assessments and future translations. |

Recommend private relational tables for attempts, evidence, guest/import state and bookmarks where query/uniqueness/lifecycle needs justify them. Prefer post metadata for simple content fields; exact schema/indexes remain delivery design, consistent with S-43. No schema or migrations are created here.

The project owner controls the repository, hosting account, content, licence access and export instructions. Contract separately for access/source ownership of commissioned custom work. Export must include canonical relationships, versions, histories, provenance, bookmarks, approvals and appropriate privacy controls, not just posts or a vendor course JSON file. Search indexes are derived and rebuildable. Backup/export/restore needs an inventory, tested access boundaries and migration mapping; self-hosting alone does not prove portability.

## Guest memory, authority and expiry — PD-07 proposal

The subsequent [Functional Review](FUNCTIONAL-REVIEW.md) provides concrete candidate visit/checkpoint/import-cleanup and race-handling contracts. Those choices remain open; this plan does not override approved 30-day memory or automatically adopt a candidate inactivity cap.

Create a first-party opaque guest key only when learning work needs continuity; public article reading should stay cacheable. Associate it with private server records and server-graded activity submissions. Do not trust browser-supplied pass flags, claimed user IDs, scores or prerequisite lists. Validate identity, request protection, permitted action and current eligibility independently. WordPress nonces do not provide guest identity, record permission or idempotency (S-42/46).

Without memory opt-in, preserve available work during the current visit, with no future-visit saving promise. With opt-in, persist the browser key and expire server eligibility **30 days after the last qualifying learning activity**, preserving D-11. The server clock and session record determine expiry; client clock changes and a delayed cleanup job cannot extend it. Returning to an expired guest session offers relevant checks or sign-in to saved account history.

Proposed qualifying events: an explicit lesson completion, validated check/mission submission, or a meaningful saved activity checkpoint. PD-07 must decide checkpoint treatment and the precise current-visit/inactivity boundary before delivery. Article reading, bookmarks, search, viewing My Journey, sign-in, background polling and duplicate retry/import do not refresh learning retention. Refreshing a timestamp does not make retired assessment evidence applicable again.

Browser-close behaviour is not a dependable visit boundary: some browsers restore session cookies. The final definition must state an inactivity cap, reload/navigation behaviour and the explanation shown to learners. This is a named unresolved policy, not a claimed implementation detail. If persistent storage is unavailable, keep current activity usable where technically possible and explain the limit; account saving can be offered, but authentication may itself require cookies and must report failure honestly.

Clear memory must revoke the active guest capability and remove active guest learning records without changing confirmed account records. Backups need finite retention and restore-time expiry/clearing safeguards so old guest evidence cannot regain eligibility. Exact backup retention and deletion handling need PD-07/09 owner review; they are not selected legal requirements.

## Account saving and import recovery

Treat **Save my progress** and **Save article** as distinct intents with preserved return destinations. Successful registration for Save my progress can import applicable guest records under that explicit action. Signing in to an existing account presents the specified import choice. Creating/signing into an account to bookmark an article never silently imports learning, including when it creates a new account.

Only authoritative, unexpired eligible guest records enter reconciliation. Use stable operation/source-record IDs and uniqueness constraints. Completion B shared between account A/B and guest B/C produces A/B/C once; weaker evidence retains its attempt without erasing a pass. Current applicability and source version remain visible. Decline changes no account history.

Propose per-record confirmed reconciliation with a resumable operation summary. Interruptions retain confirmed work and retry only unresolved records; duplicate requests do not duplicate credit. Never show Saved merely because a request was sent. A validation failure explains which work remains recoverable. Logout and account-switching must isolate records and prevent a browser from showing another learner's private journey.

Post-import guest cleanup/key rotation is a PD-07 decision: recommend clearing only records confirmed migrated under explicit progress-save intent, preserving failed recoverable items until normal expiry and explaining the outcome. This proposal prevents silent repeated imports on a shared device; it is not an approved deletion policy. Bookmark authentication does not trigger this cleanup.

## Assessments, missions and changed content

Propose bounded selected-response decisions with structured rationale choices for the initial automatic assessments. Human-reviewed explanations are an alternative with pending-review states and staffing cost. No free-text automatic grader or AI tutor is selected. Assessment format, full banks, ordinary thresholds, review timing and essential decisions remain PD-02 proposals requiring qualified review.

At attempt start, bind an approved immutable activity version. Grade submitted answers against that version on the server. An essential wrong decision blocks passing regardless of unrelated score. Award only mapped outcomes; lessons remain unread until explicitly completed. The current O-04.2 sample does **not** satisfy the full proposed PM-04 gate requiring O-04.1/O-04.2/O-04.3.

If questions are replaced mid-attempt, preserve the bound version and original history. If an essential error is discovered, stop offering that version as current scored evidence; the correction policy must identify affected in-flight attempts, historical results and current prerequisites. Preserve history with an explained review requirement rather than delete achievements. Missing/unapproved rubric means no current scored activity, while the lesson stays readable. New curriculum requirements alter current totals transparently.

Missions use fictional instructions and destinations; no wallet connection, real credentials, recovery material or transaction signing. Learner-visible content contains the task and approved feedback. Facilitator keys/private rubric details from sample documents need explicit separation before publication or learner review.

## Editorial, discovery and article saving

PublishPress Revisions documents pending updates, comparison and approval tools; its default Authors can immediately publish their own revisions and Editors/Admins can publish wider revisions (S-37/38). Propose restricted writer/revisor capabilities, revision-bound subject/source review and publishing-editor approval, plus an application publication guard. A pending queue alone does not prove two reviews, approval invalidation or dependency propagation.

Review must include metadata, taxonomies, activity fields and source dependencies, not only body text. Material approved-claim changes invalidate the relevant revision approval. An unapproved substantive edit does not replace the approved public version. Corrections identify affected lessons/questions/hubs and later translations. Punctuation-only edits do not reset meaningful publication/verification or applicability dates. Any administrative emergency bypass needs a reason, audit record and subsequent review; normal workflow tests must exercise every permitted publication surface.

Search indexes only approved public content/versions. Exclude private learner/guest/bookmark records, answer keys, draft bodies, reviewer notes and unsupported unpublished revisions from public queries, snippets and caches. Approved withdrawal removes public body/snippets while authorised editorial access remains separate. Rebuild or update indexes after approval/withdrawal/correction; test stale-index and shared-cache cases.

Relevanssi Free is the proposed starting retrieval engine, subject to configuration proof. Canonical alias lookup and disambiguation are a separate responsibility. SearchWP's inspected synonym guidance limits rules to single words (S-35), so do not infer multiword aliases work from a synonym feature. Keep label/filter/prerequisite handling explicit. Search logging should remain off unless purpose, access and retention are approved; Relevanssi's inspected logging-tier descriptions conflict.

Implement simple private account bookmarks in the owned layer rather than assume an arbitrary favourites plugin meets intent/recovery/withdrawal rules. French-ready canonical IDs need no paid multilingual publication component now; choose that later against reviewed French scope and version equivalence.

## Hosting, performance and maintenance

Require HTTPS, a supported stable WordPress release, PHP 8.3+ and MariaDB 10.11+ or MySQL 8.0+ as the inspected core baseline. Freeze exact compatible versions in later delivery. Choose a host/region only after confirming resources, scheduled cleanup, private-response cache exclusions, production plus isolated staging, backups/restore and transactional-email needs. Kinsta is a dated price benchmark, not a selected host or proof of regional performance.

Cache approved public reading; exclude private/authenticated journeys and record writes from shared caches. Prevent guest keys/results from leaking through cache keys, URLs, logs or search. Apply own-record checks at supported interfaces, not only menus. Staging should use fictional or minimised data and must not send production recovery emails or expose private records.

Proposed PD-08 test baseline, **not measured audience conditions**: a midrange Android device at a small mobile viewport, desktop keyboard and screen reader, and throttled 1Mbps/150ms-RTT connectivity. Draft budget: core text-reading initial transfer at most 200KB excluding optional media; core reading usable within three seconds under the agreed test profile. These are engineering targets for review, not performance findings or guaranteed field experience. Measure payload, cold/warm public navigation, private writes and failure recovery; tune targets against actual geography/device evidence. No essential autoplay/video, third-party widget or animation is required.

Delivery must verify WCAG 2.2 AA across theme, assessments, search, saving and feedback. Theme/vendor claims do not prove whole-site conformance. Specify labels, keyboard/focus recovery, text alternatives and colour-independent states now; validate working behaviour later. Visual design removal does not remove these responsibilities.

Propose a named maintenance owner for stable-version updates, staged regression, dependency advisories, exports/backups and restore exercises. High-risk corrections can interrupt the usual update cycle. Account/guest data retention, transactional-email reliability, monitoring and incident access require named owners and written procedures before launch. Vendor support covers its product, not the complete custom workflow.

## Separate content and operating work

[Launch Scope](LAUNCH-SCOPE.md) specifies the proposed production manifest; [Assessment Rules](ASSESSMENT-RULES.md) distinguishes actual samples from complete banks. [Editorial Operating Plan](EDITORIAL-OPERATING-PLAN.md) separately estimates content/source/human-review preparation and ongoing article/maintenance hours. Those tasks are excluded from the developer estimate below; no content staffing or cadence is confirmed.

## Cost model and effort

Prices are observations on **7 October 2026** for one production site; licences, staging entitlement and tax treatment need reconfirmation before purchase. These are components, not total project cost.

| Item | Dated amount / assumption | Limitation |
| --- | --- | --- |
| WordPress and Relevanssi Free | No licence fee in proposed base route | Custom development, maintenance and support still cost money. |
| PublishPress Business bundle, including Revisions Pro | USD129 annually, one site (S-39) | Bundle, not established standalone Revisions price; tax/staging confirm. Price promise applies while subscription active. |
| Illustrative managed hosting | USD350 annual payment OR USD420 for twelve monthly payments (S-45) | Excludes tax and overages; actual plan/region unselected. Standard staging documented; licence eligibility separate. |
| SearchWP Standard alternative | USD99 introductory first year; USD199 full renewal, one site (S-36) | Retrieval alternative, not automatically required; phrase aliases still need a route. |
| Relevanssi Premium alternative | EUR120 annually (S-34) | Separate currency; no unsourced FX conversion. Free route evaluated first. |
| LMS alternative | LearnDash quote unresolved; Lifter/Tutor observations in source report | Required tier/add-ons/staging/hooks/renewal need complete quote; no LMS cost added to native base. |
| Domain, email, monitoring/extra backup, tax/FX and overages | TBD from quotes and chosen operation | No invented flat allowance; these omissions prevent a total-budget claim. |
| Content/review and custom development/support | Separately staffed/quoted | Licence prices do not cover curriculum, source/voice review, authoring, styling, QA or operation. |

Illustrative native-route **known hosting plus editorial subtotal: USD479/year** (350+129), before the stated exclusions. With the SearchWP alternative, the same illustrative subtotal is **USD578 first year / USD678 at full renewal**, assuming unchanged hosting/editorial amounts. These are not approved budgets or savings claims. Do not mix the EUR premium option into USD totals without a dated exchange-rate assumption.

For quotation only, a **low-confidence planning estimate** for the preferred route is 42–70 developer person-days. This is the planning assistant's judgement, not a vendor quote or measured velocity. It assumes the proposed eight-module/32-lesson text foundation and assessment inputs have been written, reviewed and approved before delivery. That preparation remains outstanding and is excluded from this estimate. It also assumes bounded selected-response activities, one language, no real transactions, no AI grading, and the existing functional scope:

| Engineering work package | Proposed person-days |
| --- | --- |
| Content/relationship and assessment authoring support | 6–10 |
| Versioned checks/missions, authority and eligibility | 12–20 |
| Accounts, guest memory/import and bookmarks | 8–14 |
| Editorial/canonical discovery integrations | 6–10 |
| Reliability/privacy/accessibility/performance verification | 6–10 |
| Export/restore, release procedures and technical handoff | 4–6 |
| **Total** | **42–70** |

Roughly 9–14 five-day developer weeks is effort, not an elapsed delivery promise. Excludes content production, subject/language/learner reviews, visual design, significant styling work and scope changes; working interaction/accessibility verification is included. Actual quote must account for reviewer availability, theme/UI delivery responsibility, test environments, manual grading if chosen and maintenance. An LMS adapter route needs its own estimate; no unmeasured reduction is claimed.

## Owners, sequencing and decision gates

| Responsibility | Owner to designate | Required output |
| --- | --- | --- |
| Product scope, budget, route and retention policy | Product owner | PD-01/06/07/08 decisions against named versions. |
| Curriculum, essential rubrics and affected-content review | Qualified crypto/curriculum reviewer | Approved banks/gates/criteria and correction dependencies. |
| English/Pidgin and source/editorial operation | Fluent voice reviewer and publishing editor | Batch review, cadence/backlog, revision workflow and staffing. |
| Implementation, record authority, migration/export | Commissioned WordPress technical lead | Itemised route quote and compatibility/interface evidence. |
| Later styling and working accessibility/performance checks | Delivery/UI owner and QA/accessibility reviewer | Implemented validation against agreed devices and all criteria. |
| Hosting, licences, email, retention/backups and support | Named operations owner | Access ownership, recurring budget and maintenance/restore runbook. |

Continue planning by reviewing scope and these recommendations, resolving critical mechanisms, reviewing actual content/workflows and compiling the handoff. No developer is commissioned by this document. Later delivery, if separately commissioned by the owner, would first validate the version/guest/import/editorial integration surfaces in staging, then build bounded vertical slices: public reading; versioned practice; guest/account saving; articles/discovery/bookmarks; editorial corrections; complete operational verification.

Before the package is called settled, record named-version approval and confirmed responsibilities for PD-01/02/03/04/06/07/08/09. Critical remaining items include full banks/gates, guest visit/checkpoint/import-cleanup definitions, route quote/support ownership, publishing staffing, actual learner/subject/voice review, device targets and later styling/QA owner. If learner access remains unavailable, preserve that as an explicit handoff condition. Documentation research cannot substitute for working proof; all future application tests remain **not executed**.
