<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsAdminController extends Controller
{
    public function controlPageShow() {
		$tags = Tag::get();
		return view('admin.tags.controlPage', ['tags' => $tags, 'edit' => false]);
	}
	public function addTag(Request $request) {
		 $request->validate([
			'name' => 'required|unique:tags',
			'description' => 'required',
		]);
		$res = Tag::create([
			'name' => $request->input('name'),
			'description' => $request->input('description')
		]);
		return redirect()->route('admin.tagsPage');
	}
	public function editTag($id) {
		$tag = Tag::findOrFail($id);
		return view('admin.tags.edit', ['tag' => $tag, 'edit' => true]);
	}
	public function editTagSave($id, Request $request) {
		$tag = Tag::findOrFail($id);
		if($tag->name == $request->input('name')) {
			$request->validate([
				'description' => 'required',
			]);
		} else {
			$request->validate([
				'name' => 'required|unique:tags',
				'description' => 'required',
			]);
			$tag->name = $request->input('name');
		}
		$tag->description = $request->input('description');
		$tag->save();
		return view('admin.tags.edit', ['tag' => $tag, 'edit' => true, 'success' => true]);
	}
}
