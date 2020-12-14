<template>
  <div>
    <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Full Logo</h1>

    <div class="mb-10">
      <picture
        style="height: 382px"
        class="shadow flex rounded-lg items-center justify-center mb-6"
      >
        <img src="/images/logo.svg" alt="logo" />
      </picture>

      <div class="flex justify-between items-center" style="width: 500px">
        <p>Original Logo on <strong>white</strong> background</p>
        <a
          href="/images/logo.svg"
          class="border border-grey-light px-8 py-2 rounded-full text-black text-xs font-bold"
          >logo.svg</a
        >
      </div>
    </div>
    <div class="mb-10">
      <picture
        style="height: 382px"
        class="shadow flex rounded-lg items-center justify-center mb-6 bg-laracasts-blue"
      >
        <img src="/images/negative-logo.svg" alt="logo" />
      </picture>

      <div class="flex justify-between items-center" style="width: 500px">
        <p>Negative Logo with accent on <strong>dark</strong> background</p>
        <a
          href="/images/logo.svg"
          class="border border-grey-light px-8 py-2 rounded-full text-black text-xs font-bold"
          >negative-logo.svg</a
        >
      </div>
    </div>
    <div>
      <picture
        style="height: 382px"
        class="shadow flex rounded-lg items-center justify-center mb-6 bg-black"
      >
        <img src="/images/negative-logo.svg" alt="logo" />
      </picture>

      <div class="flex justify-between items-center" style="width: 500px">
        <p>Pure negative logo on <strong>dark</strong> background</p>
        <a
          href="/images/pure-negative-logo.svg"
          class="border border-grey-light px-8 py-2 rounded-full text-black text-xs font-bold"
          >pure-negative-logo.svg</a
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
