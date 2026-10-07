# Wetin Be Crypto — Research and Design Plan

Version: 0.2
Date: 7 October 2026
Status: Detailed process draft within the owner's approved planning-only research direction.
Platform: WordPress.

## Purpose and boundary

Define how we investigate the idea, turn evidence into product decisions, design the experience, and prepare a reviewable development-team handoff.

This engagement produces research, specifications, content examples, noncode designs, and technical recommendations. The planning assistant will not write product code, install/configure the application, produce a coded prototype, or deploy it when the plan becomes ready. Git/file tools may be used to manage and check the documentation.

Executing this plan means conducting its research and design activities. Product implementation is a separate development-team engagement. Approval of a document, visual direction, technical recommendation, or handoff does not trigger coding by the planning assistant.

The [Reviewer Brief](REVIEW-BRIEF.md) provides the independent-review entry point. The [Product Brief](PRODUCT-BRIEF.md) records approved product choices; the [Decision Log](DECISION-LOG.md) records authority and pending decisions.

## Existing baseline

Already prepared:

- Approved audience, purpose, learning direction, language, access, publishing model, guest-memory policy, bookmarks, and engagement boundary.
- Public-source desk research across comparables, teaching methods, regional context, official crypto guidance, and WordPress/LMS documentation.
- Draft foundation outcomes and learner/reader journeys.
- Draft feature behaviours and 69 future acceptance criteria.
- A focused current-source pass, a 32-lesson inventory and 43-topic living map, representative lesson/check/mission/article content, a voice/editorial guide, and a learner-review protocol.

Still outstanding: direct learner evidence, qualified subject and language review, full assessment banks and approved rubrics/gates, reviewed first-release scope, information architecture and screen designs, visual selection, design validation, editorial capacity, detailed component/cost evaluation, and final handoff approval.

## Progress at this checkpoint

This table records prepared artifacts and remaining work; it is not a phase approval record. The package is not ready for development handoff.

| Phase | Prepared | Remaining |
| --- | --- | --- |
| P-00 | Shared GitHub baseline and reviewer entry point. | Independent review and named-version sign-off. |
| P-01 | [Focused findings](RESEARCH-FINDINGS.md), dated sources, and [coverage map](CURRICULUM-COVERAGE.md). | Direct learner evidence, broader country/comparative gaps, and approved initial coverage. |
| P-02 | [Representative content/rubrics](CONTENT-DESIGN-SAMPLES.md), 32 proposed lessons, and [voice/editorial guide](VOICE-AND-EDITORIAL-GUIDE.md). | Full assessment banks, qualified subject/voice review, learner comprehension, approved criteria/gates, and workload estimates. |
| P-03 | Journey and feature baseline. | Page relationships, annotated screen states, and noncode task flows. |
| P-04 | Planned three-direction visual process. | Inspected visual references, concept generation, selection, and refinements. |
| P-05 | [Learner research guide](LEARNER-RESEARCH-GUIDE.md) with nine task reviews. | Owner-arranged access, actual sessions, design checks, findings, and revisions. |
| P-06 | Documentation-level WordPress capability/gap baseline. | Current candidate comparison, recommendations, costs, ownership, and future verification matrix. |
| P-07 | Handoff criteria defined. | Reconciled and reviewed package, named owners, and approval/conditions. |

## Research questions and evidence plan

| ID | Question | Method and sources | Decision it informs |
| --- | --- | --- | --- |
| RQ-01 | Which practical situations and misunderstandings should anchor learning? | Existing regional research; beginner/existing-user interviews or supplied feedback; task walkthroughs. | Priority learner situations, example selection, first-release outcomes. |
| RQ-02 | How do needs differ across West Africa and the wider audience? | Country-labelled official/payment sources; connectivity research; learner accounts with country/context recorded. | Initial country coverage, units, payment examples, language and access assumptions. |
| RQ-03 | Which crypto concepts must be taught now, later, and kept under review? | Official protocol/project documentation; independent corroboration; evolving topic map. | Foundation boundaries, specialist tracks, essential checks, update triggers. |
| RQ-04 | What helps learners understand and retain useful decisions? | Educational research; competitor lesson patterns; comprehension and practice reviews. | Lesson structure, feedback, rubrics, review policy, experienced entry. |
| RQ-05 | How can news and evergreen learning support each other? | BabyPips and crypto publishers/academies; public editorial policies; reader discovery tasks. | Article formats, hubs, search, sources, learning links, publishing capacity. |
| RQ-06 | Does the proposed voice feel natural and understandable? | Fluent Nigerian review; beginner and non-Nigerian comprehension checks on actual examples. | Pidgin use, clarity, humour, sensitive-content voice. |
| RQ-07 | Can learners understand the journey and saving rules? | Noncode task walkthroughs: guest, new account, existing account, expiry, failed save, prerequisites. | Navigation, progress labels, account prompts, reconciliation states. |
| RQ-08 | Which WordPress components fit the complete workflows? | Current official docs, release/support information, dated pricing, relevant issue reports, and requirement matrix. | Component recommendations, custom/integration scope, costs, maintenance, future tests. |
| RQ-09 | What does sustained content production require? | Proposed article backlog, update frequency by content risk, role/workload estimates, owner capacity discussion. | Editorial staffing, cadence, maintenance ownership, sustainable scope. |

