# Crypto Learning Application — Product Brief

> **Current implementation authority (D-21):** The owner explicitly instructed implementation. Earlier no-code/handoff-only statements below describe the preceding planning stage and are superseded for current work. See [Build Status](implementation/BUILD-STATUS.md) for actual code, tests, deployment blockers and remaining release work. Historical “not executed” application-test statements are not the current test report.


Version: 0.9
Date: 7 October 2026
Status: Consolidated approved product direction. Detailed feature behaviour remains a draft for review.
Platform: WordPress
Stage: Research, planning, functional specifications, and development-team handoff. Visual design is excluded under D-15. The planning assistant will not implement the application when the plan is ready.

## Product promise

Help people understand crypto, judge when it is appropriate, practise useful decisions safely, and see their understanding develop.

The application serves a wider African audience with a West African focus. Clear English carries the teaching, with occasional natural Nigerian Pidgin adding familiarity and humour. The experience combines a guided foundation, practical missions, a growing reference library, useful educational tools, and public articles.

Success is demonstrated understanding and sound decisions. A learner can succeed by recognising an unsuitable route, stopping an incompatible transfer, or declining an unnecessary permission.

## Approved decisions

| ID | Decision |
| --- | --- |
| D-01 | WordPress is the application platform. Other technical choices remain open. |
| D-02 | The audience is wider Africa, with West Africa receiving primary attention in research and examples. |
| D-03 | Practical understanding and safe everyday use are the starting learning priority. |
| D-04 | A guided foundation with practical missions provides the main learning structure; deeper specialist tracks follow. |
| D-05 | English is the first-release language. Content relationships should prepare for French later. |
| D-06 | Core lessons are free to read. An optional account saves the learning journey across devices. |
| D-07 | Pidgin is occasional, varied, contemporary, and appropriate to the context. Common phrases may recur naturally; repeated catchphrases and mechanical rotation should be avoided. |
| D-08 | Public News & Articles covers latest developments, specific coins/projects, explainers, and wider crypto stories. |
| D-09 | The publication model is original explainers and stories plus editorially written, sourced news summaries. Publication frequency remains open. |
| D-10 | Study order is recommended. Prerequisite checks apply to selected practice challenges; public lesson reading remains open. |
| D-11 | Guests may opt into device-specific progress memory for 30 days after their last learning activity. This is an approved product policy, not an empirical learning-science finding. |
| D-12 | The first release includes simple account-only article bookmarks: Save, Unsave, and one saved-articles list. |
| D-13 | This engagement covers research, planning, functional specifications, and a development-team handoff. Readiness or approval does not trigger application coding by the planning assistant. |
| D-14 | GitHub holds the full planning package and a concise Markdown reviewer brief. Publish documentation updates at meaningful checkpoints during active work. |
| D-15 | Visual design is removed from this engagement. Sitemap, functional page/state specifications, simple flow diagrams, content/workflow review, WordPress recommendations, and handoff remain. Later delivery owns styling and working UI validation. |
| D-16 | Adopt the eight-module/32-lesson foundation and six-article/six-hub/24-glossary launch baseline in Launch Scope v0.1. |
| D-17 | Use criterion-based structured checks; individual banks, rubrics, gates and equivalence still need content review. |
| D-18 | Target one original evergreen article weekly and at most one qualifying sourced news summary per fortnight; actual staffing/funding remain open. |
| D-19 | Adopt the preferred two-hour visit, meaningful learning-checkpoint and recoverable per-record import/cleanup product rules in Functional Review v0.1. |
| D-20 | Prefer a WordPress-owned education layer for quotation; components, versions, host, budget and delivery appointment remain open. |

## Learners and readers

These are working audience situations, not validated demographic segments:

- Curious beginners need a clear introduction and understandable vocabulary.
- Practical learners want to understand a payment, transfer, wallet, or stablecoin.
- Existing users want to identify gaps and improve their understanding.
- News and article readers want an understandable account of a development or subject, with optional routes into deeper learning.

Country, residency, language, payment access, and prior experience may affect practical needs. Nigeria's circumstances must not stand in for West Africa as a whole. Examples and jurisdiction-specific guidance should be labelled and sourced.

## Product structure

Working navigation:

