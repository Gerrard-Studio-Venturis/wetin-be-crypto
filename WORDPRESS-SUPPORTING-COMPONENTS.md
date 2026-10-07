# Wetin Be Crypto — WordPress Supporting Components

Version: 0.1
Date: 7 October 2026
Status: P-06 documentation-level comparison; components remain unselected.

This review supports RQ-08 and PD-06, using the [Feature Specification](FEATURE-SPECIFICATION.md), [Information Architecture](INFORMATION-ARCHITECTURE.md), and [Functional Flows](FUNCTIONAL-FLOWS.md). It concerns public search, moderated changes to published content, and the bookmark ownership boundary. It preserves D-01 to D-15 in the [Decision Log](DECISION-LOG.md). No application, plugin, accessibility, or integration test was run; all 69 application acceptance criteria remain **not executed**.

## Method and evidence limits

Official public vendor sources were inspected on 7 October 2026. Six Firecrawl calls comprised three focused searches, two successful pricing-page extractions, and one PublishPress pricing request that encountered a transient request-rate limit. Search snippets were used to locate documentation, not establish complete workflows. Bounded public web retrieval supplied the remaining full-page text and PublishPress pricing; its captures can contain cached content. SearchWP's requested pricing URL redirected to its purchase-information page. No checkout, account, installation, configuration, purchase, or outreach occurred.

S-33 to S-39 below identify the sources supporting this comparison. These are documentation claims, not verified behaviour in the proposed application. No installed product version has been chosen. Refresh prices and version-specific compatibility before a later purchasing or implementation decision.

## Public search candidates

Relevanssi's feature comparison documents synonyms, custom-field/taxonomy search, excerpts, relevance weighting, and custom post types held in the normal WordPress post table. Premium adds finer post-type/taxonomy weighting. The page says content outside that table cannot be searched, with exceptions for user profiles and taxonomy-term pages. Its logging table and explanatory section disagree about Free versus Premium logging; treat the logging tier and defaults as unresolved. [S-33: Features](https://www.relevanssi.com/features/).

