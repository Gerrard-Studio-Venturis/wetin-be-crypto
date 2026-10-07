# Wetin Be Crypto — Curriculum Inventory and Living Coverage Map

Version: 0.3
Date: 7 October 2026
Status: Eight-module/32-lesson baseline adopted under D-16. Teaching wording, detailed assessment mappings/gates and publishing readiness still need review.
Related documents: [Curriculum and Journeys](CURRICULUM-AND-JOURNEYS.md), [Product Brief](PRODUCT-BRIEF.md), [Feature Specification](FEATURE-SPECIFICATION.md), [Evidence Register](EVIDENCE-REGISTER.md), [Decision Log](DECISION-LOG.md), [Research and Planning Process](RESEARCH-AND-DESIGN-PLAN.md).

## Purpose, authority, and limits

This inventory develops the approved practical/safe-use direction into reviewable content. It proposes four lessons in each of the existing eight foundation modules: 32 lessons in total. The owner has approved the guided foundation direction, not every lesson title, assessed outcome, or the complete first-release inventory. This document does not silently add specialist courses, real-money exercises, supported countries, or assets to launch scope.

This is content design grounded in earlier desk research and the current planning package. It is not new learner evidence, a report of newly inspected sources, approved subject-review results, or a tested application. The date above is a document revision date. Source categories identify what each lesson needs before publication; they do not assert that every source in a category has already been inspected.

The learning promise remains: understand what crypto does, judge when it is appropriate, and practise everyday decisions safely. English carries essential meaning. Occasional Nigerian Pidgin adds contextual familiarity without requiring knowledge of Pidgin. French readiness means shared content/outcome identities and version relationships; French publication is a later decision.

## Content and evidence identifiers

| Identity | Meaning | Use |
| --- | --- | --- |
| M-01 to M-08 | Existing foundation modules. | Preserve the module identities in Curriculum and Journeys. |
| L-01.1 to L-08.4 | Proposed stable lesson identities. | Titles may change; do not reuse a retired identity for an unrelated lesson. |
| O-01.1 to O-08.4 | Proposed observable outcome identities. | One named outcome per lesson here; split outcomes if assessment design requires separate evidence. |
| KC-01 to KC-08 | Proposed module knowledge/application checks. | Map actual questions to outcomes and publish criteria before offering a scored check. |
| PM-01 to PM-08 | Proposed independent practical missions. | Map rubric decisions to outcomes; completion demonstrates only the published task. |
| TOP-01 onward | Living coverage entries. | Retain history when placement, dependencies, or research status changes. |

The checks and missions below are assessment designs, not existing question banks or approved pass rubrics. Passing KC-04, for example, can establish only the O-04 outcomes actually assessed by its approved version. Lesson completion cannot substitute for that evidence. An approved experienced-learner challenge may supply equivalent evidence only through an explicit outcome mapping.

## Source categories

| Tag | Required source category | Existing grounding and remaining work |
| --- | --- | --- |
| PROTOCOL | Protocol/project documentation and relevant specifications. | Earlier Bitcoin beginner guidance and Ethereum wallet/security guidance are recorded as S-04/S-05/S-06. Recheck the exact mechanism, network, and account model used in publication examples. |
| SECURITY | Official user-security guidance, incident findings, and independent security analysis. | S-06 supports the foundation themes. Any specific scam, exploit, hardware, or recovery procedure requires a source that supports its stated scope. |
| PROVIDER | Current wallet, exchange, payment, or platform documentation. | Needed for supported assets/networks, recovery models, deposit conditions, crediting, fees, and dispute processes. No provider is selected or its full workflow proven by this inventory. |
| ISSUER | Issuer legal terms, redemption rules, reserve disclosures, and independent corroboration. | Circle USDC terms were inspected in this pass (S-24; see [Research Findings](RESEARCH-FINDINGS.md)). They are issuer-specific evidence, not authority for every stablecoin or independent reserve assurance; refresh before publication. |
| DATA | Dated explorer/market records and reproducible calculation inputs. | Proposed exercises use fictional figures and mock records. If real data is later used, record its network, time, source, and interpretation limits. |
| COUNTRY | Applicable regulator, legal, tax, payment, and consumer-protection sources. | S-02 supplies Ghana-specific literacy context, not a regional legal conclusion. Initial countries and exact jurisdictional guidance remain open under PD-01. |
| RESEARCH | Independent economic, technical, or application research. | Needed for broader comparisons, effectiveness claims, market analysis, environmental claims, and emerging applications. This map proposes research needs rather than supplying those findings. |
| TEACHING | Learning-science and accessibility/comprehension guidance. | Inspected S-08 and baseline S-09 inform worked examples, retrieval, review, and clear language. S-07 remains pending verification and is not the basis of the current sample rationale. These sources do not prove these assessments or set universal timing/thresholds. |

TEACHING applies across the inventory. Additional tags below concern the factual content, not an instruction to conduct a broad new research pass immediately. Source observations, editorial interpretation, approved policy, and open hypotheses must remain distinguishable.

