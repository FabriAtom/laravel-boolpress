<template>
  <header>
    <nav class="container">
        <div class="flex justify-between items-center">
            <div>
                LOGO
            </div>
            <ul class="flex items-center">
                <li class="px-2 py-1 hover:bg-amber-200" v-for="(link,i) in navLinks" :key="i">
                    <router-link :to="link.path">{{ link.text }}</router-link>
                </li>
            </ul>
        </div>
    </nav>
  </header>
</template>

<script>
export default {
    data() {
        return {
            navLinks: [
                {
                    text: 'home',
                    path: '/'
                },
                {
                    text: 'Chi siamo',
                    path: '/chi-siamo'
                },
                {
                    text: 'Blog',
                    path: '/blog'
                },
                {
                    text: 'Contatti',
                    path: '/contatti'
                },
            ]
        }
    }

}
</script>

<style lang="scss" scoped> 

</style>