The initial country/sample choices remain proposals. Nigeria and Ghana are sensible starting comparisons; research should include other West African contexts and a wider-African comparison when access permits. This does not set the product's supported-country list.

## Research protocol

1. Start each workstream with a question, the decision at stake, current evidence, and the specific gap.
2. Use the most direct sources available. Official protocol and regulator material establish mechanics or jurisdictional context; educational research informs teaching; actual product capture establishes observed UX; learner sessions establish observed comprehension.
3. Use Firecrawl for relevant public search/extraction. For visual comparison, inspect actual pages/screenshots through available browser tools. A text scrape cannot establish visual or logged-in behaviour.
4. Record source URL, publisher, publication/update date where available, inspection date when actually checked, applicable country/product version, relevant finding, and limitations. Mark inaccessible sources and use documented alternatives.
5. Separate a sourced observation, our inference, an approved owner policy, a proposed requirement, and an unknown. Competitor patterns and adoption statistics do not establish demand for this application.
6. Prefer corroborated signals. A complaint or forum anecdote can suggest a research question; it does not establish how common the problem is. Do not infer frequencies without suitable evidence.
7. Turn findings into recommendations linked to RQ IDs, decisions, feature IDs, and affected journeys. Compare plausible alternatives and their tradeoffs.
8. Bring material direction or scope changes to the owner for review. Keep approved decisions in place until a replacement is explicitly approved.
9. Refresh time-sensitive material before it enters the final package: country guidance, asset mechanics, current product support, pricing, and news examples.

The [Evidence Register](EVIDENCE-REGISTER.md) holds the baseline and gaps. Add detailed findings and source records as the next research passes occur; do not backfill fictional interviews, inspection dates, or application tests.

## Learner research and access

Prepare an interview guide and a task-based design-review guide before sessions. A proposed first qualitative round is six to eight learners spanning beginners, practical users, and existing users; adjust recruitment to the approved scope and available access. Include non-Nigerian readers when reviewing Pidgin comprehension. This small round finds design problems and does not measure population prevalence.

Ask about actual recent situations, words the learner found confusing, decision-making, devices/connectivity, and expectations about saving. Test examples and tasks rather than ask only whether the idea sounds attractive.

The owner supplies or arranges participant access. Record participant context and anonymised observations when sessions occur. If access is unavailable, prepare the guides, perform expert walkthroughs, and record direct learner validation as not conducted. Reviewers must see the resulting confidence limit.

## Phases, outputs, and review points

### P-00 — Establish the shared planning baseline

**Work:** consolidate decisions, distinguish drafts from approvals, establish the GitHub package, and give reviewers a concise entry point.

**Outputs:** README, Reviewer Brief, this process plan, Product Brief, Curriculum and Journeys, Feature Specification, Evidence Register, Decision Log, and Changelog.

**Review point:** confirm the intended research/design engagement, proposed scope, remaining questions, and reviewer responsibilities. The broad research direction is already approved; this breakdown provides concrete details for review.

### P-01 — Focus the next research pass

**Work:** address RQ-01 to RQ-06 and RQ-09 through targeted source review, comparative analysis, and available learner input. Examine how BabyPips structures learning, examples, tools, progress, and editorial connections; use it as a reference while developing original curriculum and design.

Maintain a crypto coverage map: foundations, everyday use, wallets/custody, networks/scaling, markets, DeFi, building/security, wider applications, regional rules, and emerging subjects. Mark foundation, later-track, reference-only, and unresolved coverage. Expand the map as evidence warrants rather than promise every asset or specialist topic at launch.

**Outputs:** prioritised learner situations, comparative findings, regional example recommendations, updated evidence/assumption records, topic coverage map, and a proposed first-release content boundary.

