# Wetin Be Crypto — Functional Flows

Version: 0.2
Date: 7 October 2026
Status: Proposed written interaction/workflow specifications for review. Application acceptance tests are not executed; no human learner validation is claimed.

## Authority, scope, and notation

These flows elaborate the [Feature Specification](FEATURE-SPECIFICATION.md) without changing its twelve feature groups or 69 acceptance criteria. [Information Architecture](INFORMATION-ARCHITECTURE.md) defines PG-01 to PG-18; [Curriculum and Journeys](CURRICULUM-AND-JOURNEYS.md) defines J-01 to J-08. Approved decisions D-01 to D-14 remain constraints. The owner's approved D-15 removes visual design: this document specifies actions, states, wording, and records, not polished screens, visual concepts, styling, or application implementation. See [Decision Log](DECISION-LOG.md).

PG IDs describe page/state families, not selected WordPress templates or URLs. PG-17 covers guest-memory/import/manage states and need not be a separate page. PG-18 is a private editorial workspace with capability-controlled access. Routes below allow direct public entry as well as navigation from PG-01 Home. All wording is proposed copy.

Reading completion is explicit activity; check passes and demonstrated practice are versioned evidence. Resume location, article activity, and bookmarks supply no assessment credit. Guest and account records have different ownership and persistence. A browser-held claim is not automatically authoritative prerequisite or imported achievement evidence: the technical plan must establish admissibility and validation while preserving account-free guest practice.

All flows retain FS-12/AC-12.1–AC-12.6: readable core text, optional non-autoplay media with alternatives, keyboard/assistive-technology requirements, meaningful status words, and clear English carrying essential meaning. Pidgin remains optional and contextual. Naturalness/comprehension review is outstanding, not implied by this copy. Written-flow review cannot establish accessibility conformance, performance, storage reliability, or plugin compatibility. [Learner Research Guide](LEARNER-RESEARCH-GUIDE.md) remains a prepared protocol; no sessions are performed through this document.

## FL-01 — Public learning, completion, and glossary

**Mapping:** FS-01, FS-02; AC-01.1–AC-01.2, AC-02.1–AC-02.5; J-01, J-04.
**Route:** PG-02 Learn catalogue → PG-03 Path → PG-04 Module → PG-05 Lesson ↔ PG-06 Glossary. Direct lesson entry is equally valid.

**Entry and actions:** A published lesson is readable by any visitor. Show its level, outcome, recommended preparation, and useful next action. Suggested order is guidance, not a reading gate. The learner reads text, optionally uses media, opens a linked glossary term, and returns to the lesson. Preserve available progress through that navigation. They may explicitly mark the lesson completed, revisit it, or continue to an eligible check.

**Outcomes and records:** Record one applicable lesson completion for the explicit action; repeated completion does not add credit. Keep resume information separate. Guest persistence follows FL-05; account saving follows FL-04/FL-06. Completing or rereading the lesson never passes its check or demonstrates its mission.

**Failure/interruption:** Media failure leaves the explanation readable. A failed account save shows pending/failed status and preserves recoverable work; it cannot be labelled saved. Missing guest memory is explained without blocking public reading. A missing or withdrawn glossary destination needs a useful return route, not registration.

**Proposed wording:** “Recommended preparation”; “Read the definition”; “Mark lesson completed”; “Next: check your understanding.”

**Open:** lesson/resume storage and LMS linkage, supported return behaviour, and withdrawn-content handling. These are integration choices, not demonstrated WordPress capabilities.

## FL-02 — Checks, challenges, versions, and feedback

**Mapping:** FS-01, FS-03; AC-01.3–AC-01.4, AC-03.1–AC-03.5; J-01, J-05.
**Route:** PG-03/PG-04/PG-05 or PG-08 Practice catalogue → PG-07 Check/challenge → feedback → related lesson or eligible mission.

**Entry and actions:** Offer only a reviewed published assessment with declared outcomes, version, criteria, and essential decisions. The learner reviews these before starting, submits responses, and receives a result plus reasons and relevant revision links. A failed attempt can be retried with a meaningful variant where the bank supports one. Experienced learners may use an explicitly mapped challenge without reading every lesson.

**Outcomes and records:** Grade an attempt against the version it began with; publishing replacement questions mid-attempt does not change that rubric. Retain attempt, activity version, outcome evidence, and saving status. Essential decisions cannot be compensated for by unrelated correct answers. A challenge satisfies only mapped outcomes; unread lessons stay unread. A later unsuccessful attempt preserves an earlier pass and can recommend review.

**Failure/interruption:** Missing criteria/unapproved questions remove the scored activity while lessons remain open. Interrupted work must not appear submitted or passed. An older-version result identifies whether it meets current requirements. A confirmed essential error follows FL-10 and cannot keep granting current evidence merely because it remains in history.

