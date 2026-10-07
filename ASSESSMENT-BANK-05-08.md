# Wetin Be Crypto — Full Draft Assessment Forms, Modules 05–08

Version: 0.1
Date: 7 October 2026
Status: Complete draft wording for review, not approved scored activities. The owner has adopted the eight-module/32-lesson baseline and criterion-based structured assessment model. Individual criteria, gates, forms, equivalence, subject accuracy and learner comprehension still require actual review.

Related: [Assessment Rules](ASSESSMENT-RULES.md), [Curriculum Coverage](CURRICULUM-COVERAGE.md), [Content Design Samples](CONTENT-DESIGN-SAMPLES.md), [Voice and Editorial Guide](VOICE-AND-EDITORIAL-GUIDE.md), [Evidence Register](EVIDENCE-REGISTER.md).

## Delivery and assessment contract

This file contains KC-05–KC-08 primary A and retry B forms, and PM-05–PM-08 primary A and retry B forms. Each KC has eight paired items: two for each module outcome. Each PM has six paired decisions, with some decisions combining explicitly listed outcomes. A combined criterion requires all its stated parts; a correct answer to one part is insufficient. These are **64 check items plus 48 mission decisions**, not 112 proven independent measures or an optimal bank size. Every paired item requires one Action and one Reason choice. Choice labels restart at each item; keys specify both labels. There is no percentage average: every published C criterion and E criterion with its rationale must be met. Incorrect E criteria cannot be offset by other answers.

Before starting a form, learners see its four mapped outcomes, required criterion IDs/classes and this passing rule, but not the keys. E = essential decision; C = required concept/application. Classes are draft classifications for qualified review. A passed full KC can provide only its declared four-outcome set under an approved mapping; a failed form does not automatically create reusable partial gate credit. Mission evidence and experienced-entry equivalence need their own approved mappings. Reading lessons, articles, hubs or glossary entries, and saving articles, confer no check pass or prerequisite credit.

All DEMO names, addresses, transaction identifiers, balances, fees, rate units and provider rules are author-defined fictional fixtures. No real wallet connection, secret, address, exchange, explorer, payment or transaction is requested. No legal availability, current provider support, real redemption offer or expected financial return follows from these examples. A structured “continue” answer means only the explicitly named fictional review step; it never instructs a real transaction.

**Facilitator-only keys are separate from learner prompts below.** The whole planning document is a review artifact, not a public lesson export. Eventual delivery must exclude unreleased keys, explanations and reviewer notes from public HTML, REST responses, search snippets, cached pages and downloads. Learner-session extracts omit keys and record prior exposure. Feedback can show the corresponding explanation after submission; retry form B changes relevant facts and is not just shuffled choices. Both forms need an independent difficulty/equivalence and answer-cue review before interchangeable scoring. Forms use clear English; Pidgin comprehension is never assessed.

## KC-05-A — Stablecoin and conversion decisions

Mapped outcomes: O-05.1–O-05.4. Required: K5A1–K5A8 and both choices per item.

Fixture: All assets target one USD per token. ReserveDemo reports issuer-held reserves and conditional issuer redemption. CollateralDemo uses crypto collateral and liquidation rules. AlgoDemo attempts supply/incentive adjustment without a stated reserve claim. ReserveDemo's fictional issuer allows direct redemption only for approved institutional accounts meeting stated checks; our learner is not eligible. Market quote today is USD 0.97 per ReserveDemo token. A token holder is not automatically an approved issuer customer. AccountDesk holds customer balances, accepts a submitted conversion order and requires a separately specified bank-payout process. ChainSwap trades through supplied on-chain contracts; it requires an asset-specific spending permission and network fee, and offers tokens rather than a bank transfer.

For the final comparison use 100 ReserveDemo. Desk A buys them at 150 DEMO-LOCAL per token, deducts a 300 DEMO-LOCAL conversion fee and a 200 DEMO-LOCAL payout fee; payout conditions and a support/dispute channel are explicitly supplied. Seller B offers 155 per token, a 500 conversion fee and an unspecified payout charge; the only claimed payout evidence is B's screenshot. These are fictional offers, not live rates.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K5A1 / O-05.1 / C | A: Target USD 1; observed quote USD 0.97. B: Target USD 0.97; observed quote USD 1. C: Target USD 1; observed quote USD 1. | A: The reserve target determines the exchange quote. B: The latest quote changes the reference target. C: Reference target and observed price are separate facts. |
| K5A2 / O-05.1 / C | A: Classify each as reserve-backed, with different reserve managers. B: Classify reserve backing, crypto collateral and supply/incentive adjustment separately. C: Classify each as crypto-collateralised, with different liquidation rules. | A: The descriptions imply different reserve, collateral and incentive risks. B: The common reference target establishes a common reserve mechanism. C: The common reference target establishes a common collateral mechanism. |
| K5A3 / O-05.2 / E | A: Treat possession as sufficient for the next issuer-redemption request. B: Treat AccountDesk conversion as an issuer-redemption request. C: Treat direct issuer redemption as unavailable under these eligibility rules. | A: This learner lacks the required issuer-account eligibility. B: The token balance satisfies the issuer-account conditions. C: The desk quote satisfies the issuer-account conditions. |
| K5A4 / O-05.2 / C | A: Separate holding, redemption, conversion and payout; inspect restrictions/liquidity. B: Treat conversion approval as completion of redemption and payout. C: Treat reserve reporting as confirmation of redemption and payout access. | A: The desk and issuer perform the same redemption/payout stages. B: The stages have separate terms, authority and failure conditions. C: The reserve description establishes the local receiving-account balance. |
| K5A5 / O-05.3 / C | A: Treat both as account-balance orders controlled by service providers. B: Distinguish AccountDesk's internal order from ChainSwap's permission-based execution. C: Treat both as contract interactions controlled by the token holder. | A: Both displayed quotes imply the same custody arrangement. B: Both token outputs imply the same execution arrangement. C: The supplied controller and execution facts distinguish the routes. |
| K5A6 / O-05.3 / E | A: Treat the swap's token output as completed local payout. B: Treat the displayed quote as sufficient permission review. C: Review spender/scope and execution; verify local payout separately. | A: The quote establishes neither appropriate authority nor local receipt. B: The quote establishes an account credit through the swap. C: The quoted output incorporates the separate bank-payout process. |
| K5A7 / O-05.4 / C | A: A net 15,000; B net remains unknown. B: A net 14,500; B net remains unknown. C: A net 14,500; B net 15,000 confirmed. | A: A deducts both fees; B's payout fee remains unspecified. B: A's provider fee is the only charge deducted. C: B's omitted payout charge can be treated as zero. |
| K5A8 / O-05.4 / E | A: Prefer A for next review; B needs fees/receiving evidence. B: Prefer B for next review on its screenshot/rate alone. C: Prefer B for next review, treating its omitted fee as zero. | A: The higher rate establishes independently received local money. B: The screenshot establishes the missing payout charge and receipt. C: A supplies terms; B lacks full cost/receipt evidence. |

### Facilitator-only KC-05-A key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K5A1 | A / C | USD 1 is the reference target; USD 0.97 is the supplied market price. Neither implies the future price. |
| K5A2 | B / A | Identify all three mechanism families without claiming the classification audits reserves or proves stability. |
| K5A3 | C / A | Actual supplied eligibility, rather than possession, governs direct issuer redemption. |
| K5A4 | A / B | Distinguish all four stages plus restriction/liquidity conditions; a reserve claim does not prove local payout access. |
| K5A5 | B / C | Separate the internal account order from the on-chain contract/permission process. Custody/interface labels alone are not enough. |
| K5A6 | C / A | Review consequential authority and the separate payout route. Do not equate swap output with bank settlement. |
| K5A7 | B / A | A net is 14,500 DEMO-LOCAL. B gross 15,500 less 500 leaves 15,000 before an unknown payout charge, so no complete net comparison. |
| K5A8 | A / C | A can proceed to the next mock review on given terms, with its actual payout evidence still required at receipt. B needs the missing fee and independent receiving record. |

## KC-05-B — Retry with eligible redemption and a complete alternative

Mapped outcomes: O-05.1–O-05.4. Required: K5B1–K5B8. Do not substitute these facts into form A.

Fixture: ReserveTwo targets USD 1; market quote is USD 1.02. Its issuer-backed reserve model is distinct from CryptoTwo's volatile crypto collateral/liquidation model and RuleTwo's supply/incentive model. Our fictional organisation has an independently confirmed approved issuer account, meets the supplied redemption minimum/verification conditions, and is not restricted for this example. Direct redemption can be requested at the stated contractual rate, subject to the supplied processing rules; there is no automatic local-currency bank payout. An issuer restriction can affect transfers under the supplied terms, while a thin conversion market can affect executable quotes.

For 80 tokens, Account R buys at 200 DEMO-LOCAL/token, deducts 500 conversion and 300 payout; its payout record is not yet available. Counterparty S buys at 202, deducts 160 conversion and 200 payout. The supplied exercise independently verifies S's identity, current terms, receiving account and the stated dispute route, and later shows a matching local receiving credit of 15,800. ChainTwo is an on-chain swap route delivering another token, with a declared permission and estimated network fee; Account R controls an internal account conversion.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K5B1 / O-05.1 / C | A: Treat USD 1.02 as the revised target and quote. B: Separate the USD 1 target from the USD 1.02 quote. C: Treat USD 1 as the target and present quote. | A: Observed quotes may exceed the stated reference target. B: The observed premium revises the issuer's reference target. C: The reported reserves establish today's third-party quote. |
| K5B2 / O-05.1 / C | A: Classify CryptoTwo as reserve-backed; RuleTwo as crypto-collateralised. B: Classify all three as reserve-backed with different issuers. C: Classify reserves, crypto collateral and supply/incentive rules separately. | A: The asset names establish equivalent redemption arrangements. B: The stated mechanisms expose different potential failure conditions. C: The shared target establishes identical collateral arrangements. |
| K5B3 / O-05.2 / E | A: Allow next eligible redemption review; retain separate payout conditions. B: Decline next redemption review because token holders cannot qualify. C: Allow redemption to the organisation without checking processing conditions. | A: The token balance itself supplies the required account approval. B: The verified account status establishes completed issuer processing. C: The organisation qualifies here; redemption and payout remain separate. |
| K5B4 / O-05.2 / C | A: Use target price alone to assess transfer/withdrawal access. B: Inspect issuer restrictions and market liquidity alongside target price. C: Use the premium alone to assess executable conversion/payout. | A: The stated restrictions/liquidity affect this conversion route. B: The premium removes the supplied transfer restriction. C: Eligible redemption establishes executable liquidity at Account R. |
| K5B5 / O-05.3 / C | A: Distinguish R's account conversion from ChainTwo's permission-based swap. B: Treat R and ChainTwo as separately completed bank payouts. C: Treat R and ChainTwo as issuer-redemption arrangements. | A: The reference target establishes both routes' controller. B: The supplied controller/execution paths distinguish these routes. C: The displayed token output establishes the bank receiving stage. |
| K5B6 / O-05.3 / E | A: Treat the swap output as net local-currency payout. B: Approve the spender on the fee estimate alone. C: Review swap authority/output/fees; verify local settlement separately. | A: The chain quote contains the separate bank-payout stage. B: Quotes establish neither local receipt nor appropriate authority. C: The fee estimate establishes a non-spending signature payload. |
| K5B7 / O-05.4 / C | A: R net 15,200; S net 15,800 DEMO-LOCAL. B: R net 16,000; S net 16,160 DEMO-LOCAL. C: R net 15,500; S net 16,000 DEMO-LOCAL. | A: Net proceeds deduct both supplied charges from gross. B: Compare gross proceeds before subtracting either charge. C: Subtract conversion charges while excluding the payout charges. |
| K5B8 / O-05.4 / E | A: Treat S's matched receipt as still unverified despite independent access. B: Recognise S's matched independent local credit under supplied terms. C: Treat R's quoted conversion as its completed local payout. | A: R's quoted conversion establishes its receiving-account record. B: A conversion quote and receiving credit represent the same stage. C: S's matched independent receipt establishes this specific payout. |

