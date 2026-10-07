# Crypto Learning Application — Feature Specification

Version: 0.4
Date: 7 October 2026
Status: Draft for review.
Platform: WordPress.
Stage: Research, planning, and functional specifications. Visual design is excluded under D-15. Application coding is outside the planning assistant's engagement, including after handoff readiness.

Related documents: [Product Brief](PRODUCT-BRIEF.md), [Curriculum and Journeys](CURRICULUM-AND-JOURNEYS.md).

## Purpose and authority

This document translates the approved product direction into observable behaviour, important exceptions, and acceptance criteria.

Product decisions D-01 to D-15 in the brief are approved. Detailed requirements here are draft recommendations. Acceptance criteria describe future validation; they do not claim that an application or plugin has been tested.

The first release supports the foundation and public publication. Existing LMS and WordPress features are candidates to fulfil these requirements. Guest continuity, versioned assessment evidence, account reconciliation, combined hubs/search, and editorial controls require further integration evaluation.

The [Curriculum Coverage](CURRICULUM-COVERAGE.md) and [Content Design Samples](CONTENT-DESIGN-SAMPLES.md) illustrate FS-02/03/04/07/08/11/12. The current KC-04/PM-04 samples assess O-04.2 only; they do not supply full M-04 credit or satisfy the full proposed PM-04 gate. [Learner Research Guide](LEARNER-RESEARCH-GUIDE.md) prepares content/workflow review. Application criteria remain unexecuted.

[Information Architecture](INFORMATION-ARCHITECTURE.md) and [Functional Flows](FUNCTIONAL-FLOWS.md) map pages, actions, exceptional states, and records to these requirements. This revision records D-15 and adds functional traceability; the same twelve feature groups and 69 acceptance criteria remain. Accessibility, voice, and lightweight-use requirements still apply to later delivery despite removal of visual-design production.

## Actors

- Guest learner or reader: reads public content and uses eligible checks/practice.
- Account learner or reader: saves a cross-device journey and article bookmarks.
- Writer: prepares lessons or articles.
- Crypto/source reviewer: checks relevant claims, mechanics, sources, and context.
- Publishing editor: approves publication, updates, corrections, and voice.
- Administrator: manages the platform and access.

These are responsibilities. Exact WordPress roles and whether one person holds several editorial responsibilities are technical and staffing decisions.

## Common definitions

- A lesson is structured learning content with stated outcomes.
- A check assesses published outcomes against published criteria.
- A challenge is an approved alternative assessment that can demonstrate mapped outcomes without requiring lesson reading.
- A mission is a fictional practical scenario assessed against a rubric.
- A lesson-completion record is an explicit learner action.
- An achievement is a passed check or demonstrated practice tied to an activity version.
- Review recommended is an advisory state. Selected current practice can have a separately declared prerequisite requirement.
- An article is public News, an Explainer, or a Story. Article activity does not award lesson completion or assessment credit.
- An asset is a canonically identified coin/token or relevant representation. A ticker alone is not a unique identity.
- A topic connects related lessons, articles, missions, glossary entries, and tools.
- A current visit supports temporary guest activity through normal navigation and reloads. Device memory, if enabled, extends eligible progress across visits in that browser.

## FS-01 — Discover and enter learning

### Required behaviour

- Guests can discover the foundation, published modules, lessons, and available tracks.
- Each path shows its intended level, outcomes, recommended order, and available activities.
- Each lesson states its learning outcome and recommended preparation.
- A learner can begin with the foundation or take an available diagnostic/challenge.
- Recommendations identify the relevant gap or next step; self-declared experience does not award achievement.
- Core lesson access remains open even when a related mission has unmet prerequisites.

### Acceptance criteria

- AC-01.1: A new guest opens a later foundation lesson directly and can read its core content without an account or completed prior module.
- AC-01.2: The lesson shows its outcome, suggested preparation, and a useful next learning action.
- AC-01.3: Selecting an available challenge identifies its assessed outcomes and criteria before starting.
- AC-01.4: A passing challenge satisfies only its mapped outcomes; unread lessons retain their unread state.

