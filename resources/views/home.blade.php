<x-layout.app>
    <x-container>
        <x-card title="BioLinks">
            <a href="{{ route('links.create') }}" class="btn btn-primary">Add Link</a>
            <ul class="list rounded-box">
                @foreach($links as $link)
                    <li class="list-row bg-base-200 p-5 my-1 flex">
                        <div class="flex flex-1 justify-between items-center">
                            <div class="flex">
                                @if(!$loop->first)
                                    <x-form action="{{ route('links.move-up', ['link' => $link]) }}" method="POST" patch>
                                        <x-button type="submit" class="btn btn-link"><i class="fa-solid fa-arrow-up"></i></x-button>
                                    </x-form>
                                @endif
                                @if(!$loop->last)
                                    <x-form action="{{ route('links.move-down', ['link' => $link]) }}" method="POST" patch>
                                        <x-button type="submit" class="btn btn-link"><i class="fa-solid fa-arrow-down"></i></x-button>
                                    </x-form>
                                @endif
                            </div>
                            <a href="{{ $link->url }}">{{ $link->name }}</a>
                            <div class="flex">
                                <a href="{{ route('links.edit', ['link' => $link]) }}" class="btn btn-link"><i class="fa-solid fa-pen-to-square"></i></a>
                                <x-form action="{{ route('links.destroy', ['link' => $link]) }}" method="POST" delete>
                                    <x-button type="submit" class="btn btn-link"><i class="fa-solid fa-trash"></i></x-button>
                                </x-form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </x-card>
    </x-container>
</x-layout.app>