### Facilitator-only KC-05-B key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K5B1 | B / A | A premium is possible in this fixture; target and market quote remain different facts. |
| K5B2 | C / B | Distinguish all three mechanisms and their risk types, without declaring actual reserve adequacy. |
| K5B3 | A / C | Recognise affirmative supplied eligibility. Request permission is not completed redemption or guaranteed local payout. |
| K5B4 | B / A | Issuer restrictions and market liquidity are separate relevant route conditions. |
| K5B5 | A / B | The controller/execution facts distinguish internal account conversion from the on-chain exchange. |
| K5B6 | C / B | Correctly bounded permission/output/fee checks and separate bank route remain necessary. |
| K5B7 | A / A | Net arithmetic includes both fees and preserves DEMO-LOCAL units. |
| K5B8 | B / C | Do not teach permanent scepticism of genuine independent receipt. Recognise this matching credit, within its exact case. |

## PM-05-A — Compare the whole conversion route

Mapped outcomes: O-05.1–O-05.4. Gate: **none; open fictional comparison**. Required: P5A1–P5A6. Use the KC-05-A mechanisms and redemption conditions, but these new offers:

For 60 ReserveDemo, Acorn Desk quotes 145 DEMO-LOCAL/token, fee 200 conversion plus 100 payout; terms show a minimum 50 tokens, a defined independently accessed dispute channel and a payout still pending. Briar Desk quotes 150, deducts 300 conversion but omits payout fees and local withdrawal restrictions; it supplies only a sender screenshot. Cedar Swap executes a declared on-chain exchange from ReserveDemo to CollateralDemo, proposes a 400-token spending limit despite a 60-token intended swap, and provides no local payout service. Acorn's independently checked account record confirms its stated terms; no actual funds are moved in this exercise.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P5A1 / O-05.1 / E | A: Treat the USD 1 target as the current price across models. B: Separate target/quote and the reserve/collateral/incentive model risks. C: Treat USD 0.97 as the issuer-redemption rate across models. | A: Shared target does not erase mechanism or trading-price differences. B: Mechanism descriptions establish the same redemption protection. C: The local desk rate establishes the token's reference target. |
| P5A2 / O-05.2 / E | A: Use token possession as sufficient for direct issuer redemption. B: Use Acorn's internal order as completed issuer redemption. C: Exclude direct redemption here; assess conversion/payout terms separately. | A: This token quantity substitutes for issuer-account eligibility. B: Eligibility and stage conditions govern the available route. C: The conversion quote confirms the issuer-account approval. |
| P5A3 / O-05.3 / C | A: Distinguish desk account orders from Cedar's permission-based token swap. B: Treat Cedar's token output as completed local receiving credit. C: Treat all three quotes as the same account conversion process. | A: The reference currency identifies the local-money receiving stage. B: The displayed quote establishes each route's custody arrangement. C: The supplied controllers, execution paths and outputs differ. |
| P5A4 / O-05.3 / E | A: Accept 400-token authority for the stated 60-token task. B: Decline excess scope; request an explained task-bounded alternative. C: Accept the scope because no recovery phrase is requested. | A: The consequential scope exceeds the independently described task. B: The output quote establishes need for the larger limit. C: Secret-free requests do not grant consequential spending authority. |
| P5A5 / O-05.4 / C | A: Acorn net 8,700; Briar net 9,000 DEMO-LOCAL. B: Acorn net 8,500; Briar net 8,700 DEMO-LOCAL. C: Acorn net 8,400; Briar's final net remains unknown. | A: Use gross proceeds without conversion or payout deductions. B: Acorn deducts both; Briar lacks the payout charge. C: Treat the omitted payout charge as zero for comparison. |
| P5A6 / O-05.4 / E | A: Review Acorn next; keep payout pending and Briar's gaps unresolved. B: Review Briar next on its supplied screenshot and higher rate. C: Mark Acorn paid out because its minimum and terms match. | A: Meeting the minimum establishes receiving-account credit. B: The headline rate establishes Briar's dispute process. C: Comparable terms do not establish independently received payout. |

### Facilitator-only PM-05-A key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P5A1 | B / A | Establish target versus quote and all three mechanisms; no guaranteed target-price assumption. |
| P5A2 | C / B | The actual supplied issuer eligibility rules exclude direct redemption here. Neither desk conversion nor holding substitutes. |
| P5A3 | A / C | Account control/internal conversion differs from on-chain permission/execution; CollateralDemo is token output, not local payout. |
| P5A4 | B / A | Refuse unexplained excess authority; no real revocation/signing process is attempted. |
| P5A5 | C / B | Acorn 8,400; Briar 8,700 before unknown payout fee. Do not claim full net or ignore missing restrictions. |
| P5A6 | A / C | Choose bounded next review based on minimum/terms/costs/dispute channel; retain pending receipt and Briar's unresolved fee/withdrawal/evidence gaps. |

## PM-05-B — A verified receiving route changes the decision

Mapped outcomes: O-05.1–O-05.4. Gate: **none**. Required: P5B1–P5B6. Asset TwoReserve targets USD 1 with issuer reserve conditions; TwoCrypto uses crypto collateral/liquidation; TwoRule uses supply/incentive rules. TwoReserve's current quote is USD 1.03. The fictional learner organisation has verified eligible issuer-account status for direct redemption, subject to the supplied processing checks. A restriction notice says one specified destination cannot receive TwoReserve; eligibility does not override that notice.

For 40 TwoReserve, Delta Account quotes 180 DEMO-LOCAL/token, conversion fee 80 and payout fee 40; supplied minimum 20, independently verified identity/terms/dispute process. Its separate local receiving record later confirms 7,080. Echo Account quotes 184, fee 120 plus 40, but the learner's payout destination is unsupported in its stated rules. Foxtrot Swap outputs TwoCrypto on-chain, with exactly 40 TwoReserve authority to the independently specified contract and a stated 0.02 DEMO-GAS estimate; there is no bank-payout leg. The supplied task is to compare local-money routes, not trade tokens.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P5B1 / O-05.1 / E | A: Separate USD 1 target/USD 1.03 quote and three mechanisms. B: Treat USD 1.03 as the shared target and redemption value. C: Classify issuer reserves and crypto collateral as identical mechanisms. | A: The premium replaces the originally stated mechanism risks. B: Target, market quote and stabilising mechanism are distinct. C: The common name establishes equivalent reserve backing. |
| P5B2 / O-05.2 / E | A: Use eligible status to bypass the restricted-destination notice. B: Reject the independently confirmed eligible-account status. C: Allow conditional redemption review; honour the destination restriction. | A: Eligible status does not remove restriction or processing conditions. B: Eligible status establishes acceptance of the restricted destination. C: Holding the tokens establishes completed redemption processing. |
| P5B3 / O-05.3 / C | A: Treat Foxtrot's token quote as received local money. B: Distinguish account conversion from Foxtrot's scoped on-chain swap. C: Classify all three routes as direct issuer redemption. | A: The network-fee estimate establishes local settlement. B: The specified spender establishes the token's reference target. C: Controller, permission, output and payout stages differ here. |
| P5B4 / O-05.3 / E | A: Recognise bounded mock authority; exclude absent local-payout leg. B: Decline the request as private-key disclosure by definition. C: Treat bounded authority as confirmation of completed bank payout. | A: Task-bounded authority does not supply the separate payout stage. B: The approved token amount establishes local receiving-account credit. C: The described signature directly discloses the private key. |
| P5B5 / O-05.4 / C | A: Delta net 7,200; Echo net 7,360; both accessible. B: Delta net 7,080; Echo arithmetic 7,200, destination unsupported. C: Delta net 7,080; Echo net 7,080; both accessible. | A: The displayed rate includes charges unless stated otherwise. B: Higher net arithmetic substitutes for destination eligibility. C: All charges matter; the destination condition still applies. |
| P5B6 / O-05.4 / E | A: Treat Delta's independent receipt as only a sender assertion. B: Choose Echo's larger total despite its unsupported destination. C: Recognise Delta's matching local credit; exclude Echo's destination. | A: Matched independent receipt and supplied terms establish this case. B: The larger total establishes acceptance of the receiving destination. C: The sender image and receiving-account record have equal authority. |

### Facilitator-only PM-05-B key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P5B1 | A / B | All three model families, USD 1 target and USD 1.03 observed quote are distinguished. |
| P5B2 | C / A | Recognise positive eligible-account facts while retaining restriction/processing and separate payout boundaries. |
| P5B3 | B / C | Distinguish controllers, exactly scoped permission and token output from account conversion/local payout. |
| P5B4 | A / A | Valid bounded mock authority is possible; it does not make a token swap a demonstrated local-money route. |
| P5B5 | B / C | Calculate both totals including every fee; Echo's unsupported destination prevents choosing it by arithmetic alone. |
| P5B6 | C / A | Delta's independent matching receipt establishes payout here. Supplied identity/terms/dispute checks and minimum are met; this is not a real provider recommendation. |

## KC-06-A — Review the request, fees and execution claim

Mapped outcomes: O-06.1–O-06.4. Required: K6A1–K6A8.

Fixture: Intended recipient DEMO-AMA, full destination `DEMO-ADDR-AMA-061`, 25 DEMO-TOKEN on DemoNet-P, required memo `DEMO-ORDER-61`. Independently supplied receiving instructions support that exact token/network/destination/memo. Screen X instead shows DEMO-BOLA, destination `DEMO-ADDR-BOLA-061`, 25 DEMO-TOKEN on DemoNet-P, memo `DEMO-ORDER-61`. Screen Y correctly matches the intent and instructions. No string here is a usable real address.

