<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

<!--
  This example requires updating your template:
  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="data:image/png;base64,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" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">jobs</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://pbs.twimg.com/media/EZWhNbEX0AEAOy3.jpg" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">about</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">contact</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://pbs.twimg.com/media/EZWhNbEX0AEAOy3.jpg" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Jesse Malotaux</div>
            <div class="text-sm font-medium leading-none text-gray-400">JSM@Outlook.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>
</div>


</body>
</html>