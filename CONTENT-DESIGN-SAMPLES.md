# Wetin Be Crypto — Representative Content and Assessment Samples

Version: 0.2
Date: 7 October 2026
Status: Draft P-02 review materials. Source-informed; independent subject/voice review and learner validation outstanding.

## How to review this pack

This is original proposed teaching and editorial copy. It is not a live course, a working assessment, or an approved full question bank. Examples use fictional people, services, instructions, and invalid destination placeholders. Named assets/networks illustrate sourced concepts rather than recommend a provider or transaction.

[Curriculum Coverage](CURRICULUM-COVERAGE.md) defines lesson/outcome IDs. [Research Findings](RESEARCH-FINDINGS.md) records source observations and limits. [Learner Research Guide](LEARNER-RESEARCH-GUIDE.md) describes how to review the samples.

The pack contains both learner copy and facilitator answers. **Before an independent session, prepare separate learner-facing extracts without answer keys or feedback.** Record prior exposure, show criteria before starting, and show explanatory feedback after the first response. Markdown answers here award no application credit.

## Additional assessment review materials

[Assessment Rules](ASSESSMENT-RULES.md) adds bounded M-02 scams/trust and M-07 transaction-record check/mission samples with separate facilitator keys. Across both documents there are twelve draft check prompts and nine draft mission cases; no full approved banks or reviewed retry forms. The original KC-04/PM-04 sample remains O-04.2 only. These public planning examples are review materials; future scored banks/keys need separate delivery and exposure handling.

## Sample manifest

| ID | Material | Outcome / role |
| --- | --- | --- |
| L-04.2 | Lesson: Same coin name. Is it the right network? | O-04.2: exact asset representation, selected network, receiving support. |
| G-NETWORK | Glossary: Blockchain network. | Public reference linked from the lesson. |
| KC-04 sample v0.1 | Four-item knowledge/application check. | Assesses O-04.2 only; does not pass every M-04 outcome. |
| PM-04 sample v0.1 | Mission: Check the receiving route. | Demonstrates the bounded O-04.2 task; final full mission/rubric remains proposed. |
| A-EX-01 | Evergreen explainer: Why a stablecoin can still surprise you. | Standalone reading; optional M-05 connection. |
| A-NEWS-01 | Archive news summary: Ghana launches a virtual-asset literacy initiative. | Source/date comprehension; optional learning route. |
| H-STABLECOINS | Topic-hub introduction and relationships. | Reader/learner discovery; no assessment credit. |
| H-USDC | Asset-hub introduction and identity notes. | Coin-specific context; no commitment to launch hub coverage. |

## L-04.2 — Same coin name. Is it the right network?

### Learner copy

**What you will learn:** check whether the exact asset and selected network match the receiving service's current instructions. A familiar name or address shape cannot answer that question for you.

**Useful preparation:** the difference between an asset, a network, a wallet, and a service; basic custody and source-verification ideas. Public reading remains open. The glossary below supplies a quick network recap.

Ama is reviewing a payment request from Bisi. The amount is described as USDC. Her fictional sending service offers two routes, and one looks cheaper.

Before you press Send, make we check the route.

### Read the request and the route together

The asset tells you **what** is being sent. The network tells you **where the blockchain transfer takes place**. The receiving service tells you **which asset-and-network combinations it accepts**.

An issuer can make a token available on more than one blockchain. Circle, for example, lists USDC separately on Ethereum and Base. That does not mean a receiving service accepts both. An ordinary send does not automatically bridge a token from one network to another.

Some services explicitly accept several networks at one account address. The support must come from their current instructions. Two addresses beginning with `0x`, or a familiar ticker, do not establish it. A separately documented cross-network product is a different route with its own conditions.

### Worked example: a cheaper route that does not fit

These cards are fictional teaching fixtures. The address is deliberately invalid.

