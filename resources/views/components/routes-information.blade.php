<div class="flex flex-col flex-wrap mx-auto pt-4 pb-12">
    <div class="flex flex-col md:flex-row flex-grow flex-wrap flex-shrink justify-around w-full p-2">
        <!-- Routes Dropdown -->
        <div class="inline-block relative flex-grow py-4 md:py-0" x-data="{ open: false }">
            <button @click="open = !open" class="focus:outline-none w-full md:w-11/12 shadow cursor-pointer inline-block text-gray-700 hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-gray-100" :class="{'shadow-none': open}">
                <div class="flex flex-grow flex-shrink justify-between">
                    <div>
                        <span>Route No.1</span>
                    </div>
                    <div>
                        روٹ نمبر 1
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w4 h-6">
                            <path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z" />
                        </svg>
                    </div>
                </div>
            </button>
            <ul class="z-20 bg-gray-100 absolute mt-2 shadow rounded w-full md:w-11/12 py-1 text-indigo-600" x-show="open" @click.away="open = false" x-transition:enter="transition-transform transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-3">
            <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
            </ul>
        </div>

        <!-- Routes Dropdown -->
        <div class="inline-block relative flex-grow py-4 md:py-0" x-data="{ open: false }">
            <button @click="open = !open" class="focus:outline-none w-full md:w-11/12 shadow cursor-pointer inline-block text-gray-700 hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-gray-100" :class="{'shadow-none': open}">
                <div class="flex flex-grow flex-shrink justify-between">
                    <div>
                        <span>Route No.2</span>
                    </div>
                    <div>
                        روٹ نمبر 2
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w4 h-6">
                            <path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z" />
                        </svg>
                    </div>
                </div>
            </button>
            <ul class="z-20 bg-gray-100 absolute mt-2 shadow rounded w-full md:w-11/12 py-1 text-indigo-600" x-show="open" @click.away="open = false" x-transition:enter="transition-transform transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-3">
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
                <div class="flex justify-between cursor-pointer hover:bg-blue-100 border-b">
                    <li class="py-1 px-3 block hover:bg-indigo-100"> Bhara kahu </li>
                    <li class="py-1 px-3 block hover:bg-indigo-100"> بہارہ کہو </li>
                </div>
            </ul>
        </div>

    </div>
</div>