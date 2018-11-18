<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('/css/main.css', 'assets/build') }}">
    </head>
    <body class="antialiased font-sans">
        <div id="app">
            @include('partials.navbar')

            @yield('body')

            @include('partials.footer')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
        <script>
            Vue.component('collapse', {
              props: ['title'],
              data: function () {
                return {
                  isOpen: false
                }
              },
              methods: {
                toggle() {
                    this.isOpen = !this.isOpen;
                }
              },
              template: `<div class="mb-8">
                    <div class="flex justify-between items-center border-b border-grey-light pb-2 mb-2 cursor-pointer" v-on:click="toggle">
                        <h5 v-text="title" class="text-2xl text-black font-bold"></h5>
                        <svg v-if="isOpen" aria-hidden="true" class="fill-current text-grey h-6 w-6 no-outline" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z"></path></svg>
                        <svg v-else aria-hidden="true" class="fill-current text-blue h-6 w-6 no-outline" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path></svg>
                    </div>
                    <div class="text-sm text-grey-dark leading-normal" v-show="isOpen"><slot></slot></div>
                </div>`
            });

            var app = new Vue({
              el: '#app'
            });
        </script>
    </body>
</html>