For Screen Y, the mock gas estimate is 20,000 computational units at 0.000002 DEMO-GAS per unit, so estimated network fee is 0.04 DEMO-GAS, paid separately by the sender. A separately stated provider charge is 0.50 DEMO-TOKEN paid in addition to the 25-token transfer; recipient receives 25. Sender has 30 DEMO-TOKEN and 0.10 DEMO-GAS. The fee and “about 2 minutes” are estimates, not guarantees. Record F was included but its execution failed: zero DEMO-TOKEN moved and 0.03 DEMO-GAS was charged. Record R was rejected before submission/inclusion for missing required data; this specific fixture explicitly records zero network fee.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K6A1 / O-06.1 / E | A: Accept X on matching amount/network/memo despite the destination. B: Pause X and reconcile its recipient/full-destination mismatch. C: Use X's memo as confirmation of the intended recipient. | A: Amount and network establish the intended destination. B: Matching memo establishes the displayed recipient's identity. C: The recipient/destination conflict with independently supplied intent. |
| K6A2 / O-06.1 / E | A: Confirm Y's recipient/token/network/destination/amount/required memo. B: Confirm Y's recipient/token/network and destination suffix only. C: Confirm Y's recipient/token/network/amount without required memo. | A: All supplied required request and destination fields agree. B: Matching destination suffix establishes the complete receiving route. C: A matching ticker makes the supplied memo unnecessary. |
| K6A3 / O-06.2 / C | A: Treat 20,000 units as the fee in DEMO-TOKEN. B: Deduct 0.04 DEMO-GAS from the recipient's 25 tokens. C: Distinguish 20,000 gas units from 0.04 DEMO-GAS fee. | A: Supplied units times price yields the gas fee. B: The transferred token is the network-fee asset here. C: The computational unit count is the recipient-token amount. |
| K6A4 / O-06.2 / C | A: Debit 25.50 tokens plus estimated 0.04 gas; recipient 25. B: Debit 25.54 tokens; recipient 24.96 tokens. C: Debit 25 tokens only; recipient 25 tokens. | A: Different asset units form a single transferable-token total. B: The provider charge and gas follow separate sender-paid rules. C: The network fee is deducted from the recipient here. |
| K6A5 / O-06.3 / C | A: Treat 0.04 gas and two minutes as fixed outcomes. B: Treat quoted cost and completion time as estimates. C: Treat quoted uncertainty as proof the request has failed. | A: Estimated cost/time does not establish either outcome. B: The screen quote fixes the later network conditions. C: A valid request requires a fixed completion-time commitment. |
| K6A6 / O-06.3 / C | A: Classify F and R as successful transfers with recorded costs. B: Classify F and R as unsubmitted rejections with zero cost. C: Classify F as included failure/0.03 gas; R as unsubmitted/zero fee. | A: Zero token movement establishes zero charged execution cost. B: The explicit records distinguish inclusion, outcome and stated costs. C: Opening a form establishes submitted network execution. |
| K6A7 / O-06.4 / E | A: Advance consistent Y with supplied budgets; retain estimate limits. B: Hold consistent Y because estimates imply a recipient mismatch. C: Advance X because its amount matches Y's 25 tokens. | A: Y's required fields/support/budgets permit the bounded next review. B: The fee calculation supplies the missing recipient verification. C: Uncertain completion time establishes incompatible receiving support. |
| K6A8 / O-06.4 / E | A: Advance X after confirming the network-fee arithmetic. B: Pause X; independently reconcile its recipient and destination. C: Substitute BOLA as intended recipient without independent confirmation. | A: The computed gas fee verifies the intended recipient. B: Matching memo replaces the conflicting recipient field. C: Fee arithmetic leaves the conflicting destination unresolved. |

### Facilitator-only KC-06-A key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K6A1 | B / C | X's recipient/full destination conflict with intent. Amount, network and memo do not erase the mismatch. |
| K6A2 | A / A | Check all six stated details, not an address suffix or ticker alone. |
| K6A3 | C / A | 20,000 computational units × 0.000002 DEMO-GAS/unit =0.04 DEMO-GAS estimated fee. |
| K6A4 | A / B | Separate 25.50 DEMO-TOKEN from 0.04 DEMO-GAS. Recipient 25 per the explicit fee model; adequate balances supplied. |
| K6A5 | B / A | Estimates are not guaranteed final cost or completion time; no failure inference merely from honest uncertainty. |
| K6A6 | C / B | Record F's zero token transfer and charged 0.03 gas differ from R's explicit zero-fee pre-inclusion rejection. Not universal fee rules. |
| K6A7 | A / A | Advance only the named mock review, retaining estimate limits and later status checks. |
| K6A8 | B / C | Pause for the independent recipient/destination verification; correct cost calculations cannot compensate. |

## KC-06-B — Retry with deduction fees and an unavailable fee asset

Mapped outcomes: O-06.1–O-06.4. Required: K6B1–K6B8.

Fixture: DEMO-KOFI requests 40 DEMO-TOKEN on DemoNet-Q at full destination `DEMO-ADDR-KOFI-062`, required tag `DEMO-TAG-9`. Current independent receiving instructions match. Screen U matches all fields except tag `DEMO-TAG-6`; Screen V matches all required fields. Mock computational gas is 12,000 units at 0.000003 DEMO-GAS/unit. Provider fee 1 DEMO-TOKEN is deducted from the 40-token amount, so the recipient would receive 39 and the sender's token debit remains 40; estimated 0.036 DEMO-GAS is additionally sender-paid. Sender has 50 DEMO-TOKEN but zero DEMO-GAS. A second mock budget W has 50 DEMO-TOKEN and 0.08 DEMO-GAS, and the intent explicitly accepts 39-token net receipt under this quote. “Normally 3–8 minutes” is a stated estimate, not a deadline guarantee. Failed included record F2 charged 0.02 DEMO-GAS and transferred zero tokens; a local form rejection R2 explicitly did not submit a transaction and charged no network fee.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K6B1 / O-06.1 / E | A: Pause U; independently reconcile the required tag mismatch. B: Advance U on its matching address and network. C: Remove U's tag and review the remaining matching fields. | A: The amount establishes attribution without the required tag. B: The supplied receiving route requires the exact tag. C: A matching address substitutes for the supplied tag condition. |
| K6B2 / O-06.1 / E | A: Match V's name/ticker and destination suffix only. B: Change V to a cheaper network without supplied support. C: Match V's recipient/destination/token/network/40 amount/required tag. | A: Matching fields establish neither net intent nor gas availability. B: A familiar recipient name verifies the complete destination. C: The lower quote establishes receiving support on another network. |
| K6B3 / O-06.2 / C | A: Separate 12,000 gas units from the 0.036 DEMO-GAS fee. B: Treat 12,000 computational units as DEMO-TOKEN charge. C: Treat 39 recipient tokens as the computational gas amount. | A: The transferred-token balance identifies the network-fee asset. B: Unit count times price yields the stated gas fee. C: The recipient amount specifies how much computational gas was used. |
| K6B4 / O-06.2 / C | A: Debit 41 tokens; recipient 40; gas included. B: Debit 40 tokens; recipient 39; require separate 0.036 gas. C: Debit 40.036 tokens; recipient 40 tokens. | A: The provider fee is extra sender-paid tokens here. B: Network fee and transferred tokens use the same stated asset. C: Token deduction and separate gas follow different supplied rules. |
| K6B5 / O-06.3 / C | A: Retain time/fee estimates; inspect actual later records. B: Treat eight minutes and 0.036 gas as fixed limits. C: Classify a delay beyond eight minutes as permanent loss. | A: The estimate describes uncertainty without establishing actual completion. B: The normal timing range is a binding deadline. C: Elapsed estimated time substitutes for the transaction outcome record. |
| K6B6 / O-06.3 / C | A: Treat included F2 as successful 39-token receiving movement. B: Treat R2's opened form as charged network execution. C: Distinguish included F2/stated fee from unsubmitted R2/zero fee. | A: The interface interaction establishes network inclusion. B: The supplied records establish separate outcome/inclusion/fee facts. C: Inclusion alone establishes the intended transferred amount. |
| K6B7 / O-06.4 / E | A: Advance V with zero gas because 50 tokens exceeds the amount. B: Pause V despite correct fields because the fee asset is absent. C: Deduct the missing gas from tokens without a supplied conversion. | A: The fixture requires gas separately; no substitution is supplied. B: The transferred-token surplus covers the separate gas balance. C: A matching required tag establishes an adequate fee budget. |
| K6B8 / O-06.4 / E | A: Advance V with W; net 39 is accepted and gas is sufficient. B: Reject W because the provider fee must be sender-additional. C: Advance U with W because sufficient gas repairs its tag. | A: Gas balance resolves the mismatched receiving tag. B: A deduction cannot meet a stated net-receipt intent. C: The altered case supplies consistent details/net intent/fee assets. |

### Facilitator-only KC-06-B key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K6B1 | A / B | Tag 9 is required; tag 6 is not interchangeable. Verify through supplied independent instructions. |
| K6B2 | C / A | Full detail matching establishes this part only, not a complete authorisation with unavailable gas. |
| K6B3 | A / B | 12,000 × 0.000003=0.036 DEMO-GAS. Computational units are not transferred tokens. |
| K6B4 | B / C | Sender40, recipient 39 DEMO-TOKEN under deduction rule, plus 0.036 DEMO-GAS separately. |
| K6B5 | A / A | Retain uncertainty; elapsed estimate alone establishes neither loss nor arrival. |
| K6B6 | C / B | No token moved in the included failure despite gas charge; local rejection has its explicit zero-fee rule. |
| K6B7 | B / A | Missing fee asset prevents completion in this fixture. No alternate fee mechanism is provided. |
| K6B8 | A / C | Recognise the changed positive budget/net-intent case. Correct fees do not rehabilitate U's wrong tag. |

## PM-06-A — Complete the review of two mock screens

Mapped outcomes: O-06.1–O-06.4; reused essential compatibility/destination criteria are explicitly assessed. Gate remains **O-04.2, O-04.3, O-06.1, O-06.2**, using applicable approved KC/challenge mappings. Reading completion is not a gate substitute. Required: P6A1–P6A6.

