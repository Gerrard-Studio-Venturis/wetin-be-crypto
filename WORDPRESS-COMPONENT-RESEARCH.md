# Wetin Be Crypto — WordPress Component Research

Version: 0.1

Date: 7 October 2026

Status: P-06 documentation research; candidates unselected; application behaviour unverified.

## Scope and evidence boundary

This comparison evaluates LearnDash, LifterLMS, and Tutor LMS against the complete [Feature Specification](FEATURE-SPECIFICATION.md): twelve feature groups and 69 future acceptance criteria, the eighteen [page families](INFORMATION-ARCHITECTURE.md), and ten [functional flows](FUNCTIONAL-FLOWS.md). It supports RQ-08 and PD-06/PD-07; it does not approve detailed requirements, select components, or establish handoff readiness.

WordPress, public free reading, eligible guest practice, optional account saving, selected outcome prerequisites, and opt-in 30-day browser memory remain constraints. D-15 excludes visual-design production. No component was purchased, installed, configured, or exercised; no learner session, accessibility assessment, migration, performance measurement, or application test occurred. Later delivery owns implementation and working checks. Approving this report does not trigger coding by the planning assistant.

Eight official source URLs were inspected on 7 October 2026 through Firecrawl text extraction, requesting fresh retrieval. Three initial retrievals failed; exact-URL HTML fallback was blocked by the environment proxy, and a bounded Firecrawl retry recovered all three. These access failures establish no product limitation. Retrieved pages returned HTTP 200. Source metadata dates below are distinguished from displayed body dates; neither identifies the installed plugin version. No installed version or cross-component compatibility is established.

## Inspected evidence ledger