- Learn: foundation, available tracks, modules, and lessons.
- Practise: missions and selected prerequisite checks.
- News & Articles: News, Explainers, Stories, and related coin/topic hubs.
- Tools: glossary and educational tools justified by learning outcomes.
- My Journey: saved learning, review recommendations, resume actions, and saved articles.

Coin and topic hubs connect these areas. A reader can move from a news story to an explainer, lesson, or mission, or remain a reader.

[Information Architecture](INFORMATION-ARCHITECTURE.md) proposes the navigation, eighteen page families, and content relationships. [Functional Flows](FUNCTIONAL-FLOWS.md) specifies ten main flows and their exceptional states. These are functional drafts for PD-04 review; proceeding with the work does not approve every detailed behaviour.

## Foundation

The adopted foundation has eight modules:

1. Understand the basics.
2. Recognise scams and establish trust.
3. Understand custody and recovery.
4. Identify assets, networks, and recipients.
5. Understand stablecoins and conversion routes.
6. Review a transfer before authorising it.
7. Verify what happened.
8. Understand permissions and combine the skills.

Detailed outcomes and journeys are in [Curriculum and Journeys](CURRICULUM-AND-JOURNEYS.md).

The [Curriculum Coverage](CURRICULUM-COVERAGE.md) defines the adopted 32-lesson inventory and a 43-topic living map of foundation, specialist, reference, and emerging coverage. Individual lesson copy, assessment criteria/gates and publication readiness still need content review. [Content Design Samples](CONTENT-DESIGN-SAMPLES.md) makes representative teaching and article connections concrete.

## Teaching and progress

Each lesson has a clear outcome, a concise explanation, a worked example, independent practice where appropriate, and explanatory feedback. Retrieval checks and later review support learning.

Reading completion, passed checks, demonstrated practice, and recommended review are distinct records. Article reads do not award curriculum assessment credit. Experienced learners can demonstrate outcomes through approved challenges without inventing a reading history.

Progress survives ordinary repetitions and preserves achievements when content changes. A material update can introduce a focused refresh or current prerequisite requirement without deleting earlier results.

## Articles and editorial direction

Articles are public. News summaries identify and link to supporting sources. Explainers and stories use original writing with appropriate attribution. News, attributed claims, and interpretation should remain distinguishable.

Publication and material-update dates have different meanings. Material factual corrections are visible. Country guidance, practical instructions, asset guides, and lessons require sources, responsibility, verification dates, and update triggers.

The adopted pilot target is one original evergreen article weekly and at most one qualifying sourced summary per fortnight. Nigeria/Ghana are example settings and BTC/ETH/USDC the first named asset hubs, as defined in [Launch Scope](LAUNCH-SCOPE.md). This establishes neither current country/provider availability nor investment recommendations. Actual staffing, funding and publication dates remain open.

## Voice

English carries essential definitions, instructions, feedback, and interface meaning. Pidgin adds warmth or a memorable aside when useful. Editors review naturalness and repetition across a batch of content.

Examples illustrate range rather than a mandatory script:

- Introducing an example: “Make we use something we sabi.”
- Inviting a decision: “If na you, wetin you go check first?”
- Reinforcing a correct explanation: “You don get this part.”
- Supporting another attempt: “Take am one step at a time.”
- Introducing a revealing consequence: “Na here the story get interesting.”

Use restrained, direct language for losses, serious allegations, security instructions, and correction notices. A fluent Nigerian reviewer should check naturalness; readers outside Nigeria should help test comprehension. Future French writing should preserve the warmth naturally rather than translate Pidgin word for word.

The [Voice and Editorial Guide](VOICE-AND-EDITORIAL-GUIDE.md) defines batch review, source/date treatment, and editorial responsibilities. Its phrases are illustrative, not a rotation or required quota.

## Proposed first-release scope

The feature specification covers:

- Foundation discovery and lesson reading.
- Knowledge checks and experienced-learner challenges.
- Practical missions and selected prerequisites.
- Learning records, resume actions, and review recommendations.
- Optional accounts, guest memory, and account reconciliation.
- Articles, coin/topic hubs, public search, and article bookmarks.
- Editorial review, source records, corrections, and content versions.
- Accessibility, a lightweight reading experience, and French-ready content identity.

