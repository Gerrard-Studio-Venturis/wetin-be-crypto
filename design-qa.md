# Editorial design QA

final result: passed

Scope: local completion package design and the observed live 0.2.0 homepage. This is not complete production acceptance of the 0.3.0 upgrade or a full accessibility certification.

## Evidence and matching state

Source visual truth: `/workspace/generated_images/exec-98505688-1974-4eaa-be2e-e6cf4cec3b8b.png`, the third displayed concept selected by the owner. Reference pixels: 1487 × 1058. Local implementation: `implementation/design-evidence/home-desktop.png`, 1487 × 1058, CSS viewport 1487 × 1058, deviceScaleFactor 1, logged out, top of homepage. These were opened together in the same comparison input. No density scaling was required.

Additional captured and inspected states: article listing and topics at 1440 × 1024 during iteration; final article/topic captures at 1487 × 1058; mobile article, learning and login at 375 × 812; homepage mobile full-page at 375 × 3733. Mobile is an additional responsive check; the source supplies no mobile mockup.

The live homepage was captured through a browser at 1487 × 1058 and saved as `implementation/design-evidence/live-home.jpg`. Its three images were checked for `complete && naturalWidth > 0`. The visible illustration, hero and curated navigation are present; the old starter hero is absent. The live browser includes a normal scrollbar gutter, which explains small horizontal-position differences from local Chromium.

## Comparison history and fixes

Earlier blocked iteration: P1 navigation was pushed right; P2 eyebrow inherited an undefined colour, mobile featured text was squeezed alongside artwork and app pages lacked side gutters. These were fixed before the previous candidate and remain corrected.

This iteration: captured local pages showed P2 article/topic areas without illustrations, an oversized progress panel delaying access to lessons, and a long list of unavailable practice buttons. Added optimised original illustrations, compact optional-memory controls and a concise review hold with expandable exercise names. P2 image cropping cut the wider book illustration in topic cards; changed image fitting to contain and recaptured. The final screenshots were inspected after these fixes. No actionable P0/P1/P2 visual issues remain within this scope.

## Required fidelity surfaces

- **Typography:** licensed local DM Serif Display provides the editorial heading hierarchy; Arial/Helvetica carries controls and body text. The chosen serif is an intentional equivalent to the generated reference, not an exact-font claim. Final headings, labels and article wrapping are legible; lesson heading size was reduced so the reader appears sooner.
- **Layout rhythm:** two-column illustrated hero, featured story and adjacent numbered route, compact navigation and Pidgin note follow the selected composition. Mobile stacks content, keeps 20px side gutters and visible 44px controls. App panes and grids fit 375px without horizontal overflow.
- **Colours:** warm paper `#fffdf7`, ink `#101313`, cobalt `#114bc9` and mustard emphasis match the selected direction. Important labels remain readable without relying on colour. Complete accessibility/contrast certification is still separate.
- **Image quality:** original raster book/story/portrait and new 800 × 600 WebP article/topic illustrations were individually inspected. No SVG, CSS art, emoji or placeholder shapes replace the visual assets. Fitting preserves subjects; alt text is supplied and decorative portrait alt is empty.
- **Copy:** canonical teaching replaces the mockup's invented payment evidence and story claims. Occasional Pidgin remains contextual. Reading, demonstrated understanding and practice approval are distinct. Loading/errors, empty saved lists, login prompts and pending practice have clear wording.

Full-view comparisons were sufficient to read homepage headings, navigation and CTAs at 1:1; no unreadable dense controls required a separate crop. Individual source illustrations and mobile article/login screenshots provided additional focused inspection of imagery and forms.

## Interaction verification

The local presentation browser test passed: loaded homepage/article/topic images; seven routes; lesson previous/next; no-result search; article deep link/sign-in; mobile Menu, Escape and focus return; no overflow at 375px; branded 404/login; no page errors. The actual account browser test passed registration/password setup/login, explicit guest import, save/list/unsave, recovery-email generation and logout with all outbound mail suppressed.

Live: homepage images loaded; guest opt-in, reading position and completion persisted across reload; test progress was cleared; no page errors. Fresh public fetches returned 200 for seven core routes. The 0.3.0 upgrade is not installed remotely; production account email delivery and independent content/assessment approval remain unresolved release evidence.
