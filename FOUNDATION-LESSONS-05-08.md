# Wetin Be Crypto — Foundation Lesson Drafts, Modules 05–08

Version: 0.1
Date: 7 October 2026
Status: Complete first writing draft of 16 lessons for subject, English/voice and learner review. The owner has adopted the eight-module/32-lesson baseline; this is not approval of the copy, factual claims, assessment items or publication.

Related: [Curriculum Coverage](CURRICULUM-COVERAGE.md), [Assessment Rules](ASSESSMENT-RULES.md), [Voice and Editorial Guide](VOICE-AND-EDITORIAL-GUIDE.md), [Research Findings](RESEARCH-FINDINGS.md), [Evidence Register](EVIDENCE-REGISTER.md), [Content Design Samples](CONTENT-DESIGN-SAMPLES.md).

## How to use these drafts

Each lesson teaches its existing named outcome through an original explanation and a worked fictional situation. All services, account views, quotes, rates, amounts, fee schedules, addresses and transaction records in worked situations are teaching fixtures. `DEMO-USD`, `DEMO-FEE` and `LOCAL` are invented units, not assets to acquire or current exchange rates. Invalid destination placeholders cannot receive funds. No exercise requests real credentials, a personal wallet address, a transaction, a signature, registration with a provider or contact with a counterparty.

The source notes identify **starting references already in the evidence register**, alongside the exact remaining review need. Writing this pack involved reading repository records; it did not involve new source inspection. S-04–06 are carried-forward protocol/security references with topic-specific review outstanding. S-20 is excerpt-only; S-23 has provider-specific and age limits; S-24 records inspected non-EEA issuer terms, not independent assurance or rules for all users. S-22 supplies mechanism context. The earlier inspection records and dates remain in Research Findings/Evidence Register; this document's preparation date is not a fresh verification date.

Source notes and review instructions are editorial metadata, separate from learner delivery. Before publication, a qualified subject reviewer must substantiate the exact mechanism and scope, an English/voice reviewer must assess the wording, and actual learners must review comprehension. Pidgin asides need fluent Nigerian and outside-Nigeria review. No such approval or session is claimed here. All lesson reading remains public; finishing copy is not check or mission evidence. The related KC/PM references identify intended practice, not an existing scored activity or an automatically earned pass.

## M-05 — Understand stablecoins and conversion

### L-05.1 — What does a stablecoin try to stay stable against?

**Outcome O-05.1:** Identify the reference value and explain that a stability target differs from a guaranteed market price; recognise basic reserve-backed, crypto-collateral, and algorithmic model differences.

#### Learner copy

The word *stable* needs a second question: stable against what? A stablecoin may aim to track a currency, a commodity or another stated reference. A dollar-linked token targets a dollar value; it does not promise a fixed amount of your local currency. Exchange rates between currencies can move even while the token stays close to its target.

The target is the intention. The mechanism is how the design tries to maintain it. The market quote is the price someone currently offers. Those are three different facts.

Start with three broad models. A **reserve-backed** design relies on assets held under an issuer's arrangements and on the conditions for issuing and redeeming tokens. Reserve composition, access and reliable evidence matter. **Crypto-collateral** designs rely on crypto assets and rules for managing collateral; falling collateral values or failures in the system can create risks. **Algorithmic** designs rely substantially on programmed supply changes or incentives, sometimes alongside collateral. A rule that aims to restore the target does not guarantee that people will keep buying or that the mechanism will work. Real designs can combine features, so a label is only a starting point.

In our fictional market, Ama compares three tokens. Each targets one reference dollar. ReserveToken quotes at 0.99 reference dollars; CollateralToken at 1.01; RuleToken at 0.94. Their descriptions explain different mechanisms but provide no promise of recovery to one dollar.

Ama can correctly identify all three targets while also recognising their different quoted prices. She cannot conclude that the largest discount is a bargain or that a reserve label proves reserves are sufficient and accessible. She needs evidence about the particular design and its conditions.

**Takeaway:** name the reference, the mechanism and the actual quote separately. A target is not a price guarantee. KC-05 checks this distinction; PM-05 applies it while comparing fictional conversion routes. Reading this lesson alone does not establish either result.

#### Editorial/source note

Starting references: S-22 stablecoin mechanism context; S-24 issuer-specific redemption/restriction terms. Required review: substantiate the three model introductions using exact applicable protocol/issuer and independent research sources; examine hybrid designs, reserve evidence and reference-value wording. The fictional quotes are authored fixtures, not inspected market data. No prediction, recommendation or reserve assurance is made.

### L-05.2 — Holding, redeeming, and converting are different

**Outcome O-05.2:** Distinguish holding a token, eligible direct issuer redemption, exchange conversion, and local-currency payout; identify issuer/collateral, liquidity, and restriction risks.

#### Learner copy

Having a stablecoin balance does not mean a bank has already credited you. Four stages help explain why.

