<?php

namespace App\Http\Controllers\Admin;

use App\ApartmentImage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentImageController extends Controller
{
    /**
         * Listing Of images gallery
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            $images = ApartmentImage::where('apart_id',$request->session()->get('id'))->get();

        	return view('Admin.apartment.image_crud',compact('images'));
        }


        /**
         * Upload image function
         *
         * @return \Illuminate\Http\Response
         */
        public function upload(Request $request)
        {
        	$this->validate($request, [

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);

            $input['image'] = time().'.'.$request->image->getClientOriginalExtension();


            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images');        
            $img = Image::make($image->getRealPath());
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);




            $input['apart_id'] =  $request->session()->get('id');
            ApartmentImage::create($input);

        	return back()
        		->with('success','Image Uploaded successfully.');
        }


        /**
         * Remove Image function
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $image = ApartmentImage::findOrFail($id);
            $image_path = public_path().'/images/'.$image->image;
            unlink($image_path);
            $image->delete();

            return back()
                ->with('success','Image removed successfully.');

        }
}