## Foundation lesson inventory

### M-01 — Understand the basics

Recommended preparation: none. Introduce practical choices without presenting crypto use as an expected achievement.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-01.1 — Asset, network, wallet, or service? | O-01.1: Identify the asset, ledger/network, wallet interface, and service in a fictional payment description. | KC-01: classify the components. PM-01: identify what each proposed route uses. | PROTOCOL, PROVIDER |
| L-01.2 — How a transaction becomes a shared record | O-01.2: Explain in plain English how authorisation, network processing, and ledger records differ from a provider's internal balance update. | KC-01: order a simplified transaction explanation. PM-01: identify which participant must act at each stage. | PROTOCOL |
| L-01.3 — Bitcoin, Ethereum, and tokens | O-01.3: Distinguish the basic role of BTC, ETH, and a token issued on a network without treating every asset as interchangeable. | KC-01: match asset/network examples to their stated roles. PM-01: identify a route's asset and relevant network. | PROTOCOL |
| L-01.4 — Does this situation need crypto? | O-01.4: Compare a crypto route with a familiar alternative using supplied cost, access, privacy, and recovery information; justify proceeding or declining. | KC-01: explain a trade-off. PM-01: choose routes for two fictional situations, including a case where crypto adds unnecessary complexity. | PROTOCOL, PROVIDER, COUNTRY |

### M-02 — Recognise scams and establish trust

Recommended preparation: M-01 vocabulary. Scam recognition reappears in later modules rather than ending here.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-02.1 — Pressure, promises, and suspicious requests | O-02.1: Identify urgency, guaranteed returns, impersonation, and advance-payment requests in fictional messages, explaining the relevant evidence. | KC-02: classify warning signs with a reason. PM-02: triage a fictional inbox. | SECURITY |
| L-02.2 — Verify through a route you choose | O-02.2: Select an independent verification route instead of relying on a message's link, logo, search advertisement, or claimed identity. | KC-02: select the next verification step. PM-02: establish the source of a purported support message. | SECURITY, PROVIDER |
| L-02.3 — Secrets and permissions are different risks | O-02.3: Reject an external request for private keys/recovery material and recognise that a signature or permission can also have consequences without revealing a secret. | KC-02: identify the requested authority or secret. PM-02: refuse a fictional recovery scam and flag an unexplained signing request. | SECURITY, PROTOCOL |
| L-02.4 — What proves that someone paid? | O-02.4: Distinguish a screenshot or sender claim from independently checked receiving-account or transaction evidence. | KC-02: identify what remains unverified. PM-02: select a sensible check for a fictional payment claim. | SECURITY, PROVIDER, DATA |

### M-03 — Understand custody and recovery

Recommended preparation: M-01 and M-02. Avoid implying that every wallet uses a recovery phrase or has the same recovery procedure.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-03.1 — Who can authorise spending? | O-03.1: Compare a fictional custodial account and self-custody account by control, responsibilities, provider dependence, and recovery conditions. | KC-03: identify who controls authorisation. PM-03: compare recovery options after losing a phone. | PROTOCOL, PROVIDER |
| L-03.2 — Addresses, keys, phrases, and passwords | O-03.2: Distinguish a receiving address, private key, recovery phrase, local wallet password, and provider-account password; identify which information must remain secret. | KC-03: classify labelled placeholders. PM-03: select the relevant recovery material without disclosing it. | PROTOCOL, SECURITY, PROVIDER |
| L-03.3 — Recovery depends on the account model | O-03.3: Explain why phrase-based, provider-assisted, and alternative account-recovery arrangements have different requirements and limitations. | KC-03: identify what a described model can recover. PM-03: choose a conditional recovery route for two supplied models. | PROTOCOL, PROVIDER, SECURITY |
| L-03.4 — Prepare before access is lost | O-03.4: Construct a basic backup/device-access plan for a supplied custody arrangement and identify a claim that no one can guarantee from the available information. | KC-03: identify an unsafe backup choice. PM-03: explain the recovery plan and its limits. | SECURITY, PROVIDER |

### M-04 — Identify assets, networks, and recipients

Recommended preparation: M-01 to M-03. L-04.2/O-04.2 are reserved for the network-compatibility sample, KC-04, and PM-04 in the representative content work.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-04.1 — Identify the asset and its representation | O-04.1: Distinguish a token's name/ticker from its identity on a specified network, using supplied official asset/contract or representation information where applicable. | KC-04: identify what a matching ticker does not establish. PM-04: identify the exact asset representation described in the instructions. | PROTOCOL, ISSUER, PROVIDER |
| L-04.2 — Match the network to the receiving route | O-04.2: Verify the exact asset representation, selected network, and receiving-service support; explain why matching ticker/address appearance is insufficient. | KC-04: reject an unsupported route despite a matching ticker or address format. PM-04: stop a fictional incompatible transfer and identify the missing confirmation. | PROTOCOL, PROVIDER, ISSUER |
| L-04.3 — Check the destination and required details | O-04.3: Verify the intended recipient, full destination, and any explicitly required memo/tag or deposit conditions using supplied trustworthy instructions. | KC-04: locate a missing or inconsistent detail. PM-04: resolve destination requirements before proceeding. | PROVIDER, PROTOCOL, SECURITY |
| L-04.4 — Combine the checks before moving on | O-04.4: Distinguish verified information from unresolved assumptions and select a proportionate next step, including pausing when compatibility remains unknown. | KC-04: explain a proceed/pause decision. PM-04: complete the compatibility decision with a stated rationale. | SECURITY, PROVIDER, PROTOCOL |