## FS-02 — Read and complete lessons

### Required behaviour

- Lessons provide core explanations as readable text, with optional supporting media and appropriate alternatives.
- Terms can link to understandable glossary definitions.
- Published glossary entries are public and explain the term in clear English, with a useful example and related learning where appropriate.
- Lessons include worked examples and relevant learning links.
- Completion requires an explicit learner action.
- Resume position and lesson completion are separate.
- Repeating completion does not create duplicate completion credit.
- Pidgin and humour preserve the essential meaning of the lesson.

### Acceptance criteria

- AC-02.1: With video disabled, a learner can still understand the core explanation and required instructions.
- AC-02.2: Scrolling to the bottom or leaving a lesson open does not automatically mark it complete.
- AC-02.3: Marking one lesson complete twice increases the relevant completion count once.
- AC-02.4: Completing a lesson does not automatically pass its check or demonstrate its mission.
- AC-02.5: A guest follows a glossary link, reads the definition without registering, and can return to the lesson without losing available progress.

## FS-03 — Knowledge checks and challenges

### Required behaviour

- Each assessment identifies its outcomes, version, pass criteria, and designated essential decisions before the attempt.
- Ordinary scoring thresholds are configurable from approved assessment design; there is no assumed universal percentage.
- Essential decisions must be satisfied even when the total score would otherwise pass.
- Submitted attempts receive a result and explanatory feedback, with useful links to relevant material.
- Failed attempts can be retried. Meaningful variants are used where supported by the question set.
- Attempts and existing passes are separate records.
- A later unsuccessful attempt can recommend review without deleting an earlier pass.
- If an attempt uses an older version, grade it against that version and clearly identify whether it satisfies current requirements.

### Acceptance criteria

- AC-03.1: A learner who answers a designated recovery-safety question incorrectly cannot pass by accumulating unrelated correct answers.
- AC-03.2: An incompatible-network answer receives feedback explaining receiving-route compatibility and a relevant revision link.
- AC-03.3: A failed review attempt leaves an earlier pass visible with its version and shows the review recommendation.
- AC-03.4: Publishing replacement questions during an attempt does not grade the submitted answers against the new question set.
- AC-03.5: An assessment with missing criteria or an unapproved question set is not offered as a current scored activity; related lessons remain readable.

## FS-04 — Practical missions and prerequisites

### Required behaviour

- Missions identify the simulated task, outcomes, rubric, and any prerequisite checks or equivalent challenges.
- Required prerequisites are demonstrated outcomes, not merely page visits or reading completion.
- Guests can satisfy available checks and start eligible missions during a visit. Account registration is not an additional mission prerequisite.
- An unmet prerequisite identifies what is missing and provides a direct route to satisfying it.
- Missions use fictional data and deliberately invalid secret placeholders.
- Foundation missions require no real funds, valid recovery phrase, real wallet connection, or proof of ownership.
- Award practice demonstrated only when the mission rubric is satisfied, including every essential decision.
- Mistakes receive explanatory feedback, revision options, and a retry.

### Acceptance criteria

- AC-04.1: A guest passes a required network check and starts the associated mission without registering.
- AC-04.2: A guest without that check sees its name and a direct action to attempt it, while the related lesson remains open.
- AC-04.3: Correct cost arithmetic cannot compensate for authorising a transfer on an unsupported receiving route when compatibility is essential.
- AC-04.4: A mission asks learners to inspect fictional instructions rather than enter real credentials or recovery material.
- AC-04.5: If a required guest record has expired or been cleared, the interface explains the missing evidence and offers the check without claiming that it was saved.

## FS-05 — My Journey, progress, and resume

### Required behaviour

- Show lesson completion, check passes, practice demonstrated, and review recommendations distinctly.
- Provide the last activity and a useful next step, based on the selected path and relevant requirements.
- A learner can continue an unfinished activity, take a recommended next step, or revisit prior material.
- A challenge can satisfy mapped requirements while leaving reading completion unchanged.
- Completion counts use unique applicable lesson records; repeated actions and repeated imports do not inflate them.
- Added requirements or revised applicability explain changes to current totals.
- Preserve historical achievements against their assessed version.
- A save operation distinguishes confirmed saving, pending saving, and failure.
- Saved account results are accessible only to the relevant authenticated account. Guests can inspect their own available current-device progress.