**Holding** means your described account or on-chain arrangement records the token. Control depends on the custody model. **Direct issuer redemption** means an eligible holder uses the issuer's specified process to exchange the token for the reference asset or money. Eligibility, identity checks, account access, minimums, jurisdiction and other terms may apply. **Conversion** means a service or market exchanges the token for another asset or currency at its offered terms. **Local payout** is the separate step that credits the intended bank, mobile-money or other receiving account.

One route may combine some steps in its interface, but a combined button does not remove the underlying conditions. Read the conditions before treating a balance as redeemable.

Chidi holds 100 DEMO-USD tokens in the fictional PocketService. Their stated target is one reference dollar each. The issuer's supplied fixture says direct redemption is available only to eligible approved issuer accounts. Chidi has no such account. PocketService offers conversion at 0.98 reference dollars per token, producing 98 before its stated charges. It also says local payout needs a separately supported receiving account and further processing.

Chidi cannot assume a right to redeem through the issuer from this fixture. He can examine the conversion offer, but the offer is not proof of completed payout. His token balance, issuer eligibility, market quote and payout record answer different questions.

Risks also sit at different stages. The issuer or collateral arrangement may fail to support the intended value. A market may lack buyers at the desired price: that is a liquidity problem. Account, asset or jurisdiction restrictions may limit access or transfers. The conversion or payout service can impose its own conditions. A token designed for a stable target does not remove these dependencies.

**Takeaway:** ask which step is available to this holder, under which terms, and what evidence establishes its completion. KC-05 examines unsupported redemption assumptions; PM-05 uses these distinctions to assess fictional offers.

#### Editorial/source note

Starting references: S-22 and S-24. Required review: exact redemption eligibility, restriction and issuer/collateral terminology; distinguish terms from independent financial assurance. PROVIDER and COUNTRY sources are still needed for any real conversion or local payout example. PocketService and every figure are fictional; this lesson establishes no actual user eligibility, country availability or legal route.

### L-05.3 — Centralised services and decentralised exchanges

**Outcome O-05.3:** Distinguish a centralised account service from an on-chain exchange interaction, explaining the supplied control, permission, and execution differences.

#### Learner copy

Two screens can both say *Exchange* while asking you to trust different arrangements. Inspect who controls the account, who performs the exchange and what authority you are being asked to grant.

A centralised account service usually manages balances within its own system. In a custodial arrangement, the provider controls the relevant spending keys while the customer uses the provider account. Trading inside that system may update an internal balance rather than create a blockchain transaction for each trade. Withdrawal and local payout depend on the provider's supported routes and conditions.

An on-chain exchange interaction uses transactions or other authorisations involving contracts on the specified network. In a self-custody arrangement, the user controls the account's authorisation, but still depends on contract behaviour, liquidity, the network and potentially an interface or other infrastructure. Some token exchanges require spending permissions; signature-based authority can also matter. *Decentralised* does not describe every dependency or guarantee that a particular request is appropriate.

Mariama compares two fictional offers. DeskAccount records 50 DEMO-USD in her custodial account and offers an internal conversion into a LOCAL balance. Bank payout is a separate service step. SwapWindow instead proposes an on-chain exchange of 50 DEMO-USD into another token on Network A. Its fixture names a spender contract, a token spending limit, an estimated network fee and a minimum output under the supplied quote conditions.

DeskAccount's LOCAL balance is not yet a bank receipt. SwapWindow's output is another token, not a bank balance. A successful swap does not silently complete local-money conversion or payout. Mariama must also understand the authority requested before signing; a good exchange quote cannot excuse an unrelated or excessive permission.

Neither label decides which route she should use. The useful comparison concerns control, execution, fees, restrictions, support and the actual desired result. Declining both is a valid decision when essential information is missing.

**Takeaway:** identify the account model and the result the exchange actually produces. KC-05 compares the routes; PM-05 asks you to avoid mistaking a swap or internal balance for completed local payout.

#### Editorial/source note

Starting references: S-05 wallet/control context; S-06 permission/security context; S-22 stablecoin background. Required review: exact exchange, custody, permission and execution claims against selected protocol/contract/provider documentation. These references are starting points, not proof of a DEX or provider workflow. No real contract, quote, service or signature is supplied.

### L-05.4 — Compare the whole local-money route

**Outcome O-05.4:** Compare fictional conversion/P2P offers using rates, fees, receiving evidence, payout conditions, and counterparty/dispute arrangements.

#### Learner copy

The biggest displayed rate is not always the best complete offer. Compare what you start with, what gets charged, what reaches the intended account and what still needs confirming.

Ama wants to compare two fictional routes for 100 DEMO-USD. Route A quotes 10 LOCAL units per token and deducts a fixed 50 LOCAL conversion-and-payout charge. Its supplied calculation is: 100 × 10 = 1,000 LOCAL before the charge; 1,000 − 50 = **950 LOCAL** expected in the supported receiving account, subject to the listed processing conditions.