Intent: DEMO-ESI,30 DEMO-TOKEN, DemoNet-M, full destination `DEMO-ADDR-ESI-063`, memo `DEMO-INVOICE-31`. Independently supplied support includes exact issuer-native DEMO-TOKEN only on DemoNet-M. Screen A sends a wrapped representation of DEMO-TOKEN on DemoNet-M to the correct destination/memo; support for that representation is absent. Screen B uses the explicitly supported issuer-native representation, correct network/recipient/destination/memo and 30-token amount. Fee rules: 25,000 computational units× 0.000002 DEMO-GAS/unit = estimated 0.05 DEMO-GAS, sender-paid separately; provider 0.60 DEMO-TOKEN sender-paid additionally; recipient 30. Sender balances 35 DEMO-TOKEN and 0.20 DEMO-GAS. Inclusion/credit timing estimates have no exact guarantee. Later mock record FAIL-A is included failed execution with 0.04 DEMO-GAS charged and zero token movement; REJECT-A is a local validation rejection before submission with explicitly zero fee.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P6A1 / O-06.1, reused O-04.2 / E | A: Use A's matching ticker as proof of receiving support. B: Pause A; verify support for its exact representation. C: Use A's low fee as proof its wrapper is supported. | A: The supplied support covers issuer-native tokens, not A's wrapper. B: The visible address format establishes support for the representation. C: The matching memo identifies the wrapper as issuer-native. |
| P6A2 / O-06.1, reused O-04.3 / E | A: Confirm B's recipient initials and address suffix only. B: Confirm B's other fields while omitting its required memo. C: Confirm B's recipient/destination/amount/network/representation/required memo. | A: The amount alone establishes receiving-account attribution. B: All specified intent and receiving fields must agree. C: The matching ticker substitutes for the stated required memo. |
| P6A3 / O-06.2 / C | A: Debit 30.60 tokens plus estimated 0.05 gas; recipient 30. B: Debit 30.65 tokens; recipient 29.95 tokens. C: Debit 30 tokens; recipient 30.60 tokens. | A: Different asset units form a combined transferred-token amount. B: The supplied charges increase the recipient's token amount. C: The extra provider charge and separate gas apply. |
| P6A4 / O-06.3 / C | A: Treat the quoted fee/time as fixed execution outcomes. B: Retain estimates; distinguish included failure fee from unsubmitted rejection. C: Classify both later records as successful receiving transfers. | A: Estimate wording and actual inclusion/outcome/fee are different evidence. B: The two failed screens necessarily share the same charged cost. C: Zero movement establishes zero charged execution cost. |
| P6A5 / O-06.4 / E | A: Advance consistent B with sufficient separate balances. B: Advance A using B's correct gas-fee arithmetic. C: Hold B because its estimated timing proves incompatible support. | A: Correct arithmetic establishes support for A's wrapper. B: B's route/budgets agree; actual later receipt remains separate. C: Estimated timing establishes that the matched recipient is wrong. |
| P6A6 / O-06.3, O-06.4 / E | A: Treat FAIL-A's gas payment as a successful 30-token receipt. B: Resend automatically after the estimated arrival time passes. C: Keep zero transfer/0.04 gas; inspect actual status without automatic resend. | A: A recorded fee establishes intended receiving movement. B: The failed record establishes neither receipt nor duplicate-payment authority. C: An estimated delay establishes the required recovery procedure. |

### Facilitator-only PM-06-A key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P6A1 | B / A | Representation mismatch is essential; exact network alone is insufficient. No support for a wrapper is implied. |
| P6A2 | C / B | Reconcile all six detail categories and required memo. |
| P6A3 | A / C |25,000 gas units produce 0.05 estimated DEMO-GAS; tokens 30.60 out/30 in per stated model. Sender budgets cover both assets. |
| P6A4 | B / A | Estimates stay estimates. FAIL-A included with 0.04 charge differs from REJECT-A's explicit no-submission/no-fee record. |
| P6A5 | A / B | Correct positive case permits only mock authorisation review, not guaranteed execution or provider credit. |
| P6A6 | C / B | Preserve actual failure/fee facts and choose status/receiving review; neither a gas payment nor estimated delay authorises resending. |

## PM-06-B — Retry with a memo repair and an accepted net receipt

Mapped outcomes: O-06.1–O-06.4 plus explicitly reused compatibility/destination criteria. Gate unchanged: **O-04.2, O-04.3, O-06.1, O-06.2**. Required: P6B1–P6B6.

Intent: send 50 DEMO-TOKEN with intended accepted net 49 DEMO-TOKEN to DEMO-SADE on DemoNet-R at full destination `DEMO-ADDR-SADE-064`, required tag `DEMO-TAG-44`. Receiving instructions support the exact stated representation/network and minimum 40-token net deposit. Screen C has correct representation/network/recipient/destination/amount but tag `DEMO-TAG-41`. Corrected Screen D uses independently confirmed tag 44. Provider fee 1 DEMO-TOKEN is deducted from 50; sender token debit 50, recipient 49. Estimated network fee uses 10,000 computational units× 0.000004 DEMO-GAS/unit =0.04 DEMO-GAS, paid separately. Budget C has 60 DEMO-TOKEN and no DEMO-GAS; budget D has 60 DEMO-TOKEN and 0.09 DEMO-GAS. A mock included-failed record reports zero transferred tokens and 0.025 DEMO-GAS charged. A separate local missing-tag rejection was never submitted and explicitly charged no fee. “Usually 4 minutes” is an estimate.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P6B1 / O-06.1, reused O-04.2, O-04.3 / E | A: Recognise representation/network support; pause C for independent tag repair. B: Advance C using its correct network/full destination. C: Change C to a lower-cost network without supplied support. | A: Meeting the minimum substitutes for the required tag. B: Matching network verifies the remaining deposit fields. C: Supported fields leave the wrong required tag unresolved. |
| P6B2 / O-06.2 / C | A: Debit 51 tokens; recipient 50; gas included. B: Debit 50 tokens; recipient 49; estimated 0.04 gas separate. C: Debit 50.04 tokens; recipient 49.04 tokens. | A: Token deduction and separate gas use different supplied rules/units. B: The provider fee is extra sender-paid tokens here. C: The computational gas count determines the recipient-token amount. |
| P6B3 / O-06.2, O-06.4 / E | A: Advance with budget C because 60 tokens exceeds 50. B: Replace missing gas with an unspecified token deduction. C: Pause budget C; verify the separate gas balance or supported alternative. | A: Receiving support establishes the missing gas balance. B: The fixture supplies no automatic token-for-gas substitution. C: The transferred-token surplus satisfies the separate fee-asset budget. |
| P6B4 / O-06.3 / C | A: Retain estimates; distinguish included 0.025 gas from unsubmitted zero fee. B: Treat failed movement as evidence both attempts were free. C: Treat usual four-minute timing as confirmed finality/local receipt. | A: The stated usual timing establishes the later receiving stages. B: Zero transferred tokens establishes zero charged execution cost. C: The supplied records distinguish estimates, inclusion and fee consequences. |
| P6B5 / O-06.1, O-06.4 / E | A: Advance corrected D/budget D; accepted net 49 meets minimum 40. B: Advance C with budget D despite its incorrect required tag. C: Hold D because the minimum must apply to gross amount. | A: Correct fields/support/net intent/budget now match supplied requirements. B: The available gas balance repairs the wrong receiving tag. C: The gross amount defines the minimum despite its stated net basis. |
| P6B6 / O-06.3, O-06.4 / E | A: Infer an automatic refund/payout from the included failed record. B: Retain stated cost/zero transfer; inspect records without automatic resend. C: Treat included failure as successful 49-token receiving movement. | A: The estimated time establishes an automatic replacement transfer. B: Included execution establishes the intended token movement. C: Failed execution establishes neither receipt nor automatic recovery. |

### Facilitator-only PM-06-B key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P6B1 | A / C | Recognise positive exact-representation/network facts and the independent tag repair; both compatibility and destination criteria matter. |
| P6B2 | B / A |10,000 × 0.000004=0.04 gas; debit 50/net 49 tokens with separate fee asset. |
| P6B3 | C / B | Pause missing gas; no real purchase or funding instructions. A verified different supported fee model would be a different fixture. |
| P6B4 | A / C | Included failed execution may consume the stated fee; this explicit local rejection did not. No general finality/payout promise from 4-minute estimate. |
| P6B5 | A / A | Corrected fully consistent case passes this bounded review, including net 49 ≥ 40 and accepted intent. |
| P6B6 | B / C | Preserve actual failure/fee facts; neither automatic refund nor resending is established by this exercise. |

## KC-07-A — Distinguish the records and what they prove

Mapped outcomes: O-07.1–O-07.4. Required: K7A1–K7A8.

Fixture: These stages belong to a supplied route and need separate records: sender Submitted means broadcast attempted; explorer Pending means successful inclusion is not yet shown; explorer Failed means included execution failed; explorer Successful with confirmations records that network event; independently reached provider Credited records an account credit; independently reached local receiving account Paid out/Received records local receipt. Not every real route uses these exact labels.

Route intended: 18 DEMO-TOKEN, DemoNet-S, transaction `DEMO-TX-71`, from `DEMO-SENDER-71` to `DEMO-RECEIVER-71`. Explorer record E matches all fields, status Successful, three confirmations, fee 0.02 DEMO-GAS. Its separate Finality field is “not yet finalised under DemoNet-S rule”. Provider's supplied rule requires at least five confirmations, then processing review; credit is established only by a matching Credited entry. Provider currently shows Pending review; no local payout record is supplied. Record W has transaction `DEMO-TX-72` on DemoNet-T with the same visible amount but another destination. In choices, TX71/TX72/Sender71/Receiver71 abbreviate the corresponding supplied DEMO references. All explorer fields here are publicly visible mock information; provider account and local bank records are private. No record contains recovery material.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K7A1 / O-07.1 / C | A: Treat the six labels as different names for completion. B: Distinguish sender/network/provider/local receipt across the six supplied labels. C: Treat pending/failed labels as completed local-payout processing. | A: The submitted broadcast establishes receiving-account credit. B: Successful inclusion establishes both downstream receiving stages. C: The labels identify distinct stages and record authorities. |
| K7A2 / O-07.1 / E | A: Report network success; provider credit/local payout unconfirmed. B: Report network success and local payout; provider credit inferred. C: Report submitted only; disregard the matching successful network record. | A: Matching explorer establishes success; account credit/payout remain unconfirmed. B: Matching successful amount establishes the provider's credited balance. C: Public successful record establishes the local receiving-account balance. |
| K7A3 / O-07.2 / C | A: Treat three confirmations as this network's finalised state. B: Treat the finality field as completed local payout. C: Separate confirmations, stated not-finalised status and provider acceptance. | A: The provider's threshold defines protocol finality here. B: The supplied network-finality and provider-credit tests are distinct. C: The confirmation count is the local receiving-account balance. |
| K7A4 / O-07.2 / E | A: Treat confirmation five as completed provider credit. B: Require threshold plus processing/Credited evidence; retain timing uncertainty. C: Accept three confirmations in place of the stated five. | A: The minimum does not establish completed processing or timing. B: The threshold alone establishes completed provider processing. C: The sender estimate supersedes the provider's receiving rule. |
| K7A5 / O-07.3 / C | A: Read DemoNet-S/TX71/Sender71/Receiver71/18 tokens/Successful/0.02 DEMO-GAS. B: Read DemoNet-T/TX72/Sender71/Receiver71/18 tokens/Paid out/0.02 DEMO-GAS. C: Read DemoNet-S/TX71/Sender71/Receiver71/18.02 tokens/Successful/zero DEMO-GAS. | A: Matching amount makes W the intended transaction record. B: The fee uses the same asset as the transferred amount. C: E's fields match the intended event; amount/fee units differ. |
| K7A6 / O-07.3 / E | A: Use W because its amount matches the intended 18. B: Use W after omitting its network and destination fields. C: Exclude W; match intended network/reference/destination independently. | A: W's network, reference and destination differ from intent. B: The amount identifies this payment independently of network/reference. C: The sender screenshot substitutes for W's mismatched destination. |
| K7A7 / O-07.4 / E | A: Treat unnamed addresses as sufficient anonymity protection. B: Recognise public linkage risk; exclude secrets/private account details. C: Share recovery material to authenticate the public receipt. | A: The public address hides associations with other transactions. B: Public history may link pseudonymous addresses to people. C: Recovery material is the receiving-account's payment evidence. |
| K7A8 / O-07.4 / C | A: Keep scoped route/status/amount/fee/receipt records privately, without secrets. B: Keep the sender image alone, excluding references and units. C: Publish account documents/recovery backups alongside the explorer receipt. | A: Scoped records support matching/reconciliation without exposing secrets. B: Shared recovery backups establish the correct receiving stage. C: The cropped sender image supplies independent receiving verification. |

