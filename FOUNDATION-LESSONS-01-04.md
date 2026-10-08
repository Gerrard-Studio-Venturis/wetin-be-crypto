# Wetin Be Crypto — Foundation Lessons, Modules 01–04

Version: 0.1
Date: 7 October 2026
Status: Complete first writing draft of 16 learner-facing lessons. Not publication-approved, independently subject/voice-reviewed, or learner-validated.

Related: [Curriculum Coverage](CURRICULUM-COVERAGE.md), [Assessment Rules](ASSESSMENT-RULES.md), [Voice Guide](VOICE-AND-EDITORIAL-GUIDE.md), [Evidence Register](EVIDENCE-REGISTER.md), [Representative Samples](CONTENT-DESIGN-SAMPLES.md).

## Delivery and review boundary

The lesson identities and outcome text below follow the existing curriculum. Each lesson contains actual teaching copy, a fictional worked situation, and a practical takeaway. The situation names and amounts are teaching inputs, not actual provider conditions, market rates, or evidence that a route is available or permitted in a country. Destinations and secret-material labels are deliberately invalid placeholders. No lesson requires real funds, credentials, a wallet connection, or a transaction.

The **outcome, learner copy, worked situation, takeaway and next practice** sections are intended for eventual learner delivery after review. **Reviewer/source notes and this introduction are editorial metadata** and should not become learner-facing warnings or assessment answer keys. Reading or self-marking a lesson complete demonstrates reading only; named checks and missions demonstrate only their approved declared outcomes. This draft supplies no stored results.

Source IDs refer to existing repository records. S-04/S-05/S-06 were carried forward from earlier desk research: their appearance here does not claim a new inspection on this document date. S-20/S-21/S-23/S-24 have the bounded 7 October 2026 inspection records in [Research Findings](RESEARCH-FINDINGS.md). S-20 is excerpt-only; S-23 is provider-specific with legacy-detail limits; S-24 is issuer-specific non-EEA terms. None substitutes for refreshed claim-level review of a publication revision. Each note names what still requires review. English carries every required meaning; the few Pidgin asides require actual fluent Nigerian and outside-Nigeria comprehension review.

## M-01 — Understand the basics

### L-01.1 — Asset, network, wallet, or service?

**Outcome O-01.1:** Identify the asset, ledger/network, wallet interface, and service in a fictional payment description.

#### Learner copy

Someone says, “I have crypto in an app.” That sentence leaves several useful questions unanswered. What asset? On which network? Who can authorise spending? What does the app actually do?

An **asset** is the thing being represented or transferred: BTC, ETH, or a particular token, for example. A **ledger** is a record of the system's state and transactions. A **network** processes transactions under shared rules and maintains its ledger. These terms connect, but they describe different parts of the route.

A **wallet interface** helps someone inspect an account and request actions. It might display balances, prepare transactions and ask for authorisation. The interface is not a bag containing coins. The relevant balance is represented in ledger state, or in a provider's internal account record when you use a custodial service.

A **service** can add another layer: managing keys, keeping account balances, converting assets or arranging payouts. A service may also supply its own wallet-like interface. One screen can therefore hide several responsibilities.

#### Worked situation

In a fictional route, Ada uses the MockPocket interface to request sending 12 DEMO tokens on DemoNet. Her self-custody account authorises the action; DemoNet processes it. MockReceive then checks the deposit before crediting its customer's internal account.

Here, DEMO is the asset; DemoNet is the network and shared-record system; MockPocket is the interface; MockReceive is the receiving service. MockPocket showing “sent” cannot establish that MockReceive has credited the customer. Each part has its own job and evidence.

Try explaining that route without saying “the app did everything.” Naming the parts makes it easier to ask the right question when something is missing.

**Practical takeaway:** identify the asset, network, interface and service before comparing a route or interpreting a balance. A product name alone does not identify all four.

**Next practice:** KC-01 classifies the parts; PM-01 compares fictional routes. No account or transaction is needed to read this lesson.

**Reviewer/source note:** Starting references S-04/S-05; PROTOCOL/PROVIDER categories. Verify the ledger/interface and custodial-balance wording against current model-specific sources. MockPocket/MockReceive/DemoNet are wholly fictional, with no inferred real deployment.

### L-01.2 — How a transaction becomes a shared record

**Outcome O-01.2:** Explain in plain English how authorisation, network processing, and ledger records differ from a provider's internal balance update.

#### Learner copy

Pressing a button, authorising an action, and receiving a completed payment are different events. A simple route helps us separate them.

