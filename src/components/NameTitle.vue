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
  <div class="columns">
    <div class="title">
      <h1>Kevin Traini</h1>
      <h3>Software engineer.</h3>
    </div>
    <img class="image" src="../assets/logo.png" alt="" />
  </div>
</template>

<script setup lang="ts"></script>

<style scoped lang="scss">
.columns {
  display: flex;
  gap: 100px;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;

  > * {
    height: 40%;
  }

  .title {
    display: flex;
    flex-direction: column;
    justify-content: center;

    * {
      margin: 0;
    }

    h1 {
      font-size: 4em;
    }

    h3 {
      font-size: 1.5em;
      color: var(--font-color-secondary);
    }
  }

  .image {
    --size: 250px;
    width: var(--size);
    height: var(--size);
  }
}

@media screen and (max-width: 900px) {
  .columns .title {
    margin: 0 20px;

    h1 {
      font-size: 3.5em;
    }
  }

  .image {
    display: none;
  }
}
</style>
