<div class="flex flex-col justify-center items-center mt-10">
    {{-- wire:click is a calling method --}}

    {{-- <button wire:click="handleClick">
        Click me
    </button> --}}
    @if (session('success'))
        <div class="p-2 text-white bg-green-600 text-center">{{session('success')}}</div>
    @endif
    <form wire:submit="createUser" action="" class="flex flex-col  shadow-md p-3 border-t-2 border-green-500">

        <label class="font-semibold" for="name">Username</label>
        <input class="border border-grey-400 m-2 p-2 w-full" wire:model=name type="text" placeholder="username">
        @error('name')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror

        <label class="font-semibold" for="email">Email</label>
        <input class="border border-grey-400 m-2 p-2 w-full" wire:model=email type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror

        <label class="font-semibold" for="Password">Password</label>
        <input class="border border-grey-400 m-2 p-2 w-full" wire:model=password type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror

        <input class="border border-grey-400 m-2 p-2 w-full" wire:model="image" accept="image/*" type="file" placeholder="">
        @error('image')
            <span class="text-red-500 font-sm m-2">{{$message}}</span>
        @enderror

        @if ($image)
            <div class="flex p-3 mt-2">
                <img src="{{$image->temporaryUrl()}}" class="h-20 w-20 rounded m-2" alt="">
            </div>

        @endif

        <div wire:loading.delay>
            <span class="text-green-500">Uploading......</span>
        </div>


        {{-- <button type="button" @click = "$dispatch('user-created')" class="bg-green-500 flex justify-center items-center text-white p-2 rounded-md">
            Reload
         </button> --}}
        <button wire:loading.remove class="mt-3 bg-green-500 flex justify-center items-center text-white p-2 rounded-md">
           Create
        </button>
    </form>

</div>
