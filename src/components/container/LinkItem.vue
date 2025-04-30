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
  <a class="item" v-bind:href="link" target="_blank" v-on:click="handleClick">
    <img class="item-icon" v-bind:src="icon" v-bind:alt="title" />
    <div class="item-content">
      <h3>{{ title }}</h3>
      <p>{{ description }}</p>
    </div>
    <i class="fa-solid fa-arrow-up item-right-text"></i>
  </a>
</template>

<script setup lang="ts">
defineProps<{
  title: string;
  description: string;
  icon: string;
  link: string;
}>();

const emit = defineEmits<{
  (e: 'click', previous: MouseEvent): void;
}>();

function handleClick(event: MouseEvent): void {
  emit('click', event);
}
</script>

<style scoped lang="scss">
.item {
  display: flex;
  align-items: center;
  color: inherit;
  text-decoration: none;

  > .item-icon {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: var(--border-radius);
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
    margin-right: 10px;
    transform: rotate(45deg);
    font-size: 0.9em;
    transition: 150ms ease-in-out;
  }

  &:hover .item-right-text {
    filter: drop-shadow(-2px 2px 4px var(--shadow-color));
    transform: translateX(3px) translateY(-3px) rotate(45deg);
  }
}
</style>