Route B quotes 9.8 LOCAL per token and deducts a fixed 10 LOCAL charge: 100 × 9.8 = 980; 980 − 10 = **970 LOCAL**. The arithmetic makes Route B look better. But its fictional counterparty provides only a payment screenshot and asks for immediate release of the token side. The receiving account has no matching credited payment, and the fixture gives no independently established dispute process.

Ama should not treat the extra 20 LOCAL as compensation for missing payment evidence. A correct sum cannot prove that funds arrived or that a dispute can be resolved. Her useful next action is to inspect the independently reached receiving record and the actual platform conditions. If these cannot be established, she can decline Route B. Route A also needs its support and conditions checked; it is not automatically safe because its calculation is clear.

In person-to-person, or **P2P**, arrangements, another person may be the trading counterparty even when a platform supplies an interface. Do not assume a platform holds funds, guarantees a payment, reverses a transfer or covers a bank reversal unless the relevant verified terms establish it. Different routes allocate those responsibilities differently.

**Takeaway:** compare net received value alongside receiving evidence, counterparty identity, payout restrictions and dispute arrangements. KC-05 checks the missing cost or condition; PM-05 lets you choose, pause or decline using the full fictional route.

#### Editorial/source note

Starting references: S-06 security principles; S-24 distinction between issuer and third-party conversion terms. Required review: applicable PROVIDER/COUNTRY payment, P2P, escrow, reversal and dispute evidence before any real-world instructions. All rates and service behaviours here are explicitly invented; neither offer establishes regional availability. Arithmetic: A 950 LOCAL; B 970 LOCAL; difference 20 LOCAL.

## M-06 — Review before authorising

### L-06.1 — Read the request and send screen together

**Outcome O-06.1:** Reconcile the intended recipient, asset, network, amount, destination, and required details before authorisation.

#### Learner copy

The request says what someone wants. The send screen says what the proposed action will actually do. Read them together before deciding whether the action matches the intention.

Begin with the intended recipient and independently obtained receiving instructions. Establish the exact asset or representation and the supported network. Then compare the full destination, the amount and any required memo, tag or deposit condition. A familiar logo, matching address prefix or recent-looking screenshot cannot substitute for the complete comparison.

In our fictional exercise, Bisi's receiving instructions specify 40 DEMO-USD on Network A, destination `DEMO-BISI-NOT-AN-ADDRESS`, and required reference `DEMO-REF-82`. The source is the independently reached MockReceive account view. Ama's proposed send screen shows the correct asset, Network A, 40 DEMO-USD and the same invalid demonstration destination. Its reference field says `DEMO-REF-28`.

The route appears almost right, but the reference is different. Ama should pause. She has enough information to name the mismatch precisely: the required reference on the proposed action does not match the independently checked receiving instructions. In this fixture, correcting and rechecking that field is necessary before a final review. A cheaper fee or a correct amount does not cancel the mismatch.

Now change the fixture. Suppose every field matches but the receiving instructions came only from a new message asking Ama to use a replacement destination. The next useful step is independent verification of the replacement instructions, rather than copying the message more carefully. Matching untrusted information is still not verified information.

Some routes require no memo or tag; others require one. Do not invent a universal requirement. Apply the conditions supplied for the exact receiving route and ask when they are missing. A valid-looking destination can also belong to the wrong person.

**Takeaway:** reconcile identity, route, full destination, amount and required details across trustworthy instructions and the proposed action. KC-06 checks mismatches. PM-06 combines this review with compatibility and cost criteria; its selected prerequisites are defined in Assessment Rules.

#### Editorial/source note

Starting references: S-06 verification/security context; S-23 provider-specific support conditions; S-20/S-24 representation distinctions. Required review: current destination, memo/tag and deposit-condition claims against the chosen PROVIDER/PROTOCOL model. Placeholders are intentionally invalid; no actual receiving account or transaction is requested.

### L-06.2 — Gas, network fees, and total cost

**Outcome O-06.2:** Distinguish computational gas from a fee, identify the described fee asset, and calculate expected sender cost/recipient value from explicitly supplied fee rules.

#### Learner copy

*Gas* describes computational work in systems that use gas accounting. The fee is the amount charged under that network's rules. Gas units are not themselves a currency balance, and the asset being transferred may differ from the asset used to pay the fee. Networks and account services use different arrangements, so read the supplied rule.

Our fictional Network A example uses 20,000 gas units at a stated price of 3 micro-DEMO-FEE per unit. One million micro-DEMO-FEE equals one DEMO-FEE. The calculation is 20,000 × 3 = 60,000 micro-DEMO-FEE, or **0.06 DEMO-FEE**. This is a teaching formula for the fixture, not the complete fee model of a named network.