SearchWP documents configurable engines, sources, custom-field/taxonomy attributes, and synonym rules. Its tutorial explicitly limits synonyms to single words rather than phrases. This matters for multiword project names, colloquial terms, and later French aliases. The pricing page advertises Standard support for custom post types, metadata, and custom database tables; that advertising does not establish an adapter for our eventual records. [S-35: Synonym guide](https://searchwp.com/how-to-set-up-synonym-rules-for-wordpress-search/), [S-36: Plans](https://searchwp.com/buy/).

Both remain plausible candidates for the retrieval portion of FS-09. Relevanssi Free merits comparison where searchable public content lives in ordinary posts/custom post types and modest weighting is enough. SearchWP merits comparison where its engine controls or documented source options address a confirmed need. Extra filtering products and live-search overlays have not been added to initial scope. Relevance quality and operating cost need evaluation against the actual content model and representative queries.

Neither inspected source proves an asset-identity system. A synonym can expand a query; it cannot safely decide that two assets sharing a ticker are equivalent. Keep a maintained subject identity and aliases with relevant project/issuer, network, and representation, as FS-08 requires. An ambiguous query must offer named alternatives, not an automatic redirect. Multiple identities can match one alias. Multiword aliases require a documented application-level route or further product evidence, especially for SearchWP.

Proposed public indexing policy:

- Include only explicitly approved public content and selected public fields: lessons, articles, glossary entries, discoverable missions/tools, and reviewed asset/topic hubs. Select the searchable fields and content types deliberately.
- Index the currently approved public revision. A pending substantive edit must not leak through its title, excerpt, body, aliases, taxonomy changes, or search snippets while the approved version remains live.
- Exclude private learner records, attempts, bookmarks, guest/import records, editorial review notes, source-workspace records, and unapproved content. Product support for searching arbitrary metadata/tables is a capability, not permission to index them.
- A discoverable gated mission exposes useful public context and a prerequisite route. Eligibility comes from the learning authority; a search result does not grant practice access or learning credit.
- Coordinate publication, withdrawal, reindexing, and caches. Approval-aware indexing and recovery from an interrupted update remain technical decisions; no mechanism or consistency interval is established here.

PG-14 needs labelled content types, meaningful excerpts, maintained subject/type filters, selected states, useful empty results, and keyboard-operable links. Prefer a normal text query/results route usable without a live-search overlay. Plugin-generated forms and relevance do not establish WCAG conformance. Query logs may capture information a reader types; propose leaving optional analytics off unless a defined purpose, access, retention, and deletion policy is reviewed. SearchWP's on-site privacy statement does not prove our private records or logs are inaccessible.

## Moderating published updates

PublishPress Revisions documents pending revisions, a queue, comparison, approval/rejection, and scheduling of changes to published posts. Revisions Pro advertises ACF custom-field and WPML support; advanced permissions and approval-process extensions involve other PublishPress components. These claims provide a credible candidate for holding proposed edits, with actual post-type/field support still to verify. [S-37: Revisions](https://publishpress.com/revisions/).

Its permissions documentation is consequential: Authors can immediately publish their own revisions; Editors and Administrators can publish revisions for any post. The Revisor role holds published-post changes for moderation and cannot publish them. Using default role names alone would therefore leave a route around the intended review policy. [S-38: Revision permissions](https://publishpress.com/knowledge-base/permissions-revisions/).

For FS-11/FL-10, propose capability-based writer, subject/source-reviewer, and publishing-editor responsibilities. The required record is an approval tied to the exact content revision, not a checked box attached indefinitely to an article. A material claim change invalidates the relevant approval. Publication/scheduling must check required sources and the current approvals; authorised emergency correction needs its reason, audit record, and subsequent review.

The inspected pages do not establish two revision-specific approvals, automatic invalidation, dependency review, public correction notices, or assessment-version applicability. Additional workflow components or custom integration may supply them, but the route is open. A bundle containing several plugins does not prove that their combination enforces these rules. Similarly, advertised ACF support does not establish that every learning field, asset relationship, custom table, taxonomy, or assessment bank is staged with a revision. Decide what a revision contains and verify that no substantive field changes early through another editing route.

Retain the approved public revision while ordinary substantive updates undergo review. A confirmed essential teaching error must instead trigger the agreed pause/correction process for affected current activities, with earlier attempts preserved against their original versions. Sources/dependencies, translations, meaningful verification dates, Pidgin review, and correction copy remain editorial/application responsibilities; this plugin is not a subject reviewer.

## Requirement coverage matrix

**D** = documented component capability; **I** = plausible inference; **C** = application configuration/integration/custom work; **U** = unresolved. A row can contain several classifications because a component capability covers only part of a requirement.

| Requirement / traceability | Evidence and classification | Remaining application responsibility |
| --- | --- | --- |
| Mixed public content retrieval: FS-09, AC-09.1 | **D:** Relevanssi post-table search; SearchWP engine/source attributes (S-33/35/36). **I:** unified catalogue is feasible. | **C:** public source/field selection, labels, snippets, filters and ranking. |
| Aliases and ambiguous identities: AC-08.3/08.4, AC-09.2 | **D:** synonyms (S-33/35); SearchWP guide limits phrases. | **C/U:** canonical identity, shared-alias alternatives, multiword handling and tested relevance. |
| Public approved revisions only: AC-09.3, AC-11.3 | **D:** pending edits exist (S-37). | **C/U:** approved-version index and exclusion across index, excerpts, caches, withdrawal and reindexing. |
| Keyboard/low-data discovery: AC-09.4, FS-12 | **U:** complete accessible behaviour is not established. | **C:** text route, labels, selected states, focus and later device/assistive-technology verification. |
| Useful gated-practice result: AC-09.5 | **I:** public discovery can be separated from execution. | **C:** prerequisite route; learning authority decides access, including validated guest evidence. |
| Hold published edits: AC-11.3 | **D:** Revisions pending-change workflow; role exceptions (S-37/38). | **C/U:** roles, post types, substantive field staging, alternative edit paths and interruption recovery. |
| Source and two approvals: AC-11.1/11.2 | **U:** complete revision-specific enforcement is unproven. | **C/U:** required sources, subject/editor sign-off, invalidation, publication/schedule checks and emergency authority. |
| Corrections/dependencies/history: AC-07.4/07.5, AC-11.4–11.7 | **U:** complete application workflow is unproven. | **C:** dependency records, dates, public notice, activity hold, immutable attempt version and later French review. |
| Account bookmarks: FS-10, FL-09 | **C:** assign to proposed learning/records layer; no bookmark plugin assessed. | Private ownership, deduplication, auth return, confirmed save/retry and withdrawn-item state. |

The classifications preserve the requirements rather than mark them passed. The overall search/editorial workflow is **not** a documented complete integration.

## Dated licence and cost evidence

Prices below were visible in the inspected pages on 7 October 2026. They are single-site-usable options, not purchase recommendations, a total project budget, or currency conversions.

| Candidate | Published charge and coverage | Billing/renewal limits evidenced |
| --- | --- | --- |
| Relevanssi Premium (S-34) | €120 annual; unlimited sites, including one site. | One year of updates/support; yearly renewal. After expiry the installed version continues without new updates/priority support. Automatic billing and a separate renewal discount were not established. |
| Relevanssi permanent (S-34) | €402; unlimited sites. | Pricing advertises lifetime support/updates, but its explanatory terms limit them to the current major version. Do not budget unlimited future major versions as guaranteed. |
| SearchWP Standard (S-36) | USD $99 introductory first year, one site; regular price $199. | Annual pricing; all renewals at full price. Cancellation/change of plan is offered. Taxes and more detailed billing terms were not established. |
| SearchWP Pro, conditional later need (S-36) | USD $199 introductory year; regular $399; up to three sites. | Full-price renewal. WPML/Polylang integrations appear in this tier; French-ready records alone do not require purchasing it now. |
| PublishPress Business bundle (S-39) | USD $129 annually, one site; includes Revisions Pro and other PublishPress plugins. One team member can use support. | Recurring subscription; cancellation allowed. Vendor promises the price will not increase while the subscription stays active. Expiry leaves installed plugins usable but removes updates/support. No separate standalone Revisions price was established. |

Tax treatment is unconfirmed across these options. No checkout was opened to determine local charges. Licence cost excludes hosting, configuration, integration, custom workflow work, maintenance, content operations, and later validation. Support entitlement is not evidence that the vendor will build or support the whole application.

## Ownership, choices, and future verification

Keep canonical content/subject IDs, public revision identity, approval/dependency records, and learning history under application ownership, with export/portability defined in the main technical plan. Plugin search indices should be rebuildable derived data. Bookmark records belong to the private account layer: Save article authentication must preserve bookmark intent without silently importing guest learning. Reading, searching, and bookmarking grant no curriculum credit.

PD-06 needs an owner/technical-reviewer choice of retrieval candidate, editorial enforcement route, licence budget, and maintenance owner. PD-03 needs real reviewer capacity and emergency authority. The public content/storage model determines whether each source adapter is adequate. Existing PD-07 guest validation and PD-08 performance decisions remain open; a search plugin cannot resolve them.

The commissioned delivery team must later verify, with versions recorded:

1. Published lessons/articles/glossary/missions/hubs appear with correct labels; drafts, private records, pending edits, and unpublished metadata never surface, including after withdrawal or failed reindexing.
2. Curated single/multiword aliases and ambiguous tickers preserve distinct asset representations; language/context changes do not silently merge identities.
3. Keyboard and assistive-technology operation, text-only results, no-result routes, filters, and acceptable performance on the agreed devices/network.
4. Writer/Reviewer/Editor capability boundaries, missing-source and missing-approval blocks, material-edit invalidation, scheduled publication, alternate editing routes, and interrupted moderation.
5. Corrections flag dependent activities/versions and later translations; earlier attempts retain their version; spelling edits preserve meaningful dates; bookmarks stay private and confirm actual saves.

These are future verification scenarios, not executed tests or learner validation.

## Source records

All inspections: **7 October 2026**. Publication/update dates are not stated here unless clearly provided; inspection is not a release/version date.

| ID | Official source and exact URL | Retrieval / relevant limit |
| --- | --- | --- |
| S-33 | Relevanssi, [Features and benefits](https://www.relevanssi.com/features/). | Public web full-page text; internal logging-tier inconsistency noted. |
| S-34 | Relevanssi, [Buy Premium](https://www.relevanssi.com/buy-premium/). | Firecrawl full-page text; prices and major-version licence qualification. |
| S-35 | SearchWP, [How to Set Up Synonym Rules](https://searchwp.com/how-to-set-up-synonym-rules-for-wordpress-search/). | Public web full-page text; dated 4 March 2025; phrase limitation needs version-specific confirmation. |
| S-36 | SearchWP, [Plans](https://searchwp.com/buy/). | Firecrawl full-page text requested at `https://searchwp.com/pricing/`, redirected here; introductory/renewal distinction. |
| S-37 | PublishPress, [Revisions](https://publishpress.com/revisions/). | Public web full-page text; capability descriptions do not prove our complete approval model. |
| S-38 | PublishPress, [Understanding Permissions in Revisions](https://publishpress.com/knowledge-base/permissions-revisions/). | Public web full-page text; default roles and Revisor moderation boundary. |
| S-39 | PublishPress, [Pricing Options](https://publishpress.com/pricing/). | Public web full-page text after Firecrawl rate limit; annual recurring bundle and expiry terms. |