Full specialist-track coverage, additional tools, and the French rollout require later scope decisions.

Detailed behaviours are in [Feature Specification](FEATURE-SPECIFICATION.md).

The process for researching, designing, validating, and preparing the handoff is in [Research and Planning Process](RESEARCH-AND-DESIGN-PLAN.md). Reviewers can start with [Reviewer Brief](REVIEW-BRIEF.md).

## Research basis and limits

Research examined BabyPips, Binance Academy, Coinbase Learn, Khan Academy, Yellow Card Academy, official crypto documentation, educational research, regional sources, and WordPress/LMS documentation. The articles extension also examined CoinDesk's editorial policy and Decrypt's public content organisation.

Relevant sources include:

- [BabyPips School of Crypto](https://www.babypips.com/crypto/learn)
- [Bank of Ghana virtual-asset literacy launch, January 2026](https://www.bog.gov.gh/wp-content/uploads/2026/01/SPEECH-BY-GOVERNOR-DR-JOHNSON-PANDIT-ASIAMA-AT-THE-LAUNCH-OF-THE-NATIONAL-VIRTUAL-ASSET-LITERACY-INITIATIVE-NaVALI230126.pdf)
- [GSMA mobile-internet connectivity overview, 2025](https://www.gsmaintelligence.com/research/the-state-of-mobile-internet-connectivity-2025-overview-report)
- [Bitcoin beginner guidance](https://bitcoin.org/en/you-need-to-know)
- [Ethereum wallets](https://ethereum.org/wallets/)
- [Ethereum security](https://ethereum.org/security/)
- [Earlier educational-review reference — verification pending](https://www.nature.com/articles/s44159-022-00089-1); not used as the current sample's research basis.
- [IES organising learning and study practice guide](https://ies.ed.gov/ncee/wwc/PracticeGuide/1)
- [W3C clear and understandable content](https://www.w3.org/WAI/WCAG2/supplemental/objectives/o3-clear-content/)
- [CoinDesk ethics policy](https://www.coindesk.com/ethics)

This is public-source desk research. Logged-in competitor experiences, learner interviews, LMS installations, and application behaviour have not been tested. Adoption data does not establish demand for this application. Francophone learner evidence remains limited.

The current [Research Findings](RESEARCH-FINDINGS.md) records actual source inspections and qualifications. The [Learner Research Guide](LEARNER-RESEARCH-GUIDE.md) prepares content/written-workflow reviews and later working UI checks; no sessions have occurred.

## Concrete launch and operating proposal

[Launch Scope](LAUNCH-SCOPE.md) proposes the full eight-module/32-lesson foundation plus six seed articles, six hubs and 24 glossary concepts, with Nigeria/Ghana example anchors and BTC/ETH/USDC initial asset hubs. [Assessment Rules](ASSESSMENT-RULES.md) specifies evidence/gate/rubric proposals and bounded samples; [Editorial Operating Plan](EDITORIAL-OPERATING-PLAN.md) exposes preparation and recurring workload. [Regional research](REGIONAL-SCOPE-RESEARCH.md) records freshness/applicability limits. These detailed proposals remain open under PD-01/02/03.

The [Handoff Review Pack](HANDOFF-REVIEW-PACK.md) states the actual preparation/approval gaps and responsibilities. No broad continuation silently selects every scope count, rubric, staffing policy or mechanism.

## Proposed WordPress route

The [WordPress Build Plan](WORDPRESS-BUILD-PLAN.md) recommends quoting core publishing plus a project-owned education plugin, with search/editorial candidates and an LMS alternative comparison. It includes conceptual records, guest/import rules, dated component costs, a low-confidence effort estimate and later verification ownership. These are proposals under PD-06/07/08, not additional approved decisions. No application is installed or coded.

## Remaining decisions

- Assessment question sets, nonessential scoring thresholds, and review timing.
- Initial asset and country coverage.
- Editorial capacity and publication cadence.
- Content-review responsibilities and the strength of workflow enforcement.
- Devices, connectivity conditions, and measurable performance budgets.
- LMS, editorial, search, metadata, and future multilingual components.
- Sustainable funding and any later premium offering.
