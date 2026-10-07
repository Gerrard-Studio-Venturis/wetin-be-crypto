# Crypto Learning Application — Curriculum and Journeys

Version: 0.4
Date: 7 October 2026
Status: Draft learning architecture based on approved product decisions.
Related documents: [Product Brief](PRODUCT-BRIEF.md), [Feature Specification](FEATURE-SPECIFICATION.md).

This document contributes to the research/design handoff. It does not authorise application implementation by the planning assistant. The [Research and Design Plan](RESEARCH-AND-DESIGN-PLAN.md) defines the remaining content-design and learner-validation work.

## Learning promise

Understand what crypto does, judge when it is appropriate, and practise everyday decisions safely.

The guided order is a recommendation. Core lessons remain publicly readable. Selected practice missions may require published prerequisite checks or an approved equivalent challenge.

## Foundation outcomes

| Module | Observable outcomes | Recommended preparation | Independent mission |
| --- | --- | --- | --- |
| M-01: Understand the basics | Distinguish an asset, blockchain, wallet, and service; explain basic Bitcoin/Ethereum differences and practical limitations. | None. | Compare fictional payment situations and explain which route is suitable, including a case where crypto adds unnecessary complexity. |
| M-02: Recognise scams and establish trust | Identify impersonation, urgency, guaranteed returns, and requests for secrets; choose an independent verification route. | M-01 vocabulary. | Inspect a fictional inbox and explain which requests require stopping and why. |
| M-03: Understand custody and recovery | Explain control and recovery responsibilities; distinguish addresses, account passwords, wallet passwords, keys, and recovery methods. | M-01 and M-02. | Plan recovery after a lost phone for two fictional custody arrangements using deliberately invalid placeholders. |
| M-04: Identify assets, networks, and recipients | Verify asset identity, network, receiving-service support, destination, and any required memo/tag; explain why matching symbols or address appearance are insufficient. | M-01 to M-03. | Catch an incompatible transfer from fictional deposit instructions and a send screen. |
| M-05: Understand stablecoins and conversion | Explain target value, peg limitations, issuer/collateral risks, redemption restrictions, rates, and local payout conditions. | M-01 to M-04. | Compare fictional conversion offers, including a misleading receipt or a change in the asset's market price. |
| M-06: Review before authorising | Check recipient, asset, network, amount, fee asset, and relevant total costs; distinguish network fees from provider and conversion costs. | M-02 to M-05. | Build a transfer checklist, calculate the expected recipient amount from supplied figures, and identify a condition requiring a pause. |
| M-07: Verify what happened | Distinguish submitted, pending, failed, confirmed, credited, and paid out; interpret an explorer record and explain public-ledger privacy. | M-04 and M-06. | Reconcile a fictional receipt, explorer result, and platform deposit status. |
| M-08: Understand permissions and combine skills | Distinguish connecting, signing, approving spending, and transferring; identify unnecessary permissions and apply earlier checks. | Relevant M-02 to M-07 outcomes. | Complete an everyday-use challenge that introduces an unnecessary connection or excessive spending permission. |

Module dependencies become required gates only for selected missions. The feature specification requires each gated mission to declare its exact prerequisite outcomes.

## Lesson pattern

1. Introduce a practical situation and an observable outcome.
2. Invite a brief prediction or diagnostic where useful.
3. Explain the concept in plain English, with a diagram or annotated example where it helps.
4. Work through a decision and explain the reasons for each check.
5. Offer an independent variation with fictional information.
6. Explain the result, mistaken assumptions, and useful next actions.
7. Offer a retrieval check and an appropriate future review opportunity.

Lesson length, number of questions, pass thresholds, and review intervals follow content design and testing; no universal values have been established.

## Assessment principles

- Reading is activity; a check or independent mission supplies evidence about a stated outcome.
- Each assessment identifies its outcomes, criteria, essential decisions, and version.
- Designated essential decisions must be correct. Unrelated correct answers cannot compensate for an essential error.
- A retry follows feedback and uses a meaningful variant where the activity supports one.
- An earlier pass remains in history when a later attempt is unsuccessful.
- A challenge can satisfy only its mapped outcomes. It does not mark unread lessons as read.
- Practice uses fictional information and requires no real funds, valid recovery phrase, wallet connection, or proof of ownership.

## Learning records

| Record | Meaning |
| --- | --- |
| Lesson completed | The learner explicitly reports finishing the lesson. |
| Check passed | The learner meets that assessment's published criteria. |
| Practice demonstrated | The learner satisfies a particular mission's rubric. |
| Review recommended | A topic would benefit from revision after a gap, missed later check, or material change. |