### Facilitator-only KC-07-A key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K7A1 | B / C | Distinguish all six supplied labels and record authorities. Real interfaces may label them differently. |
| K7A2 | A / A | Network success is established; provider credit and bank/mobile-money payout are not. |
| K7A3 | C / B | Confirmation count, specified network finality and provider acceptance differ. Do not teach five as a universal finality threshold. |
| K7A4 | B / A | Three is below five; even at five the supplied later processing/Credited record is required. No exact deadline follows. |
| K7A5 | A / C | Read all named fields correctly;18 DEMO-TOKEN and 0.02 DEMO-GAS cannot be added into 18.02 tokens. |
| K7A6 | C / A | Wrong network, reference and destination prevent treating W as this route's record. |
| K7A7 | B / B | Public addresses/amounts/history may link to identity; private account records and secrets should not be publicly posted. |
| K7A8 | A / A | Preserve useful appropriately private records and units, without claiming a legal retention duration or collecting secrets. |

## KC-07-B — Retry with credit and receipt genuinely established

Mapped outcomes: O-07.1–O-07.4. Required: K7B1–K7B8.

Fixture: Sender Submitted and explorer Pending describe an earlier attempt `DEMO-TX-OLD`. A separate included-failed record `DEMO-TX-FAIL` transferred zero tokens and charged 0.015 DEMO-GAS. The completed route is 22 DEMO-TOKEN on DemoNet-U, transaction `DEMO-TX-73`, from `DEMO-SENDER-73` to `DEMO-RECEIVER-73`, network fee 0.025 DEMO-GAS. Its matching explorer shows Successful, six confirmations and “Finalised under the supplied DemoNet-U rule”. Provider policy requires four confirmations plus completed processing; its independently opened entry says Credited 22 DEMO-TOKEN for TX73. A separately matched payout reference `DEMO-PAYOUT-73` and independently opened local receiving account show Received 3,100 DEMO-LOCAL. In choices, TX73/Sender73/Receiver73/OTHER73 abbreviate the supplied DEMO references. No completion-time promise is supplied. Record Z instead has TX73-shaped text on DemoNet-V with destination `DEMO-OTHER-73`; matching visible identifier text alone does not make it this event.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K7B1 / O-07.1 / C | A: Keep earlier submitted/pending/failed attempts distinct from the completed route. B: Apply the latest local receipt to the earlier attempt records. C: Keep the completed credited route classified as submitted only. | A: The failed attempt has become the later successful event. B: Different references preserve separately evidenced stages and outcomes. C: The bank receipt changes the outcome of earlier attempts. |
| K7B2 / O-07.1 / E | A: Treat payout as unconfirmed despite independent local receiving evidence. B: Treat explorer success alone as proof of the local receipt. C: Recognise network/credit/local receipt from their matching separate records. | A: Account and receiving evidence establish what the explorer cannot. B: The confirmations alone establish the private receiving-account balance. C: The private account records add no evidence beyond the explorer. |
| K7B3 / O-07.2 / C | A: Use six confirmations as the finality rule for another network. B: Separate this stated finality state from provider acceptance/local receipt. C: Interpret the finality label as the network-fee amount. | A: Network-specific state and account/receipt records establish different facts. B: The provider processing rule defines the protocol's finality state. C: This confirmation count establishes a network-independent finality rule. |
| K7B4 / O-07.2 / E | A: Recognise threshold/processing/Credited evidence here; promise no fixed time. B: Apply the earlier five-confirmation condition to this four-confirmation policy. C: Replace provider processing with the protocol's finality field alone. | A: The previous form's policy remains applicable to this network. B: Current policy and matching processing govern this credit. C: Network finality records the provider's internal account-balance update. |
| K7B5 / O-07.3 / C | A: Read DemoNet-U/TX73/Sender73/Receiver73/22.025 tokens/Successful/zero gas; local 3,100. B: Read DemoNet-V/TX73/Sender73/OTHER73/22 tokens/Successful/0.025 gas; local 3,100. C: Read DemoNet-U/TX73/Sender73/Receiver73/22 tokens/Successful/0.025 gas; separate local 3,100. | A: The network amount, gas fee and local receipt are separate facts. B: No conversion rate is needed to merge these three asset units. C: Similar reference text establishes one event across the two networks. |
| K7B6 / O-07.3 / E | A: Accept Z despite the alternate network and receiving destination. B: Exclude Z because its network/destination differ from intent. C: Use Z's reference text alone to establish local payout. | A: The matching amount corrects the receiving-destination mismatch. B: The reference text identifies the event independent of its network. C: Matching requires network/reference/intended destination rather than appearance. |
| K7B7 / O-07.4 / E | A: Keep secrets/private documents private; recognise public-history linkage risk. B: Treat absence of personal names as adequate anonymity evidence. C: Attach recovery material as the proof of receiving authority. | A: Secret material is needed to match the payment record. B: Useful receipt records need no secrets and may expose relationships. C: Unnamed explorer entries cannot be associated with a person's account. |
| K7B8 / O-07.4 / C | A: Keep sender assertion alone; discard the matching payout reference. B: Post complete private statements to authenticate the receipt publicly. C: Keep scoped network/provider/payout records and redacted receipts privately. | A: Scoped references support reconciliation while reducing unnecessary exposure. B: The easier unrelated screenshot establishes the same receiving evidence. C: Public unredacted statements are required to establish private receipt. |

### Facilitator-only KC-07-B key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K7B1 | A / B | Separate earlier attempts and all six stage categories rather than rewriting old outcomes after a later success. |
| K7B2 | C / A | Recognise genuinely established receipt based on independent matched records. The explorer alone still cannot prove it. |
| K7B3 | B / A | The explicit current mock finality rule, provider acceptance and local receipt remain separate. No universal confirmation count. |
| K7B4 | A / B | Six≥four plus matching Credited processing supports credit here. Do not reuse form A's five-confirmation fixture as a global rule. |
| K7B5 | C / A | Correctly identify every explorer field and its units; local 3,100 requires the separate receiving record. |
| K7B6 | B / C | Z does not match this route despite similar identifier text. |
| K7B7 | A / B | Reject secret disclosure/anonymity promises, preserving public/private evidence distinctions. |
| K7B8 | C / A | Keep scoped useful references and appropriate private/redacted receipts. No legal retention policy is established. |

## PM-07-A — Reconcile four attempts and preserve evidence

Mapped outcomes: O-07.1–O-07.4. Gate: **none; open read-only mock-record exercise**. Required: P7A1–P7A6.

Intended route: 26 DEMO-TOKEN, DemoNet-W, from `DEMO-SENDER-74` to `DEMO-RECEIVER-74`. Provider policy: at least five confirmations then processing; only a matching Credited record establishes account credit. Each attempt has its own reference:

| Mock case | Independently supplied records |
| --- | --- |
| A / DEMO-TX-74A | Sender Submitted; explorer Pending; provider No credit. No successful inclusion, fee charge or local payout established. |
| B / DEMO-TX-74B | Matching explorer Successful, five confirmations, network Finality “not yet finalised under DemoNet-W rule”,26 DEMO-TOKEN,0.03 DEMO-GAS fee. Provider independently shows matching Credited 26 tokens. No local payout record. |
| C / DEMO-TX-74C | Explorer Included, execution Failed, transfer zero tokens, charged 0.02 DEMO-GAS. Provider No credit. |
| D / DEMO-TX-74D | Local form Rejected before submission; the fixture explicitly charges zero network fee. No network inclusion or provider credit. |

In choices, TX74B/Sender74/Receiver74 abbreviate the matching supplied DEMO references; the abbreviation does not change identity. Public mock explorer fields are network/reference/status/from/to/amount/fee; provider/private receiving records are not public. No recovery material belongs in a receipt. A sender supplies a screenshot saying “bank paid” for B, but no independently reached local receiving record supports it.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P7A1 / O-07.1 / C | A: Classify pending/failed/rejected attempts as locally paid out. B: Distinguish A pending, C included failure/fee and D unsubmitted/zero fee. C: Classify A as successful and C/D as account credited. | A: The two unsuccessful interfaces necessarily share a fee rule. B: The submitted label establishes completed network processing. C: Distinct attempt records establish different stages and costs. |
| P7A2 / O-07.1, O-07.2 / E | A: Recognise B success/account credit; retain unconfirmed local payout. B: Treat B's supplied matching credit as only a sender assertion. C: Infer local payout from B's five confirmations alone. | A: Matching account evidence establishes credit, separately from local receipt. B: Five confirmations establish protocol finality and bank receipt together. C: The credited account entry adds no independent receiving evidence. |
| P7A3 / O-07.2 / C | A: Treat five confirmations as B's finalised network state. B: Separate B's not-finalised field from account credit; promise no time. C: Use B's provider credit to override the protocol finality field. | A: The provider's processing threshold defines network finality here. B: The protocol and provider apply separate supplied conditions. C: Reaching the minimum establishes an exact processing deadline. |
| P7A4 / O-07.3 / E | A: Use B's matching amount and sender bank-paid image as local receiving evidence. B: Read DemoNet-W/TX74B/Sender74/Receiver74/26.03 tokens/Successful/zero gas as local payout. C: Read DemoNet-W/TX74B/Sender74/Receiver74/26 tokens/Successful/0.03 gas; independently verify local payout. | A: The explorer establishes network event/cost; the image is sender evidence. B: Different asset units may be combined without a conversion rate. C: The screenshot supplies the receiving-account's independently checked status. |
| P7A5 / O-07.4 / E | A: Reject secret disclosure/anonymity claims; recognise public-identity linkage risk. B: Share recovery material to let the provider authenticate B. C: Treat pseudonymous sender labels as sufficient anonymity evidence. | A: Recovery access establishes whether the recipient's bank was paid. B: The pseudonymous label prevents association with a real account. C: Receipts need no secrets; public history exposes relationships. |
| P7A6 / O-07.3, O-07.4 / C | A: Omit C's fee because its intended token transfer failed. B: Privately retain distinct attempt/cost/provider/payout records with units. C: Use the sender image alone and share unredacted account statements. | A: Separate scoped records support correct reconciliation without excessive exposure. B: The failed status makes the recorded execution charge irrelevant. C: The cropped sender image replaces independently reached receiving records. |

