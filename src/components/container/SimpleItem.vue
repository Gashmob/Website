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
  <div class="item">
    <div v-if="fa_icon" class="item-icon"><i v-bind:class="icon"></i></div>
    <img v-else class="item-icon" v-bind:src="icon" alt="" />
    <div class="item-content">
      <h3>{{ title }}</h3>
      <p>{{ description }}</p>
    </div>
    <span v-if="right_text !== ''" class="item-right-text">{{ right_text }}</span>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  title: string;
  description: string;
  icon: string;
  fa_icon: boolean;
  right_text: string;
}>();
</script>

<style scoped lang="scss">
.item {
  display: flex;
  align-items: center;

  > .item-icon {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: var(--border-radius);
  }

  > div.item-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid var(--border-color);
    background-color: var(--background-color);
  }

  .item-content > * {
    margin: 0;
  }

  .item-content h3 {
    font-weight: normal;
  }

  .item-content p {
    font-size: 0.8em;
  }

  .item-right-text {
    margin-left: auto;
    font-size: 0.9em;
  }
}
</style>
