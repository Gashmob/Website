<!--
  - MIT License
  -
  - Copyright (c) 2025-Present Kevin Traini
  -
  - Permission is hereby granted, free of charge, to any person obtaining a copy
  - of this software and associated documentation files (the "Software"), to deal
  - in the Software without restriction, including without limitation the rights
  - to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  - copies of the Software, and to permit persons to whom the Software is
  - furnished to do so, subject to the following conditions:
  -
  - The above copyright notice and this permission notice shall be included in all
  - copies or substantial portions of the Software.
  -
  - THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  - IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  - FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  - AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  - LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  - OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  - SOFTWARE.
  -->
<template>
  <header-bar />

  <name-title />
  <pane-section title="Works" description="">
    <div class="row">
      <div class="column">
        <GlassContainer title="Work">
          <SimpleItem
            title="Enalean / Tuleap"
            description="Software engineer"
            icon="tuleap_logo.jpg"
            icon_type="image"
            right_text="2023 - Present"
          />
          <SimpleItem
            title="Enalean / Tuleap"
            description="Intern"
            icon="tuleap_logo.jpg"
            icon_type="image"
            right_text="2023"
          />
          <SimpleItem
            title="Lynred"
            description="Intern"
            icon="lynred_logo.jpeg"
            icon_type="image"
            right_text="2022"
          />
          <SimpleItem
            title="LAMA"
            description="Intern"
            icon="fa-solid fa-flask-vial"
            icon_type="fontawesome"
            right_text="2021"
          />
        </GlassContainer>
        <GlassContainer title="">
          <LinkItem
            title="LinkedIn"
            description="Want to see more?"
            icon="linkedin_logo.png"
            icon_type="image"
            link="https://www.linkedin.com/in/kevin-traini/"
          />
        </GlassContainer>
      </div>
      <GlassContainer title="Side projects">
<!--        <a class="item-link" href="https://github.com/Gashmob/fil" target="_blank">-->
<!--          <SimpleItem-->
<!--            title="Fil"-->
<!--            description="A programming language"-->
<!--            icon="fil_logo.png"-->
<!--            icon_type="image"-->
<!--            right_text=""-->
<!--          />-->
<!--        </a>-->
        <a class="item-link" href="https://github.com/Gashmob/CrossedFingers" target="_blank">
          <SimpleItem
            title="Crossed Fingers"
            description="C++ testing library"
            icon="🤞"
            icon_type="emoji"
            right_text=""
          />
        </a>
        <a class="item-link" href="https://github.com/Gashmob/YesChief" target="_blank">
          <SimpleItem
            title="YesChief!"
            description="Library to manage CLI options and commands"
            icon="fa-solid fa-terminal"
            icon_type="fontawesome"
            right_text=""
          />
        </a>
        <a class="item-link" href="https://github.com/Archict" target="_blank">
          <SimpleItem
            title="Archict"
            description="PHP framework"
            icon="fa-solid fa-globe"
            icon_type="fontawesome"
            right_text=""
          />
        </a>
        <a class="item-link" href="https://github.com/Gashmob/Enquirer" target="_blank">
          <SimpleItem
            title="Enquirer"
            description="Interactive CLI library"
            icon="fa-solid fa-terminal"
            icon_type="fontawesome"
            right_text=""
          />
        </a>
      </GlassContainer>
    </div>
  </pane-section>
  <pane-section title="Contact me" description="">
    <div class="row">
      <LinkItem
        title="LinkedIn"
        description="Feel free to contact me"
        link="https://www.linkedin.com/in/kevin-traini/"
        icon="linkedin_logo.png"
        icon_type="image"
      />
      <LinkItem
        title="Github"
        description="Look at my work"
        link="https://github.com/Gashmob"
        icon="github_logo.png"
        icon_type="image"
      />
      <LinkItem
        title="Mail"
        description="Send me a mail"
        link=""
        icon="fa-regular fa-envelope"
        icon_type="fontawesome"
        v-on:click="handleMailClick"
      />
    </div>
  </pane-section>

  <footer-signature />
</template>

<script setup lang="ts">
import HeaderBar from './components/HeaderBar.vue';
import NameTitle from './components/NameTitle.vue';
import FooterSignature from './components/FooterSignature.vue';
import PaneSection from './components/PaneSection.vue';
import GlassContainer from './components/container/GlassContainer.vue';
import SimpleItem from './components/container/SimpleItem.vue';
import LinkItem from './components/container/LinkItem.vue';

function handleMailClick(event: MouseEvent): void {
  event.preventDefault();
  // Weak security ;D
  setTimeout(() => window.open('mailto:kevin@ktraini.com', '_self')?.focus(), 3000);
}
</script>

<style scoped lang="scss">
.item-link {
  color: inherit;
  text-decoration: none;
  border-radius: var(--border-radius);
  padding: 5px 3px;
  transition: background-color 100ms ease;

  &:hover {
    background-color: var(--active-background-color);
  }
}

.row {
  display: flex;
  flex-direction: row;
  gap: 20px;
  justify-content: space-between;
  align-items: start;

  > * {
    flex: 1;
  }
}

.column {
  display: flex;
  flex-direction: column;
  gap: 20px;
  justify-content: start;
}

@media screen and (max-width: 900px) {
  .row {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
