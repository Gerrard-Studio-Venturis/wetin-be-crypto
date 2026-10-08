# Wetin Be Crypto — Future Implementation Verification

> **Current implementation authority (D-21):** The owner explicitly instructed implementation. Earlier no-code/handoff-only statements below describe the preceding planning stage and are superseded for current work. See [Build Status](implementation/BUILD-STATUS.md) for actual code, tests, deployment blockers and remaining release work. Historical “not executed” application-test statements are not the current test report.


Version: 0.1
Date: 7 October 2026
Status: Proposed delivery-team scenarios; all application tests NOT EXECUTED.

## Authority and method

This document maps all 69 existing [acceptance criteria](FEATURE-SPECIFICATION.md) to future verification for the proposed [WordPress build plan](WORDPRESS-BUILD-PLAN.md). It does not add approval, demonstrate application behaviour, authorise implementation or require the planning assistant to write tests/code. The owner separately commissions later delivery. Visual-design production remains outside this engagement; working UI/accessibility checks are a later-delivery responsibility.

The technical lead records exact versions, configuration, environment, fixture IDs, steps, expected/observed results, evidence and defects. Use fictional activity instructions and authorised test accounts. A scenario can contain several individual assertions; coverage by range does not mean one happy-path click proves all its criteria. Each criterion needs an explicit result before sign-off.

## Complete acceptance coverage

| Scenario | Existing criteria | Future assertions and accountable reviewer |
| --- | --- | --- |
| VT-01 Public entry/challenge | AC-01.1–AC-01.4 | Guest direct-links a later lesson; outcome/preparation/next action are available. Challenge criteria shown before start; mapped pass changes only assessed outcomes and leaves unread lessons unread. QA + curriculum reviewer. |
| VT-02 Lesson/glossary | AC-02.1–AC-02.5 | Video disabled still supports learning; scroll/dwell earns no completion; explicit double completion counts once, earns no pass/practice; glossary return preserves available visit state. QA + content reviewer. |
| VT-03 Versioned assessment | AC-03.1–AC-03.5 | Essential recovery error overrides unrelated score; compatibility feedback/revision link; failed review retains prior versioned pass; mid-attempt replacement grades original questions; unapproved/missing criteria unavailable as current scored activity. Technical lead + subject reviewer. |
| VT-04 Mission gates | AC-04.1–AC-04.5 | Guest pass opens eligible mission without account; missing outcome explains check route; arithmetic cannot override essential incompatible route; fictional-only instructions; expired/cleared record earns no prerequisite. O-04.2-only sample cannot satisfy wider gate. QA + curriculum reviewer. |
| VT-05 Journey/saving | AC-05.1–AC-05.6 | Separate completion/pass/practice/review displays; articles earn no credit; cross-device confirmed account history; failed write preserves recoverable work without Saved; added requirements preserve history; another principal denied through pages/search/interfaces. QA + technical lead. |
| VT-06 Guest/account reconciliation | AC-06.1–AC-06.9 | Decline opt-in with visit continuity and no future promise; opt-in return before expiry; expiry blocks prerequisites; clear preserves account; explicit new-account saving returns to work; A/B plus B/C produces A/B/C once; weaker result preserves pass; decline leaves account unchanged; interrupted retry deduplicates; storage unavailable explains limits/current activity/account option. Technical lead + QA. |
| VT-07 Public articles | AC-07.1–AC-07.6 | Guest news/source/hub/lesson route; standalone meaning; format filter state; punctuation preserves meaningful dates; factual correction displays change/history; reading/bookmark earns no learning credit. Publishing editor + QA. |
| VT-08 Hubs/identity | AC-08.1–AC-08.5 | Reviewed hub context/lesson/current coverage; one article on news and hub; ambiguous ticker alternatives; distinct representations stay distinct; no-news hub still useful. Content reviewer + QA. |
| VT-09 Search | AC-09.1–AC-09.5 | Labelled relevant types; maintained aliases reach canonical subject; public results/snippets exclude drafts/private results; keyboard/assistive labels; gated result gives prerequisite route. Technical lead + accessibility reviewer. |
| VT-10 Bookmarks | AC-10.1–AC-10.6 | Double save once; Unsave affects no learning/content; cross-device list; auth return with actual save; withdrawn item identifiable without private body; failed save actionable retry. Test account creation for bookmark does not import guest learning. QA + technical lead. |
| VT-11 Editorial/version correction | AC-11.1–AC-11.7 | Missing source blocks writer publication; material revision invalidates approval; unapproved update leaves approved public version; network correction finds dependencies/stops flawed current question; historical attempt version retained with refresh; translation relationship flagged when French introduced; spelling preserves meaningful dates/applicability. Editor + subject reviewer + technical lead. |
| VT-12 Accessibility/media/voice | AC-12.1–AC-12.6 | Core text without video; keyboard filters/check/feedback/save; text states independent of colour; Pidgin removal preserves essential meaning; batch repetition/fluent Nigerian and outside-Nigeria comprehension review; optional media failure leaves core page/action usable. Accessibility, voice and content reviewers. |

