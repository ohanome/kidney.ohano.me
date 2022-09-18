<template>
  <div class="bg-gradient-to-b from-pink-400 via-pink-500 to-pink-600 min-h-screen">
    <div class="h-96 grid grid-cols-1 place-content-center">
      <h1 class="text-7xl text-center font-bold text-white">Hi.</h1>
    </div>
    <div class="grid grid-cols-1 place-content-center p-8">
      <p class="text-center text-white">
        Du hast Kidney irgendwo gefunden? <span class="font-bold">Noice!</span>
      </p>
      <p class="text-center text-white">
        Mach ein Foto von ihm, poste es in deiner Story und tagge <a class="font-bold" href="https://instagram.com/kidneythehorse">@kidneythehorse</a>.
      </p>
    </div>
    <div v-if="found > 0">
      <p class="text-center italic text-white">
        Bisher gefunden: {{ found }}/{{ placed }}
      </p>
    </div>
    <div class="absolute bottom-0 w-full">
      <p class="text-center text-white">
        <a class="font-bold" href="https://instagram.com/kidneythehorse">Instagram</a> • <a class="font-bold" href="https://twitter.com/kidneythehorse">Twitter</a>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data() {
    return {
      found: 2,
      placed: 49,
    }
  },
}
</script>
