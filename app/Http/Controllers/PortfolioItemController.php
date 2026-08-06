<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioItemController extends Controller
{
    // Public page for visitors
    public function publicIndex()
    {
        $items = PortfolioItem::latest()->get();
        return view('welcome', compact('items'));
    }

    // Public detail page
    public function publicShow(PortfolioItem $portfolioItem)
    {
        return view('portfolio.show', compact('portfolioItem'));
    }

    // Admin panel index
    public function index()
    {
        $items = PortfolioItem::latest()->get();
        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'tech_stack'  => 'required',
            'live_url'    => 'nullable|url',
            'github_url'  => 'nullable|url',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload for creation
        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('portfolio', 'public');
        }

        PortfolioItem::create($validated);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item created successfully!');
    }

    public function edit(PortfolioItem $portfolio)
    {
        return view('admin.portfolio.edit', ['item' => $portfolio]);
    }

    public function update(Request $request, PortfolioItem $portfolio)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'tech_stack'  => 'required',
            'live_url'    => 'nullable|url',
            'github_url'  => 'nullable|url',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload for updates
        if ($request->hasFile('image')) {
            // Delete old image if it exists to save space
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('portfolio', 'public');
        }

        $portfolio->update($validated);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated successfully!');
    }

    public function destroy(PortfolioItem $portfolio)
    {
        // Delete image file from storage when project is deleted
        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted successfully!');
    }
}