### Acceptance criteria

- AC-05.1: A learner who completed two lessons and passed one check sees the separate records accurately.
- AC-05.2: Reading a stablecoin article can suggest a foundation lesson but does not change its completion or assessment status.
- AC-05.3: A learner saves progress, signs out, and signs into the same account on another device; confirmed saved progress is available.
- AC-05.4: A save failure shows an actionable status and preserves recoverable current work; it does not display a false saved confirmation.
- AC-05.5: A material curriculum addition explains the new requirement without silently deleting previous achievements.
- AC-05.6: One learner cannot access another learner's results through search, account navigation, or a supported data interface.

## FS-06 — Guest memory, accounts, and reconciliation

### Approved policy

Guests may opt into “Remember my progress on this device.” Eligible guest progress lasts 30 days after the last learning activity. Account saving supports continuity across devices.

### Required behaviour

- Without device memory, preserve temporary progress through ordinary navigation and reloads within the current visit.
- Explain device memory before enabling it, including expiry and the possibility that clearing browser storage removes it sooner.
- Offer a clear way to remove remembered guest progress.
- Learning activity refreshes the retention period. Ordinary article browsing does not.
- Account creation, sign-in, and recovery return the user to the intended content or activity where possible.
- Creating an account through Save my progress carries applicable guest activity into that new account.
- Signing into an existing account offers a choice to add current-device guest results or keep the saved account records unchanged.
- Eligible imported records are reconciled, not blindly substituted for account history.
- Count each completed lesson once. Retain distinct valid assessment attempts without replacing an existing pass with a weaker attempt.
- Repeating or recovering an import does not duplicate completion or attempts.
- Failed account actions leave public content accessible and preserve available guest work.

### Acceptance criteria

- AC-06.1: A guest declines device memory, continues learning during the visit, and receives no claim of future cross-visit saving.
- AC-06.2: A guest opts in and returns in the same browser within the retention period; applicable remembered progress is available.
- AC-06.3: After expiry, remembered guest learning records no longer grant current prerequisites. The interface offers restarting the relevant check or signing in to an account with saved records.
- AC-06.4: Clearing remembered progress removes guest records without altering confirmed account history.
- AC-06.5: A guest chooses Save my progress, registers successfully, and returns to the activity with applicable progress saved.
- AC-06.6: An account completed lessons A and B; a guest completed B and C. Import produces three completed lessons, not four.
- AC-06.7: A weaker guest result remains an attempt and does not erase an existing pass.
- AC-06.8: Declining an import changes no existing account records. Retrying an interrupted import does not duplicate records.
- AC-06.9: Unavailable browser storage is explained; the learner can continue the current activity and choose account saving.

### Technical decisions still open

The technical plan will specify the storage mechanism, record validation, qualifying learning actions, visit boundary, expiry processing, save/import recovery, and validation scenarios. Application behaviour remains unverified until a separately commissioned development team implements and tests it.

## FS-07 — Public News & Articles

### Required behaviour

- Offer All, News, Explainers, and Stories, with relevant subject and regional discovery.
- Cards show a title, format, concise description, meaningful date, and primary subject.
- News publication dates and evergreen verification dates have distinct labels.
- Core article content is public and readable without a lesson, quiz, enrolment, or account.
- Original explainers/stories provide authorship and appropriate sources.
- News summaries identify source publications and link to supporting material.
- Distinguish established facts, attributed claims, and editorial interpretation.
- Show publication date, material update date when applicable, sources, and material correction notes.
- Article relationships lead to relevant coins/topics, reading, and optional learning.
- Publication frequency follows the later editorial-capacity decision.

### Acceptance criteria