First, a transaction request describes an action. Its details might include the destination, amount, asset and network-specific information. Someone or something with the required authority then **authorises** that request. In many self-custody accounts, this involves a cryptographic signature made with the relevant key. The signature supplies evidence of authorisation; it does not prove that the network has already accepted the action.

The request can then reach the network. Network participants check it under that network's rules. A submitted request may still be pending, rejected, or included with a result that needs interpretation. When an accepted action changes ledger state, the shared record supplies network evidence of that change. Networks differ in how transactions are processed and how settled their results become.

A provider may maintain a separate internal balance. Moving value between two customers of that provider might update its own records without a separate on-chain transaction for each customer movement. An external deposit may require both network processing and later provider crediting.

#### Worked situation

MockAccount shows that Seyi's withdrawal request was authorised. DemoNet later shows a successful transaction. The receiving provider still shows “processing deposit.” These records are compatible: authorisation happened, the network action succeeded, and provider credit has not yet been established.

In a second fictional case, two MockAccount customers exchange internal balances. The provider's receipt describes an internal movement and supplies no on-chain transaction. Looking for a network record cannot establish one that the supplied route never claimed to create.

**Practical takeaway:** ask which stage a record establishes: request, authorisation, network result, or provider-account update. Do not collapse them into one word such as “done.”

**Next practice:** KC-01 checks the distinctions; PM-01 asks which participant must act. M-07 later examines confirmation, credit and payout evidence in more detail.

**Reviewer/source note:** Starting references S-04/S-05; PROTOCOL/PROVIDER. Obtain claim-level processing and custody sources before publication. The sequence is explanatory, not a universal protocol algorithm or timing promise.

### L-01.3 — Bitcoin, Ethereum, and tokens

**Outcome O-01.3:** Distinguish the basic role of BTC, ETH, and a token issued on a network without treating every asset as interchangeable.

#### Learner copy

“Crypto” is a broad category, not one asset with one set of rules. Some names refer to a network, some to its native asset, and some to tokens represented on that network.

**Bitcoin** names a network and protocol; **BTC** is its native asset. **Ethereum** is a network capable of processing transactions and running smart-contract logic; **ETH** is its native asset. In ordinary Ethereum transaction arrangements, ETH is used to pay network fees. A service can present a different fee arrangement to its customer, so always read the supplied route rather than assume what an app will charge.

A **token** can be represented through a contract or other network-specific mechanism. It may have different rules, issuer dependencies and uses from the network's native asset. Holding that token does not make it interchangeable with ETH or BTC. Its familiar name or ticker does not establish its exact identity on every network.

This foundation introduces roles, not price predictions. A native asset is not automatically suitable for a payment, and a token is not automatically safer because its description sounds familiar.

#### Worked situation

Three fictional instruction cards ask for BTC on Bitcoin, ETH on Ethereum, and issuer-native USDC on Ethereum. The first two identify different native asset/network combinations. The third identifies a token representation on Ethereum; it does not ask for ETH just because Ethereum is the network.

An option labelled “wrapped BTC on DemoNet” is also not automatically the BTC-on-Bitcoin route. The representation and its dependencies need separate verification. A label can describe an economic connection without establishing receiving compatibility.

Names plenty; make we arrange them. Sorting the asset from the network prevents a familiar ticker from doing more work than it should.

**Practical takeaway:** state both the asset and the network. Where a token has multiple representations, establish which one the receiving instructions require.

**Next practice:** KC-01 matches roles; PM-01 identifies route components. M-04 develops exact identity and receiving support.

**Reviewer/source note:** Starting references S-04/S-05; S-20/S-24 for bounded USDC identity context. Verify native-fee wording and representations before publication; no endorsement, market forecast, or provider availability is implied.

### L-01.4 — Does this situation need crypto?

**Outcome O-01.4:** Compare a crypto route with a familiar alternative using supplied cost, access, privacy, and recovery information; justify proceeding or declining.

#### Learner copy

Learning about crypto does not commit you to using it. A useful decision starts with the job you need done: who should receive what, by when, and under which conditions?

Compare routes across the whole task. **Cost** includes stated charges and conversion conditions, not only the number on the first screen. **Access** concerns both people: having a sending app does not establish that the recipient can receive or use the value. **Privacy** asks who sees or retains information; a public ledger can create visibility that differs from a familiar payment account. **Recovery** concerns lost access, mistakes and disputes under that route's actual rules.

