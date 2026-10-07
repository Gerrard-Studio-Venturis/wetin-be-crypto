# Wetin Be Crypto — WordPress Implementation Contract

Version: 0.1
Date: 7 October 2026
Status: Documentation-only engineering defaults for the adopted baseline. Runtime behaviour, content approval and deployment access are not established by this contract.

## Authority and delivery baseline

The owner's instruction to finish remaining preparation authorises these routine mechanism choices for a subsequent implementation. It does not manufacture independent content approval, purchase approval, reviewer appointments or executed tests. [Feature Specification](FEATURE-SPECIFICATION.md) remains the source of all 69 acceptance criteria; this contract supplies their implementation mechanism without changing their text. [Functional Review](FUNCTIONAL-REVIEW.md) supplies the adopted two-hour visit, rolling 30-day memory and confirmed-only import cleanup rules.

Use core WordPress publishing, core accounts, one project-owned education plugin and a supported core block theme. The owned plugin controls learning, canonical identity, editorial publication guards and bookmarks. Use free components by default: start with core search plus owned canonical alias retrieval; adopt Relevanssi Free only if verified necessary for the declared search behaviour. No paid LMS, PublishPress, SearchWP or multilingual component is required. Earlier paid-component totals are comparison observations, not this baseline's software purchases. Styling belongs to later implementation, with functional accessibility requirements preserved; this document supplies no visual design.

At implementation, pin an exact supported stable WordPress release, core theme release, PHP/database versions and any free dependency after compatibility checks. Record versions and licence/source URLs in the delivery manifest. Do not adopt an alpha version or invent today's compatible release number. Updates pass staging verification before production. The education plugin is the single authoritative learning store; search indexes are derived and replaceable.

## Public entities and approved revision snapshots

Canonical IDs are immutable application identifiers independent of WordPress numeric IDs, URLs and English titles. Existing M/L/O/KC/PM/A/H/G identities are retained. Each translated entity later shares its language-independent canonical identity with a distinct locale/revision. Maintain a unique `(canonical_id, locale)` relationship; source imports cannot silently create a second copy.

| CMS entity | Required fields and relationships |
| --- | --- |
| Path and module | Canonical ID, edition, title/intro, ordered module/lesson IDs, declared outcomes, recommended preparation and next actions. Order guides study, never locks public lessons. |
| Lesson | L-ID, locale, edition, structured text body, summary, taught O-IDs, preparation, next actions, source records, applicability wording, reviewed dependencies, optional accessible media alternatives. |
| Outcome definition | O-ID, edition, learner-facing criterion, lesson mapping and applicability/equivalence references. Definition is not earned evidence. |
| Activity introduction | KC/PM-ID, public description, assessed O-IDs, disclosed required criteria, fictional-input notice, prerequisite O-IDs and check routes. Private question versions are referenced, never embedded as public post metadata. |
| Article | A-ID, format News/Explainer/Story, body, author, subject/country relationships, event date, first publication date, substantive verification date, correction history and learning links. |
| Hub and glossary | H/G-ID, reviewed introduction/definition, source records, canonical subjects/aliases and linked learning/coverage. No-news hubs retain useful introductions. |
| Subject relationships | Separate canonical assets, networks, token representations and general topics; alias text may resolve to several subjects. Representation includes network/issuer/identifier where relevant. Ticker is not a unique key. |

Simple current content fields use post metadata and taxonomies. Preserve provenance for source title/URL, actual inspected date, supported claim, applicability and dependency IDs. Never treat a URL as proof a claim was reviewed. Distinguish first publication, reported event and meaningful verification dates; punctuation edits do not refresh them.

Ordinary edits stage a complete revision envelope containing body, relevant metadata, taxonomy assignments, relationships, source declarations and activity-version references. An envelope hash binds the exact fields reviewed. Until approved, the existing public post and its published snapshot remain unchanged. This avoids the common failure where draft body changes are isolated but live taxonomy/meta changes leak immediately. Media referenced by unpublished material is excluded from public attachments, REST responses and discovery unless deliberately approved independently.

## Private relational records

Use site-prefixed owned tables with transaction-capable storage, documented schema versions, foreign-reference validation and indexes for principal/history/current-eligibility queries. WordPress user IDs are account references, never accepted as client-selected ownership. Public post metadata must not hold grading secrets or learner history.