### M-05 — Understand stablecoins and conversion

Recommended preparation: M-01 to M-04. Model descriptions are introductions, not a course in collateral mathematics, trading, or yield strategies.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-05.1 — What does a stablecoin try to stay stable against? | O-05.1: Identify the reference value and explain that a stability target differs from a guaranteed market price; recognise basic reserve-backed, crypto-collateral, and algorithmic model differences. | KC-05: distinguish target, mechanism, and market quote. PM-05: identify the relevant risks in supplied asset descriptions. | ISSUER, PROTOCOL, RESEARCH |
| L-05.2 — Holding, redeeming, and converting are different | O-05.2: Distinguish holding a token, eligible direct issuer redemption, exchange conversion, and local-currency payout; identify issuer/collateral, liquidity, and restriction risks. | KC-05: identify an unsupported redemption assumption. PM-05: compare fictional conditions and a below-target market quote. | ISSUER, PROVIDER, COUNTRY |
| L-05.3 — Centralised services and decentralised exchanges | O-05.3: Distinguish a centralised account service from an on-chain exchange interaction, explaining the supplied control, permission, and execution differences. | KC-05: identify the type of route and its stated responsibilities. PM-05: avoid treating an on-chain swap quote as a guaranteed bank payout. | PROVIDER, PROTOCOL, SECURITY |
| L-05.4 — Compare the whole local-money route | O-05.4: Compare fictional conversion/P2P offers using rates, fees, receiving evidence, payout conditions, and counterparty/dispute arrangements. | KC-05: identify a hidden cost or unverified payout. PM-05: choose a route or decline and justify the decision. | PROVIDER, COUNTRY, SECURITY, DATA |

### M-06 — Review before authorising

Recommended preparation: relevant M-02 to M-05 outcomes. All numbers are supplied and fictional unless a future example explicitly records dated real inputs.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-06.1 — Read the request and send screen together | O-06.1: Reconcile the intended recipient, asset, network, amount, destination, and required details before authorisation. | KC-06: identify a mismatch. PM-06: build the send checklist from two fictional screens. | PROVIDER, PROTOCOL, SECURITY |
| L-06.2 — Gas, network fees, and total cost | O-06.2: Distinguish computational gas from a fee, identify the described fee asset, and calculate expected sender cost/recipient value from explicitly supplied fee rules. | KC-06: apply the stated fee arrangement. PM-06: compare routes without assuming all fees are deducted from the transferred amount. | PROTOCOL, PROVIDER, DATA |
| L-06.3 — Estimates, delays, and failed execution | O-06.3: Explain which supplied costs or timing claims are estimates and distinguish an included failed execution from a transaction rejected before inclusion. | KC-06: identify what a failed-status example implies about fees. PM-06: state uncertainty in a proposed route. | PROTOCOL, PROVIDER, DATA |
| L-06.4 — Decide whether the checks are complete | O-06.4: Authorise a fictional action only when the required information is consistent, or pause with a specific verification action. | KC-06: justify the final decision. PM-06: complete the checklist; cost arithmetic cannot compensate for an essential compatibility error. | SECURITY, PROTOCOL, PROVIDER |

### M-07 — Verify what happened

Recommended preparation: M-04 and M-06. On-chain evidence and provider/fiat outcomes remain distinct.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-07.1 — Submitted is not the same as completed | O-07.1: Distinguish submitted, pending, failed, confirmed, provider-credited, and paid-out states in a described route. | KC-07: identify the established stage. PM-07: reconcile the mock transaction and deposit records. | PROTOCOL, PROVIDER, DATA |
| L-07.2 — Confirmations and finality depend on the network | O-07.2: Explain why network confirmation/finality and a provider's acceptance rule are separate and why a universal guaranteed completion time is unsupported. | KC-07: apply a supplied confirmation/acceptance condition. PM-07: explain a confirmed-but-not-yet-credited example. | PROTOCOL, PROVIDER |
| L-07.3 — Read an explorer without overclaiming | O-07.3: Identify the network, transaction identifier, status, addresses, amount, and fees in a mock explorer record and state what it cannot prove. | KC-07: interpret a labelled record. PM-07: reject a claim that network success proves local bank payout. | PROTOCOL, DATA, PROVIDER |
| L-07.4 — Public records, privacy, and useful receipts | O-07.4: Identify publicly visible information and preserve useful fictional transaction/cost records without disclosing recovery material or assuming anonymity. | KC-07: identify a privacy implication. PM-07: select appropriate evidence to retain for the described route. | PROTOCOL, SECURITY, COUNTRY |

