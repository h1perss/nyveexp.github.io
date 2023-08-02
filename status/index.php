<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nyve Status Services</title>
    <link rel="stylesheet" href="style.css" />
	  <script>
    // Check if the user prefers dark mode
    const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Apply dark mode classes to the body
    if (prefersDarkMode) {
      document.body.classList.add('dark');
    }
  </script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"
      defer
	  
    ></script>
  </head>
  <body>
    <div class="dark:bg-dark">
      <header class="py-8 md:py-12 mb-8">
        <div
          class="container flex flex-col items-center md:flex-row justify-between"
        >
        <div class="logo mb-8 md:mb-0 text-gray-800 dark:text-gray-100">
        <img src="https://cdn.discordapp.com/attachments/997185169809223840/1136361686161428552/nyve2.png">
          </div>
          <div
            class="links flex space-x-2 items-center leading-none font-medium"
          >
            <button
              x-data="{ dark: false }"
              @click="dark = !dark; document.body.classList.toggle('dark')"
              type="button"
              class="inline-flex items-center p-2 border border-gray-300 dark:border-dark rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-100 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2"
            >
              <svg
                style="display: none"
                x-show="dark"
                class="h-5 w-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                ></path>
              </svg>
              <svg
                x-show="!dark"
                class="h-5 w-5"
                xmlns="http://www.w3.org/2000/svg"
                stroke="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                ></path>
              </svg>
            </button>
            <button
              type="button"
              class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-dark rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-100 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2"
            >
              <svg
                class="-ml-1 mr-2 h-5 w-5"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 22 22"
                fill="currentColor"
                aria-hidden="true"
              >
                <path
                  d="M11 15h2v2h-2v-2m0-8h2v6h-2V7m1-5C6.47 2 2 6.5 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m0 18a8 8 0 0 1-8-8a8 8 0 0 1 8-8a8 8 0 0 1 8 8a8 8 0 0 1-8 8z"
                  fill="currentColor"
                ></path>
              </svg>
              <a href="https://discord.gg/kDNcK5mSfn">Report Bugs</a>
            </button>
          </div>
        </div>
        <div class="container">
          <div
            class="flex items-center p-5 mt-8 md:mt-24 status font-semibold text-dark-green"
          >
            <svg
              class="mr-4"
              width="29"
              height="29"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.3733 0c6.8363 0 12.3734 2.87113 12.3734 6.41593 0 3.5448-5.5371 6.41597-12.3734 6.41597C5.53707 12.8319 0 9.96073 0 6.41593 0 2.87113 5.53707 0 12.3733 0zM0 9.62389c0 3.54481 5.53707 6.41591 12.3733 6.41591 6.8363 0 12.3734-2.8711 12.3734-6.41591v4.94031L23.2 14.4358c-4.0059 0-7.424 2.6306-8.7232 6.3197l-2.1035.0963C5.53707 20.8518 0 17.9806 0 14.4358V9.62389zm0 8.01991c0 3.5448 5.53707 6.4159 12.3733 6.4159H13.92c0 1.6842.4176 3.2722 1.16 4.6516l-2.7067.1604C5.53707 28.8717 0 26.0006 0 22.4558v-4.812zM21.6533 29L17.4 24.1881l1.7941-1.8607 2.4592 2.5343 5.5526-5.7422L29 21.3811 21.6533 29z"
              />
            </svg>
            All System Online!
          </div>
        </div>
      </header>

      <main>
        <h2
          class="container text-xs tracking-wide text-gray-500 dark:text-gray-300 uppercase font-bold mb-8"
        >
          
        </h2>
        <div class="monitors space-y-6">
          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Website</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">100%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>

          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Exploit API</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">100%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>

          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Domain</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">100%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>


          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Site</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">94.6%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>


          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Exploit</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">100%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>

          <div class="monitor py-8 bg-green-400 bg-opacity-10" x-data="bars()">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">Discord</h3>
              <span class="text-green-600 dark:text-green-400 font-semibold">
                Active
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-green-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
            <div class="container mt-2">
              <div class="flex items-center">
                <span class="pr-2 flex-shrink-0 text-green-500 text-xs font-semibold" x-text="count + ' days ago'"></span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="px-2 flex-shrink-0 text-green-500 text-xs font-semibold">94.6%</span>
                <div class="h-px bg-green-500 w-full"></div>
                <span class="pl-2 flex-shrink-0 text-green-500 text-xs font-semibold">Today</span>
              </div>
            </div>
          </div>

          

          

<!--
          <div class="monitor py-8 bg-red-400 bg-opacity-10">
            <div class="container flex items-center justify-between mb-3">
              <h3 class="text-2xl text-gray-800 dark:text-gray-100">
                Seri No API
              </h3>
              <span class="text-red-600 dark:text-red-400 font-semibold">
                Kapalı
              </span>
            </div>
            <div class="container bars">
              <div class="flex space-x-px">
                <template
                  x-data="bars()"
                  x-on:resize.window="count = calculate()"
                  x-for="i in count"
                >
                  <div
                    class="bars bg-red-400 flex-1 h-10 rounded hover:opacity-80 cursor-pointer"
                  ></div>
                </template>
              </div>
            </div>
          </div>
        </div>-->

       
      </main>

      <footer class="py-16 text-gray-700 dark:text-gray-100 bg-gray-100 dark:bg-gray-800">
        <div class="container flex justify-between">
          <a href="https://discord.gg/kDNcK5mSfn" class="flex items-center">
          
            Discord
          </a>
          <div>
            Powered by
            <span class="font-semibold text-black dark:text-white">Nyve & h1p.</span>
          </div>
        </div>
      </footer>
    </div>
    <script>
      function bars() {
        const calculate = () =>
          Math.min(Math.floor(window.innerWidth / 10.7), 90);
        return {
          count: calculate(),
          calculate,
        };
      }
    </script>
  </body>
</html>