**Proposed wording:** “This check covers…”; “Passed for this activity version”; “Review this point”; “Try another example.”

**Open:** full banks, rationale format, ordinary thresholds, approved grading, in-progress recovery, and current-applicability rules. [KC-04 sample](CONTENT-DESIGN-SAMPLES.md) covers O-04.2 only, not all M-04 outcomes.

## FL-03 — Missions and selected prerequisites

**Mapping:** FS-04; AC-04.1–AC-04.5; J-01, J-05.
**Route:** PG-08 or a lesson/search/hub → PG-09 Mission; unmet requirement → PG-07 → PG-09.

**Entry and actions:** The mission states its fictional task, outcomes, rubric, and exact prerequisite checks or accepted equivalent challenges. Resolve applicable evidence before starting selected gated practice. Reading completion/self-declared experience is insufficient. A guest may complete the required available check and begin practice without registration. An unmet gate names each missing outcome and provides a direct route to it; PG-05 remains readable.

**Outcomes and records:** Award demonstrated practice only when every essential rubric decision is satisfied. Record mission version, responses/rationale, result, and evidence scope. Arithmetic or another nonessential success cannot compensate for an essential unsupported-network decision. Feedback explains a mistake, suggests revision, and offers a meaningful retry. All materials are fictional; require no real funds, wallet connection, ownership proof, or valid secret.

**Failure/interruption:** Expired/cleared guest evidence offers another check without claiming it was saved. If eligibility cannot be established, explain the unresolved prerequisite rather than invent permission or make registration mandatory. A paused/withdrawn flawed activity follows FL-10. An interrupted attempt is not demonstrated practice.

**Proposed wording:** “Before this mission: demonstrate…”; “Take the required check”; “Compatibility is not established. Review the receiving instructions.”

**Open:** where gates are evaluated and how guest claims are validated. The bounded PM-04 sample demonstrates O-04.2 only. The inventory's full proposed gate includes O-04.1/O-04.2/O-04.3; neither sample pass unlocks it automatically.

## FL-04 — My Journey, history, and current changes

**Mapping:** FS-05; AC-05.1–AC-05.6; J-04, J-05.
**Route:** PG-10 My Journey → unfinished activity, recommended next step, prior material, or focused review.

**Entry and actions:** Show a guest their available current-browser records, or an authenticated learner their own saved account records. Identify that scope. Separate lesson completion, check passes, practice demonstrated, and recommended review. Provide last activity and a useful next action tied to the selected path/current requirements. Revisiting prior learning remains available.

**Outcomes and records:** Unique applicable lesson records determine completion counts. Show two completed lessons and one passed check as different accomplishments. Article reading/bookmarking changes neither. A challenge may meet an outcome while associated lessons stay unread. Confirmed account progress is intended to be available on another signed-in device; browser-only or unconfirmed work must not be presented as cross-device saved.

**Failure/interruption:** Use explicit pending/failed-save states and a recovery action. Added curriculum requirements explain changed totals without deleting earlier work. Historical achievements remain tied to assessed versions; a materially changed current requirement identifies a focused refresh. Do not expose another account's results through navigation, search, or supported interfaces.

**Proposed wording:** “Lessons completed”; “Checks passed”; “Practice demonstrated”; “Review recommended”; “Progress not confirmed as saved. Retry.”

**Open:** progress aggregation, selection of next/review actions, data ownership, history presentation, and failure recovery. Review intervals are not universal defaults.

## FL-05 — Guest opt-in, clearing, expiry, and storage

**Mapping:** FS-06, FS-04; AC-06.1–AC-06.4, AC-06.9; AC-04.5; J-01, J-02.
**Route:** learning page or PG-10 ↔ PG-17 memory/manage state.

**Entry and actions:** Without device memory, temporary guest progress survives normal navigation/reloads during the current visit. Before enabling cross-visit memory, explain the approved opt-in policy. Accepting remembers eligible progress in the same browser for 30 days after the last learning activity. Declining keeps learning available and makes no cross-visit promise. Provide a clear action to remove remembered guest progress.

**Outcomes and records:** Track eligible guest learning and the consent/retention scope required by the eventual design. Qualifying learning activity refreshes retention; ordinary article reading does not. Clearing remembered progress removes guest records, not confirmed account history. Expired/cleared records cannot grant current prerequisites. Account progress is a separate source requiring sign-in.

**Failure/interruption:** Explain unavailable browser storage; preserve the supported current activity and offer account saving. Clearing browser data may remove memory earlier than 30 days. After expiry, explain the missing guest evidence and offer the relevant check or sign-in to saved account records. Never infer a pass from a remembered location.

**Proposed wording:** “Remember my progress on this device”; “Only this browser. Expires 30 days after your last learning activity”; “Continue without remembering”; “Clear remembered guest progress.”