### M-08 — Understand permissions and combine skills

Recommended preparation: relevant M-02 to M-07 outcomes. This is a bounded introduction to app interaction, not a requirement to use DeFi.

| Lesson | Observable outcome | Mapped evidence | Sources |
| --- | --- | --- | --- |
| L-08.1 — Connect, sign, approve, or transfer? | O-08.1: Distinguish a connection, message signature, spending authorisation, and transfer in clearly described fictional requests. | KC-08: classify the requested action rather than its marketing label. PM-08: identify an unnecessary action in a payment flow. | PROTOCOL, PROVIDER, SECURITY |
| L-08.2 — Check who receives authority and how much | O-08.2: Identify the proposed spender, asset, scope, and spending limit; recognise that some signature-based requests can authorise spending without a visible transfer fee. | KC-08: identify an excessive or unexplained permission. PM-08: refuse an unrelated/unlimited spending request. | PROTOCOL, SECURITY, PROVIDER |
| L-08.3 — Disconnecting is not revoking permission | O-08.3: Explain why disconnecting an interface and revoking an existing spending permission are different actions, using a supplied account/token model. | KC-08: identify which action addresses the described permission. PM-08: choose a relevant next check without promising that past losses can be reversed. | PROTOCOL, SECURITY, PROVIDER |
| L-08.4 — Put the everyday decisions together | O-08.4: Combine compatibility, costs, trust, status, and permissions in a new fictional situation; proceed, pause, or decline with a reason. | KC-08: explain a combined decision. PM-08: complete the everyday-use capstone against its published rubric. | PROTOCOL, SECURITY, PROVIDER, ISSUER, COUNTRY |

## Mission designs and candidate gates

The eight missions correspond to the existing module-level missions. The gate proposals below identify selected practice that merits prerequisite review. They are not an approval of every gate or evidence route. All related reading stays open. Current-visit guests can complete checks and eligible missions; accounts or opted-in device memory provide the approved continuity options. Device memory lasts 30 days after the last learning activity (D-11); this is an owner policy, not an evidence-based learning-review interval.

| Mission | Evidence to collect | Candidate prerequisite policy for review |
| --- | --- | --- |
| PM-01 — Choose the route | Component identification and a justified route/alternative decision: O-01.1 to O-01.4. | Proposed open practice with supporting explanations; no proof of real ownership/use. |
| PM-02 — Inspect the inbox | Warning signs, independent verification, secret/permission recognition, and evidence limits: O-02.1 to O-02.4. | Proposed open practice. Revisit relevant mistakes without closing lessons. |
| PM-03 — Plan for the lost phone | Control model, relevant recovery material, conditional recovery, and backup plan: O-03.1 to O-03.4. | Proposed open fictional practice; no real recovery input. |
| PM-04 — Catch the incompatible transfer | Asset identity, receiving-route compatibility, destination requirements, and a justified pause/proceed decision: O-04.1 to O-04.4. | Candidate selected gate: applicable evidence for O-04.1/O-04.2/O-04.3 from KC-04 or an explicitly mapped challenge. The [representative sample](CONTENT-DESIGN-SAMPLES.md) demonstrates O-04.2 only; the full mission's gate and rubric remain to be developed/reviewed. |
| PM-05 — Compare conversion offers | Mechanism/target, redemption/conversion distinction, route type, and local payout/cost comparison: O-05.1 to O-05.4. | Proposed open comparison exercise. No real trade, signup, or P2P contact. |
| PM-06 — Complete the transfer review | Consistent send request, correct supplied-cost reasoning, uncertainty, and final decision: O-06.1 to O-06.4. | Candidate selected gate: applicable O-04.2/O-04.3 and O-06.1/O-06.2 evidence. Publish the accepting check/challenge versions explicitly. |
| PM-07 — Reconcile the payment | Stage/status interpretation, acceptance conditions, explorer limits, and suitable records: O-07.1 to O-07.4. | Proposed open read-only exercise using mock records; no live personal address required. |
| PM-08 — Complete the everyday-use challenge | Action identification, permission reasoning, disconnect/revoke distinction, and combined decision: O-08.1 to O-08.4, with identified earlier outcomes reused. | Candidate selected gate: applicable secret-safety, compatibility, send-review, and permission evidence (O-02.3/O-04.2/O-06.1/O-08.1/O-08.2). Review whether this is a proportionate gate rather than require every prior module. |

Before a mission is offered as current evidence, its approved version must specify required outcomes, essential decisions, acceptable responses/rationale, feedback, retry variants, nonessential scoring if any, and accepted prerequisite evidence. There is no universal pass percentage, question count, review schedule, or proof of general real-world readiness in this inventory.