If the transfer is 25 DEMO-USD and the network fee is paid separately in DEMO-FEE, the sender needs 25 DEMO-USD **and** the required DEMO-FEE balance under the stated rules. Saying the total is “25.06 tokens” mixes different units. The recipient's expected token amount remains 25 DEMO-USD in this fixture; no extra deduction is specified.

A custodial service could supply a different rule. MockDesk charges a fixed 2 DEMO-USD withdrawal fee. Under an **added-fee** offer, sending 100 DEMO-USD to the recipient debits 102 DEMO-USD from the sender. Under a **deducted-fee** offer, a sender debit of 100 DEMO-USD delivers 98 DEMO-USD. The same fee amount produces different receiving amounts because the offers define it differently.

Compare the rule, not just the number. Identify the fee asset, whether charges are additional or deducted, whether the quote includes service charges, and whether the sender has the required balances. Missing conditions are a reason to ask a specific question before authorisation. A small fee in the wrong asset is still a practical gap.

**Takeaway:** retain the units and distinguish sender debit from recipient value. KC-06 applies the stated fee rules; PM-06 checks the complete fictional request. Correct arithmetic alone does not prove compatibility or justify signing.

#### Editorial/source note

Starting reference: S-05 Ethereum context; S-04 network-specific caution. Required review: exact gas, base/priority/data fee or other fee components for any named protocol; selected service fee treatment and sponsorship arrangements. The micro-unit formula and balances are authored fixtures. Verify arithmetic independently before publication; no live gas price or universal formula is claimed.

### L-06.3 — Estimates, delays, and failed execution

**Outcome O-06.3:** Explain which supplied costs or timing claims are estimates and distinguish an included failed execution from a transaction rejected before inclusion.

#### Learner copy

An estimate describes an expected result under stated assumptions. A guarantee is a stronger commitment. A screen showing “about two minutes” or an estimated fee does not establish that every transaction will finish on that schedule or at that exact cost.

Network demand, transaction rules, account conditions and provider processing can affect the result. A quote may also have an expiry or a stated maximum. Read what each figure means; a maximum is not necessarily the final amount charged, and a preliminary estimate is not automatically a maximum. If the conditions are missing, you cannot manufacture them from the word *estimated*.

Kwame reviews two fictional records. Record A says MockWallet rejected the proposed action **before broadcast** because the required DEMO-FEE balance was unavailable. The fixture explicitly states that no transaction was sent or included and that this rejection has no service charge. In this case, the supplied facts establish no network execution fee.

Record B says a transaction was broadcast, included on Network A and then **failed during execution**. Its mock record lists 0 DEMO-USD transferred and 0.04 DEMO-FEE charged for work performed. The intended transfer did not complete, but a fee was charged. Kwame should not infer that “failed” means “nothing happened” or “all charges disappeared”.

These cases are deliberately different. “Rejected before broadcast”, “submitted but not included” and “included with failed execution” are not interchangeable labels. Other protocols and services can handle charges differently; the status and applicable rules must support the conclusion.

If a record is still pending, repeated attempts are not automatically the right response. First establish the original action's status and the relevant rules; this lesson does not ask you to submit or replace a transaction.

**Takeaway:** identify what stage was reached, what the estimate promised and what charge the actual record establishes. KC-06 compares rejection and included failure; PM-06 asks you to describe the remaining cost and timing uncertainty accurately.

#### Editorial/source note

Starting references: S-04 and S-05 protocol context. Required review: transaction inclusion/execution, fee consequence and quote-limit wording for the exact selected network/account/provider. MockRecord B's fee is supplied, not a universal failed-transaction rule. No real troubleshooting, rebroadcast or replacement procedure is taught.

### L-06.4 — Decide whether the checks are complete

**Outcome O-06.4:** Authorise a fictional action only when the required information is consistent, or pause with a specific verification action.

#### Learner copy

A final review joins the checks together. You are looking for a consistent, justified action, rather than collecting enough green ticks to overlook one serious gap.

In a fictional request, Ada expects the recipient Bisi to receive 30 DEMO-USD on Network A. Independently checked receiving instructions identify the exact representation, full invalid demonstration destination and required reference. The proposed send screen matches those fields. The quoted rule adds a fixed 1 DEMO-USD service fee, so the sender debit is 31 DEMO-USD and the expected recipient amount is 30. The fixture confirms the required balance and states the quote's validity period. No unrelated app signature or spending permission is requested.

For this bounded exercise, those supplied conditions support selecting **“Authorise the described fictional action.”** That is an answer about a mock record, not an instruction to move real funds or a promise that a provider will perform successfully.

Now replace one condition: the receiving service confirms Network B only while the send screen uses Network A. The totals remain correct, and the destination has the same appearance. Ada should pause and verify an actually supported matching route. Cost arithmetic cannot repair incompatible receiving support.

