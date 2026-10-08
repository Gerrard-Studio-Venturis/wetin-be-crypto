# Wetin Be Crypto — Focused Research Findings

Version: 0.2
Date: 7 October 2026
Status: P-01 desk-research checkpoint and P-02 content-design recommendations. No direct learner findings or application tests.

## Research question and boundary

Which explanations and decisions should the first representative content demonstrate, and what can the current sources support?

This pass addresses RQ-02 to RQ-06 with official crypto/provider documentation, issuer terms, Ghana's literacy-launch speech, and an educational practice guide. It develops the approved practical/safe-use direction. It does not measure learner demand, choose supported countries/providers, establish a publication cadence, or validate a WordPress application.

The [Curriculum Coverage](CURRICULUM-COVERAGE.md) and [Content Design Samples](CONTENT-DESIGN-SAMPLES.md) are design proposals built from this evidence. The [Learner Research Guide](LEARNER-RESEARCH-GUIDE.md) prepares the next direct review; it is not a report of sessions.

Scope update: approved D-15 excludes visual design. The new [Information Architecture](INFORMATION-ARCHITECTURE.md) and [Functional Flows](FUNCTIONAL-FLOWS.md) use the recorded evidence and requirements to specify functional relationships/states. This revision adds scope/traceability context without a new external-source inspection or observed learner finding.

## Source inspection record

All inspections below occurred on **7 October 2026**. Firecrawl supplied the search excerpts and page text. Page retrieval requested a live fetch; this records what was returned, not a guarantee that every sentence or price on a source page is current.