Completion, check pass, demonstrated practice, and recommended review remain separate (FS-02 to FS-05). A challenge can establish mapped outcomes without inventing reading history. Outcome-neutral edits preserve credit; material changes preserve historical results and explain any current refresh requirement. Confirmed essential errors pause affected current activity or require a corrected prerequisite as specified in FS-11.

## Living crypto coverage map

Placement describes intended treatment, not the existence of content or an approved specialist launch backlog:

- **F — Foundation:** bounded practical literacy within the eight modules.
- **S — Later specialist track:** deeper study after relevant foundation/technical prerequisites and a separate scope decision.
- **R — Reference-only:** glossary, reviewed introduction, explainer, country guide, or editorial context; no standalone curriculum achievement merely for reading it.
- **U — Research needed:** an unresolved claim, implementation, applicability, or emerging subject. Investigate before deciding its treatment or making a teaching claim.

An entry may have F treatment and S depth, or an R destination contingent on U research. This explicit separation prevents a broad map from becoming an implicit commitment to cover every topic at launch. A subject not listed can be added with its evidence gap and proposed placement; the map is intentionally maintainable rather than a claim of exhaustive crypto knowledge.

| ID / area | Proposed placement and coverage | Foundation boundary, dependency, or research trigger |
| --- | --- | --- |
| TOP-01 — Money and payment choices | F: value, payment routes, practical trade-offs. S: monetary history, inflation, currency systems, adoption and economic effects. | M-01/M-05 compare supplied conditions. Macro claims require independent research and labelled country context. |
| TOP-02 — Bitcoin | F: BTC, authorisation, shared records, confirmation/privacy responsibilities. S: UTXOs, scripts, issuance, mining, node verification, Lightning and other scaling systems. | M-01/M-07 introduce the user decision; do not generalise Bitcoin mechanics to every network. |
| TOP-03 — Ethereum and programmable networks | F: ETH, tokens, contracts and permission basics. S: EVM, account types, execution, proof of stake, validators, staking mechanics and upgrades. | M-01/M-08 give bounded literacy. Specific behaviour needs network/version/account-model evidence. |
| TOP-04 — Other chains and asset representations | F: network-specific identity/support. S: non-EVM models, token standards, native/wrapped/bridged assets and interoperability trade-offs. R: selected reviewed ecosystem introductions. | M-04 verifies a route; no promise of an asset hub or course for every chain/ticker. |
| TOP-05 — Custody and operational security | F: control, provider dependence, backups, secrets and devices. S: hardware, multisignature/threshold arrangements, custody policies, inheritance and incident planning. | M-03. Advanced configurations need model-specific source/subject review; hardware does not make every signature safe. |
| TOP-06 — Recovery alternatives | F: different custody/recovery models have different conditions. S: smart accounts, social recovery, passkeys, multiparty models and provider-managed recovery. U: exact failure/recovery claims of selected products. | M-03 introduces alternatives without telling learners that all passwords can be reset or all wallets use phrases. |
| TOP-07 — Transaction lifecycle and finality | F: submitted/pending/failed/confirmed/credited/paid out. S: mempools, nonces, replacement, ordering, reorganisations, probabilistic/deterministic finality and settlement assumptions. | M-06/M-07. Provider acceptance and network finality remain distinct; refresh when example rules change. |
| TOP-08 — Fees and transaction costs | F: fee asset, gas versus cost, estimates, spreads and payout charges. S: fee markets, dynamic fees, L2 data costs, sponsored fees and transaction batching. | M-06 uses explicit supplied rules. Live rates/fees require dated data; there is no universal cheapest route. |
| TOP-09 — Consensus, nodes and network incentives | F: a minimal account of network processing and ledger agreement. S: PoW/PoS and other designs, validator/miner incentives, fork choice, node roles and attack assumptions. | L-01.2 introduces the role of agreement, not consensus engineering. |
| TOP-10 — Scaling and network layers | F: identify the selected route/network. S: L1/L2, rollups, sidechains, state/payment channels, sequencers, data availability and withdrawal conditions. | M-04 provides compatibility literacy. Architectural labels do not establish equal security or receiving support. |
| TOP-11 — Bridges and interoperability | F: distinguish a network/representation before sending; do not initiate a bridge. S: bridge designs, trust/security assumptions, messaging, withdrawal and representation risks. | Requires M-04/M-08 plus contract/custody foundations. Current bridge mechanics and incidents need targeted research. |
| TOP-12 — Stablecoin models | F: targets and basic reserve-backed/crypto-collateral/algorithmic distinctions. S: collateral ratios, liquidation, stabilisation mechanisms, governance and failure modes. | M-05 introduces mechanisms and limitations without presenting a peg as a guarantee. |
| TOP-13 — Stablecoin redemption and reserves | F: holding versus eligible redemption/conversion; issuer/collateral, liquidity, restriction and local-currency risks. S/R: issuer-specific disclosures, reserve composition and assurance limits. | M-05. Terms/eligibility can change; reserve attestations and audits must not be treated as interchangeable evidence. |
| TOP-14 — Centralised services and exchanges | F: custodial account/control, supported deposit routes and payout conditions. S: order books, operational/counterparty risk, service evaluation and custody structures. R: dated selected-service context. | M-03/M-04/M-05. No provider is selected, tested, or endorsed here. |
| TOP-15 — Decentralised exchanges | F: distinguish on-chain interaction from a centralised service. S: AMMs, order books, routing, slippage, price impact, liquidity and MEV exposure. | L-05.3 is comparative literacy, not a swap tutorial. Deeper practice follows permission/network/cost skills. |
| TOP-16 — P2P and local payout routes | F: counterparty, payment-evidence, cost and dispute questions. R/U: country/provider-specific payment rails, escrow, bank/mobile-money terms, eligibility and restrictions. | M-02/M-05. A screenshot is not proof of receiving funds; exact service protections need current evidence. |
| TOP-17 — Scams and social engineering | F: impersonation, urgency, false promises, secret requests, misleading receipts and source verification. S/R: address poisoning, malicious approvals, wallet-draining campaigns, SIM/device risks and incident studies. | M-02 revisited throughout. Source the specific attack rather than imply every suspicious message has the same mechanism. |
| TOP-18 — Signatures, approvals and permissions | F: connection/signature/approval/transfer distinctions, scope and revoke/disconnect. S: permit-based authorisation, sessions, delegated permissions, account-specific validation and contract roles. | M-08. Signing without an immediate gas fee can still grant authority; actual model-specific claims need review. |
| TOP-19 — Privacy and traceability | F: public ledger information and privacy implications. S: chain analysis, address clustering, wallet/network metadata, privacy systems and cryptographic techniques. R/U: jurisdictional treatment of particular privacy tools. | M-07 avoids equating pseudonyms with anonymity. No collecting a learner's real address is needed for assessment. |
| TOP-20 — Research and tokenomics | S: allocation, emissions, unlocks, vesting, incentives, ownership concentration, governance, token utility and evidence quality. R: selected glossary/explainers. | Foundation asset identity is preparation, not project-evaluation competence. Project claims need independent corroboration. |
| TOP-21 — Markets and investing | S: market structure/cycles, liquidity, market capitalisation, portfolio reasoning, drawdowns and risk. R: dated market context. | Not required for the everyday-use promise. Learning rewards do not depend on holding assets or making gains. |
| TOP-22 — Trading and derivatives | S: orders, spreads, execution, position sizing, leverage, margin, liquidation, futures/options/perpetuals and strategy evaluation. | Separate later-track decision, after risk prerequisites. No trading signals, real-money task, or leverage mission is added to launch. |
| TOP-23 — DeFi lending and yield | S: collateral, lending/borrowing, utilisation, interest, liquidation, vaults, yield aggregation and protocol dependencies. | Requires custody/network/permissions plus contracts and risk. Explain the source and conditions of returns rather than imply a reward is guaranteed. |
| TOP-24 — Liquidity provision and staking | S: liquidity pools, liquidity risk/impermanent loss, protocol staking, delegated/liquid staking and slashing where applicable. U: model-specific restaking/shared-security and layered yield claims. | Different uses of “staking” must be separated; a marketing label is not a mechanism. |
| TOP-25 — Oracles and external dependencies | S: price/data feeds, freshness, manipulation, trust and failure propagation. R: basic definitions when news needs them. | Contracts/DeFi and source-verification prerequisites; source the selected feed/model. |
| TOP-26 — MEV and transaction ordering | S: ordering incentives, sandwich/execution effects, block construction and mitigation trade-offs. | Relevant after transaction/DEX mechanics. Distinguish demonstrated mechanism from a general accusation of manipulation. |
| TOP-27 — NFTs and digital rights | S: standards, provenance, marketplaces, royalties, storage and rights limits. R: reviewed introductions and news context. U: item-specific IP/licensing/legal claims. | Token ownership must not be taught as automatic copyright, physical ownership, or perpetual content availability. |
| TOP-28 — DAOs and governance | S: voting, delegation, treasury controls, participation, capture and governance processes. R/U: legal status/liability and country context. | Distinguish on-chain authority from organisational or legal claims. |
| TOP-29 — Gaming, identity and social applications | S: application mechanics, incentives, identity/credentials, ownership, permissions and data use. R: selected explainers/stories. U: actual product usefulness and advertised benefits. | Do not infer adoption or learner demand from token marketing; application claims need direct evidence. |
| TOP-30 — Real-world assets and tokenisation | S: claimed rights, custody, redemption, issuers, servicing and legal/enforcement dependencies. R/U: specific structures, securities/property treatment and country applicability. | A token representation is not independent proof of an enforceable claim on an underlying asset. |
| TOP-31 — DePIN and decentralised infrastructure | S/R: network incentives, physical service verification, hardware/data dependencies and business models. U: specific usage/revenue/decentralisation claims. | Separate an intended network design from measured service delivery and activity. |
| TOP-32 — Building applications | S: wallet/application interfaces, account/transaction models, contracts, standards, libraries, test environments and deployment lifecycle. | Technical prerequisites and a separate later course. This planning engagement does not create code or install a development stack. |
| TOP-33 — Development and protocol security | S: contract testing, threat models, audits, upgrades/admin authority, key management, exploit classes, bridge/oracle dependencies and incident response. | Advanced building/protocol prerequisites. An audit or hardware device is not a guarantee against every failure. |
| TOP-34 — Cryptography and advanced proofs | S: hashes, signatures, commitments, Merkle structures, zero-knowledge proofs and relevant security assumptions. R: simple term explanations. U: selected advanced/new implementation claims. | Foundation uses only the concepts needed for authorisation/verification; mathematical depth is optional. |
| TOP-35 — Network economics and environmental effects | S/R: incentives, decentralisation measures, energy/resources, sustainability and social/economic trade-offs. U: contested measurement/comparison claims. | Use reproducible definitions and independent evidence; do not repeat unsourced marketing comparisons. |
| TOP-36 — Explorers, glossary and research references | F: basic mock explorer reading. R: searchable definitions, selected standards, source-reading guides, asset introductions and dated data context. | M-07 covers a limited explorer task. Reference reads do not award mastery or promise a live analytical tool at launch. |
| TOP-37 — Regulation, consumer rights and taxation | F: know that route/country obligations and useful records may matter. R/U: selected jurisdictions' legal status, licensing, taxes, reporting, consumer rights and record requirements. | COUNTRY review and initial-country approval required. Avoid continent-wide legal/tax statements or treating a literacy speech as legal authority. |
| TOP-38 — Payments, regional access and cash alternatives | F: compare supplied practical routes and access conditions. R/U: country-specific remittances, merchant use, local bank/mobile-money access and infrastructure constraints. | West African focus is approved; the supported-country list and suitability of particular routes remain open. |
| TOP-39 — CBDCs, tokenised deposits and other digital money | R/U: distinctions among public/private digital-money models, rights and relevant policy context. S if later research warrants a comparative course. | Do not label every digital balance or central-bank instrument as cryptocurrency; scope follows reviewed sources. |
| TOP-40 — Emerging accounts and chain abstraction | U/S candidate: intents, cross-network routing, fee sponsorship, embedded wallets and changing user-authorisation/recovery models. | Research the actual trust/permission model and failure handling before translating it into safer/easier-use claims. |
| TOP-41 — Emerging modular and interoperability designs | U/S candidate: modular stacks, shared security, new data-availability systems, cross-chain account/message schemes and evolving proof systems. | Separate published design, deployed behaviour, and independent security findings; no launch promise. |
| TOP-42 — AI, automation and crypto | U/R candidate: autonomous agents, wallet delegation, automated strategies, AI-generated scams/reporting and decentralised AI claims. | Investigate the concrete authority, data/source quality and measured usefulness. No automated investment or wallet agent is added to scope. |
| TOP-43 — Longer-horizon security and research | U/R candidate: post-quantum proposals, protocol migrations, formal verification developments and other unresolved research. | Mark threat assumptions, maturity and uncertainty; do not turn a speculative scenario into a present universal claim. |

