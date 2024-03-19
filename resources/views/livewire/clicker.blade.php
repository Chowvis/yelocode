<div>
    {{-- wire:click is a calling method --}}

    {{-- <button wire:click="handleClick">
        Click me
    </button> --}}
    @if (session('success'))
        <div class="p-2 text-white bg-green-600 text-center">{{session('success')}}</div>
    @endif
    <form wire:submit="createUser" action="" class="flex flex-col items-start">
        <input class="border border-grey-400 m-2 p-2" wire:model=name type="text" placeholder="username">
        @error('name')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror
        <input class="border border-grey-400 m-2 p-2" wire:model=email type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror
        <input class="border border-grey-400 m-2 p-2" wire:model=password type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror
        <button class="bg-green-500 flex justify-center items-center text-white p-2 rounded-md">
           register
        </button>
    </form>
    <h3>Total users: </h3>
    @foreach ($users as $user)
        <h3>{{$user->name}}</h3>
    @endforeach
    {{$users->links('vendor.livewire.custom')}}
</div>