Do not replace missing information with a promise that “crypto fixes it.” A service may offer support, but that is not evidence of guaranteed recovery. An alternative can be the better fit even when the crypto route is technically possible.

#### Worked situation

Two fictional routes can deliver the same agreed value. Route A is a familiar account transfer: both people already have access; the total stated charge is 1 DEMO credit; its supplied rules include a dispute channel. Route B requires a new account, two conversions and a public network transfer; the supplied total charge is 4 DEMO credits. Its mistake-recovery conditions are unknown.

For this situation, Route A meets the need with less stated cost and complexity. Choosing it is a reasoned result, not a failed crypto lesson.

In another fixture, Route A cannot reach the intended recipient. Route B may deserve further investigation because both people can access it. That still leaves identity, cost, privacy, receiving support and recovery to check. “Potentially useful” is different from “ready to authorise.”

**Practical takeaway:** compare the complete route using supplied evidence, then proceed, investigate or decline for a specific reason. No route earns a recommendation merely by being newer.

**Next practice:** KC-01 explains trade-offs; PM-01 includes a valid case for a familiar alternative.

**Reviewer/source note:** Starting reference S-04; PROVIDER/COUNTRY facts remain fictional and require current review if replaced. No legal access, actual price, privacy guarantee or dispute outcome is asserted for Nigeria, Ghana or elsewhere.

## M-02 — Recognise scams and establish trust

### L-02.1 — Pressure, promises, and suspicious requests

**Outcome O-02.1:** Identify urgency, guaranteed returns, impersonation, and advance-payment requests in fictional messages, explaining the relevant evidence.

#### Learner copy

A suspicious message often tries to make you act before checking. Rather than memorise a list of forbidden words, inspect what the sender wants you to do and which claim is doing the persuading.

**Urgency** can shrink the time you feel able to spend verifying: “You have ten minutes or lose your balance.” **Guaranteed returns** promise an investment result while hiding uncertainty: “Your money must double tomorrow.” **Impersonation** borrows an organisation's name, logo or authority. **Advance-payment pressure** asks you to send value first to unlock an alleged reward, withdrawal or rescue.

These are reasons to stop and verify, not proof that every urgent message or every legitimate charge is fraudulent. An actual service may publish fees or time-sensitive notices. The relevant questions are whether you independently establish the service, whether its current instructions support the request, and whether the explanation makes sense.

#### Worked situation

A fictional message uses MockHelp's logo and says: “Pay 8 DEMO credits to this personal destination within ten minutes. Your guaranteed 80-credit profit will be released immediately.” It combines an unverified identity, pressure, an advance payment and a promised return. None of those claims becomes trustworthy because the graphic looks polished.

The sensible action is to stop the requested payment and check the account through an independently obtained route. If the genuine account contains no matching instruction, keep the message as evidence without following its links or sending money.

Now compare a fictional notice in an independently reached account: “Maintenance is scheduled tomorrow; read the service notice.” That needs interpretation, but it supplies no secret request, guaranteed profit or unexplained payment destination. Explain the actual indicators instead of treating every notice identically.

**Practical takeaway:** name the specific pressure, promise, identity or payment request. A precise reason helps you choose what to verify next.

**Next practice:** KC-02 and PM-02 inspect fictional messages. Their decisions require reasons, not confidence or speed.

**Reviewer/source note:** Starting reference S-06; SECURITY/PROVIDER. The messages are invented, not attributed incidents. Independent security review must check the inference and avoid universal claims about fees or urgency.

### L-02.2 — Verify through a route you choose

**Outcome O-02.2:** Select an independent verification route instead of relying on a message's link, logo, search advertisement, or claimed identity.

#### Learner copy

When someone claims to be support, clicking their “verify here” link keeps the sender in control of the verification route. A copied logo, familiar name or sponsored search result does not independently establish the destination.

Choose a route you established separately. Depending on the supplied account model, that could mean opening a previously verified official app, using a known legitimate account destination, or obtaining contact details from independently established official documentation. Avoid assuming that the first search result or a padlock proves the organisation's identity. A secure connection can still lead to the wrong site.

Inside the genuine account, check whether the alleged notice or request actually exists. If you need support, use contact details reached there rather than replying to the sender's phone number or using a fresh link they supplied. A claimed account number or transaction reference can be copied; compare it with your own records.

#### Worked situation

Kemi receives a fictional message: “Your MockAccount balance is frozen. Open this urgent support link.” She already has an independently established MockAccount app. She opens it directly, checks its notices and uses its documented support route. The account contains no matching freeze notice. Support states that the requested destination is not one of its channels.