- AC-07.1: A guest reads a full news summary, follows its source link, visits a relevant topic hub, and opens a lesson without registration.
- AC-07.2: An article remains understandable without requiring completion of linked lessons.
- AC-07.3: Filtering News excludes Explainers and Stories while preserving a clear selected state.
- AC-07.4: Editing punctuation does not make old reporting appear newly published or newly verified.
- AC-07.5: A material factual correction states what changed and when, while retaining publication history.
- AC-07.6: Reading or saving an article changes no curriculum completion, pass, or mission record.

## FS-08 — Coin and topic hubs

### Required behaviour

- Each published hub has a reviewed introduction, useful context, limitations/risks, sources, and a verification date.
- Gather relevant articles, lessons, missions, glossary entries, and available tools.
- Use canonical names and curated aliases for discovery.
- Asset identity accounts for relevant project/issuer, network, and representation; matching tickers or names do not imply equivalence.
- Region labels identify material applicability rather than every incidental country mention.
- Present introductory learning and recent coverage clearly.
- Only publish hubs with sufficient reviewed content; coverage grows as material is developed.

### Acceptance criteria

- AC-08.1: The Bitcoin hub provides introductory context, a relevant lesson, and current published coverage.
- AC-08.2: A Bitcoin announcement appears in News and on the Bitcoin hub without creating duplicate article records.
- AC-08.3: An ambiguous ticker query identifies the relevant alternatives rather than silently selecting the wrong asset.
- AC-08.4: Distinct assets or token representations with similar names do not silently share an identity.
- AC-08.5: A hub with no current news still offers its reviewed introduction and available learning without an empty-content dead end.

## FS-09 — Unified public search and discovery

### Required behaviour

- Search published public lessons, articles, hubs, glossary entries, tools, and discoverable missions.
- Results label their content type and provide meaningful snippets.
- Support maintained aliases such as Bitcoin and BTC.
- Type and relevant subject filters refine results with clear labels and selection states.
- An empty result offers a broader search or related published topics without inventing an answer.
- Exclude private learner records, drafts, private review notes, and unpublished source records.
- A discovered gated mission states its unmet prerequisite and links to the corresponding check.

### Acceptance criteria

- AC-09.1: Searching wallet returns relevant published content with distinguishable Lesson, Explainer, Glossary, and Practice labels.
- AC-09.2: A maintained alias reaches the same canonical subject as its full name.
- AC-09.3: Search reveals no draft article or another learner's results.
- AC-09.4: Filters and result links work with keyboard navigation and expose meaningful labels to assistive technology.
- AC-09.5: Opening a gated practice result gives a useful prerequisite route rather than an unexplained failure.

## FS-10 — Account article bookmarks

### Approved scope

Simple account-only Save, Unsave, and one Saved Articles list are included in the first release.

### Required behaviour

- A signed-in reader can save or unsave a published article.
- Repeated Save actions retain one bookmark.
- Saved Articles is private to the account and available across devices.
- Bookmarks reference the article so its current title, correction, and update remain accessible.
- A guest who selects Save receives an account option; successful sign-in/registration returns to the intended article and completes the requested save.
- Failed account or save actions do not falsely show the article as saved.
- An unpublished or withdrawn bookmarked article has an understandable unavailable state rather than an exposed draft.

### Acceptance criteria

- AC-10.1: Saving an article twice produces one list entry.
- AC-10.2: Unsave removes the bookmark without changing the article or curriculum records.
- AC-10.3: A reader signs in on another device and sees the saved article.
- AC-10.4: A guest's successful account action returns them to the requested article with the save confirmed.
- AC-10.5: A withdrawn article remains an identifiable unavailable bookmark until the reader removes it, without exposing private content.
- AC-10.6: A failed save remains visibly unresolved and provides a retry.

## FS-11 — Editorial review, corrections, and versions

### Required behaviour

- Writers prepare drafts with required sources and subject relationships.
- Record crypto/source review and publishing-editor approval for the specific content revision.
- Changes to material claims after approval require renewed relevant review.
- Publication or scheduling follows approval. Missing required sources or review preserves the draft but prevents publication through the agreed workflow.
- A substantive proposed change to published material remains in review while the approved version stays readable.
- Material factual corrections show what changed and when; internal records include the reason and supporting source.
- Source and dependency records identify affected lessons, assessment versions, hubs, and translations.
- Confirmed errors in essential teaching or assessment cause affected current activity to be paused or corrected before it is offered as valid evidence.
- Preserve earlier attempts against their version; explain any focused prerequisite refresh.
- Prepare canonical content identity, language, source version, and translation-review relationships for later French publication.
- The emergency-correction process requires editor authority, a reason, an audit record, and subsequent review.

