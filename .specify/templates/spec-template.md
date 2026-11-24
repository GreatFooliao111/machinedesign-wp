# Feature Specification: [FEATURE NAME]

**Feature Branch**: `[###-feature-name]`

**Created**: [DATE]

**Status**: Draft

**Input**: User description: "$ARGUMENTS"

## Domain Context *(Select relevant block: Web / Trend Radar / Social Media)*

### A. Web Platform & Landing Pages *(Mandatory for Web Pages & Pillars)*
- **Target Pillar / Service**: [1 of the 6 Service Pillars or Corporate Hub]
- **Target URL**: [slug, e.g. /contact-us or /food-manufacturing/production-line-design]
- **Primary Keyword**: [From D:\Machinedesign.ir\Autoclaw\Final_SEO_Strategy_Report_Local (2).csv]
- **H1 Title**: [From D:\Machinedesign.ir\Autoclaw\SEO_Content_Plan_Final.csv]
- **Core H2 Headings**: [List of mapped H2 sections]
- **Primary Call to Action (CTA)**: [Direct phone, RFQ inquiry form, WhatsApp/Bale, or NDA session booking]
- **Art Direction (design-taste-frontend Gate 0)**:
  - **Subject Inventory**: [8-12 unique MachineDesign assets: specific mechanisms, tolerances, DIN/ISO standards]
  - **Idea Statement**: "On this page, [unique MachineDesign mechanical asset] becomes [the visual or interactive device]."
  - **One Live Thing**: [The specific authentic interactive element visitor can touch/manipulate on this page]

### B. Industrial Trend Radar & Intelligence *(Mandatory for Radar Features)*
- **Seeds Category**: [Target pillar seeds from seeds_140.json]
- **Cloudflare Worker Phase**: [Phase 1 to 4 in Stratified Interleaved Round-Robin Cursor]
- **SERP Intelligence**: [Query keywords, 7-day TTL cache key, daily query quota impact]
- **Foresight & Knowledge Graph**: [Neo4j node types and Cypher query mapping]
- **Notification Target**: [Telegram Saturday dispatch or local catch-up sync]

### C. Social Media & Content Campaigns *(Mandatory for Social Campaigns)*
- **Lead Channel & Target**: [@h.vatan.doust (Lead) / @machinedesign.ir (Collaborator) / @machinedesign_ir (Telegram/Bale)]
- **Visual Generation Pipeline**: [`image-generator` Single-Grid Master Sheet -> slice_grid.py into 1080x1350]
- **Trade Secret Compliance**: [Strict zero internal teardown / frame as proprietary secrets]
- **Physical Grounding**: [Mashhad Saman Tower showroom / Rotary brass CNC drum dies / Realistic 1,000-10,000/hr capacity]
- **Buffer MCP Scheduling**: [Scheduled time, queue check, channel IDs]

## User Scenarios & Testing *(mandatory)*

<!--
  IMPORTANT: User stories should be PRIORITIZED as user journeys ordered by importance.
  Each user story/journey must be INDEPENDENTLY TESTABLE - meaning if you implement just ONE of them,
  you should still have a viable MVP (Minimum Viable Product) that delivers value.

  Assign priorities (P1, P2, P3, etc.) to each story, where P1 is the most critical.
  Think of each story as a standalone slice of functionality that can be:
  - Developed independently
  - Tested independently
  - Deployed independently
  - Demonstrated to users independently
-->

### User Story 1 - [Brief Title] (Priority: P1)

[Describe this user journey in plain language]

**Why this priority**: [Explain the value and why it has this priority level]

**Independent Test**: [Describe how this can be tested independently - e.g., "Can be fully tested by [specific action] and delivers [specific value]"]

**Acceptance Scenarios**:

1. **Given** [initial state], **When** [action], **Then** [expected outcome]
2. **Given** [initial state], **When** [action], **Then** [expected outcome]

---

### User Story 2 - [Brief Title] (Priority: P2)

[Describe this user journey in plain language]

**Why this priority**: [Explain the value and why it has this priority level]

**Independent Test**: [Describe how this can be tested independently]

**Acceptance Scenarios**:

1. **Given** [initial state], **When** [action], **Then** [expected outcome]

---

### User Story 3 - [Brief Title] (Priority: P3)

[Describe this user journey in plain language]

**Why this priority**: [Explain the value and why it has this priority level]

**Independent Test**: [Describe how this can be tested independently]

**Acceptance Scenarios**:

1. **Given** [initial state], **When** [action], **Then** [expected outcome]

---

[Add more user stories as needed, each with an assigned priority]

### Edge Cases

<!--
  ACTION REQUIRED: The content in this section represents placeholders.
  Fill them out with the right edge cases.
-->

- What happens when [boundary condition]?
- How does system handle [error scenario]?

## Requirements *(mandatory)*

<!--
  ACTION REQUIRED: The content in this section represents placeholders.
  Fill them out with the right functional requirements.
-->

### Functional Requirements

- **FR-001**: System MUST [specific capability, e.g., "allow users to create accounts"]
- **FR-002**: System MUST [specific capability, e.g., "validate email addresses"]
- **FR-003**: Users MUST be able to [key interaction, e.g., "reset their password"]
- **FR-004**: System MUST [data requirement, e.g., "persist user preferences"]
- **FR-005**: System MUST [behavior, e.g., "log all security events"]

*Example of marking unclear requirements:*

- **FR-006**: System MUST authenticate users via [NEEDS CLARIFICATION: auth method not specified - email/password, SSO, OAuth?]
- **FR-007**: System MUST retain user data for [NEEDS CLARIFICATION: retention period not specified]

### Key Entities *(include if feature involves data)*

- **[Entity 1]**: [What it represents, key attributes without implementation]
- **[Entity 2]**: [What it represents, relationships to other entities]

## Success Criteria *(mandatory)*

<!--
  ACTION REQUIRED: Define measurable success criteria.
  These must be technology-agnostic and measurable.
-->

### Measurable Outcomes

- **SC-001**: [Measurable metric, e.g., "Users can complete account creation in under 2 minutes"]
- **SC-002**: [Measurable metric, e.g., "System handles 1000 concurrent users without degradation"]
- **SC-003**: [User satisfaction metric, e.g., "90% of users successfully complete primary task on first attempt"]
- **SC-004**: [Business metric, e.g., "Reduce support tickets related to [X] by 50%"]

## Assumptions

<!--
  ACTION REQUIRED: The content in this section represents placeholders.
  Fill them out with the right assumptions based on reasonable defaults
  chosen when the feature description did not specify certain details.
-->

- [Assumption about target users, e.g., "Users have stable internet connectivity"]
- [Assumption about scope boundaries, e.g., "Mobile support is out of scope for v1"]
- [Assumption about data/environment, e.g., "Existing authentication system will be reused"]
- [Dependency on existing system/service, e.g., "Requires access to the existing user profile API"]