Kemi has checked the sender's claim without accepting the sender's route. If her genuine app were unavailable and she had no independently established contact destination, the useful response would be to pause and establish one. Guessing a support account from a comment thread would not repair the missing trust.

The logo fit look correct; the route still needs checking. Appearance is a clue to inspect, not permission to follow instructions.

**Practical takeaway:** independently establish the destination before using it to verify a claim. Do not ask the suspicious sender to certify themselves.

**Next practice:** KC-02 selects an independent next step; PM-02 supplies account-view evidence for a fictional support claim.

**Reviewer/source note:** Starting reference S-06; SECURITY/PROVIDER. Refresh guidance on verified channels before publication. No browser indicator, app installation, bookmark or support interaction is promised to eliminate all compromise risks.

### L-02.3 — Secrets and permissions are different risks

**Outcome O-02.3:** Reject an external request for private keys/recovery material and recognise that a signature or permission can also have consequences without revealing a secret.

#### Learner copy

Some requests want your secrets. Others want authority. You need to recognise both.

A **private key** is secret material used to authorise actions for an account in the relevant model. A **recovery phrase** can restore the accounts it controls in a phrase-based arrangement. Giving either to a stranger or supposed support agent can give them access or spending authority. Never enter such material into a message, support form or this learning site. A legitimate model-specific recovery process requires its own independently verified instructions; it is not a reason to disclose secrets to another person.

Protecting secrets does not make every other request harmless. A **signature** can confirm a message or authorise a consequential action, depending on what is signed and the account model. A **spending permission** can allow another party or contract to act within a defined scope. The fact that a prompt shows no immediate transfer or network fee does not establish that it has no effect.

#### Worked situation

A fictional “support agent” asks Tolu for `[DEMO-RECOVERY-MATERIAL]` to unblock an account. Tolu refuses and independently checks the service. No actual phrase is generated, copied or entered.

A second message says, “Keep your phrase private; just sign this reward request.” The fixture's prompt grants an unfamiliar spender authority over all DEMO tokens without explaining why. Refusing the phrase request was correct, but it did not make this authority request safe. Tolu also refuses the unexplained permission.

Do not approve a prompt you cannot meaningfully interpret. Identify the account, requested action, recipient of authority, asset and scope; seek current model-specific explanation before continuing.

**Practical takeaway:** refuse external requests for secret recovery material and inspect requested authority separately. “No secret shared” is not a complete safety check.

**Next practice:** KC-02 and PM-02 distinguish secret requests from permissions. M-08 explores connections, signatures, approvals and transfers in more detail.

**Reviewer/source note:** Starting references S-05/S-06; PROTOCOL/SECURITY. Review signature/permission semantics for the actual later account model. Placeholders are deliberately nonfunctional; no universal meaning is assigned to every signature.

### L-02.4 — What proves that someone paid?

**Outcome O-02.4:** Distinguish a screenshot or sender claim from independently checked receiving-account or transaction evidence.

#### Learner copy

A screenshot tells you what an image appears to show. It does not independently prove that your account received spendable value. It may be altered, outdated, taken from another transaction, or show a stage that is earlier than the one you need.

First define the claim. Does “paid” mean a sender submitted a request, a network transaction succeeded, a provider credited your account, or local money reached the intended bank or mobile-money account? These require different records.

Open your independently established receiving account and inspect the relevant entry, amount, asset and status. For an on-chain claim, use an independently reached explorer for the correct network and match the transaction to the relevant destination and details. An explorer can establish network evidence within its scope; it cannot by itself establish the provider's internal credit or a separate local-money payout.

#### Worked situation

A fictional buyer sends Amaka an image labelled “40 DEMO paid” and asks her to release an item. Her independently opened receiving account has no credited payment. The image is insufficient, so she does not treat the payment as established.

Later, a matching transaction record shows network success. The receiving provider still shows “deposit pending.” That adds network evidence, but it does not yet meet this fixture's rule: release only after independently confirmed account credit.

Finally, the genuine receiving account shows the matching 40 DEMO entry as “credited and available” under the supplied rule. Now the particular account-credit requirement is met. If the agreement instead required local-money payout, that separate receiving record would still need checking.

Good verification can recognise a genuine receipt as well as reject an unsupported claim. The aim is the right evidence, not permanent suspicion.

**Practical takeaway:** verify the stage your agreement requires in independently reached receiving records. Match details; do not release value because a sender shows an image.

**Next practice:** KC-02/PM-02 inspect payment claims; KC-07/PM-07 later reconcile network, account and payout records.

