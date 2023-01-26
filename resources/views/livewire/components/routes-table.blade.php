<div class="mb-10">
    <div class="flex justify-between mb-1">
        @auth
        <div class="text-2xl font-bold">
            Route No: {{$routeNo}}
        </div>
        @else
        <div class="text-2xl font-bold text-gray-700">
            Route No: {{$routeNo}}
        </div>
        @endauth
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-t border-b dark:border-gray-700 bg-gray-400">
                        <th class="px-4 py-3 break-normal">Morning Stop</th>
                        <th class="px-4 py-3">Morning Time</th>
                        <th class="px-4 py-3">Evening Stop</th>
                        <th class="px-4 py-3">Evening Time</th>
                        @auth
                        <th class="px-4 py-3">Actions</th>
                        @endauth
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @forelse( $routes as $route )
                    <tr class="text-gray-700 hover:bg-gray-50">
                        @if($editMode && $route->id === $editModeId )
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            <input wire:model.lazy="morning_stop" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" />
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            <input wire:model.lazy="morning_time" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" />
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            <input wire:model.lazy="evening_stop" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" />
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            <input wire:model.lazy="evening_time" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" />
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            <a wire:click="updateRoute({{ $route->id }})"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-green-500 rounded-md">
                                Save
                            </a>
                        </td>
                        @else
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            {{ $route->morning_stop }}
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            {{ $route->morning_time }}
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            {{ $route->evening_stop }}
                        </td>
                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                            {{ $route->evening_time }}
                        </td>
                        @auth
                        <td class="px-4 py-3 text-sm">
                            <a wire:click="editRoute({{ $route->id }})"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-blue-500 rounded-md">
                                Edit
                            </a>
                            <a wire:click="DeleteStop({{ $route->id }})"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-red-500 rounded-md">
                                Delete
                            </a>
                        </td>
                        @endauth
                        @endif
                    </tr>

                    @empty
                    <tr class="text-gray-700 hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <h3 class="text-lg text-gray-700 font-normal w-full"> No bus stops found
                            </h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

                @auth
                <!-- Adding new stop to a route form -->
                <tbody class="bg-white border-t">
                    <tr class="text-gray-700 hover:bg-gray-50">
                        @if($addNewStopFields)
                        <td class="px-4 py-3 text-sm">
                            <input wire:model.lazy="morning_stop" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" placeholder="Morning stop" />
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <input wire:model.lazy="morning_time" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" placeholder="Morning Time" />
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <input wire:model.lazy="evening_stop" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" placeholder="Evening stop" />
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <input wire:model.lazy="evening_time" class="border-2 border-gray-200 bg-white p-1"
                                autocomplete="off" placeholder="Evening Time" />
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <a wire:click="$set('addNewStopFields', false)"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-gray-500 rounded-md">
                                Cancel
                            </a>
                            <a wire:click="saveNewStop({{ $routeNo }})"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-green-500 rounded-md">
                                Save
                            </a>
                        </td>
                        @else
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="px-4 py-3 text-sm">
                            <a wire:click="addNewStop()"
                                class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-blue-500 rounded-md">
                                Add New
                            </a>
                        </td>
                        @endif
                    </tr>
                </tbody>
                @endauth

            </table>
        </div>
    </div>
    <div class="px-4 py-3 text-xs font-semibold text-gray-500 border-t bg-gray-50">
        {{ $routes->links() }}
    </div>
</div>