| Receiving instructions from MockReceive | Sending options from MockSend |
| --- | --- |
| Asset: issuer-native USDC. | Option A: issuer-native USDC on Ethereum. |
| Supported network for this deposit: Ethereum only. | Option B: issuer-native USDC on Base. |
| Destination: `DEMO-RECEIVER-NOT-A-REAL-ADDRESS`. | Option B has a lower quoted cost in this fixture. |
| Instructions checked in the supplied current account view. | The service can fulfil either declared option; this is a custodial-service withdrawal fixture. |

Ama should reject Option B for this receiving route. MockReceive has declared Ethereum-only support for this deposit. The USDC label and lower quote do not change that.

Option A matches the declared asset/network combination. This establishes only that part of the review. Ama still needs to verify the recipient, complete destination details, amount, fees, and any other conditions before authorising anything.

### Use three linked checks

1. **Exact asset:** what token or representation is expected? A bridged or wrapped version may differ from the issuer-native asset the service supports.
2. **Selected network:** which network will the sending route actually use?
3. **Receiving support:** do current, independently checked instructions accept that exact combination? Include any stated destination or deposit conditions.

If information is missing or inconsistent, pause and identify what needs confirming. Do not guess from a logo, ticker, address prefix, or an old screenshot. A smaller test amount does not establish support for an unsupported route. After compatibility is established, a small test may be useful where the provider's rules and minimums permit it; this lesson does not require one.

If a transfer has already used the wrong route, the result and any recovery depend on the asset, custody, network, and provider. Do not assume automatic credit or guaranteed recovery.

**Recap:** establish the asset, network, and receiving support together. Compare costs after identifying an eligible route. Next, practise the decision with KC-04 and PM-04; reading this page alone does not pass either activity.

### Editorial/source note

Evidence: S-20 issuer network entries; S-23 provider network selection and multi-network account example; S-24 unsupported representation terms; S-21 background only. Source inspection: 7 October 2026. Fictional costs/services do not imply real regional availability. Current source details and learner comprehension still need review before publication.

## G-NETWORK — Blockchain network

### Public definition

A blockchain network is a system of computers and shared rules used to process transactions and maintain a ledger. Ethereum and Base are examples of different networks; Base is an Ethereum layer-2 network.

A token can be available on several networks. Your sending route and receiving instructions still need to agree on the supported asset-and-network combination. An address's appearance alone does not tell you which deposits a service accepts.

**Example:** a fictional service accepts issuer-native USDC on Ethereum. Choosing USDC on Base is not a matching deposit route unless the service also explicitly supports it.

**Related:** L-04.2, exact asset representation, custody, receiving instructions. This definition awards no curriculum credit.

## KC-04 sample v0.1 — Check the route

### Learner instructions and proposed criteria

This sample checks **O-04.2 only**. It is not the complete M-04 question set. All four decisions below are essential in this sample. Answer each and briefly explain the reason in plain English; a facilitator can use the proposed rubric. Wording can differ while the meaning remains correct.

These criteria are proposals for this check, not a universal pass percentage. Rationale can later use structured choices or another reviewed format; no automated free-text grader is selected.

1. **Supported route:** MockReceive accepts issuer-native USDC on Ethereum only. MockSend offers Ethereum or a cheaper Base route. Which route can pass this compatibility check, and what remains to check afterwards?
2. **Address appearance:** a send screen and receiving screenshot show addresses beginning with `0x`, but the screenshot does not name a supported network. Has compatibility been established? What would you confirm?
3. **Network movement:** an ordinary Ethereum send is addressed to a service that declares Base-only deposits for this fixture. Does the send automatically move the asset to Base? What is your next action?
4. **Representation:** both cards say Base and use the USDC ticker. One names issuer-native USDC; the other names a separately wrapped representation. Can you treat them as equivalent without further information? Explain.

### Facilitator answer and rationale rubric

