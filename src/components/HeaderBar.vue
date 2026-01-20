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
  <header class="container-column">
    <div>
      <img class="header-icon" src="../assets/logo.png" alt="Kevin" />
    </div>
    <div class="header-links">
      <a href="https://www.linkedin.com/in/kevin-traini/" target="_blank" title="LinkedIn">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a href="https://github.com/Gashmob" target="_blank" title="GitHub">
        <i class="fa-brands fa-github"></i>
      </a>
      <a href="https://blog.ktraini.com" target="_blank" title="Blog">
        <i class="fa-solid fa-newspaper"></i>
      </a>
    </div>
    <div class="header-theme">
      <button v-on:click="handleSwitchThemeClick" title="Switch theme">
        <i ref="switch_theme_button_icon" class="fa-solid"></i>
      </button>
    </div>
  </header>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue';

const switch_theme_button_icon = ref<HTMLElement>();

onMounted(() => {
  if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    document.documentElement.setAttribute('data-theme', 'dark');
    switch_theme_button_icon.value?.classList.add('fa-moon');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    switch_theme_button_icon.value?.classList.add('fa-sun');
  }
});

function handleSwitchThemeClick(): void {
  if (document.documentElement.getAttribute('data-theme') === 'light') {
    document.documentElement.setAttribute('data-theme', 'dark');
    switch_theme_button_icon.value?.classList.remove('fa-sun');
    switch_theme_button_icon.value?.classList.add('fa-moon');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    switch_theme_button_icon.value?.classList.remove('fa-moon');
    switch_theme_button_icon.value?.classList.add('fa-sun');
  }
}
</script>

<style scoped lang="scss">
.container-column {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  padding: 12px 0;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  backdrop-filter: blur(5px);
  z-index: 100;
}

.header-icon {
  width: 28px;
  height: 28px;
}

@mixin header-button {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 28px;
  height: 28px;
  box-sizing: border-box;
  background-color: transparent;
  border: 1px solid var(--border-color);
  border-radius: var(--border-radius);
  text-decoration: none;
  color: var(--font-color);
  transition: background-color 200ms ease;

  &:hover {
    cursor: pointer;
    background-color: var(--active-background-color);
  }

  > i {
    font-size: 20px;
  }
}

.header-links {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;

  > a {
    @include header-button;
  }
}

.header-theme > button {
  @include header-button;
}
</style>
