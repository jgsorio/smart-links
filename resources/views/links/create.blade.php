<x-layout.app>
    <x-container>
        <x-card title="Add Link">
            <x-form action="{{ route('links.store') }}" method="POST">
                <x-input type="text" name="name" placeholder="Name" value="{{ old('name') }}"/>
                <x-input type="text" name="url" placeholder="URL" value="{{ old('url') }}"/>
                <div class="flex justify-between">
                    <x-button type="submit" class="btn btn-primary">Add</x-button>
                    <a href="{{ route('home') }}" class="btn btn-link">Cancel</a>
                </div>
            </x-form>
        </x-card>
    </x-container>
</x-layout.app>
