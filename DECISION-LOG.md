# Wetin Be Crypto — Decision Log

Version: 0.5
Date: 7 October 2026
Status: Consolidated owner choices and pending review decisions.

## Authority and dates

The owner explicitly approved the choices below in the conversation. This document consolidates them on 7 October 2026; it does not invent separate approval timestamps or independent reviewer sign-off. Detailed feature behaviours, functional maps/flows, component recommendations, and estimates remain proposals until reviewed.

The [Product Brief](PRODUCT-BRIEF.md) carries the current approved decision text. This log records its authority and pending replacements. Later evidence can support a proposed change; it does not silently override an approval.

## Approved owner decisions

| ID | Current decision | Approval basis |
| --- | --- | --- |
| D-01 | WordPress is the application platform. | Owner's explicit technical requirement. |
| D-02 | Wider African audience with a West African focus. | Audience selection followed by regional clarification. |
| D-03 | Practical understanding and safe everyday crypto use are the starting goal. | Explicit learner-goal selection. |
| D-04 | Guided foundation with practical missions; later specialist tracks. | Explicit product-direction selection. |
| D-05 | English first; prepare the structure for French later. | Explicit language-scope selection. |
| D-06 | Core lessons are free; an optional account saves the journey across devices. | Explicit access-model selection. |
| D-07 | Clear English with occasional varied, contextual Nigerian Pidgin. | Original voice request and explicit correction against repetitive Pidgin. |
| D-08 | Public articles include news, coin/project coverage, explainers, and wider crypto stories. | Owner's added articles requirement. |
| D-09 | Original explainers/stories plus sourced editorial news summaries; cadence open. | Explicit publishing-model selection. |
| D-10 | Recommended study order; prerequisite checks for selected practice; reading stays open. | Explicit progression selection. |
| D-11 | Opt-in current-device progress memory for 30 days after the last learning activity. | Explicit guest-memory selection. |
| D-12 | Include simple account-only article bookmarks in the first release. | Explicit bookmark selection. |
| D-13 | Research, planning, functional specifications, and handoff only; the assistant will not code when ready. | Owner's no-code clarification remains; D-15 narrows the former noncode-design scope. |
| D-14 | Full plan on GitHub, concise reviewer Markdown, and regular documentation publication during active work. | Explicit publication/reviewer-brief request and supplied repository. |
| D-15 | Remove visual design; retain functional structure/flows, content/workflow review, WordPress planning, and handoff. | Owner's “proceed” after the explained reduced-scope option and confirmation that it was still a proposal. |

The approved GitHub destination is [Gerrard-Studio-Venturis/wetin-be-crypto](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto). Use the Studio Venturis account connection matching that owner.

## Decisions still to review

PD identifiers denote pending decisions; P identifiers in the process plan denote work phases.

