<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="bg-white py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-8">
                        <!-- Card Item Start -->
                        <div
                            class="rounded-sm border border-stroke bg-white py-6 px-8 shadow-default dark:border-strokedark dark:bg-gray-800">
                            <div class="mt-4 flex items-end justify-between">
                                <div>
                                    <h4 class="text-title-md font-bold text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path
                                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                            <path
                                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                        </svg>
                                    </h4>
                                    <span class="text-sm font-medium">Chambres</span>
                                </div>

                                <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                    0
                                </span>
                            </div>
                        </div>
                        <!-- Card Item End -->

                        <!-- Card Item Start -->
                        <div
                            class="rounded-sm border border-stroke bg-white py-6 px-8 shadow-default dark:border-strokedark dark:bg-gray-800">
                            <div class="mt-4 flex items-end justify-between">
                                <div>
                                    <h4 class="text-title-md font-bold text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </h4>
                                    <span class="text-sm font-medium">Réservations</span>
                                </div>

                                <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                    0
                                </span>
                            </div>
                        </div>
                        <!-- Card Item End -->

                        <!-- Card Item Start -->
                        <div
                            class="rounded-sm border border-stroke bg-white py-6 px-8 shadow-default dark:border-strokedark dark:bg-gray-800">
                            <div class="mt-4 flex items-end justify-between">
                                <div>
                                    <h4 class="text-title-md font-bold text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </h4>
                                    <span class="text-sm font-medium">Messages</span>
                                </div>

                                <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                                    0
                                    <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                                            fill="" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Card Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
