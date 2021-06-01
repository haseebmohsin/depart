<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
    <form wire:submit.prevent="sendMessageNotification">
        @csrf
        <article aria-label="File Upload Modal" class="flex flex-col bg-white shadow-xl rounded-md">
            @if (session()->has('success'))
            <div
                class="flex items-center mb-2 px-2 font-medium rounded-md text-green-700 bg-green-100 border border-green-300">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle w-5 h-5 mx-2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="text-xl font-normal max-w-full flex-initial">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            @if (session()->has('deny'))
            <div
                class="flex items-center mb-2 px-2 font-medium rounded-md text-red-700 bg-red-100 border border-red-300">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle w-5 h-5 mx-2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="text-xl font-normal max-w-full flex-initial">
                    {{ session('deny') }}
                </div>
            </div>
            @endif
            <div class="p-10">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="message" class="block mt-4 text-semibold">
                            Message
                        </label>
                        <textarea id="message" wire:model.lazy="message"
                            class="resize-y w-2/3 mt-1 border rounded-md border-gray-400 focus:ring-gray-100 focus:border-gray-300 h-60">
                        </textarea>
                        <x-jet-input-error class="block w-full mt-1" for="message" />
                    </div>
                </div>
            </div>
            <footer class="flex justify-end bg-gray-50 px-4 py-3 sm:px-6">
                <a href="{{ route('dashboard') }}"
                    class="mr-3 rounded-md px-3 py-1 text-gray-800 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                    Back
                </a>
                <button type="submit"
                    class="rounded-md px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                    Send
                </button>
            </footer>
        </article>
    </form>
</div>