| Record group | Required private fields and constraints |
| --- | --- |
| Principal/container | Random principal ID; kind guest/account; account user reference when applicable; hashed guest secret, request-protection secret, memory consent timestamp, last deliberate visit event, last qualifying learning event, expiry, revoked timestamp and generation. Account principal unique per user. |
| Activity version | Random immutable version ID, KC/PM identity, A/B form, revision hash, locale, fixture/prompts/choices, required E/C rows, private keys/feedback, O-mappings, prerequisite snapshot, review approvals, eligibility status and correction reason. Accepted payload never overwritten. |
| Attempt/checkpoint | Random attempt ID, owner principal, exact activity version, start time, monotonic state revision, answer/checkpoint payload, submitted time, server result and feedback release state. Distinct retries remain distinct attempts. |
| Evidence/completion | Stable evidence ID, owner, type explicit lesson completion/check pass/mission demonstration, L/O mapping, exact version/edition, originating attempt/provenance and achieved time. Unique lesson-completion identity prevents double counts; applicability is computed separately. |
| Import operation/items | Operation ID, authenticated target account, explicit intent, source principal/generation, source record ID, per-item durable disposition and destination ID. Unique source-provenance/destination constraint prevents repeated imports. |
| Bookmark | Account principal, article canonical ID, created time, change revision and last authorised command. Unique account/article pair. Retain minimal last-public title/identity for unavailable entries. |
| Editorial control | Revision envelopes, per-reviewer approvals, protected content hashes, dependency edges, correction/retirement events and publication audit. Approvals bind a revision and scope, not merely a post ID. |
| Mutation receipts | Principal, operation key, payload fingerprint, action, durable outcome and retention deadline. Same key with changed payload is rejected. No guest secret or password in logs. |

Completion counts do not depend on duplicate event rows. Evidence is awarded only within the submission transaction after successful private grading. Historical attempts remain distinct from current eligibility. No reset deletes an earlier pass because a later attempt failed. Changed curriculum requirements create a visible current gap without rewriting historical achievements.

## Guest authority, clocks and storage support

Generate a cryptographically random guest secret with at least 256 bits of entropy; store only a server-side keyed hash for lookup. Send the capability in a first-party Secure, HttpOnly, SameSite=Lax cookie over HTTPS. Scope it to this application/site and rotate/rebind on privileged transitions without losing authorised unresolved records. A separate origin-bound request token and Origin validation protect mutations. WordPress nonces alone do not establish guest identity, ownership, replay protection or permission.

Without memory consent, the cookie is nonpersistent and server authority ends after **two hours without deliberate learning interaction**, or explicit End this visit. Learning/glossary navigation and valid learning mutations update the visit time; article/search/authentication/background requests do not. Browser closing is not a guaranteed boundary. Opt-in gives a persistent cookie whose server deadline is **30 consecutive 24-hour periods after the last accepted qualifying learning event**. Every read, mutation and gate evaluation checks the server deadline before exposing records or accepting new writes; delayed cleanup cannot extend eligibility.

Qualifying events are explicit completion, accepted check/mission submission, changed valid unfinished-answer checkpoint and explicit changed Save my place reading position. Validate content/version, monotonic revision and actual change. Acknowledged replays, unchanged requests, consent clicks, imports, navigation alone and background saves do not renew memory. Consent with no qualifying record creates an empty memory preference with a bounded 30-day consent-cookie lifetime; it earns no evidence and cannot extend existing records. The first genuine event starts the learning deadline. Invalid submissions cannot renew it.

If persistent storage alone is blocked but session cookies work, use current-visit saving and explain that later return is unavailable. If cookies are blocked, keep current-page input in memory; explain that private server saving, reload continuity and account login may be unavailable. Public reading remains usable. Do not embed bearer capabilities in URLs or substitute fingerprinting. With networking unavailable preserve current-page answers for retry, mark them Unsaved and revalidate authority/version before accepting them. JavaScript failure leaves text and public navigation usable; an unavailable interactive action clearly explains its limitation.

Clear/end atomically revoke guest authority and remove active records, preserving account history. Expired/revoked containers cannot be renewed; new work uses a new container. Cleanup processes remove inaccessible expired rows independently of request-time enforcement.

## Learning actions and delivery API

Use a namespaced application REST surface, for example `wbc/v1`. The following names define resources and payload contracts, not application code. All writes carry an operation key and expected record revision where relevant. Server replies include operation ID, committed revision, server time and a precise saving disposition. Client-provided scores, pass flags, user IDs and eligibility declarations are ignored.