### Acceptance criteria

- AC-11.1: A submitted draft missing a required source remains a draft and cannot be published through the agreed writer workflow.
- AC-11.2: Changing a material approved claim invalidates the relevant approval for that revision.
- AC-11.3: An unapproved substantive update does not replace the approved public article.
- AC-11.4: Correcting a network instruction identifies affected learning/assessment dependencies; a known incorrect question stops being offered as current evidence.
- AC-11.5: Existing attempts remain tied to their original version, with a current refresh clearly identified where required.
- AC-11.6: A material English correction flags an affected French translation for review when translations are introduced.
- AC-11.7: A spelling-only edit does not reset publication, verification, or assessment applicability dates.

### Enforcement boundary

WordPress roles, revisions, and Pending Review provide a foundation. They do not by themselves establish multiple approvals, revision-specific sign-off, review of published updates, or public correction logs. The enforcement mechanism and role capabilities must be selected and verified later.

## FS-12 — Accessibility, lightweight use, and voice

### Required behaviour

- Target WCAG 2.2 AA for the learner-facing experience, with later verification across the selected theme, LMS, content, and custom activities.
- Public explanations remain usable as text when optional media is unavailable.
- Media does not autoplay; captions, transcripts, descriptions, or an equivalent alternative are supplied as appropriate.
- Required controls support keyboard use, clear labels, visible focus, and assistive technology.
- Colour alone does not identify content type, correctness, save status, or selection.
- Core concepts and numerical exercises use clear units and understandable explanations.
- English carries essential meaning. Pidgin is occasional, natural, contextual, and reviewed across content for repetition.
- Serious reporting and corrections use direct language.
- Prepare French content relationships without assuming that WordPress supplies translation management automatically.

### Acceptance criteria

- AC-12.1: A reader with video disabled can use the core lesson and follow its required instructions.
- AC-12.2: A learner can navigate filters, answer an available check, inspect feedback, and save progress using the keyboard.
- AC-12.3: Correct/incorrect and saved/pending/failed states remain understandable without their colours.
- AC-12.4: Removing a Pidgin aside removes no required definition, instruction, or explanation.
- AC-12.5: Editorial review checks a batch of lessons/articles for repeated stock openings and closings and includes fluent Nigerian review plus comprehension checks outside Nigeria.
- AC-12.6: Optional media failure does not make a core page unreadable or prevent an unrelated learning action.

### Budgets still open

Representative devices, connectivity conditions, page/media budgets, and measurable load/save targets will be established in the technical plan rather than assumed here.

## Logical records to support the behaviour

This is a conceptual model, not a selected database design.

| Record | Required information |
| --- | --- |
| Curriculum path/module | Stable identity, outcomes, available lessons/activities, edition, recommended order. |
| Lesson | Stable identity, content version, outcomes, prerequisites, reviewed sources, applicable region, language identity. |
| Assessment/mission version | Stable activity identity, outcomes, criteria/rubric, essential decisions, prerequisite mappings, applicability. |
| Attempt | Learner or valid guest identity, attempt identity, activity version, responses/outcome, timestamps, saving status. |
| Completion/achievement | Applicable content/outcome identity, version, evidence provenance, achieved date, current applicability. |
| Review recommendation | Affected outcome, reason, triggering change or attempt, suggested action. |
| Article | Format, author/review responsibility, sources, publication/event/update context, correction history, subject relationships. |
| Asset/topic | Canonical identity, aliases, reviewed introduction, relationships, sources, verification date. |
| Bookmark | Account identity, article identity, saved date, availability state. |
| Import operation | Account, eligible guest records, operation identity, reconciliation result and recovery status. |
| Editorial revision | Content version, source/reviewer/approval records, publication state, dependencies, correction reason. |

