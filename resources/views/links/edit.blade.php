<x-layout.app>
    <x-container>
        <x-card title="Edit Link">
            <x-form action="{{ route('links.update', ['link' => $link]) }}" method="POST" put>
                <x-input type="text" name="name" placeholder="Name" value="{{ $link->name }}" />
                <x-input type="text" name="url" placeholder="URL" value="{{ $link->url }}" />
                <div class="flex justify-between">
                    <x-button type="submit" class="btn btn-primary">Update</x-button>
                    <a href="{{ route('home') }}" class="btn btn-link">Cancel</a>
                </div>
            </x-form>
        </x-card>
    </x-container>
</x-layout.app>