Progress presents these records separately. A single percentage must not imply that reading and demonstrated understanding are interchangeable.

## Deeper tracks

Future coverage is maintained through a topic map:

- Practical use and research: advanced custody, privacy, payments, scaling, bridges, tokenomics, project evaluation, and on-chain research.
- DeFi and markets: contracts, approvals, swaps, liquidity, lending, staking, yield sources, liquidation, orders, risk, leverage, and derivatives.
- Building and infrastructure: consensus, nodes, cryptography, application development, testing, contract security, account abstraction, oracles, and interoperability.
- Wider applications and context: NFTs, DAOs, gaming, identity, real-world assets, decentralised infrastructure, economic effects, country-specific rules, taxes, and records.

These are coverage areas rather than a commitment that every specialist course exists in the first release.

## Learner and reader journeys

### J-01: First visit

Discover the learning promise → choose a starting point → read a lesson → attempt an available check or mission → optionally remember progress on this device or save it to an account.

The lesson explains its outcome and recommended preparation. Public reading does not require enrolment.

### J-02: Save a guest journey

Learn as a guest → optionally enable device memory → choose Save my progress → create an account → carry applicable activity into the account → return to the intended activity.

Device memory is opt-in and expires 30 days after the last learning activity. Clearing browser storage can remove it sooner. Learning activity, rather than ordinary article browsing, refreshes the period.

### J-03: Join an existing account

Sign in → if guest activity is present, choose whether to add it → reconcile applicable records → return to the intended content.

The choice identifies that the records came from the current device, accommodating shared browsers. Existing account achievements survive. Duplicate completion and repeated import do not inflate progress.

### J-04: Return to learning

Open My Journey → see last activity, reading completion, demonstrated outcomes, and recommended review → continue the last unfinished activity or the next useful step.

A save failure is visible. Material changes describe what needs refreshing and preserve earlier results.

### J-05: Experienced entry

Choose a diagnostic or approved challenge → demonstrate mapped outcomes → receive targeted recommendations for gaps → start an eligible mission.

Passed challenges do not invent reading history.

### J-06: News reader discovers learning

Search or external link → public article → relevant coin/topic hub → optional lesson or mission → optional account for saving the journey or the article.

The article answers its own question. Learning links describe the benefit of following them.

### J-07: Continue reading and save articles

Browse News, Explainers, or Stories → filter by subject where useful → read → Save when signed in → find the article in Saved Articles → Unsave when no longer needed.

Reading and bookmarking do not change curriculum progress. Saved articles remain private to the account.

### J-08: Correct information

The editorial team identifies or receives an issue → reviews the claim → approves a correction → publishes a visible note if material → reviews affected articles, lessons, assessments, and translations.

Minor spelling fixes and material factual corrections receive different treatment. Receiving an issue does not itself alter published content. A dedicated public reporting feature remains a later scope decision.

## Articles as learning connections

News, Explainers, and Stories are article formats. Assets, topics, and applicable regions provide reusable relationships.

Examples:

- A stablecoin development links to peg and issuer-risk lessons and a conversion mission.
- A network disruption story links to transaction status and network identification.
- A personal or business case study links its decisions to a relevant exercise.

Articles can also remain standalone reading. Optional reflection prompts do not award curriculum credit unless deliberately designed as a separate, versioned assessment.

## Regional and language principles

- Use labelled West African examples without treating the region as uniform.
- Use fictional figures or clearly dated, sourced rates.
- Distinguish country applicability from the location of an anecdote.
- English carries essential meaning. Pidgin is contextual and varied.
- Prepare canonical learning and content identities for French. Translation should not duplicate achievements or silently make an outdated version appear current.

## Content changes

| Change | Treatment |
| --- | --- |
| Wording, humour, formatting, or an outcome-neutral correction | Preserve credit and record the editorial revision. |
| A substantial explanation change with the same applicable skill | Preserve history; recommend a refresh where useful. |
| A materially changed assessed outcome or procedure | Retain earlier results against their version; identify the current refresh requirement. |
| A confirmed essential error affecting a selected mission prerequisite | Pause affected current activity or require the corrected prerequisite; preserve historical achievements. |
| A new curriculum requirement | Explain the addition and its effect on current totals; preserve previous work. |

## Validation still needed

West African learners should test the examples, terminology, Pidgin, navigation, assessment difficulty, and value of the proposed journeys. No learner interviews or usability tests have yet been conducted.