| ID | Decision needed | Recommendation work | Decision owner / status |
| --- | --- | --- | --- |
| PD-01 | Detailed first-release scope and initial country/asset coverage. | [Launch Scope](LAUNCH-SCOPE.md) proposes 32 lessons plus 6/6/24 seed set, BTC/ETH/USDC and Nigeria/Ghana anchors; scope/coverage review outstanding. | Owner; open. |
| PD-02 | Actual rubrics, essential decisions, ordinary scoring, rationale format, review timing. | [Assessment Rules](ASSESSMENT-RULES.md): 32-outcome evidence and eight gate/rubric proposals, bounded M-02/04/07 samples; full banks and qualified subject/learner review outstanding. | Owner with curriculum/source reviewer input; open. |
| PD-03 | Publication cadence, backlog, review staffing, and operational capacity. | [Operating Plan](EDITORIAL-OPERATING-PLAN.md): 580–1,055 preparation person-hours, 14–24 weekly editorial pilot hours, staffing/review/correction policies; all unconfirmed. | Owner; open. |
| PD-04 | Page/relationship map, functional flows, and exceptions. | Eighteen page families/ten flows and [internal written walkthrough](FUNCTIONAL-REVIEW.md) prepared; owner/learner review and exceptions remain. | Owner with learner/functional-review input; open. |
| PD-05 | Visual direction and refinements. | Removed from this engagement by D-15; retain this identifier for history. | Closed as out of scope; later delivery responsibility is recorded at handoff. |
| PD-06 | WordPress/LMS/supporting components, integration route, costs, and maintenance. | [Build Plan](WORDPRESS-BUILD-PLAN.md) and source comparisons prepared; native route vs LMS quote, licences, ownership, effort and maintenance need review. | Owner with technical reviewer input; open. |
| PD-07 | Guest storage/validation, qualifying learning actions, visit boundary, and import recovery. | [Functional Review](FUNCTIONAL-REVIEW.md) prepares concrete visit/checkpoint/confirmed-only cleanup and race contracts; named choices/retention remain open. | Owner with technical/curriculum input; open. |
| PD-08 | Device/connectivity baselines and measurable performance targets. | Proposed 1Mbps/150ms profile, mobile/assistive checks and text-reading budgets prepared; audience baselines/targets unapproved and unmeasured. | Owner with design/technical input; open. |
| PD-09 | Independent reviewer identity, approval scope, and handoff conditions/owners. | Reviewer Brief and named-version records; assign later styling and working UI/accessibility validation. | Owner designates reviewers/delivery owners; open. |
| PD-10 | Sustainable funding, future specialist/tool scope, and French rollout. | Later product/operating options; French identity prepared now. | Owner; later decision. |

Feature Specification v0.6 is a draft, not an independent approval record. The approved product direction does not automatically sign off every detail in it.

## Current continuation record

D-15 was approved before the WordPress checkpoint. The owner's subsequent “proceed” continues authorised documentation research and publication. This checkpoint adds concrete launch/assessment/operating proposals, dated regional-source findings, internal written functional review and a handoff review pack. No new policy, detailed scope count, rubric, cadence, guest mechanism, component or budget approval is inferred.

The package is prepared for named-version review. Settled handoff still requires choices, actual subject/voice/available learner review, complete content/banks, quotes/technical contracts and named owners. Source/agent/document checks do not supply those approvals. Styling and working UI/accessibility validation remain later delivery; visual artifacts are excluded.

The representative KC-04/PM-04 samples demonstrate O-04.2 only. The full inventory's proposed PM-04 gate includes additional outcomes; no sample pass silently satisfies them. Counts, scope placement, criteria/gates, source-dependent examples, and guide operations remain proposals for their named reviewers.

## Review record template

Use this format for an actual owner or independent review:

| Field | Value to record |
| --- | --- |
| Review ID | Stable identifier. |
| Reviewer and role | Actual person/role; not assumed from repository access. |
| Date | Actual review date. |
| Artifact/version or commit | Exact document/design version and GitHub reference. |
| Scope reviewed | Product direction, feature scope, curriculum, functional structure/flows, technical recommendation, or complete handoff. |
| Decision | Approved, changes requested, or conditional approval. |
| Conditions and open issues | Specific condition, effect, owner, and resolution path. |
| Resulting changes | Linked decision, requirements, design, or evidence revisions. |

No independent review has yet been recorded. Approval or merging of documentation does not authorise the planning assistant to implement the application.

## Initial traceability

| Approved direction | Main specification areas | Research/design work |
| --- | --- | --- |
| D-02/03/04 | FS-01 to FS-05; foundation M-01 to M-08. | RQ-01 to RQ-04; P-01/02/03/05. |
| D-05/07 | FS-02/11/12. | RQ-06; P-02/05/06. |
| D-06/10/11 | FS-04/05/06. | RQ-07/08; P-03/05/06. |
| D-08/09/12 | FS-07/08/09/10/11. | RQ-05/09; P-02/03/05/06. |
| D-01 | WordPress capability map and future component recommendations. | RQ-08; P-06. |
| D-13/14 | Engagement boundary, Reviewer Brief, GitHub checkpoints, handoff. | P-00/P-07 and publication procedure. |
| D-15 | Functional IA/flows retained; visual design excluded. | P-03/05/06/07; P-04 retired. |

Expand this mapping to actual design states, content examples, selected component candidates, and future verification scenarios as they are produced.
