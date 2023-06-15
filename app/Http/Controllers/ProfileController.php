<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

 
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.profile');
    }
     
    public function updateProfile(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => ['string','min:3', 'max:191', 'required'],   
            'email' => ['email','string','min:3', 'max:191', 'required'],
            'jurusan' => ['string','min:3', 'max:191', 'required'],
            'status' => ['string','min:3', 'max:191', 'required'],
            'univ' => ['string','min:3', 'max:191', 'required'],
            'no_hp' => ['string','min:3', 'max:191', 'required'],
            'username' => ['required', 'alpha_num','unique:users,username,' . auth()->id()],  
        ]);
 
        # check if user profile image is null, then validate
        if (auth()->user()->profile_image == null) {
             $validate_image = Validator::make($request->all(), [
                'profile_image' => ['image', 'max:1000']
            ]);
             # check if their is any error in image validation
            if ($validate_image->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_image->errors()->first()]);
            }
        }
 
        # check if their is any error
        if ($validated->fails()) {
            return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
        }
 
        # check if the request has profile image
        if ($request->hasFile('profile_image')) {
            $imagePath = 'storage/'.auth()->user()->profile_image;
            # check whether the image exists in the directory
            if (File::exists($imagePath)) {
                # delete image
                File::delete($imagePath);
            }
            $profile_image = $request->profile_image->store('profile_images', 'public');
        }
 
        # update the user info
        auth()->user()->update([
            'name' => $request->name,
            'username' => $request->username,
            'email'=>$request->email,
            'jurusan'=>$request->jurusan,
            'status'=>$request->status,
            'univ'=>$request->univ,
            'no_hp'=>$request->no_hp,
            'profile_image' => $profile_image ?? auth()->user()->profile_image 
        ]);
        Alert::success('Sukses', 'Berhasil Diperbarui')->persistent(true)->autoClose(false);
        return redirect()->route('dashboard.index');
    }

    public function feedback(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'feedback' => ['string','min:3', 'max:255', 'required'],   
            'rating' => ['string','min:3', 'max:255', 'required'],   
            'like' => ['string','min:3', 'max:255', 'required'],   
            'no_like' => ['string','min:3', 'max:255', 'required'],   
            'recomended' => ['string','min:3', 'max:255', 'required'],   
        ]);
        auth()->user()->update([
            'feedback'=>$request->feedback,
            'rating'=>$request->rating,
            'like'=>$request->like,
            'no_like'=>$request->no_like,
            'recomended'=>$request->recomended,
        ]);
        Alert::success('Sukses', 'Terimakasih Feedbacknya.')->persistent(true)->autoClose(false);
        return redirect()->route('dashboard.index');
    }
}