**Reviewer/source note:** Starting reference S-06; PROVIDER/DATA procedures remain fictional. Obtain claim-level receiving/status sources if real services are used. No universal confirmation count, available-balance policy or dispute guarantee is taught.

## M-03 — Understand custody and recovery

### L-03.1 — Who can authorise spending?

**Outcome O-03.1:** Compare a fictional custodial account and self-custody account by control, responsibilities, provider dependence, and recovery conditions.

#### Learner copy

Two screens can look similar while giving different people control. **Custody** concerns who holds or controls the authority needed to move the underlying asset.

In the custodial arrangement described here, a provider controls the relevant spending keys and keeps an internal customer balance. You instruct the provider through an account, but it performs the underlying authorised movement under its rules. You depend on its security, access policies, service availability and ability to honour withdrawals. Account recovery may involve the provider's documented verification process; a password reset is not a guarantee that every balance or service becomes available.

In the self-custody arrangement described here, your key-based account supplies spending authority. The wallet interface helps you use that authority. You take responsibility for the relevant secret material and model-specific recovery plan. Losing the only usable access and recovery route can leave you unable to act. Changing interfaces is different from asking a provider to restore a customer account.

Neither label resolves every risk. Shared-control, assisted-recovery and other arrangements need their own explanation of who can act and under which conditions.

#### Worked situation

After a fictional lost phone, Account A offers provider recovery using current documented identity checks. The provider controls spending keys; the learner should independently reach that recovery route. Account B is a phrase-based self-custody account. Its fixture supplies a protected backup and an independently verified compatible restoration process; no provider password reset controls that account.

Choosing the Account A process for Account B does not work simply because both have a “wallet” screen. Choosing Account B's phrase procedure for Account A is equally unsupported.

If the fixture provides no valid recovery path, say so. Do not invent an emergency support guarantee to make the example comfortable.

**Practical takeaway:** identify who can authorise spending, what you control, and whose cooperation recovery needs before choosing an account model.

**Next practice:** KC-03 compares control; PM-03 plans fictional recovery after phone loss.

**Reviewer/source note:** Starting references S-04/S-05; PROVIDER specifics remain invented. Review model boundaries and account rights against exact sources before publication. This is not a recommendation that one custody model suits every learner.

### L-03.2 — Addresses, keys, phrases, and passwords

**Outcome O-03.2:** Distinguish a receiving address, private key, recovery phrase, local wallet password, and provider-account password; identify which information must remain secret.

#### Learner copy

These items are easy to mix up because they may appear in the same app. Their roles differ.

A **receiving address** identifies a destination within a network's addressing system. It is not normally secret spending material. Sharing it can still expose information or connect your identity to public activity, so “not a secret key” does not mean “private.” An address alone also does not establish the supported asset or route.

A **private key** supplies secret authorisation material in a key-based account. A **recovery phrase** can regenerate the relevant account keys in a phrase-based arrangement. Both must remain protected from unauthorised access; do not share them with support or other people.

A **local wallet password** may unlock an interface or encrypt stored key material on a device. Its scope depends on the wallet. It is not necessarily sufficient to restore the account on a replacement device. A **provider-account password** authenticates access to the provider's service; the provider's account and recovery rules determine what that access allows.

All passwords need protection, but they do not perform identical jobs. Nor does every wallet use all five items.

#### Worked situation

A fictional exercise labels five cards: `[DEMO-RECEIVING-DESTINATION]`, `[DEMO-PRIVATE-KEY]`, `[DEMO-RECOVERY-MATERIAL]`, `[DEMO-LOCAL-UNLOCK]` and `[DEMO-PROVIDER-LOGIN]`. No card contains a real usable value.

The receiving card can identify a proposed destination once its network and instructions are checked. The key and recovery cards must never be disclosed to a supposed helper. The two login cards also remain private, while their recovery abilities depend on the supplied model. Renaming a phrase “backup password” would not change its authority.

**Practical takeaway:** classify an item by what it enables, not by what a message calls it. Protect secrets and understand their recovery scope.

**Next practice:** KC-03 classifies placeholders; PM-03 uses model-appropriate recovery information without asking you to enter real material.

**Reviewer/source note:** Starting references S-05/S-06; PROTOCOL/PROVIDER/SECURITY. Verify password/encryption and recovery statements for any actual product. Review placeholders for obvious invalidity; no actual addresses, keys or seed words belong in learner responses.

### L-03.3 — Recovery depends on the account model

