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
  <div class="footer-container">
    <div class="footer-center">
      <p>Copyright 2025-Present Kevin Traini</p>
      <p class="google-text">
        This site is protected by reCAPTCHA and the Google
        <a href="https://policies.google.com/privacy">Privacy Policy</a> and
        <a href="https://policies.google.com/terms">Terms of Service</a> apply.
      </p>
    </div>
    <img class="signature" src="../assets/signature.png" alt="" />
  </div>
</template>

<script setup lang="ts"></script>

<style scoped lang="scss">
.footer-container {
  width: 100%;
  padding: 20px 0;
  display: flex;
  justify-content: center;
  position: relative;
  background-color: var(--background-color-secondary);

  .footer-center {
    display: flex;
    flex-direction: column;
    align-items: center;

    .google-text {
      font-size: 0.8rem;
    }

    a {
      color: inherit;
    }
  }

  .signature {
    position: absolute;
    height: 20px;
    right: 5px;
    bottom: 0;
    pointer-events: none;
  }
}
</style>
