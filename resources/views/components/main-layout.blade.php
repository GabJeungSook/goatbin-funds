<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-100">

<head>
    <style>
    @media print {
        /* Hide the header and footer */
        header,
        footer {
          display: none !important;
        }
      }
      </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('images/darbc.png') }}" />

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js "></script>
  <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
  {{--  --}}
  <!-- Scripts -->
  @wireUiScripts
  {{-- @wireUiScripts --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
  @stack('scripts')
</head>

<body class="antialiased">
  <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
  <div>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

      <div class="fixed inset-0 z-40 flex">
        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-sidebar pt-5 pb-4">
          <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
          <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button type="button"
              class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="sr-only">Close sidebar</span>
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
              alt="Your Company">
          </div>
          <div class="mt-5 h-0 flex-1 overflow-y-auto">
            <nav class="space-y-1 px-2">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#"
                class="bg-gray-900 text-white group flex items-center rounded-md px-2 py-2 text-base font-medium">
                <!-- Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300" -->
                <svg class="text-gray-300 mr-4 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
              </a>


            </nav>
          </div>
        </div>

        <div class="w-14 flex-shrink-0" aria-hidden="true">
          <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
      </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex min-h-0 flex-1 flex-col bg-sidebar">
        <div class="flex h-16 space-x-2 flex-shrink-0 items-center bg-white px-4">
          {{-- <img class="h-8 w-auto" src="{{ asset('images/darbc.png') }}" alt="Your Company"> --}}
          <div>
            <h1 class="font-black text-sidebar font-montserrat  text-xl">GOATBIN</h1>
            <h1 class="font-semibold leading-3 text-green-800 text-sm">Fund Manangement System</h1>
          </div>
        </div>
        <div class="flex font-sans flex-1 flex-col overflow-y-auto">
          <nav class="flex-1 space-y-1 px-2 py-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('admin.dashboard') }}"
              class="{{ request()->routeIs('admin.dashboard') ? 'bg-green-200 text-gray-700' : 'text-white' }} hover:bg-green-200  hover:text-gray-700 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="mr-3 h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="currentColor">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path
                  d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z">
                </path>
              </svg>
              Dashboard
            </a>
            <a href=""
              class="{{ request()->routeIs('admin.fund') ? 'bg-green-200 text-gray-700' : 'text-white' }} hover:bg-green-200 hover:text-gray-700 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="mr-3 h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
              </svg>


              Fund
            </a>
            <a href=""
              class="{{ request()->routeIs('admin.category') ? 'bg-green-200 text-gray-700' : 'text-white' }} hover:bg-green-200  hover:text-gray-700 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="mr-3 h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
              </svg>

              Category
            </a>

          <div x-data="{ isOpen: false }">
            <a href="#"
              @click="isOpen = !isOpen"
              class="{{ request()->routeIs('admin.category') ? 'bg-green-200 text-gray-700' : 'text-white' }} hover:bg-green-200 hover:text-gray-700 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="mr-3 h-6 w-6 flex-shrink-0"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zM9.75 17.25a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zm2.25-3a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0v-3a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-5.25z" clip-rule="evenodd" />
                <path d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z" />
              </svg>

              Reports

              <span class="ml-auto">
                <svg x-show="!isOpen" class="h-4 w-4 text-gray-400 transform rotate-0 transition-transform"
                     :class="{ 'rotate-90': isOpen }"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </span>
            </a>

            <div x-show="isOpen"
                 x-transition:enter="transition ease-out duration-300 transform"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200 transform"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-4"
                 class="pl-8 mt-2 space-y-1"
                 style="display: none;">
                 <a href=""
                 class="{{ request()->routeIs('admin.category') ? 'bg-green-200 text-gray-700' : 'text-white' }} hover:bg-green-200  hover:text-gray-700 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
                 <svg class="mr-3 h-6 w-6 flex-shrink-0"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                     <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zM9.75 17.25a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zm2.25-3a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0v-3a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-5.25z" clip-rule="evenodd" />
                     <path d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z" />
                   </svg>

                 Reports
               </a>
            </div>
          </div>


          </nav>
        </div>
      </div>
    </div>
    <div class="flex flex-col lg:pl-64">
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 shadow-sm bg-white">
        <button type="button"
          class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
          </svg>
        </button>
        <div class="flex flex-1 justify-between px-4">
          <div class="flex flex-1">

          </div>
          <div class="ml-4 flex items-center lg:ml-6" x-data="{ dropdown: false }">

            <div class="relative inline-block px-3 text-left">
              <div>
                <button x-on:click="dropdown = !dropdown"
                  class="group w-full rounded-md  px-3.5 py-2 text-left text-sm font-medium text-gray-700 "
                  id="options-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="flex w-full space-x-3 items-center justify-between">
                    <span class="flex min-w-0 items-center justify-between space-x-3">
                      {{-- <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                        alt=""> --}}
                      <span class="flex min-w-0 flex-1 flex-col">
                        <span class="truncate text-sm font-medium text-gray-700 uppercase">{{auth()->user()->name}}</span>
                        <span class="truncate text-sm text-indigo-500"></span>
                      </span>
                    </span>
                    <svg class="h-5 w-5 group-hover:text-green-700 flex-shrink-0 text-gray-400 " viewBox="0 0 20 20"
                      fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </button>
              </div>

              <!--
          Dropdown menu, show/hide based on menu state.

          Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
          Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
              <div x-show="dropdown" x-transition-duration="100" x-cloak
                x-transition-enter="transition ease-out duration-100"
                x-transition-enter-start="transform opacity-0 scale-95"
                x-transition-enter-end="transform opacity-100 scale-100"
                x-transition-leave="transition ease-in duration-75"
                x-transition-leave-start="transform opacity-100 scale-100"
                x-transition-leave-end="transform opacity-0 scale-95" x-on:click.away="dropdown = false"
                class="absolute right-0 left-0 z-10 mx-3 mt-1 origin-top divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <form method="POST" action="{{ route('logout') }}" class="flex space-x-2">
                    @csrf
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
              this.closest('form').submit();"
                      class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                      id="options-menu-item-5">Logout</a>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <main class="flex-1">
        <div class="py-6">
          <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold text-gray-700 uppercase">@yield('title')</h1>
          </div>
          <div class="mx-auto  px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-4 mt-5 rounded-lg">
              {{ $slot }}
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <x-dialog z-index="z-50" blur="md" align="center" />
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  @yield('scripts')
  @livewire('notifications')
</body>

</html>