| Item | Essential decision and acceptable meaning | Explanatory feedback |
| --- | --- | --- |
| 1 | Ethereum matches the declared combination; Base does not. Compatibility does not complete recipient/destination/amount/fee/other checks or authorise a real transfer. | The lower quote is relevant only for a route the receiver supports. You established one part of the review. |
| 2 | Not established. Obtain current trusted instructions specifying the exact asset/representation and supported network, then match the selected route and destination conditions. | The prefix is a display clue, not proof of receiving support. |
| 3 | No automatic network conversion is established by an ordinary send. Pause and find a correctly supported route; do not assume an implicit bridge. | An explicit cross-network service needs its own checked conditions. The fixture supplies none. |
| 4 | No. Confirm exact identity/representation and receiving support; pause while they differ or remain unknown. | Matching the ticker and network still leaves the representation question unresolved. |

For this sample, every essential decision and its core rationale must be satisfied. Record ambiguous answers for subject/rubric review rather than infer a correct meaning. A failed item gets relevant explanation and another variant. An unsuccessful later attempt does not delete an earlier applicable achievement under the proposed learning-record rules.

**Retry variation:** reverse the receiving network to Base-only; change the sending quotes and people; remove the representation field in a separate case. The correct decision follows the supplied support, not a memorised rule that Ethereum is always the answer. This variation assesses the same outcome/version only if criteria and scope remain equivalent.

**Evidence boundary:** this paper check can collect responses for content review. It awards no stored course result, reading completion, other M-04 outcomes, or validated transfer competence.

## PM-04 sample v0.1 — Check the receiving route

### Learner task

You are reviewing fictional instructions before the next transfer-review step. Do not send money, connect a wallet, or enter a real destination.

**Outcome:** decide whether the exact asset, selected network, and declared receiving support match; identify a useful next check where they do not.

**Proposed prerequisite for this selected mission:** current O-04.2 evidence from its reviewed KC-04 check or an approved equivalent challenge. A guest can satisfy the available check without an account. Final gate/version choices require PD-02 review; reading the lesson stays open.

This bounded sample is narrower than the full PM-04 proposal in the inventory, whose candidate gate also includes O-04.1 and O-04.3. Passing this sample supplies neither of those outcomes and does not unlock the full proposed mission.

**Published task criteria:** correctly identify the asset/representation and network, compare them with current receiving support, choose an appropriate next action, and explain it. Every listed decision is essential in this bounded sample. A matching route means continue reviewing the remaining transfer details, not authorise a real payment.

#### Case A — Both names look familiar

| Field | Fictional information |
| --- | --- |
| Sending asset | Issuer-native USDC. |
| Selected sending network | Ethereum. |
| Current receiver instructions | Issuer-native USDC on Base only. |
| Destination | `DEMO-BASE-RECEIVER-DO-NOT-SEND`. |
| Sender claim | “It says USDC, so the deposit should be fine.” |

Choose your next action and explain which field establishes the issue. Name the information you would need before continuing.

#### Case B — Network matches, representation differs

| Field | Fictional information |
| --- | --- |
| Sending asset | Issuer-native USDC on Base. |
| Receiver's supported representation | `Wrapped-USDC-DEMO` on Base; this label exists only in the fixture. |
| Destination | `DEMO-WRAPPED-RECEIVER-DO-NOT-SEND`. |
| Missing information | No declaration that the receiver accepts issuer-native USDC. |

Can you continue on the basis of the shared ticker/network? State your decision and the verification needed.

#### Case C — Compatibility established

Both current instruction cards explicitly identify issuer-native USDC on Base. The sender has selected that combination, and the receiver declares it supported. Destination identity, final amount, and fee/deposit conditions still need checking.

What has been established, and what should happen next?

### Facilitator mission rubric

| Case | Required decision and rationale | Next step |
| --- | --- | --- |
| A | Pause: Ethereum does not match the receiver's Base-only supported route. The ticker alone does not establish compatibility. | Confirm an available route explicitly supporting the receiver's combination; then review remaining details. |
| B | Pause: supported representation is different or incomplete. No equivalence is declared. | Confirm current acceptance of the exact issuer-native asset or choose another explicitly supported route. Do not assume a wrapper is interchangeable. |
| C | Asset/network support is established by the supplied current instructions. This is not full transfer authorisation. | Continue with recipient, full destination/required details, amount, fees, and other deposit conditions. |

