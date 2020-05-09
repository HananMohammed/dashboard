<?php


namespace App\repository;


use App\Http\Requests\QrCodeRequest;

use App\Http\Requests\QrcodeUpdateReqest;
use App\QrCode;
use Illuminate\Support\Facades\Auth;

class QrCodeRepository
{

    public function getAllData(){
        return QrCode::all();
    }
    /**
     * @param QrCodeRequest $request
     */

    public function store(QrCodeRequest $request){

        $qrcode=new QrCode();
        $qrcode->show=$request->show;
        $qrcodeimage=new UploadImage('Qrcode','Qrcode',$request->image_path);
        $qrcode->image_path=$qrcodeimage->UploadeImage();



        $qrcode->save();

    }
    /**
     * update date in our storage
     * @param QrcodeUpdateReqest $request
     * @param $id
     */
    public function update(QrcodeUpdateReqest $request ,$id){

        $qrcode= QrCode::find($id);

        if($qrcode->show=='null'){

            $qrcode->show=null;
        }else{
            $qrcode->show=$request->show;
        }

        if($request->image_path) {
            $qrcodeimage = new UploadImage('Qrcode', 'Qrcode', $request->image_path);
            $qrcode->image_path = $qrcodeimage->UploadeImage();
        }


        $qrcode->save();

    }

    /**
     *
     * @param $id
     */
    public function destroy($id){
        $phone= WahatsAndWeChate::find($id);
        $phone->delete();
    }

}