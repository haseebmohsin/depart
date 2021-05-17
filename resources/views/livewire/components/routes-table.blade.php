<div class="mb-10">
    <div class="flex justify-between mb-2">
        @auth
        <div class="text-2xl font-bold mb-3">
            Route No: {{$routeNo}}
        </div>
        @else
        <div class="text-2xl font-bold mb-3 text-gray-700">
            Route No: {{$routeNo}}
        </div>
        @endauth
        @auth
        <div>
            <a href="" class="float-right border-2 text-white bg-blue-500 rounded-md py-2 px-4 hover:pointer mr-2">
                Add new stop
            </a>
        </div>
        @endauth
    </div>
    <div class="w-full overflow-x-auto">
        <table class="table-auto w-full whitespace-nowrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-t border-b dark:border-gray-700 bg-gray-200">
                    <th class="px-4 py-3">Evening Time</th>
                    <th class="px-4 py-3">Evening Stop</th>
                    <th class="px-4 py-3 break-normal">Morning Time</th>
                    <th class="px-4 py-3 break-normal">Morning Stop</th>
                    @auth
                    <th class="px-4 py-3">Actions</th>
                    @endauth
                </tr>
            </thead>
            @if ( $routes->count())
            <tbody class="bg-white divide-y">
                @foreach( $routes as $route )
                <tr class="text-gray-700 hover:bg-gray-50">
                    @if($editMode && $route->id === $editModeId )
                    <td class="px-4 py-3 text-sm">
                        <input wire:model.lazy="e_time" class="border-2 border-gray-200 bg-white p-1"
                            autocomplete="off" />
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <input wire:model.lazy="e_stop" class="border-2 border-gray-200 bg-white p-1"
                            autocomplete="off" />
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <input wire:model.lazy="m_time" class="border-2 border-gray-200 bg-white p-1"
                            autocomplete="off" />
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <input wire:model.lazy="m_stop" class="border-2 border-gray-200 bg-white p-1"
                            autocomplete="off" />
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <a wire:click="updateRoute({{ $route->id }})"
                            class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-green-500 rounded-md">
                            Save
                        </a>
                    </td>
                    @else
                    <td class="px-4 py-3 text-sm">
                        {{ $route->e_time }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $route->e_stop }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $route->m_time }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $route->m_stop }}
                    </td>
                    @auth
                    <td class="px-4 py-3 text-sm">
                        <a wire:click="editRoute({{ $route->id }})"
                            class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-blue-500 rounded-md">
                            Edit
                        </a>
                    </td>
                    @endauth
                    @endif
                </tr>
                @endforeach
            </tbody>
            @else
            <tbody>
                <tr>
                    <td class="px-4 py-3">
                        <h3 class="text-lg text-gray-700 font-normal w-full"> No bus stops found
                        </h3>
                    </td>
                </tr>
            </tbody>
            @endif
        </table>
    </div>
    <div class="px-4 py-3 text-xs font-semibold text-gray-500 border-t bg-gray-50">
        {{ $routes->links() }}
    </div>
</div>
