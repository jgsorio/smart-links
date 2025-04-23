<x-layout.app>
    <x-container>
        <x-card title="">
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="w-32 rounded-full mx-auto">
            <h1 class="text-2xl font-bold text-center">{{ $user->name }}</h1>
            <h2 class="text-xl text-center font-thin">{{ $user->description }}</h2>
            <ul class="list rounded-box">
                @foreach($user->links as $link)
                    <li class="list-row bg-base-200 p-5 my-1">
                        <div><a href="{{ $link->url }}">{{ $link->name }}</a></div>
                    </li>
                @endforeach
            </ul>
        </x-card>
    </x-container>
</x-layout.app>
