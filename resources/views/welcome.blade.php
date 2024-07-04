<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <script src="./node_modules/@devops-cora/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
    <title>Main Page</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-800">T-Rex 🦖</a>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-600">Home</a>
                <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-600">About</a>
                <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-600">Services</a>
                <a href="#" class="px-3 py-2 text-gray-800 hover:text-gray-600">Contact</a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-800 focus:outline-none">
                    <!-- Mobile menu button (optional) -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Website</h1>
            <p class="text-xl mb-8">We provide the best services for your needs.</p>
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get Started</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Service One</h3>
                    {{--  --}}
                    <!--Tabs navigation-->
                        <ul
                        class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
                        role="tablist"
                        data-twe-nav-ref>
                        <li role="presentation" class="flex-auto text-center">
                        <a
                            href="#tabs-home01"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-home01"
                            data-twe-nav-active
                            role="tab"
                            aria-controls="tabs-home01"
                            aria-selected="true"
                            >Home</a
                        >
                        </li>
                        <li role="presentation" class="flex-auto text-center">
                        <a
                            href="#tabs-profile01"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-profile01"
                            role="tab"
                            aria-controls="tabs-profile01"
                            aria-selected="false"
                            >Profile</a
                        >
                        </li>
                        <li role="presentation" class="flex-auto text-center">
                        <a
                            href="#tabs-messages01"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-messages01"
                            role="tab"
                            aria-controls="tabs-messages01"
                            aria-selected="false"
                            >Messages</a
                        >
                        </li>
                        <li role="presentation" class="flex-auto text-center">
                        <a
                            href="#tabs-contact01"
                            class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-contact01"
                            role="tab"
                            aria-controls="tabs-contact01"
                            aria-selected="false"
                            >Contact</a
                        >
                        </li>
                        </ul>

                        <!--Tabs content-->
                        <div class="mb-6">
                        <div
                        class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-home01"
                        role="tabpanel"
                        aria-labelledby="tabs-home-tab01"
                        data-twe-tab-active>
                        Tab 1 content
                        </div>
                        <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-profile01"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab01">
                        Tab 2 content
                        </div>
                        <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-messages01"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab01">
                        Tab 3 content
                        </div>
                        <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-contact01"
                        role="tabpanel"
                        aria-labelledby="tabs-contact-tab01">
                        Tab 4 content
                        </div>
                        </div>
                    {{--  --}}
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Service Two</h3>
                    {{--  --}}
                    <div class="grid grid-cols-3">
                        <div class="col-span-2">
                          <div
                            data-twe-spy="scroll"
                            data-twe-target="#scrollspy-collapsible"
                            data-twe-offset="0"
                            class="relative h-48 overflow-auto">
                            <section id="example-1-collapsible">
                              <h3 class="pb-3 pt-5 text-xl font-semibold">Section 1</h3>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                            </section>
                            <section id="example-2-collapsible">
                              <h3 class="pb-3 pt-5 text-xl font-semibold">Section 2</h3>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                            </section>
                            <section id="example-3-collapsible">
                              <h3 class="pb-3 pt-5 text-xl font-semibold">Section 3</h3>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <section id="example-sub-A-collapsible">
                                <h3 class="pb-3 pt-5 text-xl font-semibold">Subsection A</h3>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  Labore earum natus vel minima quod error maxime, molestias ut.
                                  Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                                  et reiciendis quaerat accusamus numquam.
                                </p>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  Labore earum natus vel minima quod error maxime, molestias ut.
                                  Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                                  et reiciendis quaerat accusamus numquam.
                                </p>
                              </section>
                              <section id="example-sub-B-collapsible">
                                <h3 class="pb-3 pt-5 text-xl font-semibold">Subsection B</h3>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  Labore earum natus vel minima quod error maxime, molestias ut.
                                  Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                                  et reiciendis quaerat accusamus numquam.
                                </p>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  Labore earum natus vel minima quod error maxime, molestias ut.
                                  Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                                  et reiciendis quaerat accusamus numquam.
                                </p>
                              </section>
                            </section>
                            <section id="example-4-collapsible">
                              <h3 class="pb-3 pt-5 text-xl font-semibold">Section 4</h3>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                earum natus vel minima quod error maxime, molestias ut. Fuga
                                dignissimos nisi nemo necessitatibus quisquam obcaecati et
                                reiciendis quaerat accusamus numquam.
                              </p>
                            </section>
                          </div>
                        </div>
                        <div>
                          <!-- Scrollspy -->
                          <div id="scrollspy-collapsible" class="sticky-top ps-3 text-sm">
                            <ul data-twe-nav-list-ref>
                              <li class="py-1">
                                <a
                                  data-twe-nav-link-ref
                                  data-twe-nav-link-active
                                  class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                  href="#example-1-collapsible"
                                  >Section 1</a
                                >
                              </li>
                              <li class="py-1">
                                <a
                                  data-twe-nav-link-ref
                                  class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                  href="#example-2-collapsible"
                                  >Section 2</a
                                >
                              </li>
                              <li class="py-1">
                                <a
                                  data-twe-nav-link-ref
                                  data-twe-collapsible-scrollspy-ref
                                  class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                  href="#example-3-collapsible"
                                  >Section 3</a
                                >
                                <ul
                                  data-twe-nav-list-ref
                                  class="ps-3 transition-all duration-300">
                                  <li class="py-1">
                                    <a
                                      data-twe-nav-link-ref
                                      class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                      href="#example-sub-A-collapsible"
                                      >Subsection A</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      data-twe-nav-link-ref
                                      class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                      href="#example-sub-B-collapsible"
                                      >Subsection B</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li class="py-1">
                                <a
                                  data-twe-nav-link-ref
                                  class="bg-transparent px-[5px] text-[#4b5563] shadow-none transition-all dark:text-neutral-200"
                                  href="#example-4-collapsible"
                                  >Section 4</a
                                >
                              </li>
                            </ul>
                          </div>
                          <!-- Scrollspy -->
                        </div>
                      </div>
                    {{--  --}}
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Service Three</h3>
                    {{--  --}}
                    <div
                        class="relative mb-3"
                        data-twe-datepicker-init
                        data-twe-input-wrapper-init>
                        <input
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        placeholder="Select a date" />
                        <label
                        for="floatingInput"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary"
                        >Select a date</label
                        >
                  </div>
                    {{--  --}}
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec vestibulum erat. Sed euismod nisl eget lacus sagittis, sit amet faucibus massa aliquam.</p>
            <p class="mb-4">Proin nec quam at leo egestas consequat. Duis vehicula magna at lorem volutpat, ut luctus mi fermentum. Vivamus non elementum dolor.</p>
            <p class="mb-4">Suspendisse potenti. Phasellus at enim urna. Nulla facilisi. Donec at erat sit amet elit fringilla aliquet non sed magna. Nulla vel eros non eros suscipit fermentum.</p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Our Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Project One" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Project One</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Project Two" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Project Two</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Project Three" class="mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Project Three</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form class="bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
            </form>
        </section>
    </main>

        <!-- Footer container -->
    <footer
        class="bg-zinc-50 text-center text-surface/75 dark:bg-neutral-700 dark:text-white/75 lg:text-left">
        <div
            class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-white/10 lg:justify-between">
            <div class="me-12 hidden lg:block">
            <span>Get connected with us on social networks:</span>
            </div>
            <!-- Social network icons container -->
            <div class="flex justify-center">
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 320 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>
            </a>
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4 ">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
            </a>
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 488 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                </svg>
            </a>
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </a>
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                </svg>
            </a>
            <a href="#!" class="[&>svg]:h-4 [&>svg]:w-4">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 496 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                </svg>
            </a>
            </div>
        </div>

        <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- TW Elements section -->
            <div class="">
                <h6
                class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
                <span class="me-3 [&>svg]:h-4 [&>svg]:w-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                    </svg>
                </span>
                T-Rex
                </h6>
                <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
                </p>
            </div>
            <!-- Products section -->
            <div>
                <h6
                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                Products
                </h6>
                <p class="mb-4">
                <a href="#!">Angular</a>
                </p>
                <p class="mb-4">
                <a href="#!">React</a>
                </p>
                <p class="mb-4">
                <a href="#!">Vue</a>
                </p>
                <p>
                <a href="#!">Laravel</a>
                </p>
            </div>
            <!-- Useful links section -->
            <div>
                <h6
                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                Useful links
                </h6>
                <p class="mb-4">
                <a href="#!">Pricing</a>
                </p>
                <p class="mb-4">
                <a href="#!">Settings</a>
                </p>
                <p class="mb-4">
                <a href="#!">Orders</a>
                </p>
                <p>
                <a href="#!">Help</a>
                </p>
            </div>
            <!-- Contact section -->
            <div>
                <h6
                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                Contact
                </h6>
                <p class="mb-4 flex items-center justify-center md:justify-start">
                <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                    <path
                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                </span>
                New York, NY 10012, US
                </p>
                <p class="mb-4 flex items-center justify-center md:justify-start">
                <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                </span>
                info@example.com
                </p>
                <p class="mb-4 flex items-center justify-center md:justify-start">
                <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
                + 01 234 567 88
                </p>
                <p class="flex items-center justify-center md:justify-start">
                <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
                + 01 234 567 89
                </p>
            </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class="bg-black/5 p-6 text-center">
            <span>© 2023 Copyright:</span>
            <a class="font-semibold" href="https://tw-elements.com/"
            >T-Rex</a
            >
        </div>
    </footer>

    <!-- Mobile Menu (optional) -->
    <div class="md:hidden bg-white shadow-md">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact</a>
    </div>
</body>
</html>