**Open:** storage mechanism, visit boundary, qualifying actions, expiry enforcement/time authority, blocked-storage fallback, and admissible guest evidence. These mechanisms cannot be inferred from the approved retention policy.

## FL-06 — Save my progress and a new account

**Mapping:** FS-06, FS-05; AC-06.5, AC-05.3–AC-05.4; J-02.
**Route:** PG-05/PG-07/PG-09/PG-10 → PG-16 Account entry/recovery → reconciliation → intended activity.

**Entry and actions:** A guest selects Save my progress with eligible current guest work. Explain account continuity and preserve the requested action/return destination. Successful new-account creation through this action carries applicable guest learning into that account, then returns to the relevant activity. If the person instead signs into an existing account, use FL-07's distinct import choice. Recovery should preserve the intended destination where possible.

**Outcomes and records:** Reconcile validated completions/attempts against their identities and versions. Preserve unique completion counts and declared evidence scope. Account creation itself awards no completion or achievement. Confirm saving only after account-side progress is confirmed; do not imply that creating an account alone completed a failed transfer of records.

**Failure/interruption:** Account errors leave public reading available and preserve recoverable guest work. Pending/rejected imports need an actionable status. Work that expired or cannot be validated must not acquire current achievement merely through registration. If the return activity is unavailable, explain this and provide a valid learning destination.

**Proposed wording:** “Save my progress”; “Create an account to continue across devices”; “Your progress is saved”; “Account created; progress saving needs another attempt.”

**Open:** account/LMS identity, confirmation and recovery sequence, validation, and interrupted migration. New-account creation requested for an article bookmark follows FL-09 and does not silently import guest learning.

## FL-07 — Existing-account import on a shared device

**Mapping:** FS-06, FS-05; AC-06.6–AC-06.8, AC-05.6; J-03.
**Route:** PG-16 successful sign-in → PG-17 import choice → PG-10 or preserved destination.

**Entry and actions:** When eligible current-device guest activity exists, identify its browser origin and offer Add this guest progress or Keep account progress only. The choice accommodates shared browsers. Declining changes no existing account learning records; sign-in alone never means import. Adding initiates reconciliation after the selected validation rules establish eligibility.

**Outcomes and records:** Account completions A/B plus guest B/C produce A/B/C once. Preserve distinct valid attempts and existing passes; a weaker guest attempt does not erase a pass. Respect versions/current applicability rather than turn old evidence into new mastery. Maintain operation/record identities sufficient to reconcile repeated or recovered imports without duplicate credit or attempts.

**Failure/interruption:** Keep confirmed account history throughout. Interrupted import remains unresolved until its actual result is known; a retry must not apply previously completed additions twice. Identify ineligible/expired work without claiming it was imported. Clearing account data, clearing unrelated guest history, or deleting a guest record merely for declining import is not implied by this flow.

**Proposed wording:** “This browser has guest learning activity”; “Add this guest progress”; “Keep account progress only”; “Import not confirmed. Check the result or retry.”

**Open:** trusted guest evidence, partial-success/rollback policy, post-import guest retention, consent state, and recovery reconciliation. Account ownership and guest prerequisite validation require explicit technical authority, not trust in editable browser totals.

## FL-08 — Articles, hubs, search, and archive context

**Mapping:** FS-07, FS-08, FS-09; AC-07.1–AC-07.6, AC-08.1–AC-08.5, AC-09.1–AC-09.5; J-06, J-07.
**Route:** PG-11 News & Articles → PG-12 Article ↔ PG-13 Asset/topic hub; PG-14 Search → public destinations.

**Entry and actions:** Visitors browse All/News/Explainers/Stories with explicit selected filters, or enter directly through search/shared links. Show format, useful description, and meaningful dates. Full articles stand alone; sources, related coverage, hubs, and learning are optional routes. Hubs provide reviewed context/risks and learning even without current news.

**Outcomes and records:** Search labels lessons, explainers, glossary, practice, and other published destinations. Maintained aliases point to canonical subjects; ambiguous tickers show alternatives, and distinct representations retain distinct identity. News/hub appearances reference one article, not duplicate copies. Regional labels indicate material applicability. Reading/discovery creates no curriculum credit.

**Failure/interruption:** Empty results offer broader search/related published subjects without invented answers. Public results exclude drafts/private learner and review records. Gated practice opens the useful prerequisite route in FL-03. Missing recent news is not an empty hub. Punctuation edits do not reset publication/verification dates; archive reporting keeps historical event context. Material corrections explain what changed and when.

**Proposed wording:** “News”; “Explainer”; “Reviewed on…”; “Archive: event on…”; “Which asset did you mean?”; “Understand this topic.”