## Later-track organisation

| Proposed track | Main coverage | Entry assumptions and scope boundary |
| --- | --- | --- |
| Advanced practical use | Custody, recovery, privacy, payment routes, networks/scaling and bridges. | Relevant foundation outcomes; provider/country-specific review. No implied real-money requirement. |
| DeFi | Contracts, DEXs, lending, liquidity, staking/yield, oracles, liquidation and dependencies. | Permissions, networks, cost/risk and basic contracts; separate track approval and simulation design. |
| Research and market understanding | Tokenomics, source evaluation, market structure, investing/risk and on-chain analysis. | Basic literacy and evidence interpretation; distinct from executing trades. |
| Trading and derivatives | Execution, sizing, leverage, liquidation and derivative mechanisms. | Market/risk prerequisites and explicit later scope decision; not a mandatory progression stage. |
| Technology, building and security | Consensus, nodes, scaling, cryptography, application/contract development and security. | Technical prerequisites identified per course; learning-platform planning remains noncode. |
| Applications, governance and wider context | NFTs, DAOs, identity/gaming, RWA, DePIN, economics and jurisdictional topics. | Foundation plus topic-specific preparation; legal/applicability claims require targeted research. |

Track titles, ordering, and number are proposals. A topic may support several tracks through shared canonical lessons; duplicating topic names should not duplicate learner achievements. Technical depth and practical experience are different dimensions rather than one ladder ending in trading.