Change another condition: the quote is compatible but its fee treatment is missing. A useful pause names the exact question: is the fee added to the sender debit, deducted from the recipient amount, or charged in another asset? “Something feels wrong” is less helpful than identifying the unresolved condition.

Some situations justify **declining**, rather than collecting more information. An independently verified unnecessary secret request is not made appropriate by waiting. In other situations, a missing current quote or inconsistent reference can be resolved and reviewed again. The response should match the evidence.

**Takeaway:** choose authorise, pause or decline with a specific reason tied to the complete request. KC-06 assesses the final judgement; PM-06 applies all declared review criteria. Passing one calculation cannot offset an essential route or authority mistake.

#### Editorial/source note

Starting references: S-06 security principles; S-23 provider-route distinction; S-24 representation conditions. Required review: adequacy of the full checklist and the fixture's authorisation boundary. Confirm assessment wording accepts defensible pause/decline responses when information changes. No supplier performance or real-world readiness is guaranteed.

## M-07 — Verify what happened

### L-07.1 — Submitted is not the same as completed

**Outcome O-07.1:** Distinguish submitted, pending, failed, confirmed, provider-credited, and paid-out states in a described route.

#### Learner copy

A transaction can move through several stages while different systems report different parts of the journey. Always ask: completed **where**, and completed **for which intended result**?

**Submitted** means the described action has been sent to the next stage; it is not proof of inclusion or acceptance. **Pending** means a stage remains unresolved under the system's rules. **Failed** needs context: an action may be rejected before broadcast or included with failed execution. A **confirmed** record establishes inclusion or network progression under the supplied rules; inspect its execution result to determine whether the intended action succeeded. An included failed execution can still receive confirmations. **Provider-credited** means the receiving service has recognised the deposit in the customer's account. **Paid out** means the intended local-money receiving step has completed according to its own evidence.

These labels are a reading framework, not a universal vocabulary used identically by every network or provider.

Ama's fictional journey starts with MockSend displaying “Submitted”. Later, the Network A explorer reports a successful transfer of 60 DEMO-USD to the supported receiving destination. MockReceive still says “Deposit processing”. The local receiving account shows no payout.

At that moment, Ama can report network success and pending provider processing. She cannot report provider credit or local-money receipt. Later, MockReceive independently shows a credited 60 DEMO-USD balance. That establishes the provider-credit stage, but the local payout remains unconfirmed until the appropriate receiving record establishes it.

The sender's screenshot may help identify what to look for, but it is not a substitute for independently reached records. Similarly, an explorer cannot show an internal provider balance or bank outcome merely because the network transfer succeeded.

Avoid both extremes: treating “Submitted” as finished, or refusing to recognise a genuinely credited record after all stated acceptance conditions are met. Identify the strongest stage the evidence supports and the particular gap that remains.

**Takeaway:** reconcile the network, provider and local payout records separately. KC-07 checks stage interpretation; PM-07 uses mock records to establish what happened and what still needs verification.

#### Editorial/source note

Starting references: S-04/S-05 protocol context; S-23 provider-specific deposit context. Required review: exact status vocabulary, execution outcomes and credit/payout evidence for a selected model. No real provider status sequence or completion time is asserted. These records do not teach wage/invoice/payment availability in any country.

### L-07.2 — Confirmations and finality depend on the network

**Outcome O-07.2:** Explain why network confirmation/finality and a provider's acceptance rule are separate and why a universal guaranteed completion time is unsupported.

#### Learner copy

Network processing and a provider's acceptance policy answer different questions. The network determines inclusion and settlement under its own rules. A receiving service decides when its deposit conditions are met and when it credits the account.

Some systems describe additional blocks after inclusion as confirmations. Some also have a separately defined finality state; other systems offer increasing confidence rather than the same kind of finality claim. Counts and labels cannot be copied between networks as if they meant identical things. A provider may require a particular number of confirmations, a finality condition and additional processing. Its policy does not alter the underlying network rules.

Our fictional MockReceive policy requires **five Network A confirmations and completed provider processing** for an otherwise supported deposit. The first record shows a matching successful transfer with three confirmations. MockReceive says “Not credited”. The network transfer has succeeded in the supplied record, but the provider's five-confirmation threshold is not yet met. Ama should not announce a credited deposit.

Later, the explorer shows five confirmations and MockReceive's independently reached record says “Credited”. Both supplied requirements have been satisfied. Ama can recognise provider credit instead of endlessly assuming it is still pending. However, the separate local bank payout record is still “Processing”, so she cannot call that payout complete.

Five is a rule of this fictional service, not a recommended universal number. More confirmations also do not fix an unsupported asset/network route, a wrong recipient or an unmet deposit minimum. Those are different conditions.

A claim such as “all crypto payments finish in ten seconds” ignores the network, the actual transaction and provider steps. A supplied expected time can help plan, but the eventual record and applicable rules establish the result.