### Facilitator-only PM-07-A key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P7A1 | B / C | Distinguish submitted/pending, included failed and unsubmitted rejection; apply their explicit fees without universalising them. |
| P7A2 | A / A | Positive provider credit is established in B by its separate record; screenshot-only bank payout is not. |
| P7A3 | B / B | Provider can credit under its supplied rule while this network's stated finality field remains not finalised; no universal rule/time inferred. |
| P7A4 | C / A | Match all listed fields; do not add token/gas units or use a sender screenshot as independent receipt. |
| P7A5 | A / C | No secret disclosure/anonymity guarantee. Account statements need privacy-aware handling separate from public explorer fields. |
| P7A6 | B / A | Preserve distinct attempt/cost histories and independent references privately; later local receipt remains a separate evidence item. |

## PM-07-B — Retry with local receipt and an unrelated network record

Mapped outcomes: O-07.1–O-07.4. Gate: **none**. Required: P7B1–P7B6.

Intended route: 32 DEMO-TOKEN, DemoNet-X, from `DEMO-SENDER-75` to `DEMO-RECEIVER-75`, current provider rule at least two confirmations then processing. Earlier attempt OLD75 shows sender Submitted/explorer Pending/no provider credit. FAIL75 was included failed with zero token transfer and 0.016 DEMO-GAS fee. LOCAL75 was never submitted due to a local missing-field validation and explicitly charged zero network fee.

Completed route `DEMO-TX-75` on DemoNet-X matches intended addresses/amount, explorer Successful, four confirmations, Finality “Finalised under DemoNet-X rule”, fee 0.022 DEMO-GAS. Independently opened provider record shows matching Credited 32 DEMO-TOKEN. Matching payout reference `DEMO-PAYOUT-75` links to an independently opened local account receipt Received 4,600 DEMO-LOCAL. Unrelated record WRONG75 uses similar transaction-reference text on DemoNet-Y, amount 32 but another receiving destination. In choices, TX75/Sender75/Receiver75/OTHER75 abbreviate the supplied DEMO references. No guarantee of time or reversibility is stated. All explorer fields are public mock data; payout/account documents are private; no real credentials are supplied.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P7B1 / O-07.1 / C | A: Preserve pending/included-failed/unsubmitted/successful attempts and stated costs. B: Apply 4,600 received locally to the earlier attempts. C: Keep the completed route classified as submitted only. | A: The later successful event revises the earlier fee entries. B: Separate references preserve the actual stages, inclusion and outcomes. C: Local receipt establishes that the earlier included failure succeeded. |
| P7B2 / O-07.1, O-07.3 / E | A: Infer the local 4,600 receipt from the explorer alone. B: Treat the independently matched local receipt as still unavailable. C: Recognise success/credit/local receipt from matching separate records. | A: The account/payout/receiving records establish separate receiving stages. B: A matching 32-token explorer amount establishes the fiat receipt. C: The sender assertion has the same authority as the receiving account. |
| P7B3 / O-07.2 / C | A: Replace this two-confirmation policy with the earlier five. B: Apply this threshold/processing rule; separate finality/credit/receipt without timing promise. C: Use the Finalised label to establish completed local receipt. | A: The earlier network's threshold remains applicable to this provider. B: The finality field records the provider's internal account balance. C: The current protocol/provider facts establish separate conditions. |
| P7B4 / O-07.3 / E | A: Exclude WRONG75; read DemoNet-X/TX75/Sender75/Receiver75/32 tokens/Successful/0.022 DEMO-GAS. B: Accept WRONG75; read DemoNet-Y/TX75/Sender75/OTHER75/32 tokens/Successful/0.022 DEMO-GAS. C: Use TX75; read DemoNet-X/TX75/Sender75/Receiver75/32.022 tokens/Successful/zero DEMO-GAS. | A: Evidence matching requires relevant fields and their stated units. B: The amount identifies the payment independently of destination/network. C: Similar reference text corrects the alternate receiving destination. |
| P7B5 / O-07.4 / E | A: Publish account statements/recovery backups with the public reference. B: Keep secrets/private receipts private; recognise address-history linkage risks. C: Treat unnamed demo addresses as proof of anonymity in the model. | A: The pseudonymous label prevents association with private account records. B: Private keys are required to verify public transaction status. C: Useful records need neither secret exposure nor anonymity promises. |
| P7B6 / O-07.3, O-07.4 / C | A: Retain easier WRONG75 instead of the intended-route records. B: Omit failed execution costs; retain the sender image only. C: Privately retain matched attempt/cost/network/provider/payout records and receipts. | A: Scoped matched records support reconciliation without a legal-duration claim. B: The easier alternative record supplies equivalent receiving evidence. C: The failure label makes the actual execution-fee record irrelevant. |

### Facilitator-only PM-07-B key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P7B1 | A / B | Preserve all six relevant stage categories and the explicit inclusion/fee differences across attempts. |
| P7B2 | C / A | Correct positive local receipt comes from separate independently matched account records, not the explorer alone. |
| P7B3 | B / C | Four≥two plus Credited processing is satisfied here; actual finality and local receipt still have their own records. No universal counts/times. |
| P7B4 | A / A | Reject wrong-network/destination evidence and preserve amount/fee units. |
| P7B5 | B / C | No secrets, unnecessary private-document disclosure or anonymity guarantees. |
| P7B6 | C / A | Retain appropriate attempt/cost/payment evidence privately, without pretending a legal duration was researched. |

## KC-08-A — Classify authority and combine the decision

Mapped outcomes: O-08.1–O-08.4. Required: K8A1–K8A8.

Fixture: In this explicitly supplied token/account model, Connect shares an address and lets a site request future actions; connection alone grants no spending permission. Message M signs a readable login challenge for DEMO-BOOK, with its specified domain and nonce and no spending authority under this model. Permit P is also signed with no immediate network fee, but explicitly authorises spender `DEMO-SPENDER-P` to take up to 500 DEMO-TOKEN until its stated deadline. Approve A is a separate network transaction granting spender `DEMO-SPENDER-A` up to 20 DEMO-TOKEN. Transfer T directly sends 12 DEMO-TOKEN to `DEMO-RECEIVER-81` on DemoNet-Z. Action names alone do not establish what actual payloads authorise.

The current task is reading a public article; no connection, signature, approval or transfer is needed. A pre-existing permission to DEMO-SPENDER-P remains 500 tokens. Disconnect removes the site's current connection, but this supplied model leaves that permission in force. Its verified permission-management view can submit a revocation transaction setting that allowance to zero after successful inclusion. Revocation can consume a network fee; it does not reverse past transfers. The model also allows separately signed, unused permits; revoking a recorded allowance does not establish cancellation of every separately signed authority. No such permit-cancellation method is supplied here.

For the combined route, independent receiving instructions support exact DEMO-TOKEN on DemoNet-Z to DEMO-RECEIVER-81 with required memo `DEMO-MEMO-81`,12 tokens. Sender has 20 tokens and 0.10 DEMO-GAS; estimated network fee 0.03 DEMO-GAS is extra sender-paid. Mock explorer shows matching Successful 12-token transfer, but provider is still Pending and no local receiving record exists. The unrelated “reader reward” Permit P remains unnecessary.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K8A1 / O-08.1 / C | A: Distinguish connection, supplied login signature, allowance transaction and transfer. B: Classify each displayed request as immediate asset transfer. C: Classify each signature request as connection with read-only access. | A: The interface label establishes the actual requested authority. B: The supplied payloads distinguish the action/authority types. C: The connection request itself supplies private-key disclosure. |
| K8A2 / O-08.1 / E | A: Accept P as non-spending because signing has no immediate fee. B: Classify P as the same login authority as M. C: Identify P's spending authority; decline it for article reading. | A: P grants spending authority unnecessary for article reading. B: Absence of a fee establishes the signature's non-spending scope. C: The reward label restricts P to a session-login challenge. |
| K8A3 / O-08.2 / E | A: Use P's deadline alone to validate its spender/limit. B: Identify spender/asset/500 limit/deadline; refuse unrelated scope. C: Treat P's 500 limit as the intended 12-token transfer. | A: The deadline bounds the authority to one 12-token payment. B: The spending limit is the network-fee amount. C: The supplied authority exceeds and does not serve this task. |
| K8A4 / O-08.2 / E | A: Require task-matched spender/asset/limit; decline unrelated reading permission. B: Use the site's logo to validate its spender and scope. C: Treat unused signatures as irrelevant because funds have not moved. | A: No transfer yet establishes that future authority is absent. B: Actual task/scope matching matters; logo and timing do not suffice. C: The signature's display label establishes its requested limit. |
| K8A5 / O-08.3 / C | A: Treat Disconnect as cancellation of recorded and separately signed authority. B: Treat Disconnect as reversal of earlier token movements. C: Disconnect as needed; separately inspect the recorded spending authority. | A: Connection and spending-authority states differ in this model. B: Closing the interface changes the token's recorded allowance. C: Removing the button confirms the network allowance is zero. |
| K8A6 / O-08.3 / E | A: Inspect/revoke relevant allowance; retain separate-permit and past-loss limits. B: Treat confirmed revocation as refund of historical token transfers. C: Treat allowance zero as cancellation of the separately signed permit. | A: No fee shown establishes that revocation already occurred. B: The allowance update invalidates each separately signed authority. C: Confirmed allowance change does not establish separate-signature cancellation. |
| K8A7 / O-08.4 / E | A: Accept P as a technically valid requirement for public reading. B: Decline P; read publicly and keep route review/course evidence separate. C: Award course evidence from the independently saved article. | A: Public reading needs no authority and earns no course evidence. B: The public article establishes correct permission-management performance. C: The bookmark contains equivalent evidence for the gated mission outcomes. |
| K8A8 / O-08.4 / E | A: Recognise network success; retain unconfirmed credit/payout and refuse unrelated scope. B: Treat explorer success as completed receiving bank payment. C: Ignore memo/network details because the stated fee is affordable. | A: The gas balance establishes the provider's receiving credit. B: Matching network evidence neither establishes private receipt nor justifies P. C: The final label substitutes for separately matched receiving records. |

### Facilitator-only KC-08-A key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K8A1 | A / B | Classify each supplied actual request, including ordinary message signature versus spending permission/transfer. No generalisation that all message signatures are harmless. |
| K8A2 | C / A | Signed Permit P grants spending authority without immediate fee; refuse for article reading. |
| K8A3 | B / C | Name spender, asset, limit and deadline/scope; task mismatch is essential even when request is well formed. |
| K8A4 | A / B | Check independently explained relevant scope; no logo/no-transfer shortcut. |
| K8A5 | C / A | Disconnect is not revocation in this supplied model. Inspect authority separately. |
| K8A6 | A / C | Confirmed allowance revocation can restrict future allowance use, not reverse past loss or cancel every separate signed permit by inference. |
| K8A7 | B / A | Public article remains readable; article/bookmark interaction earns no curriculum evidence and needs no wallet authority. |
| K8A8 | A / B | Consistent 12-token route and 0.03 gas estimate are distinct from provider credit/local receipt; unrelated permission remains unnecessary. |

