<div wire:poll.visible.10s class="p-5">
    <h3>Total users: </h3>

        <div class="rounded shadow-md flex-col">
            <div class="p-2 flex flex-row bg-gray-200 font-bold">
                <div class="w-2/4">Name</div>
                <div class="w-1/4">Email</div>
                <div class="w-1/4">Joined_at</div>
            </div>

            @foreach ($users as $user)
                <div class="p-2 flex flex-row">
                    <div class="w-2/4">{{$user->name}}</div>
                    <div class="w-1/4">{{$user->email}}</div>
                    <div class="w-1/4">{{$user->created_at}}</div>
                </div>
            @endforeach

        </div>

    {{$users->links('vendor.livewire.custom')}}
</div>