**Takeaway:** apply the exact network and provider conditions, then recognise the stage actually demonstrated. KC-07 interprets changing records; PM-07 includes both pending and positively credited cases, while keeping local payout separate.

#### Editorial/source note

Starting references: S-04/S-05 protocol context; S-23 provider-specific support. Required review: confirmation/finality descriptions against the exact protocol and current provider policy. The five-confirmation example is explicitly fictional and matches the Assessment Rules PM-07 teaching fixture; it is not a Bitcoin/Ethereum acceptance recommendation.

### L-07.3 — Read an explorer without overclaiming

**Outcome O-07.3:** Identify the network, transaction identifier, status, addresses, amount, and fees in a mock explorer record and state what it cannot prove.

#### Learner copy

An explorer presents information about a particular blockchain. It can help you inspect a transaction, but it is not a universal receipt for every later service or local-money step.

Begin with the **network**. A transaction identifier on one network does not identify a record on every network. Then match the **transaction identifier**, **status**, **sending and receiving addresses**, **asset/amount** and **fees** against the intended action. Where a transaction contains several actions or token movements, a headline amount or success label may not describe every intended result. Read the relevant details under the supplied model.

Kwame receives this fictional record: Network A; identifier `DEMO-TX-701`; execution status “Success”; sender `DEMO-SENDER`; recipient `DEMO-RECEIVER`; transfer 70 DEMO-USD; fee 0.03 DEMO-FEE. The placeholders cannot be searched as real transactions. The independently checked receiving instructions specify the same network, representation and destination.

This record supports the described network transfer and supplied fee. It does not establish who owns a displayed address merely from its appearance. It also cannot prove that MockReceive credited the customer, that a LOCAL conversion used a particular rate, or that a bank/mobile-money payout completed. Each claim needs the relevant independently reached record.

If another screenshot shows `DEMO-TX-702`, do not merge it into the same journey just because the amount is also 70. Similar-looking records can be different transactions. A sender can share an identifier as a clue, but independent inspection is stronger than trusting the screenshot's labels.

Do not enter a private key or recovery phrase to read a public transaction record. A request for those secrets changes the task into a dangerous request; the public record does not need them.

**Takeaway:** match the right record and state its evidence boundary. KC-07 checks the fields and their limits; PM-07 combines explorer facts with provider and payout records. Explorer success alone does not complete the entire route.

#### Editorial/source note

Starting references: S-04/S-05 protocol context and S-06 secret protection. Required review: chosen explorer presentation, execution/token-event interpretation, transaction fields and units. All data is fabricated; there is no inspected live transaction or endorsement of an explorer. Confirm simplified fields do not imply every network presents token transfers identically.

### L-07.4 — Public records, privacy, and useful receipts

**Outcome O-07.4:** Identify publicly visible information and preserve useful fictional transaction/cost records without disclosing recovery material or assuming anonymity.

#### Learner copy

A blockchain address may look like a pseudonym, but that does not promise anonymity. On many public networks, people can inspect transaction information such as addresses, amounts, timing and links between transfers. What is visible depends on the network and transaction design. Provider account data, shared screenshots and other information can add context that connects a public address with a person.

Useful evidence and secret material serve different purposes. A transaction identifier helps locate a record. A dated quote helps explain the agreed rate or fee. A provider receipt establishes the service stage it describes. A private key or recovery phrase supplies powerful account authority; it is not an ordinary receipt and should not be attached to a support request.

In a fictional exercise, Mariama keeps the Network A identifier `DEMO-TX-880`, the declared asset/network, the amount sent, the recorded fee and the relevant times. She separately keeps MockReceive's credited-deposit reference and the LOCAL payout receipt. These records help distinguish the transfer, provider credit and local-money result. She also retains the supplied quote because an explorer alone cannot reconstruct a service's conversion fee or promised receiving amount.

Before sharing a record, Mariama considers the intended recipient and the minimum information needed. Publishing a full account screenshot might expose balances, contact details or account references unrelated to the question. Redacting unnecessary data can help, but hiding a name does not erase information already public on a ledger. There is no promise that every redacted transaction is untraceable.

The learning exercise uses fictional records. You do not need to reveal a real address or personal transaction history to demonstrate this skill. Retention obligations for real financial records depend on applicable rules and circumstances; this lesson does not set a universal legal period.

**Takeaway:** retain evidence appropriate to each stage, protect account authority, and avoid assuming that pseudonyms mean anonymity. KC-07 checks the privacy implications; PM-07 asks which fictional records are useful without requesting secrets.

#### Editorial/source note

Starting references: S-04 privacy context; S-06 account-security principles. Required review: exact public visibility and metadata risks against the selected network; COUNTRY guidance for any real retention/tax advice. No legal retention period or quantified traceability claim is offered. Learner research must continue using mock records.

## M-08 — Understand permissions and combine skills

### L-08.1 — Connect, sign, approve, or transfer?

