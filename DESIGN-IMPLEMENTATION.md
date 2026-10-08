# Editorial field guide — implemented design

The owner chose option 3, the third displayed concept. Version 0.2.0 implements warm paper, ink serif headings, cobalt controls, mustard emphasis and original illustrated learning assets. English leads; a restrained Pidgin note adds familiarity.

The homepage combines an illustrated introduction, foundation CTA, featured fictional story, a three-step entry into eight modules/32 lessons and real published explainers. Learning has a module sidebar and readable lesson area. Articles use editorial cards; journey and saved states share the visual language. Imported lessons, stories, hubs and glossary pages use the same header, footer and prose typography.

The WordPress plugin selects its template only for canonical imported content. Unrelated theme pages remain under their existing theme. No content re-import is needed to update the design. Local DM Serif Display is distributed with its OFL licence; generated WebP assets require no external font or image service. The mockup's invented payment evidence was replaced with canonical copy and neutral asset/network/service illustrations.

## Verification and installation

See [visual QA](design-qa.md), [desktop](implementation/design-evidence/home-desktop.png), [mobile](implementation/design-evidence/home-mobile.png) and [deployment navigation](implementation/DEPLOYMENT-HANDOFF.md).

Local WordPress checks: 91 assertions, five grading checks, both client browser suites; loaded home images, mobile Menu and Escape state, and 375px no horizontal overflow. This does not establish production X-T9 compatibility, complete accessibility, mail delivery or editorial approval. Practice retains exact-revision approval gates. No production changes are claimed.

Upgrade using the versioned plugin ZIP, then preview the imported Welcome page before changing Reading settings. Existing accounts and progress remain in the existing database schema.
