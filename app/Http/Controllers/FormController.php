<?php 
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Alert;

    class FormController extends Controller{
        public function input(){
            return view('form');
        }

        public function process(Request $request){
            Alert::success('Submit Berhasil!', 'Terima kasih sudah mengisi form kesehatan!');
            $this->validate($request,[
                'name' => ['required', 'max:40'],
                'nrp' => ['required', 'numeric'],
                'department' => ['required'],
                'ipk' => ['required', 'numeric', 'min:2.00', 'max:4.00'],
                'alasan' => ['required', 'max:1000'],
                'option' => ['required'],
                'commitment' => ['required', 'min:1', 'max:10'],
                'user_avatar' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png']
            ]);
            $pict_link = $this-> savePict($request, 1);
            $request->user_avatar = $pict_link;
            return view('valid', ['data' => $request]);
        }

        public function save(Request $request, $id){
            $foto = $request->user_avatar;
            $foto_name = '';
            if ($foto !== NULL){
                $foto_name = 'foto_ktm'. $id . $foto->extension();
                $foto_name = str_replace(' ', '-', strtolower($foto_name));
                $foto->storeAs(null, $foto_name, ['disk' => 'public']);
            }
            return asset('storage') . '/' . $foto_name;
        }
    }
?>