| Action/resource | Request and authorised response contract |
| --- | --- |
| Public catalogue/search | Published canonical ID/locale/type/filter/query; return approved text, labels, disambiguated aliases and useful prerequisite links, never private fields. |
| Guest context/preferences | Establish deliberate-learning context; opt in, clear or end with explicit intent. Return mode/deadline/support explanation, not the secret itself. |
| Own journey | Authenticated account or valid guest capability; return separate completions, attempts, demonstrations, applicability and confirmed checkpoints only. |
| Lesson completion/place | L-ID, accepted content revision and explicit completion or changed position. Deduplicate completion; position creates no achievement. |
| Attempt start | KC/PM-ID and requested form; server selects approved exact version, validates gate and returns key-free fixture, row/choice IDs, criteria and attempt ID. |
| Attempt checkpoint/submit | Attempt ID, expected revision and structured row/choice IDs. Validate ownership, version, required fields and current authority; privately grade bound version on submit. |
| Progress import | Explicit progress intent, operation ID and eligible source IDs; require authenticated fixed target. Return per-record Saved/Already in account/Needs retry/Ineligible and destination confirmations. |
| Bookmark/list | Account-only article ID plus desired Saved/Unsaved state and expected change revision; return durable state/list or unavailable disposition. No learning import. |
| Editorial actions/export | Specific capability, envelope/version/hash and purpose; private review decisions and export permissions never available through public catalogue handlers. |

Use 400 malformed input, 401 missing authentication, 403 authorised identity lacking permission, 404 absent/inaccessible object without confirming another person's records, 409 stale revision/idempotency conflict, 410 caller-owned expired or retired context, 422 invalid answers/incomplete criteria, 429 rate limit and 503 temporary storage/service failure. Return stable error code, plain-English recovery and retryability without stack traces, keys or other owners' data. An expired caller capability may receive a generic expiry explanation without revealing any associated history.

Private/auth/guest/attempt/editorial responses use Cache-Control private, no-store and must be excluded from page/CDN caches. Public reading is cacheable without attaching private journey data. Invalidation covers published snapshot, feeds, API, search snippets and withdrawn attachments. Ownership checks occur on every route, including list, single record, export and operation recovery.

## Assessment consistency and prerequisites

Use the full draft primary/retry banks in [Bank 01–04](ASSESSMENT-BANK-01-04.md) and [Bank 05–08](ASSESSMENT-BANK-05-08.md), with [Assessment Rules](ASSESSMENT-RULES.md). Every required decision/reason pair must be correct; E failures cannot be offset. Return feedback only after durable submission, scoped to that attempt/version. Keys and reviewer notes never appear in first-response HTML, script bundles, public REST, search, feeds or shared cache. Public repository exposure does not establish secrecy or proctored examination validity.

Starting binds an approved immutable version. Ordinary replacement preserves original-version grading. Known essential-key errors retire current evidence and hold affected in-flight scoring; preserve answers/history and explain the corrected route. Missing content/criterion approvals means no current scored activity. A correction transaction updates retirement/applicability and dependency notices atomically with the published correction state.

Evaluate PM-04 against O-04.1/.2/.3; PM-06 against O-04.2/.3 and O-06.1/.2; PM-08 against O-02.3/O-04.2/O-06.1/O-08.1/.2. Other foundation missions are open fictional practice. These mappings remain subject to actual content approval. Check gate evidence at start and again before a new durable demonstration. An expired guest prerequisite or corrected evidence cannot grant a fresh demonstration; explain and retain available draft work without inventing a pass. A failed full check supplies no partial reusable gate credit. Experienced entry uses the reviewed full KC with its declared outcomes and never marks unread lessons complete.

## Import, concurrency and transaction boundaries

Account import requires explicit progress-save consent bound to one account. Bookmark registration/login never imports. Per source record, lock and revalidate the guest container and source at durable acceptance, reconcile destination evidence/history, persist the operation receipt and remove only confirmed migrated guest copies in one transaction. Preserve failed remainder to its existing deadline; imports grant no grace or renewal. Identity/version deduplication preserves earlier account passes and weaker imported attempts separately.

Lost acknowledgements recover durable receipts under the original authenticated account even after guest expiry. Uncommitted remainder still requires valid guest authority. An account switch cannot retarget pending operations or display the former account's private summary. Rotate guest capability after cleanup while rebinding valid remaining work; old capability is revoked. Confirm Saved only after commit or verification of existing destination data.

Bookmark commands express desired state rather than toggle. Serialize by account/article and require expected revision after initial state discovery; stale concurrent commands return current state/conflict for explicit retry. Repeated identical operation keys return the committed outcome. Withdrawal during login/save returns Unavailable; existing saved entries retain minimal identity without exposing withdrawn text. Server-issued short-lived return intent is restricted to same-site destinations and bound to the authenticated action; successful authentication alone is not a save confirmation.

