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
  <div class="container">
    <h2 class="container-title" v-if="title !== ''">{{ title }}</h2>
    <div class="container-content">
      <slot></slot>
    </div>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  title: string;
}>();
</script>

<style scoped lang="scss">
.container {
  box-sizing: border-box;
  padding: 15px;
  border: 1px solid var(--border-color);
  border-radius: var(--border-radius);
  box-shadow: 0 4px 30px var(--shadow-color);
  backdrop-filter: blur(5px) brightness(95%);

  > .container-title {
    margin: 0 0 10px;
    font-size: 1.1em;
  }

  > .container-content {
    display: flex;
    flex-direction: column;
    gap: 25px;
  }
}
</style>
