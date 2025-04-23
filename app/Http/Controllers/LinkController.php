<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkStoreRequest;
use App\Models\Link;
use Illuminate\Support\Facades\Gate;

class LinkController extends Controller
{
    public function create()
    {
        return view('links.create');
    }

    public function store(LinkStoreRequest $request)
    {
        auth()->user()->links()->create([
            'order' => Link::where('user_id', auth()->user()->id)->max('order') + 1,
            ...$request->validated()
        ]);

        return to_route('home');
    }

    public function edit(Link $link)
    {
        Gate::authorize('edit', $link);
        return view('links.edit', [
            'link' => $link
        ]);
    }

    public function update(Link $link, LinkStoreRequest $request)
    {
        Gate::authorize('update', $link);

        $link->update($request->validated());

        return to_route('home');
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('home');
    }

    public function moveUp(Link $link)
    {
        $link->moveTo('up');

        return to_route('home');
    }

    public function moveDown(Link $link)
    {
        $link->moveTo('down');

        return to_route('home');
    }
}