**Outcome O-08.1:** Distinguish a connection, message signature, spending authorisation, and transfer in clearly described fictional requests.

#### Learner copy

The label on a button is an invitation, not a complete description of authority. Read what the proposed action does.

In a familiar wallet-and-app model, **connecting** makes specified account information available to an interface and lets it request further actions. Connection by itself is different from approving every later request. However, an app's “Connect” flow might bundle more requests, so inspect them separately rather than trusting the button name.

A **message signature** creates cryptographic evidence under the account's signing rules. Some messages are used for sign-in or other limited purposes; some signature formats can grant consequential authority. A **spending authorisation** permits a named spender to move a specified token within the supplied conditions. A **transfer** directs a movement of assets. Permissions and account models vary, and one workflow can involve several of these actions.

Our fictional ExampleApp first requests the display of `DEMO-ACCOUNT`, with no transfer or spending permission in the supplied details. That describes the fixture's connection step. Next it asks to sign a message stating “Sign in to ExampleApp”, with the stated domain and session conditions. A third request grants `DEMO-SPENDER` permission to spend up to 50 DEMO-USD. A fourth proposes sending 20 DEMO-USD to `DEMO-DESTINATION`.

These are four different requests. The fact that the first was a connection does not approve the third or fourth. The sign-in example is limited by its actual supplied terms; the word *message* alone cannot prove harmlessness. If the request cannot be understood or verified, pausing is more useful than guessing from the lack of a Send button.

An ordinary receiving instruction also does not automatically require signing an app request. Compare the authority with the task you intended to perform.

**Takeaway:** classify the actual authority, not the marketing label. KC-08 checks these distinctions; PM-08 asks whether each fictional action is necessary and justified. No real connection or signature is required.

#### Editorial/source note

Starting references: S-05 wallet context and S-06 signature/permission security. Required review: exact connection exposure, authentication-message and spending-authority mechanisms for the chosen account/token model. The fictional limited sign-in message is not a universal safe-signature template; add exact domain/session checks only with applicable sources.

### L-08.2 — Check who receives authority and how much

**Outcome O-08.2:** Identify the proposed spender, asset, scope, and spending limit; recognise that some signature-based requests can authorise spending without a visible transfer fee.

#### Learner copy

Before accepting a permission, identify **who receives authority**, **which asset it covers**, **what actions it permits**, **how much it permits**, and any stated **duration or expiry**. If one of those facts is missing or unintelligible, the request is not ready for your approval.

In the supplied fictional token model, a spending allowance permits a named contract to move up to the stated quantity of a token. That is different from sending the token immediately. A large or unlimited allowance can create exposure beyond the current intended exchange. A recognised interface name does not independently identify the actual spender or prove its behaviour.

Bisi wants to exchange 12 DEMO-USD through ExampleSwap. Her independently checked fixture identifies the expected spender as `DEMO-SWAP-A`. The proposed request instead names `DEMO-SPENDER-Z`, covers all available DEMO-USD with an unlimited limit, and provides no explained expiry. Its banner says “Free verification — no transaction fee”.

Bisi should decline this request. The spender does not match the independently checked intended route, the authority exceeds the described task, and the banner does not explain those conditions. No be every “free” thing harmless: the essential point is that a request can grant authority even without charging an immediate network fee.

Some signature-based authorisations can be submitted or used later by another party under their rules. Signing is therefore not automatically safe because the wallet shows no immediate transfer or fee. Equally, not every message signature is a spending permission; inspect the particular request instead of labelling every signature the same way.

A corrected spender and a limited amount still need the appropriate asset, scope, source and purpose checks. Reducing a limit cannot make a malicious recipient appropriate. Hardware or a familiar wallet interface also cannot decide whether the authority matches your intention.

**Takeaway:** match the actual spender and permission to a justified task; refuse unexplained or excessive authority. KC-08 checks the supplied scope and limits; PM-08 applies the decision alongside route, cost and trust checks.

#### Editorial/source note

Starting reference: S-06 security/permission context; S-05 account-model background. Required review: selected token allowance and signature-authority formats, expiry semantics and independently verifiable spender identity. No real contract, permission or signing instruction is supplied. Check the Pidgin aside with actual fluent and outside-Nigeria readers; it carries no essential meaning.

### L-08.3 — Disconnecting is not revoking permission

**Outcome O-08.3:** Explain why disconnecting an interface and revoking an existing spending permission are different actions, using a supplied account/token model.

#### Learner copy

Closing an app, disconnecting its interface and cancelling a permission can address different things. Identify which authority exists before choosing the response.

In our fictional token model, Mariama connected ExampleApp and later granted `DEMO-SPENDER-A` an on-chain allowance to spend up to 40 DEMO-USD. The allowance remains recorded under the token's rules until it is changed or used as those rules permit. Mariama then selects “Disconnect” in the interface. The fixture says this ends the interface connection; it does **not** change the token allowance.