## Articles, reference content, and learning connections

Public News, Explainers, and Stories remain independently useful. They can point to foundation lessons and later reviewed reference content without requiring the reader to complete a course. Asset/topic hubs use canonical identities; a story's incidental country mention is not a claim that its instructions apply there.

| Editorial situation | Useful connection | Credit rule |
| --- | --- | --- |
| A stablecoin moves away from its target | L-05.1/L-05.2; PM-05 when available and applicable. | Reading/saving does not pass KC-05 or demonstrate PM-05. |
| A network disruption or deposit-route change | L-04.2 and L-07.1/L-07.2; an applicable route-check mission. | Article freshness is not an assessment version or prerequisite result. |
| A permissions/impersonation incident | L-02.2/L-02.3 and L-08.1/L-08.2/L-08.3. | An article reflection is not scored curriculum evidence unless separately designed and approved. |
| A freelance-payment or merchant story | L-01.4/L-05.4/L-06.2/L-07.4; relevant country reference once researched. | A case study does not establish typical outcomes, universal legality, or that the reader should use its route. |
| An unfamiliar coin, DAO, NFT or emerging-topic development | A reviewed glossary/hub introduction and the prerequisite concepts that explain the claim. | A news event does not automatically add a specialist course or change the foundation denominator. |

## Correctness and maintenance checks before publication