**Outcome O-03.3:** Explain why phrase-based, provider-assisted, and alternative account-recovery arrangements have different requirements and limitations.

#### Learner copy

“Can I recover my wallet?” needs a longer question: which account model, what has been lost, and which recovery conditions still hold?

In a **phrase-based model**, a valid protected recovery phrase may restore the accounts it controls through a compatible independently verified process. Compatibility, any additional required secret, and the account's actual derivation or setup can matter. Recovering access also does not reverse a transfer or remove an attacker who obtained the same authority.

In a **provider-assisted account**, the provider may restore login access after its documented checks. That process depends on the service's rules, availability and acceptance of the evidence. It does not establish control of an unrelated self-custody account, reverse every mistake, or guarantee withdrawal access.

An **alternative arrangement** might use shared signers, designated recovery participants, a recovery delay or other model-specific conditions. You must know which parties and steps are required. “Modern wallet” is not enough information to infer a recovery method.

#### Worked situation

Three fictional accounts lose their phones. Account A has a protected phrase and a verified compatible restoration route. Account B offers provider login recovery subject to documented identity checks. Account C requires two designated recovery participants and a stated waiting period; only one participant is available.

Account A can investigate its stated restoration process without disclosing the phrase to another person. Account B can use the independently reached provider process. Account C has not met its supplied recovery conditions, so recovery cannot yet be claimed.

Suppose someone promises to bypass Account C's missing participant for a fee. The promise supplies no evidence that the required authority exists. A useful next step is to establish the legitimate model's remaining options, not purchase an unsupported guarantee.

**Practical takeaway:** write the model's actual requirements and compare them with what remains available. State the limitation when a condition is missing.

**Next practice:** KC-03 interprets supplied recovery conditions; PM-03 chooses conditional routes for fictional accounts.

**Reviewer/source note:** Starting references S-05/S-06; additional PROVIDER/PROTOCOL sources required for alternatives. Shared recovery conditions are fictional, not an inspected product procedure. Publication requires exact setup, failure and compatibility review.

### L-03.4 — Prepare before access is lost

**Outcome O-03.4:** Construct a basic backup/device-access plan for a supplied custody arrangement and identify a claim that no one can guarantee from the available information.

#### Learner copy

A recovery plan is useful before a device fails. Start with the account model rather than copy somebody else's checklist.

Identify what must be recovered: provider login, a key-based account, a required extra secret, or access to a recovery participant. Identify the documented process, where its essential material is protected, and which people or services it depends on. Consider both **availability** and **confidentiality**. A backup that disappears with your only phone may not help; an exposed copy may give someone else authority.

For secret-based recovery, choose protection appropriate to the supplied model and your circumstances. Do not put actual recovery material into this site or send it to a helper. Verify any proposed storage method's access, loss and compromise conditions. A particular location or material cannot be called universally safe without considering those conditions.

For provider-assisted accounts, establish the legitimate recovery route and relevant access requirements in advance. Do not assume that one remembered password or a photographed ID guarantees successful recovery. Account restrictions, compromised contact channels and service unavailability can affect the result.

#### Worked situation

In the fictional phrase-based fixture, Efe's only recovery copy is a readable image on the same phone. Phone loss removes both access and that copy; someone gaining the image could also gain authority. The plan fails both availability and secrecy considerations.

A revised paper exercise records a protected backup kept separately, an independently verified compatible recovery route and the remaining risks to check. The exercise contains no phrase and does not claim the arrangement is theft-proof or disaster-proof.

For a separate provider account, Efe records how to reach official recovery and which contact access its supplied rules require. It is a different plan because the model is different.

Better to understand the backup now than begin improvising after a loss.

**Practical takeaway:** document a model-appropriate access plan and its dependencies. Reject promises of guaranteed recovery that the available evidence cannot support.

**Next practice:** KC-03 identifies unsafe backup choices; PM-03 explains a fictional plan and its limits.

**Reviewer/source note:** Starting references S-04/S-05/S-06; SECURITY/PROVIDER. Obtain qualified review of backup threat assumptions; no specific device, storage product, home arrangement or universal recovery procedure is endorsed.

## M-04 — Identify assets, networks, and recipients

### L-04.1 — Identify the asset and its representation

**Outcome O-04.1:** Distinguish a token's name/ticker from its identity on a specified network, using supplied official asset/contract or representation information where applicable.

#### Learner copy

A ticker is a short label, not a complete identity check. Different representations can use similar names or tickers while having different issuers, contracts or dependencies.