A response passes this sample rubric only when every essential case decision and core rationale is satisfied. A cheaper quote, correct arithmetic, or a familiar address cannot compensate for an essential error. Accept clear equivalent wording; clarify ambiguous answers for assessment-design review.

Feedback explains the relevant mismatch or remaining check. A meaningful retry changes networks, representations, missing information, and quoted costs while retaining the outcome. Learners may revisit public explanations. Only the declared bounded practice is demonstrated; other outcomes, lesson completion, and the full PM-04 rubric are not inferred from this sample.

## A-EX-01 — Why a stablecoin can still surprise you

Format: Explainer. Topic: Stablecoins. Prepared/source-checked: 7 October 2026. Proposed original copy; publication and independent review pending.

### Reader copy

Stablecoins aim to track a reference value, often a currency such as the US dollar. The word stable describes that aim. It does not answer every question about buying, holding, sending, selling, or getting local money back.

Start with five separate questions.

**What keeps it near the target?** Different tokens use different mechanisms: reserves, crypto collateral, or other designs. Ask who is responsible, what supports the claim, and what can prevent it working. The mechanism matters more than a familiar name.

**What price are you actually being offered?** A token targeting USD 1 can still be quoted differently on an exchange. Circle's USDC terms recognise third-party prices can move above or below USD 1. Your local-currency quote also depends on the conversion route, its rate, and charges.

**Can you redeem directly with the issuer?** Holding a token and qualifying for issuer redemption are different. Circle's retrieved non-EEA terms require an eligible Circle Mint account for direct USDC redemption and apply conditions. Other issuers and jurisdictions need their own checked terms. A platform offering conversion is providing another route with its own conditions.

**Who controls the balance and the next action?** A provider-held balance depends on that provider's operation and withdrawal rules. Self-custody changes your responsibilities. Issuer restrictions may still matter. Circle's terms describe transfer restrictions and do not describe USDC holdings in Circle Mint as deposit-insured bank savings. USDC holding itself does not earn interest under those terms; a separate lending product adds a separate set of conditions and risks.

**Does the receiving route support the exact asset?** USDC is issued on more than one network. Check the representation, selected network, and receiving service's current instructions. A wrapped version or a matching ticker does not establish support.

Small print fit change the whole story.

You do not need to become a trader to ask these questions. A useful result is knowing which claim has been established, which condition remains unclear, and when to pause. You may also decide a familiar payment method better fits the situation.

**Further reading:** H-STABLECOINS and H-USDC for context; L-05.1/L-05.2 for target/redemption distinctions; L-04.2 for receiving compatibility. This article stands alone and awards no course credit.

### Sources and editorial boundary

S-22 provides mechanism background; S-24 supports the issuer-specific terms; S-20 supports network-specific issuance. These are sourced explanations with original interpretation, not a real conversion quote, reserve audit, country-access recommendation, or promised outcome. Recheck applicable terms before publication. The Circle Mint insurance statement is deliberately scoped to the inspected terms rather than generalised to every possible intermediary.

## A-NEWS-01 — Ghana launches a virtual-asset literacy initiative

Format: **News — archive sample**. Region: Ghana. Event/source date: **23 January 2026**. Sample prepared/source inspected: **7 October 2026**. Actual site publication date: unset; this is a draft review artifact.

### Reader copy

The Bank of Ghana announced the launch of the National Virtual Asset Literacy Initiative, known as NaVALI, in a governor's speech dated 23 January 2026.

The speech describes the initiative as a collaboration with the Securities and Exchange Commission and knowledge partners from academia and industry. Its stated objectives include developing institutional understanding of virtual assets and promoting public awareness of their risks and implications.

Governor Johnson Pandit Asiama framed the approach as “understand before you undertake.” The announcement places education alongside the work of regulators; it does not tell an individual reader which token or payment service to use.