| ID / publisher and exact source | Date available | Relevant observation and limit |
| --- | --- | --- |
| S-25 — LearnDash/Liquid Web: [product and pricing](https://www.liquidweb.com/software/learndash/) | Modified metadata: 2 October 2026. | Essentials/Pro/Elite annual plans, quiz builder and tiered reporting. Memberships included. Marketing ownership claims are not export proof; currency and production/staging entitlement not established in inspected text. |
| S-26 — LearnDash/Nexcess: [Course Enrollment Mode Settings](https://docs.nexcess.com/software/learndash/course-enrollment-mode/) | Body: “Last updated: April 8, 2019.” | Open permits public content; progress and Mark Complete require login. Free requires registration. Course prerequisites and optional expiry/data deletion documented. Legacy displayed date requires later version reconciliation. |
| S-27 — LearnDash: [Quiz Access & Progression](https://learndash.com/support/kb/core/uncategorized/quiz-access-progression/) | Body: updated 22 April 2026. | Percentage passing, quiz prerequisites, optional registered-only access, anonymous retake cookies, and server quiz saving. These do not establish version-bound evidence or guest import. |
| S-28 — LifterLMS: [pricing](https://lifterlms.com/pricing/) | Modified metadata: 6 October 2026. | Free core; USD introductory/renewal bundle amounts; staging exclusion from active-site limits. Flattened comparison checkmarks cannot establish every add-on's tier. |
| S-29 — LifterLMS: [Quizzes Overview](https://lifterlms.com/docs/lifterlms-quizzes-overview/) | Modified metadata: 31 March 2025. | Core automatic question types, Advanced Quizzes/manual types/question banks, My Grades, optional 24-hour resume. Guest access and versioned learner-state exports not documented here. |
| S-30 — Tutor LMS: [pricing](https://tutorlms.com/pricing/) | No reliable publication/update date established. | Free core and USD annual/lifetime Pro plans, site limits and tax qualification. Detached discount banner and staging/renewal treatment remain unresolved. |
| S-31 — Tutor LMS: [Course settings](https://tutorlms.com/docs/settings/course-settings/) | Modified metadata: 28 July 2026. | Visibility, strict/flexible completion, progress-resetting course retake, attempt limits and final-grade methods. Public course marketing does not establish anonymous graded journeys. |
| S-32 — Tutor LMS: [Course Import/Export](https://tutorlms.com/docs/tutorials/course-import-export-tutorial/) | Modified metadata: 28 July 2026. | Pro JSON transfer of course content/settings/media. Import can overwrite configuration; advanced features require corresponding add-ons. Complete learner-history portability not established. |

## What each LMS contributes

**LearnDash:** the strongest inspected explanation of public reading: Open content needs no enrolment, login, or payment, whereas Free enrolment requires an account. Open does not supply anonymous Mark Complete or tracked course progress (S-26). Quiz settings explicitly discuss anonymous retakes and optional registered-only access (S-27), supporting a documented anonymous-quiz surface, not the complete guest journey. Percentage passing, requiring all questions answered, and course/quiz prerequisites do not demonstrate essential-outcome gates. Server quiz saving is documented, with a vendor warning about incomplete writes at very short autosave intervals; its suggested interval is not a tested performance budget. Question snapshots, historical-pass preservation, and complete exports remain unverified.

**LifterLMS:** free core supplies automatically graded text/picture multiple-choice and true/false questions; one quiz attaches to each lesson. Advanced Quizzes supplies additional types including short/long answers, some manual grading, and question banks; S-29 explicitly also identifies Infinity for question banks. This may help rationale-based assessment, but manual grading adds editorial/teaching work and a pending-result state. My Grades is documented. Resume is disabled by default; enabling it allows resumption within 24 hours of attempt start, adjustable through a filter. That duration is not the approved 30-day guest-memory policy. The inspected sources do not establish public lesson access, anonymous graded evidence, guest prerequisite enforcement, immutable versions, or comprehensive exports.

**Tutor LMS:** settings document unlimited retries when the limit is zero, highest/average/first/last final-grade methods, and optional hiding of attempt details (S-31). Strict completion requires lessons plus passed quizzes/assignments; Flexible permits completion at any time. Neither defines our outcome-specific mission eligibility. Course Retake resets all progress, conflicting with preserved achievements unless a separate record is retained and the interaction deliberately reconciled. Video-watch completion cannot substitute for the specified explicit lesson action. Admin approval of a “course review” concerns reviews of courses, not subject/editor approval of content revisions. Pro content export is useful, but it does not establish guest reconciliation or immutable attempt-history migration.

These are documented contributions and gaps in inspected evidence, not proof that an undocumented capability is absent from a product.

## Complete requirement coverage and dependencies

“LMS configuration” below means documented building blocks subject to later configuration/verification. “Integration/custom” is a proposed dependency, not a working extension. “Unknown” means the inspected sources do not settle the requirement. Core/supporting-component recommendations are handled in the broader P-06 plan; this table identifies what an LMS alone cannot establish.

| Feature / criteria | Page families; flows | Documented contribution and unresolved dependency |
| --- | --- | --- |
| FS-01; AC-01.1–AC-01.4 | PG-01/02/03/04/05/07; FL-01/02 | LearnDash Open supports public reading. Catalogue/outcome information needs authoring. Challenge-to-outcome mapping without marking unread lessons complete: integration/custom. Lifter/Tutor complete guest entry: unknown. |
| FS-02; AC-02.1–AC-02.5 | PG-05/06; FL-01 | LMS lesson authoring/configuration contributes. Anonymous explicit completion, deduplication, glossary return and resume are integration/custom; LearnDash's stock completion is logged-in only. Text equivalence needs content review. |
| FS-03; AC-03.1–AC-03.5 | PG-07/10; FL-02/04 | Documented quizzes/retakes/grades contribute. Essential decisions, original-version grading, preserved passes, feedback links and approved-activity availability need integration/custom; complete version semantics unknown for all three. |
| FS-04; AC-04.1–AC-04.5 | PG-07/08/09; FL-03/05 | Prerequisite/quiz features are partial building blocks. Guest outcome gates, expired-evidence checks and fictional rubric-driven missions need integration/custom. Course completion or points are not equivalent evidence. |
| FS-05; AC-05.1–AC-05.6 | PG-10 and results; FL-04/06/07 | LMS dashboard/reporting contributes. Distinct reading/pass/practice/review records, historical applicability, reliable cross-device confirmation and own-results-only access need integration/verification. Article activity must not award credit. |
| FS-06; AC-06.1–AC-06.9 | PG-10/16/17; FL-05/06/07 | Account foundation is separate from guest policy. Visit continuity, opt-in expiry, validated guest evidence, explicit import, deduplication and failure recovery: integration/custom; not established by any inspected LMS source. |
| FS-07; AC-07.1–AC-07.6 | PG-11/12/13; FL-08/10 | Public posts/archives are outside this LMS comparison. Original article formats, source/event/publication/verification dates and correction display require editorial configuration/extension. No automatic curriculum credit. |
| FS-08; AC-08.1–AC-08.5 | PG-13/14; FL-08 | Canonical asset/topic identity, representations, aliases and shared lesson/article relationships require taxonomy/metadata integration. Ticker uniqueness or safe receiving compatibility is not an LMS feature. |
| FS-09; AC-09.1–AC-09.5 | PG-14 and destinations; FL-08 | Combined public search needs supporting integration: content-type labels, aliases, ambiguity and prerequisites. Draft/private-record exclusion, keyboard controls and relevance remain unverified. |
| FS-10; AC-10.1–AC-10.6 | PG-12/15/16; FL-09 | Account bookmarks need a supporting component/extension. Auth return/save, withdrawn entries and retries require verification; bookmarking must not silently import guest learning. |
| FS-11; AC-11.1–AC-11.7 | PG-18 plus affected content; FL-10 | Subject/editor approval of a specific revision, reviewed published updates and dependency corrections require editorial integration/custom work. LMS course-review approval is insufficient. Historical attempts/translation relationships need explicit records. |
| FS-12; AC-12.1–AC-12.6 | Every PG and FL | Theme/LMS/content/custom activities jointly determine accessibility and lightweight use. Text, labels and voice are requirements. Marketing, text extraction and written review establish no WCAG conformance or device performance. |

All 69 criteria are represented by their existing ranges; none passed through this research. All eighteen PG and ten FL identifiers are within scope. Canonical IDs, edition/version rules and evidence authority must be specified before vendor configuration is treated as an implementation route. In particular, the O-04.2-only KC-04/PM-04 samples cannot establish the full proposed PM-04 gate over O-04.1/O-04.2/O-04.3.

## Licence and cost observations

Prices are source observations on 7 October 2026, not purchases, guaranteed future renewals, or total implementation budgets. One production site plus staging is the evaluation unit.

| Candidate | Documented prices and billing | Production/staging and unresolved cost |
| --- | --- | --- |
| LearnDash, S-25 | Essentials/Pro/Elite are annual plans; annual renewal stated. Essentials includes course/quiz builders; Pro adds advanced reporting; Elite adds instructor/group features. Numerical prices omitted because currency/renewal conditions are not sufficiently established. | Currency, site count, staging entitlement, taxes and exact renewal amount not established in inspected text. No budgetable combined entitlement yet. |
| LifterLMS, S-28/29 | Core free. Earth **USD199 first year / USD398 annual renewal**; Universe **USD299 / USD598**; Infinity **USD799 / USD1598**, using the advertised 50% first-year new-order offer with FIRSTYEAR50. Advanced Quizzes is a separate add-on; standalone price not inspected. | Earth: one active site; Universe: five; Infinity: unlimited. Staging/development/test sites explicitly excluded from active-site counts. Add-on choice, tax treatment and whether a bundle is necessary remain open. |
| Tutor LMS, S-30/32 | Core free. Annual Pro: Individual **USD199/year**, Business **USD399/year**, Agency **USD799/year**, excluding VAT/taxes. Pro includes import/export; annual plans state one year of updates. | One/up to ten/unlimited sites respectively. Staging exclusion and renewal/intro treatment unconfirmed; do not apply the detached “15% OFF” banner arithmetically. Lifetime options exist but are not selected or used to assume annual savings. |

Free content does not require choosing a commerce bundle. Monetisation is unchosen; payment gateways and regional checkout coverage are deferred. Hosting, editorial/search/bookmark components, implementation, support and maintenance are additional costs. Flattened feature-grid ticks were not interpreted as verified tier entitlement. No complete LMS-route licence total or engineering estimate can be derived from these documentation observations alone. The broader build plan may carry separately labelled planning assumptions for quotation.

## Application-owned rules and portability

Propose an explicit learning-record layer for rules that the inspected LMS documentation does not establish. The development team would own stable content/outcome/activity identities, assessment-version snapshots, attempt provenance, independent completion/pass/practice records, current applicability, review reasons, guest eligibility/expiry and recoverable import operations. The technical recommendation must decide storage and authority; browser-editable claims and anonymous retake cookies are not trusted prerequisites by default. This is a proposed responsibility boundary, not proof that suitable vendor hooks exist.

An LMS could supply course authoring, question delivery and account reporting while an integration projects authoritative results into its interface. That route requires mapping and lifecycle evidence: starting/submitting attempts, revisions during an attempt, retries, permission checks, deletion, export and upgrades. Alternatively, a larger application-owned assessment layer could avoid conflicting LMS progress semantics but increases maintenance, authoring and accessibility work. Neither route has been selected.

Self-hosting or a vendor claim of data ownership does not establish portability. S-32 documents Tutor-to-Tutor content JSON, settings and media; learner identities, immutable attempts, achievements, imports, bookmarks and editorial approvals are not explicitly established within that export scope. Importing settings can overwrite the receiving site's configuration; advanced course features require their add-ons. LearnDash/Lifter complete export routes remain unverified in this bounded pass.

The eventual handoff needs an export/restore inventory covering every conceptual record, stable-ID remapping, media, privacy/access rules and dependency links. Retain original assessment versions sufficiently to reproduce authorised attempt history and original-version grading after an update. LMS progress resets and optional LearnDash expiry deletion must not silently remove approved account history. French-ready identity must preserve the relationship to the assessed English/source version; plugin translation marketing does not establish equivalent achievements across languages.

## Verification and recommendation boundaries

Before component approval, obtain a requirement-level mapping of the critical integration surfaces, confirmed production-plus-staging licence terms and renewal quotations, and owners for custom rules, content review and maintenance. Do not downgrade approved guest access or retention merely to fit a plugin. If a credible route remains absent, return a bounded investigation or explicit scope option to the owner.

Later delivery must verify all 69 criteria, prioritising these failure scenarios:

1. Direct guest reading, explicit completion, graded check and mission eligibility work without registration; public caches do not mix private results.
2. High overall score with an essential mistake does not pass; O-04.2-only evidence does not unlock a gate requiring additional outcomes.
3. Questions change during an attempt: original-version grading/history survives while current applicability is explained; known essential errors stop being offered as valid current evidence.
4. Declined memory, reloads, glossary navigation, storage failure, expiry and clearing preserve the specified boundaries; article reading does not renew learning memory.
5. A/B account plus B/C guest reconciles once; weaker results preserve passes, interrupted retries create no duplicates, and declined import/bookmark authentication creates no silent learning import.
6. Cross-device saving shows confirmed/pending/failed accurately; another account cannot retrieve results through pages, search or supported interfaces.
7. Export/restore retains histories and permissions; an unapproved substantive update cannot replace approved public content; corrections identify affected versions/translations.
8. Actual quiz/mission/save/search controls meet keyboard, assistive-technology and media-failure requirements on the agreed devices and connection conditions.

At this checkpoint, compare the custom-work burden before selecting an LMS: LearnDash has clearer documented public access but an anonymous-completion gap; Lifter offers a free assessment base with paid/manual extensions and a resume constraint; Tutor exposes explicit grading/reset rules and Pro content portability but leaves complete guest evidence unresolved. The report supports a technical recommendation, not a vendor commitment or verified application feasibility.