| Source ID | Exact source | Access and relevant observation | Scope/freshness limit |
| --- | --- | --- | --- |
| S-20 | [Circle USDC contract addresses](https://developers.circle.com/stablecoins/usdc-contract-addresses) | Search-result excerpt inspected. The issuer lists separate USDC entries for Ethereum and Base, among other blockchains. | Excerpt only; no claim that we verified every contract/deployment or provider's deposit support. No contract addresses are reproduced in learner exercises. |
| S-21 | [Ethereum layer-2 overview](https://ethereum.org/layer-2/) | Main page text retrieved. It presents multiple Ethereum-related networks and distinguishes network/security context. | Overview contains broad promotional language and dynamic figures. Do not turn it into a promise of seamless deposit compatibility, equal safety, fixed fees, or instant crediting. |
| S-22 | [Ethereum stablecoins](https://ethereum.org/stablecoins/) | Main page text retrieved. It describes different stabilisation models, custodial/self-custody routes, and issuer examples. | Some copy describes stability broadly and promotes lending. The sample uses qualified definitions and no quoted yields, rankings, or universal redemption promise. |
| S-23 | [Coinbase assets on multiple networks](https://help.coinbase.com/en/coinbase/trading-and-funding/sending-or-receiving-cryptocurrency/assets-on-multiple-networks) | Search excerpt followed by page-text retrieval. The provider describes selecting networks and checking recipient support. Its Ethereum/Polygon example shows that one service address may accept more than one supported network. | Provider-specific; page also has a legacy MATIC gas reference and a partial error banner. It is not authority for current Polygon fee assets, every provider, or universal recovery impossibility. |
| S-24 | [Circle USDC terms](https://www.circle.com/legal/usdc-terms) | Page text retrieved. Terms distinguish direct issuer redemption eligibility from holding USDC, recognise third-party prices can differ from USD 1, distinguish unsupported copies/wrappers, and describe restrictions and lack of deposit insurance for Circle Mint holdings. | These retrieved terms state their non-EEA scope. They are issuer statements, not independent reserve assurance or current local legal/provider-access advice. Recheck terms and applicable jurisdiction before publication. |
| S-02 | [Bank of Ghana NaVALI launch speech](https://www.bog.gov.gh/wp-content/uploads/2026/01/SPEECH-BY-GOVERNOR-DR-JOHNSON-PANDIT-ASIAMA-AT-THE-LAUNCH-OF-THE-NATIONAL-VIRTUAL-ASSET-LITERACY-INITIATIVE-NaVALI230126.pdf) | Full three-page PDF text returned within the requested five-page cap. The speech is dated 23 January 2026 and announces the initiative with the SEC and knowledge partners. Public understanding and risk awareness are explicit objectives. | Evidence about a specific historical announcement. It does not establish our learner needs, current provider licensing, regional law, or programme effectiveness. |
| S-08 | [IES Organizing Instruction and Study to Improve Student Learning](https://ies.ed.gov/ncee/wwc/PracticeGuide/1) | Guide summary retrieved; release date September 2007. It recommends spaced learning, alternating worked examples/problem solving, retrieval through quizzes, and explanatory questions, with differing evidence ratings. | General educational guidance, not a study of our African crypto curriculum. Prediction prompts have weaker support than some other recommendations; no fixed question count, score, or review interval is inferred. |

The previously carried-forward S-07 Nature reference was not reverified: Firecrawl's paper metadata lookup returned 404, and an attempted Crossref metadata lookup was blocked by the execution network. This does not establish that the paper is invalid. Its bibliographic verification remains pending; **this sample's teaching rationale relies on the inspected S-08 guide**.

## Findings, inferences, and recommendations

### RF-01 — Teach receiving-route compatibility explicitly

**Observed:** Circle lists USDC by blockchain (S-20). Provider documentation requires attention to supported send/receive networks and also demonstrates provider-specific multi-network support (S-23).

**Inference:** a beginner can recognise the same name or familiar-looking address while overlooking the receiving service's supported route. The frequency of this misunderstanding in our audience is not established.

**Recommendation:** L-04.2 should teach exact asset representation, selected network, and current receiving support together. The worked example uses a fictional service that supports one declared route. A shared address can support multiple routes when the service explicitly says so; appearance alone establishes none. An ordinary send is distinguished from an explicitly documented cross-network service.

**Traceability:** RQ-03/04; O-04.2; KC-04/PM-04 sample; FS-03/04/08; AC-03.2 and AC-04.3.

### RF-02 — Separate a stability target from the user's actual money route

**Observed:** the stablecoin overview describes different mechanisms (S-22). Circle's terms distinguish eligible redemption from token holding and recognise third-party price variation, fees, restrictions, and unsupported representations (S-24).

**Inference:** the word stable may encourage assumptions about a guaranteed sale price, automatic bank payout, or identical risk across tokens. These are proposed comprehension questions, not observed learner findings.

**Recommendation:** the evergreen explainer and stablecoin hub distinguish target, market quote, redemption eligibility, custody, network/representation, and conversion/payout conditions. Do not imply that holding USDC earns interest, qualifies every reader for issuer redemption, or creates insured bank savings. No real conversion rate or regional provider recommendation is introduced.

**Traceability:** RQ-03/05; M-05; FS-07/08; A-EX-01 and H-STABLECOINS.

### RF-03 — Give factual news its own useful reading route

**Observed:** the January Ghana speech announces a literacy initiative and its stated objectives (S-02).

**Inference:** an understandable account of a local development can offer a relevant entry into broader learning. Whether readers use that connection remains untested.

**Recommendation:** A-NEWS-01 is an original, attributed archive summary. Show event date, source date, sample-preparation date, and future actual publication date distinctly. Link an optional explainer without requiring a course. Do not present the launch as new October reporting or infer that a provider is licensed because the initiative exists.

**Traceability:** RQ-02/05; FS-07/11; J-06/07; A-NEWS-01.

### RF-04 — Demonstrate reasoning after a worked example

**Observed:** S-08 recommends alternating worked examples with problem solving, retrieval, and explanatory questions. Its evidence ratings differ across recommendations.

**Inference:** the foundation should give learners a reasoned example, then a different decision to attempt independently. Actual learning effectiveness still requires learner review and later appropriate study.

**Recommendation:** the sample lesson is followed by a four-item outcome-specific check and an independent mission with a variation. All four sample check items are essential; this is a proposed criterion for this small check, not a universal pass policy. Recognition, rationale, and practice remain distinct. Show feedback after an attempt; keep facilitator answers separate during sessions.

**Traceability:** RQ-04; FS-02/03/04/05; KC-04/PM-04; PD-02.

### RF-05 — Validate the actual voice, not a phrase list

**Observed:** varied, occasional Nigerian Pidgin is an owner-approved preference (D-07). No fluent human review or learner comprehension session has yet occurred.

**Inference:** naturalness and familiarity will depend on wording, context, and reader background.

**Recommendation:** use occasional asides in the samples, leave essential meaning in English, and review batches for repetition. The [Voice and Editorial Guide](VOICE-AND-EDITORIAL-GUIDE.md) supplies examples and review questions without a quota or rotation. Test actual wording with Nigerian and non-Nigerian readers.

**Traceability:** RQ-06; FS-12; PD-02/03; learner-guide voice tasks.

## Priority learner situations for the next review

These are research hypotheses that operationalise the approved direction:

| Priority situation | Material to review | What evidence would help |
| --- | --- | --- |
| Understand an unfamiliar crypto payment/asset. | Foundation component vocabulary and proposed lesson inventory. | Actual recent situations, confusing terms, and useful explanations. |
| Catch a route mismatch before authorising. | L-04.2, KC-04, PM-04. | Independent decision/rationale before help, then response to a meaningful variation. |
| Understand a stablecoin conversion/payout claim. | A-EX-01 and M-05 inventory. | Learner's distinction among target value, market quote, eligibility, and money received. |
| Read a crypto development without joining a course. | A-NEWS-01 and topic hub. | Source/date comprehension and freely chosen continuation. |
| Understand what progress and saving mean. | Proposed journey/memory/import descriptions in the research guide; later screens. | Whether readers distinguish learning evidence, device memory, account records, and bookmarks. |

Do not rank these as the audience's most frequent problems without direct evidence. Country labels in proposed examples do not establish regional availability or suitability.

## What this checkpoint resolves

Prepared: a 32-lesson draft inventory, a 43-entry living topic map, actual representative content/criteria, a voice/editorial guide, and a reusable learner-review protocol. The work makes P-01/P-02 concrete without settling every launch lesson, practice gate, or editorial workload.

Outstanding: independent subject review, fluent Nigerian review, learner sessions, approved final rubric/gates, initial country/asset coverage, editorial capacity, functional-specification review, WordPress component selection, and future application verification. P-03 now has a draft sitemap/page map and ten written flows. Visual design is excluded; material behaviour/scope changes still require owner review.