Article-reading activity is not required for curriculum scoring. Saved article records are separate from learning records.

## WordPress capability and verification map

| Area | Expected route | Later proof required |
| --- | --- | --- |
| Public posts, basic authoring, accounts | WordPress core. | Role configuration and reader/account journeys. |
| Lessons, quizzes, course progress | Selected LMS configuration. | Public access, guest assessment, retry rules, reporting, and accessibility. |
| Guest memory and account reconciliation | Integration or custom work. | Record validation, expiry, interrupted import, deduplication, and existing-account preservation. |
| Versioned skills and selected practice prerequisites | Integration or custom work. | Version-specific grading, current applicability, challenge mappings, and guest behaviour. |
| Shared asset/topic hubs and combined search | Taxonomy/metadata/search configuration or integration. | LMS associations, aliases, ambiguity, filters, relevance, and private-content exclusion. |
| Source/reviewer/correction/approval records | Editorial fields and workflow configuration or extension. | Approved-revision enforcement, published-update review, correction display, and dependency handling. |
| Article bookmarks | Plugin or extension. | Account ownership, cross-device saving, duplicate protection, and withdrawn-content behaviour. |
| French-ready content | Canonical identities now; future multilingual integration. | Translation versioning and progress continuity when switching languages. |

No LMS, editorial, search, bookmark, or multilingual component is selected. Documentation supports evaluation rather than verified application behaviour.

Relevant evaluation references:

- [LearnDash public enrolment and progress](https://docs.nexcess.com/software/learndash/course-enrollment-mode/)
- [LifterLMS quizzes](https://lifterlms.com/docs/lifterlms-quizzes-overview/)
- [Tutor LMS settings](https://tutorlms.com/docs/settings/course-settings/)
- [WordPress roles and capabilities](https://wordpress.org/documentation/article/roles-and-capabilities/)
- [WordPress publication settings](https://wordpress.org/documentation/article/page-post-settings-sidebar/)
- [WordPress revisions](https://wordpress.org/documentation/article/revisions/)
- [WordPress categories](https://wordpress.org/documentation/article/posts-categories-screen/)
- [WordPress shared taxonomies](https://developer.wordpress.org/reference/functions/register_taxonomy/)
- [WordPress multilingual documentation](https://developer.wordpress.org/advanced-administration/wordpress/multilingual/)
- [W3C accessibility principles](https://www.w3.org/WAI/fundamentals/accessibility-principles/)
- [W3C clear and understandable content](https://www.w3.org/WAI/WCAG2/supplemental/objectives/o3-clear-content/)
- [CoinDesk editorial policy](https://www.coindesk.com/ethics)

## Open decisions for functional and technical planning

1. Assessment question sets, ordinary score thresholds, acceptable rationale formats, and review timing.
2. Initial published assets, country examples, article backlog, and editorial cadence.
3. Editorial staffing, independent review expectations, and workflow enforcement.
4. Guest record validation, visit definition, storage/expiry, and save/import recovery.
5. Theme/LMS and supporting components, compatibility, costs, maintenance, and portability.
6. Device/connectivity baselines and measurable performance targets.
7. Future French rollout and translation-review capacity.

Visual design is outside this engagement. The handoff assigns later styling and working UI/accessibility checks to a delivery owner; it does not require visual direction selection or polished screen artifacts.

## Planning handoff

Next: settle launch scope/learning rules, review/refine the functional map/flows, validate content and written workflows, produce the WordPress plan, and reconcile the handoff. The [Research and Planning Process](RESEARCH-AND-DESIGN-PLAN.md) specifies the order, evidence, deliverables, and review checkpoints.

Handoff includes reviewed requirements, sitemap/page/flow/state specifications, representative content/rubrics, evidence/decisions, component recommendations, and a future application-verification plan with later styling/UI-validation ownership. Reviewers can start with [Reviewer Brief](REVIEW-BRIEF.md).

Implementation, application installations/configuration, deployment, and coded prototypes remain outside this engagement. Approval of a plan or design does not authorise the planning assistant to start coding.
