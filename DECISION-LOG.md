# Wetin Be Crypto — Decision Log

Version: 0.1
Date: 7 October 2026
Status: Consolidated owner choices and pending review decisions.

## Authority and dates

The owner explicitly approved the choices below in the conversation. This document consolidates them on 7 October 2026; it does not invent separate approval timestamps or independent reviewer sign-off. Detailed feature behaviours, designs, component recommendations, and estimates remain proposals until reviewed.

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
| D-13 | Research, planning, noncode design, and handoff only; the assistant will not code when ready. | Latest owner clarification supersedes the earlier possible transition into assistant implementation. |
| D-14 | Full plan on GitHub, concise reviewer Markdown, and regular documentation publication during active work. | Explicit publication/reviewer-brief request and supplied repository. |

The approved GitHub destination is [Gerrard-Studio-Venturis/wetin-be-crypto](https://github.com/Gerrard-Studio-Venturis/wetin-be-crypto). Use the Studio Venturis account connection matching that owner.

## Decisions still to review

PD identifiers denote pending decisions; P identifiers in the process plan denote work phases.

| ID | Decision needed | Recommendation work | Decision owner / status |
| --- | --- | --- | --- |
| PD-01 | Detailed first-release scope and initial country/asset coverage. | Targeted research, content inventory, scope tradeoffs. | Owner; open. |
| PD-02 | Actual rubrics, essential decisions, ordinary scoring, rationale format, review timing. | Representative lesson/check/mission and subject review. | Owner with curriculum/source reviewer input; open. |
| PD-03 | Publication cadence, backlog, review staffing, and operational capacity. | Workload and update-frequency proposal. | Owner; open. |
| PD-04 | Page/relationship map, screen flows, and exceptions. | Wireframes and task walkthroughs against FS/J IDs. | Owner with learner/design input; open. |
| PD-05 | Visual direction and refinements. | Three noncode directions, selection, mobile/desktop/component designs. | Owner; not yet generated. |
| PD-06 | WordPress/LMS/supporting components, integration route, costs, and maintenance. | Documentation-level requirement matrix and future verification plan. | Owner with technical reviewer input; open. |
| PD-07 | Guest storage/validation, qualifying learning actions, visit boundary, and import recovery. | Technical mechanism proposal preserving D-11 and learning rules. | Owner with technical/curriculum input; open. |
| PD-08 | Device/connectivity baselines and measurable performance targets. | Regional/device research and proposed budgets. | Owner with design/technical input; open. |
| PD-09 | Independent reviewer identity, scope of approval, and handoff conditions. | Reviewer Brief and named-version review records. | Owner designates reviewer; open. |
| PD-10 | Sustainable funding, future specialist/tool scope, and French rollout. | Later product/operating options; French identity prepared now. | Owner; later decision. |

Feature Specification v0.2 is a draft, not an independent approval record. The approved product direction does not automatically sign off every detail in it.

## Review record template

Use this format for an actual owner or independent review:

| Field | Value to record |
| --- | --- |
| Review ID | Stable identifier. |
| Reviewer and role | Actual person/role; not assumed from repository access. |
| Date | Actual review date. |
| Artifact/version or commit | Exact document/design version and GitHub reference. |
| Scope reviewed | Product direction, feature scope, curriculum, design, technical recommendation, or complete handoff. |
| Decision | Approved, changes requested, or conditional approval. |
| Conditions and open issues | Specific condition, effect, owner, and resolution path. |
| Resulting changes | Linked decision, requirements, design, or evidence revisions. |

No independent review has yet been recorded. Approval or merging of documentation does not authorise the planning assistant to implement the application.

## Initial traceability

| Approved direction | Main specification areas | Research/design work |
| --- | --- | --- |
| D-02/03/04 | FS-01 to FS-05; foundation M-01 to M-08. | RQ-01 to RQ-04; P-01/02/03/05. |
| D-05/07 | FS-02/11/12. | RQ-06; P-02/04/05/06. |
| D-06/10/11 | FS-04/05/06. | RQ-07/08; P-03/05/06. |
| D-08/09/12 | FS-07/08/09/10/11. | RQ-05/09; P-02/03/05/06. |
| D-01 | WordPress capability map and future component recommendations. | RQ-08; P-06. |
| D-13/14 | Engagement boundary, Reviewer Brief, GitHub checkpoints, handoff. | P-00/P-07 and publication procedure. |

Expand this mapping to actual design states, content examples, selected component candidates, and future verification scenarios as they are produced.