Database write failures roll back evidence, receipt and cleanup together. External indexing/cache invalidation uses a durable outbox with retry; temporarily suppress stale withdrawn results until invalidation succeeds. A partially written multi-record import may commit some items, but its summary identifies every unresolved item. Never claim whole-operation success from one accepted request.

## Accounts, privacy and publication operations

Use core password hashing, password reset and authenticated sessions. New account activation requires an expiring, single-use email verification link before durable private saving/import; retain valid guest work while verification is pending. Existing verified accounts need no repeated verification. Configure a deliverable transactional-email mechanism supplied by the deployment environment; no paid mail purchase is presumed. Reset/verification responses avoid account enumeration, rate-limit abuse and preserve intended same-site return. Failure to send/deliver is explicit; it never confirms registration or saving. No seed passwords or secrets enter the repository.

Engineering retention defaults for owner confirmation before public operation: account progress/bookmarks persist until account deletion rather than an invented inactivity expiry; deleted-account active records are removed within seven days; application diagnostics contain no answer payload and expire after 14 days; mutation/import receipts persist 90 days where required for recovery; encrypted backups have at most 30 days retention. Guest learning is inaccessible immediately at expiry/clear and purged within 24 hours. Keep any longer editorial audit as non-learner content provenance. These are operational defaults, not established local legal determinations. Restore reapplies tombstones/deadlines before serving traffic. Account export delivers only that account's history/bookmarks/provenance through expiring authorised access; deletion does not remove public authored articles automatically.

Owned publication guard requires actual subject/source approval plus a distinct publishing approval for each complete envelope. Writers cannot self-publish; administrators use the same ordinary guard. Material body, metadata, taxonomy, source, rubric or essential mapping changes invalidate affected approval. Spelling-only classification is audited and preserves meaningful dates. Emergency withdrawal/correction requires designated authority and a recorded reason; it does not silently approve replacement scoring keys. Corrections trace dependencies and flag future French revisions without claiming French publication exists.

Import the accepted content manifest idempotently by canonical ID/locale, with file/commit hash and revision provenance. Import learner text separately from facilitator sections; all draft banks begin unapproved/unavailable for scoring. Source rechecks and real review decisions activate approved versions. Backup/export includes private schemas, immutable versions, relationships, approvals, operation provenance and content snapshots under restricted access; public export excludes private records and keys. Migrations are versioned, resumable and tested against restored copies before deployment; no destructive automatic reset, silent regrading or vendor-only JSON export.

## Acceptance ownership and unexecuted verification

| Existing group and complete criterion range | Implementation responsibility |
| --- | --- |
| FS-01; AC-01.1–01.4 | Open catalogue, declared outcomes, entry KC and evidence mapping. |
| FS-02; AC-02.1–02.5 | Text-first lesson/glossary, explicit deduplicated completion and place continuity. |
| FS-03; AC-03.1–03.5 | Private criterion grading, immutable versions, feedback and approval hold. |
| FS-04; AC-04.1–04.5 | Server gate evaluation, expiry explanation and fictional practice. |
| FS-05; AC-05.1–05.6 | Separate journey records, durable acknowledgements, applicability and ownership. |
| FS-06; AC-06.1–06.9 | Guest deadlines/support, verified accounts and explicit recoverable import. |
| FS-07; AC-07.1–07.6 | Public articles, formats, source/date/correction fields and no learning credit. |
| FS-08; AC-08.1–08.5 | Canonical hubs, representation identity, aliases and shared article relationships. |
| FS-09; AC-09.1–09.5 | Approved-only search, labels/filters, disambiguation and gated-result routes. |
| FS-10; AC-10.1–10.6 | Private desired-state bookmarks, return intent, withdrawal and retry. |
| FS-11; AC-11.1–11.7 | Complete-envelope approvals, dependency corrections and stable history/dates. |
| FS-12; AC-12.1–12.6 | Core theme/plugin accessibility, clear state words, optional-media resilience and actual voice review. |

All 69 criteria and integration/failure tests in [Implementation Verification Plan](IMPLEMENTATION-VERIFICATION-PLAN.md) remain **not executed**. Delivery must verify cookie/storage limitations, concurrent expiry/import/correction, publication bypass surfaces, key separation, stale caches, cross-account privacy, restore/deletion and measurable lightweight keyboard/assistive use. Successful document checks are not software proof.