## KC-08-B — Retry with a relevant bounded request

Mapped outcomes: O-08.1–O-08.4. Required: K8B1–K8B8.

**Stage 1 — request review, before any cancellation:** In this second supplied model, connection shares the current public address but grants no spending right. Login signature L is a readable one-use session challenge for the verified DEMO-LEARN domain, with no spending authority under the described scheme. Signature S explicitly grants `DEMO-SWAP-B` authority for exactly 15 DEMO-TOKEN before the stated deadline; it has no immediate network fee. The fictional task is a 15-token swap, independently matched to that exact asset/spender; no local payout is requested or supplied. Approval transaction J would instead grant 2,000 DEMO-TOKEN to unrelated `DEMO-SPENDER-J`; Transfer V sends 15 DEMO-TOKEN directly to a receiver rather than authorising a swap. A label saying “verify” on J does not change the payload. K8B1–K8B4 assess this initial request-review stage only.

**Stage 2 — later cancellation review:** Verified management records show a separately pre-existing 100-token allowance to DEMO-OLD-B. In this later hypothetical snapshot, S has been signed but remains unused; it is no longer being offered for execution. Disconnect leaves the existing authority states unchanged. A confirmed allowance revocation sets that old allowance to zero, subject to stated network fees. For this fixture only, an explicitly supplied signer/nonce invalidation mechanism can cancel the separately identified unused signed S authorisation after a successful included update; this is a different state/action from interface disconnect and from old-allowance zero. Neither action reverses past transfers. An independently reached management view confirms both relevant changes when completed. K8B5–K8B6 assess this later snapshot; no item proposes reusing S after its confirmed cancellation.

Combined example: current independent instructions support exact DEMO-TOKEN on DemoNet-BB to `DEMO-RECEIVER-82`, required memo 82, 15-token amount. Mock screen mistakenly uses memo 28, while token/network/address/amount match. Sender has 25 tokens and 0.08 DEMO-GAS; stated estimate 0.02 gas, extra sender-paid. A later corrected screen memo 82 matches all instructions. Its matching network record is Successful; independent provider record Credited 15 tokens; no bank payout route or record is requested. No transaction is performed by the learner.

| ID / outcome / class | Action choices | Reason choices |
| --- | --- | --- |
| K8B1 / O-08.1 / C | A: Classify L/S/J/V as read-only session connections. B: Distinguish connection, login, signed permission, approval transaction and transfer. C: Classify J's verify label as sufficient evidence of harmless login. | A: Supplied payloads determine authority/execution rather than interface branding. B: The visible fee identifies the signature's spending scope. C: The displayed login wording establishes absence of authority. |
| K8B2 / O-08.1 / E | A: Recognise signed authority; allow only next task-matched bounded review. B: Treat fee-free S as a read-only session signature. C: Treat signing S as disclosure of the private key. | A: The signature forms share the same execution and scope. B: Fee-free spending authority does not disclose the private key. C: The connection request itself grants the intended 15-token authority. |
| K8B3 / O-08.2 / E | A: Accept J's 2,000 limit based on the account-check label. B: Treat S's 15 and J's 2,000 as equivalent task limits. C: Recognise verified S's scope; refuse unrelated J's 2,000-token authority. | A: A stated deadline establishes the intended spender's relevance. B: A well-formed request establishes task fit independent of amount. C: The task requires the exact supplied spender/asset/limit/deadline. |
| K8B4 / O-08.2 / E | A: Continue S's bounded review; retain execution and separate-payout limits. B: Select J to avoid needing another limit update. C: Treat S's matched authority as completed local receiving credit. | A: Task-relevant authority does not establish swap execution or payout. B: The approved limit records the bank receiving-account balance. C: The verified spender makes the quoted output unconditional. |
| K8B5 / O-08.3 / C | A: Treat closing the tab as cancellation of both authority states. B: Distinguish recorded allowance/signed authority and their supplied management actions. C: Treat the nonce update as recovery of prior token losses. | A: These authority states require their separately supplied management checks. B: Disconnect updates the separately signed authority's nonce. C: Revoking the authority returns earlier executed transfers. |
| K8B6 / O-08.3 / E | A: Treat Disconnect as the completed allowance and nonce updates. B: Confirm old allowance zero; infer unused S cancellation from that alone. C: Recognise confirmed allowance/nonce changes; promise no historical reversal. | A: The fixture's cancellation mechanism applies to an unrelated model. B: The separate confirmed changes address their named states. C: Allowance zero substitutes for the separately described nonce update. |
| K8B7 / O-08.4 / E | A: Pause memo 28; independently reconcile required memo 82. B: Advance on matching network/address and affordable gas. C: Combine token/gas values and omit the memo review. | A: The affordable gas charge confirms receiving-account attribution. B: The matching ticker establishes the receiving account's required memo. C: Cost and field matches leave the required memo unresolved. |
| K8B8 / O-08.4 / E | A: Treat matching independent Credited entry as still absent. B: Recognise corrected-route success/credit; infer no bank payout or J authority. C: Treat the corrected memo as completed local bank receipt. | A: Matched records establish credit, not another payout or J's relevance. B: The network token event establishes the local fiat receiving balance. C: The corrected memo supplies permission to the unrelated spender. |

### Facilitator-only KC-08-B key

| Item | Action / Reason | Required interpretation and repair feedback |
| --- | --- | --- |
| K8B1 | B / A | Classify connection, L login signature, S signed spending permission, J approval transaction and V transfer by actual payload. |
| K8B2 | A / B | A signature can authorise spending without an immediate fee. A valid bounded mock review is possible; no real signing. |
| K8B3 | C / C | Exact relevant spender/asset 15-token authority contrasts with unrelated 2,000-token approval; deadline alone does not validate scope. |
| K8B4 | A / A | Positive next review only; scope fit does not prove execution or local payout. |
| K8B5 | B / A | Check recorded allowance and separately signed permit/nonce states using this fixture's distinct management actions. |
| K8B6 | C / B | Recognise confirmed specific cancellation states without exporting this fixture's mechanism to all protocols or promising refunds. |
| K8B7 | A / C | Independently reconcile required memo; cheap fee/amount match cannot offset mismatch. |
| K8B8 | B / A | Corrected details and independent matching records establish provider credit here, not a separate bank payout or permission for J. |

## PM-08-A — Everyday-use capstone with an unnecessary permission

Mapped outcomes: O-08.1–O-08.4 plus explicitly reused trust/compatibility/request/cost/status decisions. Gate remains **O-02.3, O-04.2, O-06.1, O-08.1, O-08.2**, using applicable approved KC/challenge mappings. Required: P8A1–P8A6. A correct total does not offset unsafe authority.

Fictional payment intent: 16 DEMO-TOKEN on DemoNet-CC to `DEMO-RECEIVER-83`, required memo `DEMO-MEMO-83`. Independently supplied receiving instructions support exact issuer-native DEMO-TOKEN on this network and all required details; mock transfer screen matches. Sender balance 25 tokens plus 0.12 DEMO-GAS; estimated network fee 0.04 DEMO-GAS extra sender-paid, no provider token charge. A matching explorer later shows Successful 16-token event; provider shows Pending processing and no local receipt exists. A claimed support message asks for a recovery phrase through its link. Independently opened official mock account-support view says no phrase is required for this payment.

The site separately offers a public article. Connect would share an address without spending rights in this model. Login signature is a readable, verified-domain session challenge with no spending rights. Transfer directly sends the specified 16 tokens. A button labelled “Unlock receipt” instead signs a fee-free permit giving `DEMO-RECEIPT-APP` 500-token spending authority until its stated deadline; this authority is unrelated to receiving the payment or reading the article. Pre-existing allowance 50 DEMO-TOKEN to that spender persists after Disconnect. Confirmed specific allowance revocation in the independently reached management view can reduce that allowance to zero but neither reverse past transfers nor establish cancellation of the separately signed unused 500-token permit. No cancellation scheme for that permit is supplied.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P8A1 / O-08.1 / C | A: Distinguish connection/login/transfer/signed permit by supplied authority. B: Classify the receipt button as the same read-only connection. C: Treat both signing requests as private-key disclosures. | A: The receipt branding establishes the request's non-spending purpose. B: The payload distinguishes connection/login, transfer and spending permission. C: Absence of an immediate fee establishes absence of token authority. |
| P8A2 / O-08.2, reused O-02.3 / E | A: Provide phrase and accept 500 authority for receipt access. B: Refuse phrase but accept the permit because signing is fee-free. C: Refuse secret/unrelated authority; verify via independently reached support. | A: Neither requested exposure nor scope serves this supplied payment task. B: The support logo confirms both the sender and requested scope. C: Entering no phrase makes the spending permit harmless. |
| P8A3 / O-08.3 / E | A: Treat Disconnect as cancellation of allowance and signed permit. B: Inspect/revoke allowance; assess separate permit without cancellation/refund inference. C: Use allowance zero to establish recovery of past transfers. | A: Disconnect changes both authority records on the network. B: Separate authority states need relevant confirmed management evidence. C: The recognised spender identity establishes the refund mechanism. |
| P8A4 / O-08.4, reused O-04.2, O-06.1 / E | A: Confirm all supported route/request fields and separate 0.04-gas budget. B: Substitute same-ticker wrapper while retaining the other matching fields. C: Omit required memo because token and gas budgets fit. | A: Route/request consistency and fee affordability require separate checks. B: The adequate token balance establishes support for the wrapper. C: Address appearance substitutes for exact network receiving support. |
| P8A5 / O-08.4 / E | A: Treat explorer success as completion of the bank payout. B: Treat provider Pending as absence of the matching network event. C: Recognise network success; inspect pending credit/receipt without automatic resend. | A: The affordable gas charge establishes receiving-bank settlement. B: The network event does not establish later receiving stages. C: Passing the estimate supplies authority for a duplicate transfer. |
| P8A6 / O-08.4 / E | A: Use the saved article as equivalent prerequisite-outcome evidence. B: Read publicly without authority; keep scoped records/course evidence separate. C: Require receipt-app authority before opening the public article. | A: Reading/saving requires no token authority and earns no course evidence. B: Saving the story assesses the required permission-management decisions. C: Reading the article itself performs the described transfer task. |

### Facilitator-only PM-08-A key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P8A1 | A / B | Actual payload distinguishes all four actions; permit is signed spending authority despite “receipt” branding and fee absence. |
| P8A2 | C / A | Identify DEMO-RECEIPT-APP, DEMO-TOKEN,500-token scope/deadline and task mismatch; refuse secret and permit requests through untrusted link. |
| P8A3 | B / B | Disconnect is distinct from confirmed allowance revocation. Separate signed authority is unresolved; no cancellation or reversal assumed. |
| P8A4 | A / A | Correct 16-token route and separately estimated 0.04 gas fit budgets 25/0.12; all essential compatibility/request fields still required. |
| P8A5 | C / B | Network success established, provider processing/payout not. Record review rather than automatic resending. |
| P8A6 | B / A | Public reading remains open; bookmark optional account action creates no course credit or wallet permission, and records can be kept without secrets. |