- Check the wallet/account model: funds are represented in ledger state, and interfaces, custody, keys, passwords, and recovery methods are not interchangeable.
- Verify the exact network and asset representation. Address appearance, ticker matching, or a small test transfer is not a substitute for receiving-route support and required destination details.
- Separate stability target, issuer redemption eligibility, market conversion, platform credit, and local-money payout. Explain restrictions and model-specific risks without presenting token ownership as an insured bank deposit.
- Distinguish gas units, actual/estimated network fees, fee sponsorship where applicable, provider charges, conversion spreads, and sender-versus-recipient fee treatment.
- Distinguish rejected, included-but-failed, successful, confirmed/finalised, provider-credited, and paid-out states. Source the example's acceptance requirements rather than teach universal timing.
- Check authorisation semantics: connection, signatures, permissions, transfers, and revoke/disconnect are different; a signature without an immediate fee can still matter.
- Explain public-record visibility and privacy limits. Do not require real learner credentials, addresses, funds, or wallet connections in foundation practice.
- Review examples across Nigeria and other West African contexts. Fictional figures remain labelled; actual rates and country/provider facts require dated sources and applicability.
- Review Pidgin for variety, naturalness, and comprehension outside Nigeria; removing the aside must remove no required meaning. Preserve the same canonical outcome/version relationships when translations are introduced.

Each publishable lesson/assessment needs a source/dependency record: identity/version, supported claim, network/account/provider/country applicability, source URL/date and actual inspection date, reviewer, affected outcomes/checks/missions, update trigger, and unresolved limits. This draft identifies categories and dependencies; it does not fabricate completed review records.

Review frequency follows the volatility and consequence of the claim: conceptual vocabulary, current provider interfaces, issuer terms, country rules, news, and prices do not share one universal schedule. Material changes preserve historical achievements while clearly identifying current applicability or a focused refresh. Design-level walkthroughs cannot prove implemented saving, gating, keyboard behaviour, or application performance.

## Detailed assessment and launch proposals

[Assessment Rules](ASSESSMENT-RULES.md) develops all 32 outcomes into proposed evidence, eight mission rubrics/gates, rationale/version/retry rules and added bounded M-02/M-07 samples. The original O-04.2 sample boundary and every existing candidate gate remain. Full approved banks are not produced by these tables. [Launch Scope](LAUNCH-SCOPE.md) and [Editorial Operating Plan](EDITORIAL-OPERATING-PLAN.md) define the proposed seed boundary and separate content/review effort.

## Scope recommendations and remaining choices

Recommended content boundary for review: keep the eight practical foundation modules; use the 32-lesson inventory to estimate writing/review effort; produce and review representative content before expanding across the whole inventory. Keep deep consensus, trading, DeFi, cryptography, and specialised applications in separately approved later tracks. Maintain glossary/hub introductions as bounded reference content, with no commitment to every asset or trending topic.

COUNTRY, PROVIDER, and ISSUER examples are the main factual dependencies for safe-use content. Initial country/asset/provider examples should be selected for accuracy, relevance, and maintainability under PD-01, rather than silently choose a platform or imply regional availability. Not every specialist topic needs immediate research; prioritise gaps that affect a foundation outcome or a planned article.

Remaining choices:

1. **PD-01 — Inventory and examples:** approve/refine the 32 proposed lessons and the initial country/asset/account models to illustrate them; determine whether any lesson needs splitting or combining after representative review.
2. **PD-02 — Evidence and gates:** review KC-04/PM-04 first, then decide exact essential decisions, rationale format, remaining mission gates, challenge equivalence, nonessential scoring, and content-specific review prompts.
3. **PD-03/PD-10 — Sustainable breadth:** agree the initial reference/article backlog and review capacity; sequence later tracks and French publication separately from foundation approval.

No learner interviews, usability sessions, complete assessment banks, independent subject-review approval, or application acceptance tests have been conducted by this inventory. The Research and Design Plan records the next validation and handoff work.