For a token represented by a contract, establish the exact network and the officially documented contract identity where applicable. Obtain that identity through an independently established official source, then compare it with the receiving service's current instructions. A copied name, logo or arbitrary contract address supplied by a stranger does not establish the expected asset.

Also check the **representation**. An issuer-native token and a separately bridged or wrapped version may have different backing arrangements, redemption rights and receiving support. A relationship between their intended values does not make them technically interchangeable. Native network assets also need their exact network identified; contract identifiers do not apply in the same way to every asset.

#### Worked situation

Two fictional cards display “DEMO-Dollar.” Card A is the issuer-native representation on DemoNet, identified by `[DEMO-OFFICIAL-CONTRACT-A]`. Card B is a separately wrapped representation on DemoNet, identified by `[DEMO-WRAPPED-CONTRACT-B]`. These are deliberately invalid identifiers.

MockReceive's current instructions name Card A only. Matching Card B's ticker and network does not meet those instructions. The learner pauses instead of treating the wrapper as equivalent.

A second fictional case presents the same issuer-native label on another network. That also requires a network-specific identity and receiving-support check. “Same issuer” is useful information, but it cannot establish every supported route.

Circle's published USDC network entries illustrate why named tokens can have network-specific identities. They do not establish that a particular receiving service accepts every listed network or representation.

**Practical takeaway:** identify the asset on its actual network and determine whether it is the required native, issued, wrapped or bridged representation. A ticker match is only the beginning.

**Next practice:** KC-04 identifies incomplete identity evidence; PM-04's full task checks the exact representation before compatibility and destination review.

**Reviewer/source note:** Starting references S-20/S-24, with excerpt-only/issuer limits; PROTOCOL/PROVIDER. Exact live contract identifiers require full refreshed verification before publication. No executable identifier or independently assured reserve claim appears here.

### L-04.2 — Match the network to the receiving route

**Outcome O-04.2:** Verify the exact asset representation, selected network, and receiving-service support; explain why matching ticker/address appearance is insufficient.

#### Learner copy

An asset can be available on several networks. That does not mean a receiving service accepts each one, and an ordinary send does not automatically move an asset between networks.

Use three linked checks: establish the **exact asset representation**, identify the **network the sending route will actually use**, and compare both with **current independently checked receiving support**. A receiving service can have additional conditions, including required destination details or deposit rules. Those conditions need their own review.

Address appearance is insufficient. Two addresses beginning with `0x` do not prove that a service supports both networks. Some services explicitly accept several networks at one address; their current instructions, rather than the address prefix, must establish that support.

#### Worked situation