VT-01–12 cover the unchanged criterion ranges (4+5+5+5+6+9+6+5+5+6+7+6 = 69). French working-publication assertions remain conditional on later rollout, while canonical translation/dependency relationships can be verified initially. Existing criteria remain draft; this matrix does not sign them off.

## Critical integration/failure scenarios

| Scenario | Trigger / required evidence | Related coverage |
| --- | --- | --- |
| IV-01 Authority/request boundaries | Forge browser score/pass/principal; reuse requests; omit/expire REST nonce; change account; shared-cache hit. No other learner's data exposed; unauthorised learning evidence rejected; valid repeated write reconciles once. Guest/account learners cannot retrieve private scoring keys, unreleased bank answers or reviewer notes through public responses, embedded payloads, supported REST interfaces, search or caches; approved feedback remains available. | VT-03/04/05/06/10; S-42/46. |
| IV-02 Time and persistence | At just before/at/after policy boundary using server time; client clock changed; cleanup delayed; article/bookmark/background activity only; browser restart/session restore; blocked persistent storage. Expired evidence never regains eligibility, and approved visit/checkpoint rules are honoured. | VT-04/06; PD-07 remains required. |
| IV-03 Import interruption | Abort before and after acknowledgement; submit twice/in parallel; switch account; guest source expires; mixed valid/invalid/confirmed records. Visible recoverable summary, stable identities, no duplicate credit or erased pass. | VT-05/06/10. |
| IV-04 Revision/approval/cache | Writer, revisor, editor and administrator routes; body/meta/taxonomy/activity edits; scheduled updates; pending revision and stale search/cache. Only approved public revision visible; material approval invalidation and dependency handling proven. | VT-07/09/11. |
| IV-05 Version retirement | Replace questions mid-attempt; discover essential rubric error; retire/reapprove activity; weaker retry; curriculum additions. Original history remains; current eligibility/feedback follows explicit policy, not percentage or lesson count alone. | VT-01/03/04/05/11. |
| IV-06 Export/restore/upgrade | Export every conceptual record/relationship; restore in isolated staging; rebuild indexes; upgrade supported components; replay clearing/expiry constraints. Histories/versions/permissions survive; cleared/expired guest evidence is not revived; no production emails sent. | VT-03/05/06/08/10/11. |
| IV-07 Devices/connectivity | Agreed mobile/keyboard/screen-reader profiles, throttled network, cold/warm caches, blocked optional media and transient private-write failure. Record payload/usability timings and keyboard/focus/save recovery; compare to approved targets, not vendor marketing. | VT-02/05/09/12; PD-08 required. |

## Evidence and release responsibility

Before later implementation, the technical lead must identify compatible supported versions and exact vendor extension surfaces. For an LMS route, verify attempt/version hooks, guest delivery, result export and upgrade constraints before treating adapters as credible. A source observation is not a passed test. Unknown hook/licence or approved-policy incompatibility returns a route/scope decision to the owner.

Delivery QA owns criterion-level results; qualified subject review owns scoring/correction validity; editorial review owns publishing rules; accessibility review owns working interaction checks; operations owns private caches, retention, export/restore and support. Assign names before launch. Record who accepted any unresolved condition and its user effect; an owner acceptance does not turn a failed check into a passed check.

Successful documentation checks verify document consistency only. This repository currently provides no installed application, fixture run, measured performance, learner-session result or WCAG conformance evidence. All scenarios above remain **not executed**.