## PM-08-B — Retry with a corrected route and bounded task authority

Mapped outcomes: O-08.1–O-08.4 plus explicitly reused trust/compatibility/request/cost/status decisions. Gate unchanged: **O-02.3, O-04.2, O-06.1, O-08.1, O-08.2**. Required: P8B1–P8B6.

Two independent mock review cases are supplied; they are not sequential transactions using one shared balance. **Case 1, Stage 1 — initial request review before cancellation:** Intent is to review an exchange of exactly 10 DEMO-TOKEN through independently described `DEMO-SWAP-C` on DemoNet-DD for a stated DEMO-OUTPUT token amount. The supplied signer scheme uses a deadline-bound signature authorising exactly 10 DEMO-TOKEN for that exact spender; no immediate fee is charged by signing. This bounded authority matches the mock task, but does not establish executed swap/output or local bank payout. An alternative button labelled “Account check” would submit an unrelated 1,000-token approval transaction to `DEMO-CHECK-C`. A purported support messenger asks for a private key; independently accessed support says it is unnecessary. Connect shares an address; a verified readable session-login signature grants no spending right in this model; direct Transfer moves tokens to the named receiver. P8B1–P8B2 assess this initial request stage.

In the second, independent transfer case, receiving instructions support issuer-native DEMO-TOKEN on DemoNet-DD to `DEMO-RECEIVER-84`, required tag 84, 10-token gross amount with accepted 9.8-token net after a 0.2-token provider deduction. Screen X instead shows unsupported wrapped representation and tag 48. Corrected Screen Y explicitly matches issuer-native representation and tag 84. This case's fresh sender balance is 15 DEMO-TOKEN plus 0.07 DEMO-GAS; estimated network fee 0.025 DEMO-GAS is additionally sender-paid. The first case's swap has not been executed or deducted from this balance. Later independently matched explorer shows Successful 9.8-token receiving movement under this fixture's supplied deduction model; provider record Credited 9.8 tokens. No bank-payout leg was requested or recorded.

**Case 1, Stage 2 — later cancellation snapshot:** The verified permission view shows a pre-existing 30-token allowance to DEMO-OLD-C. The matched 10-token swap authority has subsequently been signed but remains unused; no item proposes executing it after cancellation. Disconnect leaves both authority states active. Confirmed specific revocation sets the old allowance to zero with the stated fee conditions. The separately unused signed authority has its own deadline/nonce; the supplied model explicitly supports a separate confirmed nonce invalidation which cancels that identified authority. Actual confirmed records show both changes. P8B3 assesses this later snapshot. Neither action reverses earlier transfers or establishes every other permission is absent. P8B4–P8B6 concern the independent transfer case and public reading, never reuse of the cancelled swap authority. A public article remains readable without any wallet action and awards no course evidence.

| ID / mapping / class | Action choices | Reason choices |
| --- | --- | --- |
| P8B1 / O-08.1 / C | A: Treat all five requests as the same account-session action. B: Distinguish the five payloads despite account-check branding. C: Classify both signing requests as private-key disclosures. | A: The supplied payload/scheme determine scope and execution. B: The interface label determines which spender receives authority. C: Connection itself moves the displayed token balance. |
| P8B2 / O-08.2, reused O-02.3 / E | A: Accept 1,000-token scope on its account-check wording. B: Provide private key before reviewing the matched 10-token scope. C: Refuse secret/excess scope; allow next matched 10-token authority review. | A: No immediate fee makes S a read-only rather than spending request. B: Task matching permits bounded review, not secret disclosure or excess scope. C: The signed authority establishes completed swap and local payout. |
| P8B3 / O-08.3 / E | A: Recognise confirmed allowance/nonce changes; promise no past-transfer reversal. B: Treat Disconnect alone as the same two confirmed changes. C: Treat named-state changes as cancellation of unrelated authority elsewhere. | A: Recorded allowance zero substitutes for the separate nonce update. B: Confirmed revocation supplies the historical receiving refund. C: Each confirmed action addresses its own authority state. |
| P8B4 / O-08.4, reused O-04.2, O-06.1 / E | A: Advance X on its matching ticker and sufficient gas budget. B: Pause X; recognise Y's independently corrected supported representation/tag/details. C: Replace tag 84 with 48 because each has two digits. | A: The independently corrected case resolves essential route/destination mismatches. B: Fee affordability supplies missing receiving support and attribution. C: The matching tag format establishes the correct receiving-account value. |
| P8B5 / O-08.4 / C | A: Combine 0.025 gas with tokens and report 10.025 net. B: Debit 10.2 tokens/receive 10; disregard the stated deduction. C: Debit 10/receive 9.8 tokens plus separate estimated 0.025 gas. | A: The network fee is a deduction from the transferred-token amount. B: Token deduction and gas follow separate supplied asset rules. C: The estimated fee establishes the final charged execution cost. |
| P8B6 / O-08.4 / E | A: Recognise matching success/credit; keep payout/reading/course-authority boundaries. B: Treat credit as unavailable until the reader saves an article. C: Use explorer success as proof of payout and all course outcomes. | A: Records establish bounded stages; reading adds no course evidence. B: The credited token balance records the local bank receiving balance. C: Saving the article supplies the capstone's prerequisite evidence. |

### Facilitator-only PM-08-B key

| Criterion | Action / Reason | Essential accepted meaning / feedback |
| --- | --- | --- |
| P8B1 | B / A | Distinguish connection, non-spending login signature, fee-free signed spending authority, approval transaction and direct transfer. |
| P8B2 | C / B | Identify DEMO-SWAP-C/DEMO-TOKEN/exact 10/deadline and refuse DEMO-CHECK-C/1,000 plus private-key request. Approval for next mock review is not execution or payout. |
| P8B3 | A / C | The specific supplied confirmed actions address old allowance and separate signed authority. Disconnect alone is insufficient; no global permission clearance or reversal claim. |
| P8B4 | B / A | Essential X mismatches remain despite cost calculation; Y explicitly resolves representation, network and all destination/request fields. |
| P8B5 | C / B |10 gross− 0.2 provider deduction=9.8 tokens net; gas 0.025 separately, estimated, budgeted by 0.07. Do not mix assets or add fee twice. |
| P8B6 | A / A | Positive actual provider credit recognised; no bank-payout stage established. Articles/bookmarks earn no learning evidence and require no wallet permission. |

## Manifest and review dependencies

| Module | Full draft KC forms / paired items | Full draft PM forms / paired decisions | Mapped outcome-form bundles | Gate carried unchanged |
| --- | --- | --- | --- | --- |
| M-05 | KC-05-A/B: 2 forms /16 items | PM-05-A/B: 2 forms /12 decisions | KC8 + PM8 | None. |
| M-06 | KC-06-A/B: 2 forms /16 items | PM-06-A/B: 2 forms /12 decisions | KC8 + PM8 | O-04.2, O-04.3, O-06.1, O-06.2. |
| M-07 | KC-07-A/B: 2 forms /16 items | PM-07-A/B: 2 forms /12 decisions | KC8 + PM8 | None. |
| M-08 | KC-08-A/B: 2 forms /16 items | PM-08-A/B: 2 forms /12 decisions | KC8 + PM8 | O-02.3, O-04.2, O-06.1, O-08.1, O-08.2. |
| Total | **8 full draft forms /64 paired items** | **8 full draft forms /48 paired decisions** | **32 KC +32 PM bundles** | Exact criteria/mappings/gates need qualified approval. |

“Full draft” means every specified module outcome has actual prompts, alternatives and keys here. It does not mean all underlying subskills are proven sufficiently measured, that two forms are equivalent, or that any content has been approved/published/tested. Every outcome has at least two KC item exposures per form; mission compound prompts have explicit mappings and require complete paired answers. Reviewers may split broad/compound criteria, replace ambiguity or add item sets before approval. The forms intentionally include justified proceed/recognise-receipt cases as well as pause/decline cases.

Existing bounded KC-07/PM-07 material in [Assessment Rules](ASSESSMENT-RULES.md) remains separate lineage and must not be counted as additional full-module forms or treated as automatically interchangeable. Full-module forms here should receive their own activity/version identities before production use. Existing samples and form exposure need to be recorded when assessing retries; a shuffled familiar answer is not independent reasoning proof.

### Source boundaries

No new sources were inspected in preparing this file. Existing source IDs identify background and future claim checks, not human validation of exact fixtures:

| Source IDs | Use and limit |
| --- | --- |
| S-04/05/06 | Earlier Bitcoin/Ethereum wallet/security context for responsibilities, spending requests and secrets. These do not define every account/token scheme; every permission/fee/finality rule in the forms is explicitly fictional. Exact production claims need model-specific source review. |
| S-08/09/19 | Existing worked-example/retrieval/clarity/accessibility context. They establish neither these passing rules nor form equivalence or audience effectiveness. |
| S-20/21/23 | Existing network/representation context, with excerpt/current-provider limits in the register. DEMO receiving support is supplied fiction, not a real-service support assertion. |
| S-22/24 | Existing stablecoin mechanism/issuer-terms context. S-24 is scoped to retrieved Circle terms; the invented eligible accounts/redemption minima/restrictions here do not claim current Circle availability, reserve adequacy or universal issuer rules. |
| S-47–50 | Regional sources have age/partial-access/current-applicability limits. These forms contain no Ghana/Nigeria crypto wages, invoice or provider-availability instruction. A local-money fixture is not a country-law conclusion. |

### Required actual review before scored release

1. Qualified crypto/curriculum reviewer checks each exact key, mechanics, E/C classification, complete subskill coverage, compound prompt load, alternative plausibility and factual scope. Pay particular attention to target versus market price, eligible redemption, all fee assets/deductions, inclusion/failure, supplied network finality, receiving evidence and signature/nonce/revocation boundaries.
2. Publishing/source editor verifies any real claim added during lesson integration, replaces stale statements, scopes country/provider instructions and tracks dependencies into item/activity versions.
3. English/voice and fluent Nigerian reviewers inspect actual contextual wording without inserting a phrase quota. No Pidgin knowledge, spelling trick or culturally specific idiom can be a passing criterion. Non-Nigerian beginners should review comprehension.
4. Owner-arranged learner review tests genuine understanding, confusion, answer-length/cue effects and cognitive load in the actual extracts. A/B forms are deliberately varied but have **no measured equivalence** yet. Low-volume pilot observations are not population estimates.
5. Record actual reviewer, date, version, criteria changes, gate/equivalence decisions and release readiness. Deliver separate learner/feedback/key materials to later development and execute the specified authority/privacy/version tests there.

Approved model and scope are owner decisions; these individual banks/gates remain draft inputs. **Approved scored forms: zero. Human-reviewed equivalent retries: zero. Learner sessions: none claimed. Application grading/privacy/acceptance tests: not executed.** No product code, configured components, real transaction instructions or visual design is supplied.