**Open:** taxonomy/identity, search relevance/filtering, archive presentation, and unavailable destinations. A-NEWS-01 is an archive review sample, not a newly published live report. Initial asset/country coverage remains proposed.

## FL-09 — Bookmarks, authentication return, and unavailable articles

**Mapping:** FS-10; AC-10.1–AC-10.6; FS-07/AC-07.6; J-07.
**Route:** PG-12 Save → PG-16 if guest → return/save confirmation; PG-15 Saved Articles → article or unavailable state.

**Entry and actions:** An account reader saves/unsaves a published article. Repeated Save retains one entry. A guest's Save action explains the account requirement while leaving reading open; successful sign-in/registration returns to that article and completes the requested bookmark where still applicable. Cancelling or failing authentication leaves the article readable.

**Outcomes and records:** A bookmark belongs only to its account and references the article identity, so current title/corrections remain accessible. Confirmed bookmarks are available across signed-in devices. Unsave removes the bookmark, not content or learning history. No article action awards reading completion, a pass, or demonstrated practice.

**Failure/interruption:** A failed/pending save is visibly unresolved with retry; authentication success alone is not bookmark success. Withdrawn/unpublished content retains an identifiable unavailable bookmark until removed without exposing a draft. If availability changes during authentication, return to that understandable state rather than claim a new successful save.

**Proposed wording:** “Save article”; “Sign in to save this article”; “Saved”; “Article no longer available”; “Could not confirm saving. Retry.”

**Open:** bookmark component, identity/ownership, confirmation/retry, and unavailable-state retention. Preserve bookmark intent separately from learning import: authentication for Save article does not silently import guest learning, including when creating an account. Any relevant guest-import choice remains a separate, explicit FL-07 operation.

## FL-10 — Editorial review, updates, corrections, and dependencies

**Mapping:** FS-11; AC-11.1–AC-11.7; FS-12/AC-12.5; J-08.
**Route:** PG-18 draft → source/subject review → publishing approval → public revision; substantive updates return to review.

**Entry and actions:** Capability-authorised writers prepare content with required sources, identity/region relationships, and dependencies. Source/crypto reviewers examine relevant claims; publishing editors approve the specific revision. Missing sources/review preserve the draft and prevent publication through the agreed workflow. Changing a material approved claim invalidates its relevant approval. Scheduling/publication follows approval.

**Outcomes and records:** Record revision, source/reviewer decisions, authority, dates, dependencies, and correction reasons. A substantive update remains private while the approved public version stays readable. Publish a visible material correction explaining what changed/when; spelling-only edits do not reset publication, verification, or applicability dates.

**Failure/interruption:** Confirmed essential teaching errors require affected current activity to be paused/corrected; review linked lessons, assessments, hubs, and future translations. Preserve original-version attempts/history, but identify current refresh requirements where needed. Material English corrections flag French review when translations exist. Interrupted review grants no approval. Emergency correction requires editor authority, reason, audit record, and subsequent review.

**Proposed wording:** “Source review required”; “Approval applies to this revision”; “Correction: what changed…”; “This practice is temporarily unavailable while its instructions are corrected.”

**Open:** role separation/staffing, revision-specific approval enforcement, emergency authority, dependency tracking, and public correction display. WordPress roles/revisions alone do not prove these controls. Batch Pidgin/serious-tone checks are required editorial work; human review remains outstanding. Receiving an issue does not automatically edit content; a public reporting feature is outside the settled initial scope.

## Internal written review and proposed contracts

[Functional Review](FUNCTIONAL-REVIEW.md) walks all ten flows against the 69 existing criteria and proposes visit, checkpoint, import-cleanup and expiry/correction contracts. This is internal document analysis, not owner approval, actual learner evidence or working verification. [Assessment Rules](ASSESSMENT-RULES.md) details outcome/gate/version proposals while preserving the O-04.2-only sample boundary.

## Traceability and remaining technical authority

The mappings above cover AC-01.1 through AC-12.6, including all 69 existing criteria; shared FS-12 applies throughout. They describe intended behaviours, not passed tests. Stable content/outcome/activity identities, versions, attempt provenance, completion records, review recommendations, bookmarks, imports, and editorial revisions come from the specification's conceptual records, not a selected schema.

Technical recommendations must resolve PD-06/PD-07/PD-08: public/LMS access; guest evidence authority and storage; confirmation and interrupted saving/import; version-specific grading/current gates; private-record exclusion; search/hub identity; editorial approval; and measurable device/network budgets. Assessment gates/rubrics need PD-02 review; coverage/staffing need PD-01/PD-03. Preserve the approved policies if a component falls short and return any material tradeoff to the owner.

Review written tasks and exceptions against these flows. Keep actual learner/source/voice review distinct from document checks, and future WordPress acceptance/security/accessibility/performance tests marked **not executed** until a commissioned implementation supplies evidence.