The [canonical L-04.2 sample](CONTENT-DESIGN-SAMPLES.md#l-042--same-coin-name-is-it-the-right-network) uses Ama, MockReceive and MockSend. MockReceive accepts issuer-native USDC on Ethereum only. MockSend offers Ethereum and a cheaper Base withdrawal. The service is fictional and the destination is deliberately invalid.

Ama rejects Base for this receiving route. The lower quote does not repair the mismatch. Ethereum matches the supplied asset/network support, so she can continue the remaining recipient, destination, amount and fee review. This compatibility result does not yet authorise a payment.

Now vary the condition: another fictional receiving account explicitly supports issuer-native USDC on Base and supplies matching destination requirements. In that case Base can pass this part of the review. The lesson is to follow verified support, not memorise Ethereum as the correct answer.

A smaller test cannot establish support for a route already declared unsupported. Once a route is established as compatible, a test may be useful if its rules and minimums permit it; no test is required here.

**Practical takeaway:** match asset, selected network and receiving support together. Pause if any element is missing or inconsistent.

**Next practice:** The existing KC-04/PM-04 samples cover O-04.2 only. The full PM-04 proposal also requires O-04.1/O-04.3; a narrow sample does not silently satisfy those outcomes.

**Reviewer/source note:** S-20/S-21/S-23/S-24 support the bounded canonical sample. This expansion preserves its fixture and adds a clearly fictional reversed condition. Review current receiving documentation and human comprehension; no provider support or guaranteed recovery is inferred.

### L-04.3 — Check the destination and required details

**Outcome O-04.3:** Verify the intended recipient, full destination, and any explicitly required memo/tag or deposit conditions using supplied trustworthy instructions.

#### Learner copy

Matching the asset and network does not establish who will receive the value. Check the intended recipient and the complete destination using independently established receiving instructions.

Do not rely only on the first and last few characters, a recent-transaction suggestion or a copied display name. Establish which full destination is intended, then compare the actual request with it. A pasted destination can differ from what you meant to copy. A familiar-looking address can belong to someone else.

Some receiving arrangements require a **memo or destination tag** to identify the customer's deposit within a shared destination. Requirements depend on the network, asset and provider. Supply a memo/tag when the current instructions explicitly require it; do not invent one or assume every transfer needs one. Also check stated deposit minimums, account eligibility and other supplied receiving conditions.

An old screenshot is not enough to establish current instructions. If a detail is missing or conflicting, resolve that particular detail through the independently reached receiving account or documented channel before authorisation.

#### Worked situation

A fictional account instructs: asset DEMO on DemoNet, destination `[DEMO-SHARED-RECEIVER]`, memo `[DEMO-CUSTOMER-17]`, minimum deposit 10 DEMO. The intended recipient independently confirms those supplied instructions. The sending draft has the matching asset and network, a different complete destination, and no memo.

The learner pauses for both errors. Adding the memo alone does not repair the wrong destination. Correcting the destination alone does not meet the required memo condition.

In a revised fixture, all details match but the amount is 6 DEMO. It still fails the supplied minimum. These are separate checks: passing one does not cancel another mismatch.

**Practical takeaway:** verify recipient, complete destination and every explicitly required receiving detail together. Explain the specific missing or conflicting item rather than guessing.

**Next practice:** KC-04 locates destination gaps; full PM-04 resolves them before the transfer-review step. Later M-06 combines these checks with amount and cost.

**Reviewer/source note:** Starting references S-06/S-23; PROVIDER/PROTOCOL/SECURITY. Memo, minimum and destination rules are fictional. Current real examples need exact network/service sources; no missing-tag recovery promise or universal requirement is asserted.

### L-04.4 — Combine the checks before moving on

**Outcome O-04.4:** Distinguish verified information from unresolved assumptions and select a proportionate next step, including pausing when compatibility remains unknown.

#### Learner copy

A review is stronger when you can say both what is established and what remains unknown. “Everything looks fine” gives you less useful information than a short account of the checks.

Start with exact asset identity and representation. Match the selected network with current receiving support. Check the intended recipient, complete destination and required memo/tag or deposit conditions. For each item, identify the independently established instruction or record that supports it.

Then separate an **established fact** from an **assumption**. “The receiving account explicitly lists DemoNet” is stronger than “the address looks like another DemoNet address.” “The required memo matches” is different from “the receiver probably does not need a memo.” Missing information requires a named verification step, not a confident guess.

#### Worked situation

Fictional Route A supplies matching official asset identity, network support, recipient destination and all stated deposit conditions. The compatibility review can proceed to the amount, authorisation and fee review in M-06. It does not need to pause just because the learner has encountered suspicious routes elsewhere.

Route B supplies a ticker, an address screenshot and a cheaper network quote, but no current representation or network-support instructions. The useful action is to pause and obtain those instructions independently. Comparing prices again would not resolve the actual gap.

Route C supplies current instructions that explicitly exclude the selected representation. Decline that proposed route and investigate a supported one. Asking the sender to “try anyway” cannot turn an excluded route into a compatible one.

Different evidence leads to different actions. You can continue a completed part of the review, pause for a resolvable gap, or decline an incompatible route without claiming a real transaction is ready.

**Practical takeaway:** state what has been verified, name what has not, and choose the next action that resolves the actual condition. Lower cost or correct arithmetic cannot compensate for incompatibility.

**Next practice:** KC-04 asks for a proceed/pause reason; full PM-04 combines O-04.1–O-04.4 under its declared rubric and prerequisites. All lesson reading remains open.

**Reviewer/source note:** Starting references S-06/S-20/S-23/S-24; SECURITY/PROVIDER/PROTOCOL. This is synthesis from the bounded identity/support guidance and fictional fixtures, not a tested workflow. Qualified review must confirm full task coverage and any future approved gate mapping.

## Publication readiness record

This file completes first-draft teaching copy for **16 lesson identities and their 16 outcomes**. It does not complete source refreshes, claim-to-source records, approved check banks, retry forms, experienced-entry equivalence, independent subject approval, fluent voice review, learner sessions, implemented delivery, or stored achievements.

Before publication, the editorial owner records for each named lesson revision: actual claim-level source inspection, mechanism/account/provider/network applicability, unresolved conditions, subject reviewer, language/voice reviewer, publishing approval, affected check/mission versions and correction triggers. If actual country/provider instructions replace the fictional inputs, they need current applicability evidence; the draft does not grant permission to transpose its conditions onto real products.