For someone trying to understand crypto, the useful connection is practical: ask how an asset works, who controls it, what a transaction request means, and which claims still need verification. These are learning questions prompted by the announcement, not measured results of the programme.

This is an archive account of the January announcement. It does not report a new October launch, verify the programme's later outcomes, or establish a provider's current licensing. Readers seeking current country or service guidance should consult current applicable official material.

**Source:** [Bank of Ghana launch speech](https://www.bog.gov.gh/wp-content/uploads/2026/01/SPEECH-BY-GOVERNOR-DR-JOHNSON-PANDIT-ASIAMA-AT-THE-LAUNCH-OF-THE-NATIONAL-VIRTUAL-ASSET-LITERACY-INITIATIVE-NaVALI230126.pdf).

**Optional next reading:** A-EX-01 for stablecoin questions, or the foundation for asset/wallet/network basics. Reading this summary does not require an account, a quiz, or enrolment.

### Editorial note

The launch and stated objectives are attributed to one primary-source speech (S-02). No independent programme-effectiveness claim is made. No partnership between this application and Ghanaian institutions is implied. The archive/event/preparation dates must not be flattened into a misleading Latest News date during design or publication.

## H-STABLECOINS — Topic-hub sample

### Public introduction

Stablecoins aim to track a reference value. Their mechanisms, issuers, custody arrangements, redemption conditions, and supported networks can differ. Use this topic to understand those differences and the conditions behind an everyday payment or conversion claim.

**Start with an explanation:** A-EX-01. **Learn the concepts:** L-05.1 and L-05.2 when published. **Check the route:** L-04.2 and the eligible PM-04 activity. **Read project context:** H-USDC. Current published stablecoin coverage can appear below this introduction as it becomes available.

Reading these links does not award assessment credit. A hub can remain useful without a fresh news item; do not invent a story or promise live market data to fill it.

### Content relationships and maintenance

Topic identity: H-STABLECOINS; linked lesson/outcome IDs remain canonical. Verification: this introduction is source-informed draft copy, with independent review pending. Sources: S-22/24. Refresh when core explanation, example terms, or linked content changes. Regional instructions require separately researched applicability.

## H-USDC — Asset-hub sample

### Public introduction

USDC is a token issued by Circle that aims to track the US dollar. Circle lists issuer-native deployments on multiple blockchains. A specific network deployment and a third-party wrapped representation require distinct identification even when labels look similar.

Learn how target value, market price, redemption eligibility, custody, issuer restrictions, and receiving support differ. The source terms describe conditions; they do not make every conversion route available to every reader.

**Useful reading:** A-EX-01, H-STABLECOINS, L-04.2, and L-05.1/L-05.2 when published. Future USDC reporting can link to this identity without duplicating articles. The Ghana archive story is regional literacy coverage and must not be tagged USDC merely because this pack also discusses it.

### Identity and source notes

Project/issuer identity: Circle USDC. This hub groups project context; network deployments and representations are child identities, not automatically equivalent deposit assets. Ticker alone is not a unique identifier. Sources: S-20/24. Source-inspected draft: 7 October 2026; independent verification pending. No live price, blanket provider support, or initial launch-hub commitment is supplied.

## Review questions and remaining design choices

1. Does L-04.2 explain the distinction without overwhelming a reader who knows the basic vocabulary?
2. Do KC-04 and PM-04 require sufficient independent reasoning? Which rationales should count, and how will final activities avoid answer-key exposure?
3. Are the essential criteria and outcome boundaries clear, including the difference between compatibility and full transfer authorisation?
4. Does the voice feel natural to a fluent Nigerian reader and remain understandable outside Nigeria? No such review has occurred yet.
5. Are archive dates, source attribution, project/topic identity, and optional learning connections clear?
6. What editorial/subject-review work is sustainable before expanding to the 32 proposed lessons and more hubs/articles?

These questions inform PD-01/02/03/04. Approval of examples does not select application components, establish learner effectiveness, approve every proposed mission gate, or authorise product coding.