If her aim is to end that allowance, disconnecting alone has not achieved it. The relevant next step in the exercise is to inspect the allowance through an independently reached, trustworthy permission record and identify the model's appropriate revocation action. This is a mock decision, not a prompt to use a particular permission-management website.

The fixture then shows a confirmed revocation changing that specified allowance to zero. Under these supplied rules, that addresses the named remaining allowance. It does not reverse a transfer made earlier, erase public history, or establish that there are no other permissions. Mariama would need to inspect other relevant authority separately.

Different models can have other permission types, expiration rules, sessions or signature-based authorisations. A single revocation might not cancel every kind. Revocation can also require a network action and a fee; its effect depends on confirmed execution and the relevant contract/account rules. A “Revoked” screenshot alone should not replace independent checking.

If secret account authority has been compromised, changing one allowance does not demonstrate that the wider account is secure. That is a separate problem requiring appropriate, model-specific incident guidance. This lesson does not provide a universal recovery promise.

**Takeaway:** disconnect the interface and inspect/cancel the relevant permission as separate decisions. KC-08 checks the distinction; PM-08 asks which action addresses the supplied authority without promising reversal of past loss.

#### Editorial/source note

Starting references: S-06 security principles and S-05 wallet context. Required review: exact allowance persistence, revocation execution and other signature/session-authority limits for the selected model. No live revocation tool or incident procedure is recommended. Confirm that wording does not imply zeroing one allowance cancels all authorisations or repairs compromised secrets.

### L-08.4 — Put the everyday decisions together

**Outcome O-08.4:** Combine compatibility, costs, trust, status, and permissions in a new fictional situation; proceed, pause, or decline with a reason.

#### Learner copy

The final foundation task is to explain a complete decision. It does not require buying crypto, sending funds or choosing a route merely because it uses a blockchain.

Ama is comparing a fictional 80 DEMO-USD receiving-and-conversion journey. Independently reached MockReceive instructions support the exact token representation on Network A and specify `DEMO-DESTINATION-80` with no memo requirement. MockSend's proposed fields match. Its fixed 2 DEMO-USD fee is added, so the sender debit would be 82 DEMO-USD and the receiving token amount 80. The supplied balances cover this fixture's stated costs.

At that point the route and arithmetic are consistent. Then a new message asks Ama to “verify the receipt” by signing unlimited spending authority for `DEMO-UNKNOWN-SPENDER`. No independently checked receiving condition requires this permission. Ama should decline the unrelated signature request. Correct costs do not compensate for unjustified authority. She can separately continue reviewing the legitimate fictional route; refusing the message need not erase every verified fact.

Now inspect a later mock record. The matching Network A transaction succeeded, the stated confirmation condition was met and MockReceive independently records the deposit as credited. Its conversion record produces the expected LOCAL amount under the supplied rate and charge. The local-money receiving account still says “Processing”. Ama should recognise the credited deposit and recorded conversion while leaving payout unconfirmed. She should preserve the relevant records without sharing recovery material.

Change one fact and the answer can change. If receiving support is unknown, pause to verify the exact asset/network route. If a familiar alternative has clearer costs and suitable recovery conditions, choosing that alternative is valid. If a counterparty cannot establish receiving evidence or demands secrets, declining may be the proportionate response.

You don dey see how the pieces connect. The English rule remains: use the evidence for the actual request, identify unresolved conditions and justify the next action.

**Takeaway:** explain compatibility, cost, trust, status and authority together. KC-08 checks the combined reasoning. PM-08 is bounded fictional practice with published criteria and selected prerequisite evidence; completing the foundation is not a guarantee of real-world proficiency.

#### Editorial/source note

Starting references: S-06 security/authority context; S-20/S-23/S-24 representation and support distinctions; S-22 stablecoin context. Required review: all reused criteria, quote arithmetic, record-stage conclusions and permission scope; verify equivalence to declared prior outcomes before using any capstone result as prerequisite evidence. No real payout, provider availability or legal permission is established. Human subject, voice and learner review remains outstanding.

## Review and publication dependencies

All 16 learner drafts exist in this file. They do not constitute complete check banks, retry forms, approved mission rubrics, experienced-entry equivalence, French translations or qualified publication approval. Review against the precise outcome and required subskills, then revise the named lesson version and affected activity mappings where necessary. Preserve historical assessment evidence under the defined version rules; do not award credit merely because an example was read.

Priority subject-review clusters: stablecoin model/redemption boundaries (L-05.1/05.2); conversion/payout/P2P responsibility and fee arithmetic (L-05.3/05.4/06.2); rejection versus included failure (L-06.3); confirmation/finality/provider/payout distinctions (L-07.1/07.2/07.3); permission/signature/revocation limits (L-08.1/08.2/08.3). Any publication example naming a real network, issuer, provider or country requires current claim-level evidence within that example's scope. Learning effectiveness and comprehension remain untested.