**Review point:** approve material refinements to audience emphasis, learning outcomes, initial country/asset coverage, and content scope. Record unresolved access gaps.

### P-02 — Design content and assessments

**Work:** refine the eight-module curriculum and produce representative actual content: a foundational lesson, knowledge check, mission, glossary entry, evergreen explainer, sourced news summary, and asset/topic introduction.

Map every example assessment to observable outcomes. Define essential decisions, acceptable responses/rationale, feedback, retry variants, nonessential scoring if needed, and version/change rules. Determine review timing from the actual content and evidence rather than assume a universal percentage or schedule.

Write English/Pidgin voice guidance using actual content batches. Check naturalness, repetition, non-Nigerian comprehension, and serious-reporting tone. Specify source review, verification/update dates, dependencies, and correction responsibilities. Estimate the editorial work implied by a realistic initial backlog.

**Outputs:** lesson/content inventory, representative copy, assessment/rubric examples, voice/editorial guide, source-dependency examples, and proposed publishing capacity/cadence.

**Review point:** approve the teaching examples, essential assessment policy, voice, and feasible editorial scope before expanding them across the foundation.

### P-03 — Design information architecture and interactions

**Work:** translate journeys and FS-01 to FS-12 into a content-relationship map, navigation, page inventory, wireframes, and annotated screen states. Use consistent canonical asset/topic identities and distinguish country applicability from incidental mentions.

Cover at least:

- Foundation entry, lesson/glossary reading, checks, feedback, retries, prerequisites, and mission results.
- My Journey, experienced entry, historical results, current review, and changed curriculum totals.
- Guest memory opt-in/clearing/expiry, account entry, new-account saving, existing-account import choice, interrupted import, and save failure.
- Article browsing/detail, hubs, search/empty results, bookmarking, and withdrawn articles.
- Editorial drafting, review, approval, substantive updates, corrections, and affected-content review.

**Outputs:** page/content map, main-flow wireframes, and state specifications linked to journey and feature IDs. No HTML, CSS, JavaScript, PHP, database migrations, or application scaffold is produced.

**Review point:** check whether learners/readers can understand the proposed paths and whether important exceptions have clear outcomes. Approve material changes to feature behaviour.

### P-04 — Explore and refine visual design

**Work:** confirm the primary screen/flow and intended outcome, inspect relevant visual references, then use Product Design and ImageGen to explore three independently generated screen concepts. Vary hierarchy and layout within the approved product direction; ground concepts in inspected references and representative copy. Present them for owner selection before refinement. A selected visual direction authorises further design work.

Refine the chosen direction into mobile and desktop layouts, type/spacing/colour rules, reusable components, state examples, and real representative copy. Design the reading experience, practice feedback, progress, and articles consistently. Use static screen designs or a design-tool clickthrough if useful and accessible.

**Outputs:** concept images, selection record, refined screen designs, component/state guide, annotated responsive behaviour, and assets prepared for handoff.

**Review point:** select and approve the visual direction and subsequent refinements. Do not route selection into a coded prototype or implementation workflow.

### P-05 — Validate and revise the designs

**Work:** run available task-based learner reviews and editorial walkthroughs using noncode artifacts. Ask learners to locate a suitable starting lesson, interpret feedback, identify a transfer incompatibility, understand progress categories, choose saving/import behaviour, and move from an article to useful learning.

Record task outcome, misunderstanding, context, severity, observation versus inference, and proposed revision. A critical misunderstanding of an essential decision prompts content/interaction revision and another review where possible. Assess keyboard/focus plans, reading order, labels, colour-independent states, media alternatives, and text clarity at design level.

**Outputs:** validation findings, revised designs/copy, traceable changes, unresolved limitations, and the future accessibility/performance test plan.

**Review point:** agree that observed material problems have been addressed or explicitly identify the remaining condition and owner. Static/design-tool reviews do not establish working keyboard behaviour, save reliability, load performance, or WCAG conformance in an application.

### P-06 — Prepare the WordPress technical recommendation

**Work:** evaluate components against the full requirements, especially guest prerequisites/memory/import, activity versioning, approved published updates, combined discovery, and canonical content identities.

Start with WordPress core plus documented LMS candidates such as LearnDash, LifterLMS, and Tutor LMS. Add editorial, search, bookmark, and future multilingual candidates only where a requirement needs them. These names are a research shortlist, not component selections.

For each candidate record:

- Product/version and dated source URL; required licence tier/add-ons and price assumptions.
- Requirement coverage classified as documented, inferred, dependent on integration/custom work, or unknown.
- Compatibility assumptions, content/record ownership, export/portability, update support, maintenance responsibilities, and recurring costs.
- The application test a development team must perform to establish the complete workflow.

Specify the proposed content/data relationships, assessment-version and applicability rules, guest record validation and expiry, learning actions that refresh retention, import reconciliation/recovery, search visibility, account ownership, editorial approval boundaries, and translation identity. Propose representative devices/connectivity and measurable performance targets for approval.

Compare viable approaches and document tradeoffs, cost ranges, assumptions, sequencing, and ownership. If a critical requirement lacks a credible route, propose further investigation or a scope option for owner review; do not silently drop approved policy. Do not install components, run coded experiments, or claim an integration is proven.

**Outputs:** technical recommendation, requirement-to-component matrix, conceptual content/data model, operating-cost/effort assumptions, maintenance plan, and future verification scenarios.

**Review point:** approve the recommended architecture/components and any scope/budget tradeoffs. Documentation-level feasibility remains distinct from application proof.

### P-07 — Assemble and review the handoff

**Work:** reconcile the package, resolve contradictions, record conditions, and map evidence → approved decisions → curriculum/journeys → features → design states → proposed components → future verification.

**Outputs:** versioned handoff index, current Reviewer Brief, reviewed scope, content/rubric examples, selected noncode designs/assets, technical recommendations and estimates, prioritised development backlog, future validation plan, and final decision/open-issue records.

**Review point:** independent reviewer and owner approve named versions or record requested changes/conditions. Each material unknown has an owner, effect on the plan, and proposed resolution. A package with unresolved critical choices is a conditional planning handoff rather than a fully settled development brief.

When accepted, the planning assistant explains the package and answers review questions. The owner decides whether and when to commission a development team. The assistant continues documentation/design support when requested and does not begin coding automatically.

## Approval and change control

Approved product choices are constraints; draft behaviours and design/technical recommendations remain proposals. A reviewer records the artifact/version, scope reviewed, name/role, date, decision, and conditions. Do not invent independent approval, treat a Git merge as product sign-off, or mark an elapsed unanswered question as approval.

Ask focused questions at material decisions and keep interactive questions open until answered. Continue independent work while waiting; pause only work that depends on the missing decision. Routine reversible documentation updates and already authorised GitHub publication do not need repeated permission.

Use focused agents for independent learner, curriculum, or WordPress reviews when useful. The primary agent checks sources, resolves contradictions, and owns the combined recommendation. An agent's confidence is not a substitute for evidence or owner approval.

## GitHub publication procedure

Repository: [Gerrard-Studio-Venturis/wetin-be-crypto](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto).

1. Inspect the current branch, repository instructions, and changed files. Preserve others' work.
2. Make a coherent documentation update: a research synthesis, specification revision, design/validation result, or handoff change.
3. Update affected cross-references, Reviewer Brief, Evidence Register, Decision Log, document versions/statuses, and Changelog as needed.
4. Check Markdown links, identifiers, consistency, source/approval claims, and the planning-only scope. Application tests remain not executed.
5. Commit and publish the checkpoint to GitHub. Report the branch/commit or review link after a successful write; if publication fails, state the actual blocker and retain the local documents.
6. Use a documentation branch/pull request for reviewable proposed changes unless the owner or repository policy sets another workflow. Reuse the active review branch for coherent updates; do not force-push or merge an approval-sensitive proposal automatically.

The empty repository's initial scope commit establishes `main`; the full package is proposed on `docs/research-design-plan`. Regular publication means meaningful checkpoints during active work. It does not create a background schedule or promise changes while the assistant is idle.

## Handoff readiness checklist

- Named reviewer/owner decisions identify accepted versions and conditions.
- First-release and later scope are explicit; essential unknowns have an owner and resolution path.
- Evidence, assumptions, learner-validation status, and source freshness are visible.
- Curriculum, representative content, essential-decision rubrics, and editorial capacity are reviewable.
- Main journeys, exceptions, mobile/desktop designs, and reusable component states are defined.
- WordPress recommendations explain requirement coverage, data ownership, dependencies, costs, portability, and maintenance.
- Future application/accessibility/performance verification is specified and clearly not executed.
- Traceability links and the reviewer summary agree with the detailed package.
- GitHub contains the current reviewed package and change history.
- The development-team handoff preserves the assistant's research/design-only engagement boundary.
