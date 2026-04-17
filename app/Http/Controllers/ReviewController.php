<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Attraction;

class ReviewController extends Controller
{
        public function index()
        {
            // Code to display a list of reviews
            $reviews = Review::with('attraction', 'user')->get();
            return view('pages.Review.indexReview', compact('reviews'));

        }
    
        public function create()
        {
            // Code to show a form for creating a new review
            $attractions = Attraction::all();
            $users = User::all();
            return view('pages.Review.createReview', compact('attractions', 'users'));
        }
    
        public function store(Request $request)
        {
            // Code to save a new review to the database
            $request->validate([
                'attraction_id' => 'required',
                'user_id' => 'required',
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'nullable|string',
            ]);

            Review::create($request->all());
            return redirect()->route('reviews.index')->with('success', 'Review created successfully.');

        }
    
        public function edit($id)
        {
            // Code to show a form for editing an existing review
            $review = Review::findOrFail($id);
            $attractions = Attraction::all();
            $users = User::all();
            return view('pages.review.editReview', compact('review', 'attractions', 'users'));
        }
    
        public function update(Request $request, $id)
        {
            // Code to update an existing review in the database
            $request->validate([
                'attraction_id' => 'required|exists:attractions,id',
                'user_id' => 'required|exists:users,id',
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'nullable|string',
            ]);

            $review = Review::findOrFail($id);
            $review->update($request->all());
            return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');

        }
    
        public function destroy($id)
        {
            // Code to delete a review from the database
            $review = Review::findOrFail($id);
            $review->delete();
            return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
        }
}
